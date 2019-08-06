<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Session;

class EventController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events.index',['events'=>event::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'image' => 'required|image',
            'description' => 'required',
            'event_date' =>'required',
            'time' => 'required'
        ]);

        $event = new Event;

        $event_image = $request->image;

        $event_image_new_name = time() . $event_image->getClientOriginalName();

        $event_image->move('uploads/events', $event_image_new_name);

        $event->name = $request->name;
        $event->event_date = $request->event_date;
        $event->time = $request->time;
        $event->description = $request->description;
        $event->image = 'uploads/events/' . $event_image_new_name;

        $event->save();

        Session::flash('success', 'Event created.');

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $event = Event::find($id);
        return view('events.edit')->with('event',$event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'event_date' =>'required',
            'time' => 'required'
        ]);
        
        $event = new Event;

        

        $event->name = $request->name;
        $event->event_date = $request->event_date;
        $event->time = $request->time;
        $event->description = $request->description;
        

        $event->save();

        Session::flash('success', 'Event updated.');

        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event = Event::find($id);

        if(file_exists($event->image))
        {
            unlink($event->image);
        }

        $event->delete();


        Session::flash('success','The event was just deleted');


        return redirect()->back();
    }
}
