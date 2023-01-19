<?php

namespace App\Http\Controllers;

use App\Models\Workshop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkshopController extends Controller
{
    //
    public function create()
    {
        return view('cms.workshop.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string'
        ]);

        $workshop = new Workshop();
        $workshop->title = $request->input('title');
        $workshop->description = $request->input('description');
        $workshop->start_date = Carbon::parse($request->input('start_date'))->format('Y-M-d');
        $workshop->end_date = Carbon::parse($request->input('end_date'))->format('Y-M-d');
        $workshop->location = $request->input('location');
        if($request->has('link')){
            $workshop->link = $request->input('link');
        }
        $workshop->save();

        return redirect()->route('add_workshop')->with('success', 'Workshop successfully created');

    }

    public function edit($id)
    {
        $workshop = Workshop::find($id);
        return view('cms.workshop.add', [
                                        'workshop' => $workshop,
                                        'route' => route('update_workshop', $id)
                                    ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string'
        ]);

        $workshop = Workshop::find($id);
        $workshop->title = $request->input('title');
        $workshop->description = $request->input('description');
        if($request->has('start_date')){
            $workshop->start_date = Carbon::parse($request->input('start_date'))->format('Y-M-d');
        }
        if($request->has('end_date')){
            $workshop->end_date = Carbon::parse($request->input('end_date'))->format('Y-M-d');
        }
        $workshop->location = $request->input('location');
        if($request->has('link')){
            $workshop->link = $request->input('link');
        }
        $workshop->save();

        return redirect()->route('cms_profile')->with('success', 'Workshop successfully updated');
    }

    public function destroy($id)
    {
        $workshop = Workshop::find($id);
        $workshop->delete();

        return redirect()->back()->with('success', 'Workshop successfully removed');
    }
}
