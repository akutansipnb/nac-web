<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //

    public function index($id){

        $data = Event::find($id);
        if($data == NULL){
            echo "Data Takda";
        }
        return view('competition-detail',compact('data'));
    }

    public function form($id){
        $data = Event::find($id);
        $academies = Academy::where('academy_type',$data['audience'])->get();
        
        if($data['audience'] == "school"){
            return view('register.school',compact('data','academies'));
        }else{
            return view('register.university',compact('data','academies'));
        }

    }

}
