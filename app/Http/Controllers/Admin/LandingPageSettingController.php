<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LandingPageSettingController extends Controller
{


    public function getLandingSet(){

        // GetConfig
        $path = Storage::disk('local')->get('public/landing_page_config.json');
        $data = json_decode($path,true);

        $theme = $data['theme'];
        $quotes = $data['quotes'];
        $desc_quotes = $data['desc_quotes'];
        $url_video = $data['url_video'];
        $url_document = $data['url_document'];

        return view('admin.landingsetting',compact('theme','quotes','desc_quotes','url_video','url_document'));
    }

    public function updateLandingset(Request $request){

        // GetConfig
        $path = Storage::disk('local')->get('public/landing_page_config.json');
        $data = json_decode($path,true);

        $data['theme'] = $request->theme;
        $data['quotes'] = $request->quotes;
        $data['desc_quotes'] = $request->desc_quotes;
        $data['url_video'] = $request->url_video;
        $data['url_document'] = $request->url_document;


        try {
            $newJson = json_encode($data);
            Storage::disk('local')->put('public/landing_page_config.json',$newJson);
            return redirect()->back()->with('success','Data Berhasil Diubah');
        } catch (\Throwable $th) {
            throw $th;
        }



    }



}
