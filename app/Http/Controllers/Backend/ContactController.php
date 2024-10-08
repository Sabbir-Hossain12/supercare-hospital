<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use DataTables;

class ContactController extends Controller
{
       /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.pages.contact.index');
    }

    public function getData(Request $request)
    {
        $contacts = Contact::all();

        // dd($categories);

        return DataTables::of($contacts)
             ->addIndexColumn()
             ->addColumn('name', function ($contact) {
                return '<span class="badge bg-label-info">'. $contact->name .'</span> <br/>';
             })
             ->addColumn('status', function ($contact) {
                if ($contact->status == 1) {
                    return '<span class="badge bg-label-primary cursor-pointer" id="status" data-id="'.$contact->id.'" data-status="'.$contact->status.'">Pending</span>';
                } else {
                    return '<span class="badge bg-label-danger cursor-pointer" id="status" data-id="'.$contact->id.'" data-status="'.$contact->status.'">Replied</span>';
                }
            })
            
            ->addColumn('action', function ($contact) {
                return '<a href="javascript:void(0)" class="btn btn-sm btn-danger" id="deleteContactBtn" data-id="'.$contact->id.'"><i class="fas fa-trash"></i></a>';
            })

            ->rawColumns(['name', 'status','action'])
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        
    }

    /**
     * Display the specified resource.
     */
    public function adminContactStatus(Request $request)
    {
        $id = $request->id;
        $Current_status = $request->status;

        if ($Current_status == 1) {
            $status = 0;
        } else {
            $status = 1;
        }

        $page = Contact::find($id);
        $page->status = $status;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $status, ]);
    }


    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return response()->json(['message' => 'success']);
    }

}
