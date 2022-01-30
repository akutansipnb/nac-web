<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\EventController;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\UserDetail;
use PDF;
use Illuminate\Support\Facades\Storage;

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

        $request->validate([
            'event_name'=>'required',
            'aliases'=>'required',
            'register_year'=>'required',
            'icon_url'=>'required',
            'background_url'=>'required',
            'audience'=>'required',
            'max_slot'=>'required',
            'registration_fee'=>'required',
            'register_time'=>'required',
            'register_close'=>'required',
            'quotes'=>'required',
            'desc'=>'required',
            'blog'=>'required'
        ]);


        $icon = $request->file('icon_url');
        $cover = $request->file('background_url');

        $icon_name = strtolower($request->aliases)."-" . $request->register_year ."-icon.".$icon->getClientOriginalExtension();
        $cover_name = strtolower($request->aliases)."-" . $request->register_year ."-cover.".$cover->getClientOriginalExtension();


        try {
            Event::create([
                'event_name' => $request->event_name ,
                'aliases' => $request->aliases,
                'year' => $request->register_year,
                'icon_url' => 'img/events/icons/'.$icon_name,
                'background_url' => 'img/events/covers/'.$cover_name,
                'audience' => $request->audience,
                'max_slot' => $request->max_slot,
                'registration_fee' => $request->registration_fee,
                'register_time' => $request->register_time,
                'register_close' => $request->register_close,
                'quotes' => $request->quotes,
                'desc' => $request->desc,
                'blog' => $request->blog,
                'status' => 'open',
            ]);

            // Moves Files
            $icon->move('img/events/icons',$icon_name);
            $cover->move('img/events/covers',$cover_name);

            return redirect()->route('events.index')->with('success', 'Data Berhasil Ditambah');
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
        $event = Event::find($id);
        return view('admin.event.edit')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'event_name'=>'required',
            'aliases'=>'required',
            'register_year'=>'required',
            'audience'=>'required',
            'max_slot'=>'required',
            'registration_fee'=>'required',
            'register_time'=>'required',
            'register_close'=>'required',
            'quotes'=>'required',
            'desc'=>'required',
            'blog'=>'required'
        ]);

        try {
            $update = [
                'event_name' => $request->event_name ,
                'aliases' => $request->aliases,
                'year' => $request->register_year,
                'audience' => $request->audience,
                'max_slot' => $request->max_slot,
                'registration_fee' => $request->registration_fee,
                'register_time' => $request->register_time,
                'register_close' => $request->register_close,
                'quotes' => $request->quotes,
                'desc' => $request->desc,
                'blog' => $request->blog,
                'status' => 'open',
            ];


            if($request->file('icon_url') !== NULL){
                $icon = $request->file('icon_url');
                $icon_name = strtolower($request->aliases)."-" . $request->register_year ."-icon.".$icon->getClientOriginalExtension();
                $update = [
                    'icon_url' => 'img/events/icons/'.$icon_name,
                ];
                $icon->move('img/events/icons',$icon_name);
            };

            if($request->file('background_url') !== NULL){
                $cover = $request->file('background_url');
                $cover_name = strtolower($request->aliases)."-" . $request->register_year ."-cover.".$cover->getClientOriginalExtension();
                $update = [
                    'background_url' => 'img/events/covers/'.$cover_name,
                ];
                $cover->move('img/events/covers',$cover_name);
            }

        $event->update($update);

            // Moves Files
        return redirect()->route('events.index')->with('success', 'Data Berhasil Diubah');
        } catch (\Throwable $th) {
            throw $th;
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

        $data = Event::find($id);
        unlink($data['icon_url']);
        unlink($data['background_url']);
        $data = Event::destroy($id);



        return redirect()->back();

    }

    public function cetak_pdf($id)
    {
        $e = Event::where('id',$id)->first();
    	$datas = UserDetail::where('id_events',$id)->get();

        $comp = $e['event_name'];
 
    	$pdf = PDF::loadview('pesertalomba_pdf',compact('datas','comp'));
    	return $pdf->download(date('dmyhm').'-'.strtoupper(str_replace(' ','_',$e['event_name'])).'.pdf');
    }
}
