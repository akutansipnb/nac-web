<?php

namespace App\Http\Controllers;

use App\Mail\SendSuccessMail;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EventRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
<<<<<<< HEAD
        $request->validate([
            'id_users'=>'required',
            'id_academy'=>'required',
            'id_events'=>'required',
            'email'=>'required|unique:users,email',
            'identity_code'=>'required|unique:user_details,identity_code',
            'name'=>'required',
            'password'=>'required',
            'edu_stage'=>'required',
            'birth_date'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'department'=>'required',
            'adress'=>'required'
        ],[
            'email.unique' => "Data Sudah Ada !",
            'identity_code.unique' => "Data Sudah Ada !"
        ]);
=======
>>>>>>> 42a9430de5024a7d946bbe279596df416a00f750
        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ])->assignRole('Users');

            $data_parsing = User::where('email',$request->email)->first();

            UserDetail::create([
                'id_users' => $data_parsing['id'],
                'id_academy' => $request->id_academy,
                'id_events' => $request->id_events,
                'identity_code' => $request->identity_code,
                'edu_stage' => $request->edu_stage,
                'birth_date' => $request->birth_date,
                'phone' => $request->phone,
                'gender' => $request->gender,
                'department' => $request->department,
                'adress' => $request->adress,
                'validation_status' => FALSE
            ]);

            Mail::to($request->email)->send(new SendSuccessMail);
            return view('user.success',compact('request'));

        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
