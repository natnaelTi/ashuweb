<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function create()
    {
        return view('cms.event.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'topic' => 'required'
        ]);

        if($request->has('filepath')){
            $fp = 'event' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('artworks'), $fp);
        }

        $event = new Event();
        $event->topic = $request->input('topic');
        if($request->has('filepath')){
            $event->filepath = $fp;
        }
        else{
            $event->filepath = 'none.jpg';
        }
        $stat = $event->save();

        if($stat){
            return redirect()->route('cms_event_list')->with('success', 'Success: Event created successfully.');
        }
        else{
            return back()->with('error', 'Error: Event failed to be saved.');
        }
    }

    public function edit($id)
    {
        $event = Event::find($id);
        return view('cms.event.add', [
            'event' => $event,
            'route' => route('update_event', $id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $event = Event::find($id);

        if($request->has('topic')){
            $event->topic = $request->input('topic');
        }
        
        if($request->has('filepath')){
            $fp = 'event' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('artworks'), $fp);
        }

        $stat = $event->save();

        if($stat){
            return redirect()->route('cms_event_list')->with('success', 'Success: Event updated successfully.');
        }
        else{
            return back()->with('error', 'Error: Event failed to be saved.');
        }
    }

    public function destroy($id)
    {
        $event = Event::find($id);
        $stat = $event->delete();

        if($stat){
            return redirect()->back()->with('success', 'Event removed successfully.');
        }
        else{
            return redirect()->back()->with('error', 'Event failed to be removed.');
        }
    }
}
