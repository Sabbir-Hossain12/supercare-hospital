<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('backend.pages.appointment.index');
    }

    public function getData()
    {
        $appointments = Appointment::all();


        return DataTables::of($appointments)

            ->addColumn('status', function ($appointment) {
                if ($appointment->status == 1) {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$appointment->id.'" data-status="'.$appointment->status.'"> <i
                        class="fa-solid fa-toggle-on fa-2x"></i>
                    </a>';
                } else {
                    return '<a class="status" id="status" href="javascript:void(0)"
                        data-id="'.$appointment->id.'" data-status="'.$appointment->status.'"> <i
                          class="fa-solid fa-toggle-off fa-2x" style="color: grey"></i>
                    </a>';
                }
            })
          
            ->rawColumns(['status'])
            ->addIndexColumn()
            ->make(true);
    }

    public function appointmentStatus(Request $request)
    {

        $id = $request->id;
        $status = $request->status;


        if ($status == 1) {
            $stat = 0;
        } else {
            $stat = 1;
        }

        $page = Appointment::findOrFail($id);
        $page->status = $stat;
        $page->save();

        return response()->json(['message' => 'success', 'status' => $stat, 'id' => $id]);
    }
   
}
