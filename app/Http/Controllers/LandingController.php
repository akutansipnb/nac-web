<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function index(){
        $event = Event::all();
        return view("landing",compact('event'));
    }
}
