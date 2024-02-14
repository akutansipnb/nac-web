<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class ContestantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = UserDetail::paginate(10);
        return view('admin.contestants.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = UserDetail::find($id);
        return view('admin.contestants.details',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userdetail = UserDetail::find($id);
        $user = User::all();
        $academy = Academy::orderByDesc('academy_type')->get();
        return view('admin.contestants.edit')->with(compact('id','userdetail','user','academy'));//
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
        $request->validate([
            'name'=>'required',
            'id_academy'=>'required',
            'identity_code'=>'required',
            'edu_stage'=>'required',
            'birth_date'=>'required',
            'phone'=>'required',
            'department'=>'required',
            'adress'=>'required'
        ]);
        try {
            $data = UserDetail::find($id);

            $data->update([
                'id_academy' => $request->id_academy,
                'identity_code' => $request->identity_code,
                'edu_stage' => $request->edu_stage,
                'birth_date' => $request->birth_date,
                'phone' => $request->phone,
                'department' => $request->department,
                'adress' => $request->adress,
            ]);

            User::where('id',$data->id_users)->update([
                'name' => $request->name
            ]);

            if ($data) {
                return redirect()->back()->with('success', 'Data Berhasil Diperbarui');
            }

        } catch (\Throwable $th) {
            return $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {

            $data = UserDetail::where('id',$id)->first();
            User::where('id',$data['id_users'])->delete();
            UserDetail::find($id)->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            echo 'gagal';
        }
    }
}
