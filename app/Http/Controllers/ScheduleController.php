<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ScheduleController extends Controller
{
    
    public function index()
    {
        return view('backend.pages.schedule.index');
    }

    public function getData()
    {
        $schedules = Schedule::all();


        return DataTables::of($schedules)
            ->addColumn('scheduleImage',function ($schedule){
                $imgPath= asset($schedule->schedules_icon);
                return '<img src="'.$imgPath.'" width="80" height="50" alt="">';
            })

            ->addColumn('status', function ($schedule) {
                if ($schedule->status == 1) {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$schedule->id.'" data-status="'.$schedule->status.'"> <i
                        class="fa-solid fa-toggle-on fa-2x"></i>
                    </a>';
                } else {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$schedule->id.'" data-status="'.$schedule->status.'"> <i
                          class="fa-solid fa-toggle-off fa-2x" style="color: grey"></i>
                    </a>';
                }
            })
            ->addColumn('action', function ($schedule) {
                return '<div class="d-flex gap-3"> <a class="editButton btn btn-sm btn-primary" id="editButton" href="javascript:void(0)" data-id="'.$schedule->id.'" data-bs-toggle="modal" data-bs-target="#editModal"><i class="fas fa-edit"></i></a>

                                                             <a class="btn btn-sm btn-danger" href="javascript:void(0)" data-id="'.$schedule->id.'" id="deleteBtn"> <i class="fas fa-trash"></i></a>
                                                           </div>';

            })
            ->rawColumns(['action', 'status','scheduleImage'])
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
     

        $schedule= new Schedule();
        $schedule->schedule_title_1 = $request->schedule_title_1;
        $schedule->schedules_title_2 = $request->schedules_title_2;
        $schedule->schedules_desc = $request->schedules_desc;
        
        if ($request->hasFile('schedules_icon')) {
            $file = $request->file('schedules_icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/backend/image/schedule/', $filename);
            $schedule->schedules_icon ='public/backend/image/schedule/'. $filename;
        }


        $schedule->save();

        return response()->json(['message' => 'success'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return response()->json(['message' => 'success', 'data' => $schedule], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {


       
        $schedule->schedule_title_1 = $request->schedule_title_1;
        $schedule->schedules_title_2 = $request->schedules_title_2;
        $schedule->schedules_desc = $request->schedules_desc;

        if ($request->hasFile('schedules_icon')) {
            
            if (($schedule->schedules_icon) &&  file_exists($schedule->schedules_icon)) {
                unlink($schedule->schedules_icon);
            }
            $file = $request->file('schedules_icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/backend/image/schedule/', $filename);
            $schedule->schedules_icon ='public/backend/image/schedule/'. $filename;
        }



        $schedule->update();


        return response()->json(['message' => 'success'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {

        $schedule->delete();

        return response()->json(['message' => 'success'], 200);

    }

    public function serviceStatus(Request $request)
    {

        $id = $request->id;
        $status = $request->status;


        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = Schedule::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $stat, 'id' => $id]);
    }
    
}
