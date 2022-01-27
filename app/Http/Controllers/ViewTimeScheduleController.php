<?php

namespace App\Http\Controllers;

use App\Models\TimeSchedule;
use Illuminate\Http\Request;

class ViewTimeScheduleController extends Controller
{
    public function indexTimeSchedule(Request $request){
        $data = TimeSchedule::orderBy('id','desc')->paginate(10);
        return view('user.time',compact('data'));
    }
}
