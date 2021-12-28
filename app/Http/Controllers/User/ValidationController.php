<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ValidationController extends Controller
{
    //

    public function index(){

        if(Auth::user()->details->events->audience === "university"){
            return view('user.validation.university');
        }else{
            return view('user.validation.school');
        }
    }

    public function updateValidation(Request $request){
        $user = Auth::user()->details;

        $event = Auth::user()->details->events;
        $event_name = $event->aliases.$event->year;

        $url = 'img/participant/'.$event_name.'/'. strtolower(str_replace(' ','_',Auth::user()->name));
 
        $validation_1 = $request->file('validation_1');
        $validation_1_name =  $user->identity_code . "-" . str_replace(' ','_',Auth::user()->name) . "-" . $user->events->aliases . $user->events->year. "." . $validation_1->getClientOriginalExtension();
        

        $validation_2 = $request->file('validation_2');
        $validation_2_name = $user->identity_code . "-" . str_replace(' ','_',Auth::user()->name) . "-" . $user->events->aliases . $user->events->year. "." . $validation_2->getClientOriginalExtension();

        $validation_3 = $request->file('validation_3');
        $validation_3_name = $user->identity_code . "-" . str_replace(' ','_',Auth::user()->name) . "-" . $user->events->aliases . $user->events->year. "." . $validation_3->getClientOriginalExtension();
        
        $update = [
            'validation_1' => $url.'/ktm-'.$validation_1_name,
            'validation_2' => $url.'/pernyataan-'.$validation_2_name,
            'validation_3' => $url.'/kuitansi-'.$validation_3_name,
        ];
        
        if(Auth::user()->details->events->audience === 'school'){
            $validation_4 = $request->file('validation_4');
            $validation_4_name = $user->identity_code . "-" . str_replace(' ','_',Auth::user()->name) . "-" . $user->events->aliases . $user->events->year. "." . $validation_4->getClientOriginalExtension();

            $validation_5 = $request->file('validation_5');
            $validation_5_name = $user->identity_code . "-" . str_replace(' ','_',Auth::user()->name) . "-" . $user->events->aliases . $user->events->year. "." . $validation_5->getClientOriginalExtension();

            $update = [
                'validation_1' => $url.'/kts-'.$validation_1_name,
                'validation_2' => $url.'/delegasi-'.$validation_2_name,
                'validation_3' => $url.'/kuitansi-'.$validation_3_name,
                'validation_4' => $url.'/foto-'.$validation_4_name,
                'validation_5' => $url.'/integritas-'.$validation_5_name,
            ];
        }
        try {
            UserDetail::where('id',Auth::user()->details->id)->update($update);
            if(Auth::user()->details->events->audience === 'school'){
                $validation_1->move($url,'/kts-'.$validation_1_name);
                $validation_2->move($url,'/delegasi-'.$validation_2_name,);
                $validation_3->move($url,'/kuitansi-'.$validation_3_name);
                $validation_4->move($url,'/foto-'.$validation_4_name);
                $validation_5->move($url,'/integritas-'.$validation_5_name);
            }else{
                $validation_1->move($url,'/ktm-'.$validation_1_name);
                $validation_2->move($url,'/pernyataan-'.$validation_2_name,);
                $validation_3->move($url,'/kuitansi-'.$validation_3_name);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        // dd($request);
    }

    public function validateAcc($id){
        try {
            UserDetail::find($id)->update([
                'validation_status' => TRUE
            ]);
            return redirect()->back();
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
