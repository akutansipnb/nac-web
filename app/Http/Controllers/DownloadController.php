<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public function download($id,$validation_no){

        $data = UserDetail::where('id',$id)->first();

        switch ($validation_no) {
            case '1':
                $url = $data->validation_1;
                break;
                case '2':
                    $url = $data->validation_2;
                    break;
                    case '3':
                        $url = $data->validation_3;
                        break;
                        case '4':
                            $url = $data->validation_4;
                            break;
                            case '5':
                                $url = $data->validation_5;
                                break;

            default:
                $url = "";
                break;
        }

    $path = public_path($url);
    return response()->download($path);
    }

    public function downloadbooklet($id){
        $data = Event::where('id',$id)->first();
        $url = $data->booklet_url;
        $path = public_path($url);
        return response()->download($path);
    }
}
