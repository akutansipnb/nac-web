<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\TimeSchedule;
use Illuminate\Http\Request;

class TimeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = TimeSchedule::paginate(10);
        return view('admin.schedule.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.schedule.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'schedule' => 'required|unique:time_schedules,schedule,id',
        //     'date_start' => 'required',
        //     'date_end' => 'required',
        //     'desc' => 'required'
        // ],[
        //     'schedule.unique' => "Data Sudah Ada !"
        // ]);

        try {
            TimeSchedule::create([
                'schedule' => $request->schedule,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'desc' => $request->desc
            ]);
            return redirect()->route('schedules.index');

        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TimeSchedule  $timeSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(TimeSchedule $timeSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TimeSchedule  $timeSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule=TimeSchedule::find($id);
        return view('admin.schedule.edit',compact('id','schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TimeSchedule  $timeSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'schedule' => 'required',
        //     'date_start' => 'required',
        //     'date_end' => 'required',
        //     'desc' => 'required'
        // ],[
        //     'schedule.unique' => "Data Sudah Ada !"
        // ]);

        try {
            TimeSchedule::find($id)->update([
                'schedule' => $request->schedule,
                'date_start' => $request->date_start,
                'date_end' => $request->date_end,
                'desc' => $request->desc
            ]);
            return redirect()->route('schedules.index');

        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TimeSchedule  $timeSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($schedule)
    {
        try {
            TimeSchedule::where('id',$schedule)->delete();
            return redirect()->route('schedules.index');
        } catch (\Throwable $th) {
            echo 'data tidak ditemukan !';
        }
    }
}
