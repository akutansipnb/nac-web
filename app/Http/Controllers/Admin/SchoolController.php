<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use Illuminate\Http\Request;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Academy::where('academy_type',"school")->paginate(10);
        return view('admin.school.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.school.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'academy_name'=>'required',
            'phone'=>'required',
            'address'=>'required'
        // ],[
        //     'phone.unique' => "Data Sudah Ada !",
        ]);

        try {
            Academy::create([
                'academy_type' => $request->academy_type="school",
                'academy_name' => $request->academy_name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            return redirect()->route('school.index')->with('success', 'Data Berhasil Ditambah');


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
        $school = Academy::find($id);
        return view('admin.school.edit')->with(compact('school'));
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

        try {
            Academy::find($id)->update([
                'academy_type' => $request->academy_type="school",
                'academy_name' => $request->academy_name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            return redirect()->route('school.index')->with('success', 'Data Berhasil Diubah');

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
            Academy::find($id)->delete();
            return redirect()->route('school.index');
        } catch (\Throwable $th) {
            echo 'gagal';
        }
    }
}
