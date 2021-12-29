<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Blog;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //

    public function index(){
        $blogs = Blog::orderBy('id','desc')->paginate(3);
        $event = Event::all();
        return view("landing",compact('event','blogs'));
    }

    public function detail($id){
        $blog = Blog::find($id);
        return view("blog",compact('blog'));
    }
}
