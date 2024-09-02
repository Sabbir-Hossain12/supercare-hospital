<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Department;
use Illuminate\Http\Request;
use App\Models\Doctor;
use DataTables;

class DoctorController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::where('status', 1)->get();
        return view('backend.pages.doctor.index',compact('departments'));
    }

    public function getData(Request $request)
    {
        $doctors = Doctor::with('department')->get();

        // dd($categories);

        return DataTables::of($doctors)
            ->addIndexColumn()
            ->addColumn('image', function ($doctor) {
                return '<img src="'. asset($doctor->image) .'" alt="" style="width: 65px;">';
            })
            ->addColumn('status', function ($doctor) {
                if ($doctor->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$doctor->id.'" data-status="'.$doctor->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$doctor->id.'" data-status="'.$doctor->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($doctor) {
                return '
                <div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $doctor->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $doctor->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['image', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $doctor = new Doctor();

        $doctor->title              = $request->title;
        $doctor->department_id      = $request->department_id;
        $doctor->status             = $request->status;

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/doctor/';
            $image->move($imagePath, $imageName);

            $doctor->image   = $imagePath . $imageName;
        }

        $doctor->save();

        return response()->json(['message' => 'successfully Doctor Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminDoctorStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Doctor::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $doctor = Doctor::find($id);
        return response()->json(['success' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $doctor = Doctor::find($id);

        $doctor->title              = $request->title;
        $doctor->department_id      = $request->department_id;
        $doctor->status             = $request->status;


         if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($doctor->image) && file_exists($doctor->image) ){
                unlink($doctor->image);
             }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/logo/';
            $image->move($imagePath, $imageName);

            $doctor->image   = $imagePath . $imageName;
        }

        // dd($doctor);
        $doctor->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $doctor = Doctor::find($id);

        if ( !is_null($doctor->image) ) {
            if (file_exists($doctor->image)) {
                unlink($doctor->image);
            }
        }
        $doctor->delete();

        return response()->json(['message' => 'Doctor has been deleted.'], 200);
    }


    public function getDoctorsByDepartment($id)
    {
        $doctors = Doctor::where('department_id', $id)->get();
        return response()->json($doctors);
    }
}
