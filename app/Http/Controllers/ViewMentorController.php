<?php

namespace App\Http\Controllers;

use App\Models\Academy;
use App\Models\Event;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewMentorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mentor::where([
            ['event_id','=',strval(Auth::user()->details->events["id"])],
            ['academy_id','=',strval(Auth::user()->details->academy["id"])],
        ])->paginate(10);
        return view('user.mentor.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $academy = Academy::all();
        $event = Event::all();
        return view('user.mentor.add')->with(compact('academy','event'));
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
            'name' => 'required',
            'phone' => 'required',
            'identity_code' => 'required|unique:mentors,identity_code'
        ],[
            'identity_code.unique' => "Data already exists!"
        ]);

        try {
            Mentor::create([
                'academy_id' => Auth::user()->details->academy["id"],
                'event_id' => Auth::user()->details->events["id"],
                'name' => $request->name,
                'phone' => $request->phone,
                'identity_code' => $request->identity_code
            ]);
            return redirect()->route('pendamping.index')->with('success', 'Data Added Successfully');

        } catch (\Throwable $th) {
            return $th;
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
        $mentor = Mentor::find($id);
        $academy = Academy::all();
        $event = Event::all();
        return view('user.mentor.edit')->with(compact('mentor','academy','event'));
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
            'name' => 'required',
            'phone' => 'required',
            'identity_code' => 'required'
        ]);

        try {
            Mentor::find($id)->update([
                'academy_id' => Auth::user()->details->academy["id"],
                'event_id' => Auth::user()->details->events["id"],
                'name' => $request->name,
                'phone' => $request->phone,
                'identity_code' => $request->identity_code
            ]);
            return redirect()->route('pendamping.index')->with('success', 'Data Successfully Changed');

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
            Mentor::find($id)->delete();
            return redirect()->route('pendamping.index');
        } catch (\Throwable $th) {
            echo 'Failed';
        }
    }
}
