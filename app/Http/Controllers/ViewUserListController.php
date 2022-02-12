<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewUserListController extends Controller
{
    public function index()
    {
        $data = UserDetail::where([
            ['id_events','=',strval(Auth::user()->details->events["id"])],
            ['id_academy','=',strval(Auth::user()->details->academy["id"])],
        ])->paginate(10);
        return view('user.userlist',compact('data'));
    }
}
