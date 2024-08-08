<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DepartmentController extends Controller
{
    public function index()
    {
        return view('backend.pages.department.index');
    }

    public function getData()
    {
        $departments = Department::all();


        return DataTables::of($departments)
            ->addColumn('status', function ($department) {
                if ($department->status == 1) {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$department->id.'" data-status="'.$department->status.'"> <i
                        class="fa-solid fa-toggle-on fa-2x"></i>
                    </a>';
                } else {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$department->id.'" data-status="'.$department->status.'"> <i
                          class="fa-solid fa-toggle-off fa-2x" style="color: grey"></i>
                    </a>';
                }
            })
            ->addColumn('action', function ($department) {
                return '<div class="d-flex gap-3"> <a class="btn btn-sm btn-danger" href="javascript:void(0)" data-id="'.$department->id.'" id="deleteBtn"> <i class="fas fa-trash"></i></a>
                                                           </div>';
            })
            ->rawColumns(['action', 'status'])
            ->addIndexColumn()
            ->make(true);
    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $department = new Department();
        $department->department_name = $request->department_name;


        $department->save();

        return response()->json(['message' => 'success'], 201);
    }

   
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department)
    {
        return response()->json(['message' => 'success', 'data' => $department], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department)
    {

        $department->department_name = $request->department_name;
        $department->update();


        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department)
    {
        $department->delete();

        return response()->json(['message' => 'success'], 200);
    }

    public function departmentStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->status;


        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = Department::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $stat, 'id' => $id]);
    }

}
