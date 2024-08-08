<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use DataTables;

class ProjectController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.projects.index');
    }

    public function getData(Request $request)
    {
        $projects = Project::all();

        // dd($categories);

        return DataTables::of($projects)
            ->addIndexColumn()
            ->addColumn('image', function ($project) {
                return '<img src="'. asset($project->image) .'" alt="" style="width: 65px;">';
            })
            ->addColumn('social-links', function ($project) {
                return '<div class="mb-1">
                    <span class="badge mb-2 rounded-pill bg-label-primary">Facebook : '. $project->facebook .'</span> <br/>
                    <span class="badge mb-2 rounded-pill bg-label-primary">Instagram : '. $project->instagram .'</span> <br/>
                    <span class="badge mb-2 rounded-pill bg-label-primary">Twitter : '. $project->twitter .'</span> <br/>
                    <span class="badge mb-2 rounded-pill bg-label-primary">Linkedin : '. $project->linkedin .'</span>
                </div>';  
            })
            ->addColumn('client-details', function ($project) {
                return '<div class="mb-1">
                    <span class="badge mb-2 rounded-pill bg-label-primary">Category : '. $project->category .'</span> <br/>
                    <span class="badge mb-2 rounded-pill bg-label-primary">Client Name : '. $project->client_name .'</span> <br/>
                    <span class="badge mb-2 rounded-pill bg-label-primary">Age : '. $project->age .'</span>
                </div>';  
            })
            ->addColumn('status', function ($project) {
                if ($project->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$project->id.'" data-status="'.$project->status.'">Active</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$project->id.'" data-status="'.$project->status.'">Deactive</span>';
                }
            })
            ->addColumn('action', function ($project) {
                return '
                <div class="">
                    <button type="button" class="btn_edit" id="editButton" data-id="' . $project->id . '" data-bs-toggle="modal" data-bs-target="#editModal">
                        <i class="bx bx-edit-alt"></i>
                    </button>

                    <button type="button" id="deleteBtn" data-id="' . $project->id . '" class="btn_delete">
                        <i class="bx bx-trash"></i>
                    </button>
                </div>';
            })

            ->rawColumns(['image', 'social-links', 'client-details', 'status', 'action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $project = new Project();

        $project->title              = $request->title;
        $project->category           = $request->category;
        $project->client_name        = $request->client_name;
        $project->age                = $request->age;
        $project->description        = $request->description;
        $project->facebook           = $request->facebook;
        $project->instagram          = $request->instagram;
        $project->twitter            = $request->twitter;
        $project->linkedin           = $request->linkedin;
        $project->status             = $request->status;
        $project->date               = date('d-m-Y');

        if( $request->file('image') ){
            $image = $request->file('image');

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/logo/';
            $image->move($imagePath, $imageName);

            $project->image   = $imagePath . $imageName;
        }

        $project->save();

        return response()->json(['message' => 'successfully Project Created', 'status' => true], 200);
    }

    /**
     * Display the specified resource.
     */
    public function adminProjectStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Project::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);
        return response()->json(['success' => $project]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());

        $project = Project::find($id);

        $project->title              = $request->title;
        $project->category           = $request->category;
        $project->client_name        = $request->client_name;
        $project->age                = $request->age;
        $project->description        = $request->description;
        $project->facebook           = $request->facebook;
        $project->instagram          = $request->instagram;
        $project->twitter            = $request->twitter;
        $project->linkedin           = $request->linkedin;
        $project->status             = $request->status;
        $project->date               = date('d-m-Y');


         if( $request->file('image') ){
            $image = $request->file('image');

            if( !is_null($project->image) && file_exists($project->image) ){
                unlink($project->image);
             }

            $imageName          = microtime('.') . '.' . $image->getClientOriginalExtension();
            $imagePath          = 'public/backend/image/logo/';
            $image->move($imagePath, $imageName);

            $project->image   = $imagePath . $imageName;
        }

        // dd($project);
        $project->save();

        return response()->json(['message'=> "success"], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::find($id);

        if ( !is_null($project->image) ) {
            if (file_exists($project->image)) {
                unlink($project->image);
            }
        }
        $project->delete();

        return response()->json(['message' => 'Project has been deleted.'], 200);
    }
}
