<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Academy;
use App\Models\Event;
use App\Models\UserDetail;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $d = Academy::whereHas('users',function($e){
        //     $e->where('id',2);
        // })->get();

        $d = Event::all();

        // $d = Academy::where('id',2)->get();
        // $data = Academy::where('academy_type',"university")->paginate(10);
        foreach($d as $e){
            foreach($e->users as $a){
                dd($a->users->name);
            };
        }
        // return view('admin.university.index',compact('data',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.university.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            Academy::create([
                'academy_type' => $request->academy_type="university",
                'academy_name' => $request->academy_name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            return redirect()->route('university.index');


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
        $university = Academy::find($id);
        return view('admin.university.edit')->with(compact('university'));
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
                'academy_type' => $request->academy_type="university",
                'academy_name' => $request->academy_name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
            return redirect()->route('university.index');

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
            return redirect()->route('university.index');
        } catch (\Throwable $th) {
            echo 'gagal';
        }
    }
}
