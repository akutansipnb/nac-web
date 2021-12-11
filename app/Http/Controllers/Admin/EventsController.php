<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Event::paginate(10);
        return view('admin.event.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $icon = $request->file('icon_url');
        $cover = $request->file('background_url');

        $icon_name = strtolower($request->aliases)."-icon.".$icon->getClientOriginalExtension();
        $cover_name = strtolower($request->aliases)."-cover.".$cover->getClientOriginalExtension();

        try {
            Event::create([
                'event_name' => $request->event_name ,
                'aliases' => $request->aliases,
                'icon_url' => 'img/events/icons/'.$icon_name,
                'background_url' => 'img/events/covers/'.$cover_name,
                'audience' => $request->audience,
                'max_slot' => $request->max_slot,
                'register_time' => $request->register_time,
                'register_close' => $request->register_close,
                'blog' => $request->blog,
                'status' => 'open',
            ]);

            // Moves Files
            $icon->move('img/events/icons',$icon_name);
            $cover->move('img/events/covers',$cover_name);

            return redirect()->route('events.index');
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
