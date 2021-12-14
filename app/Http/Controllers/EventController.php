<?php

namespace App\Http\Controllers;

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
        if($data['audience'] == "school"){
            return view('register.school',compact('data'));
        }else{
            return view('register.university',compact('data'));
        }

    }

}
