<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Event;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UserListController extends Controller
{
    public function index($id)
    {
        $data = UserDetail::where('id_academy',$id)->get();
        return view('admin.userlist.index',compact('data'));
    }

    public function edit($id)
    {
        $userdetail = UserDetail::find($id);
        $user = User::all();
        $academy = Academy::where('academy_type',$userdetail['id_academy'])->get();
        return view('admin.userlist.edit')->with(compact('id','userdetail','user','academy'));
    }

}
