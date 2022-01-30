<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingController extends Controller
{
    //

    public function index(){

        // GetConfig
        $path = Storage::disk('local')->get('public/landing_page_config.json');
        $data = json_decode($path,true);

        $theme = $data['theme'];
        $quotes = $data['quotes'];
        $desc_quotes = $data['desc_quotes'];
        $url_video = $data['url_video'];

        $blogs = Blog::orderBy('id','desc')->paginate(3);
        $bcount = count(Blog::all());
        $event = Event::all();
        return view("landing",compact('event','blogs','bcount','theme','quotes','desc_quotes','url_video'));
    }

    public function detail($id){
        $blog = Blog::find($id);
        return view("blog",compact('blog'));
    }

    public function viewPdf($id){
        $data = Blog::find($id);
        $filename = $data['file_pdf'];
        $path = public_path('files/posts/'.$filename);

        return response()->make(file_get_contents($path), 500, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="'.$filename.'"'
        ]);
    }
}
