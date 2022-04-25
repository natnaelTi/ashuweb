<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;
use Carbon\Carbon;

class ExhibitionController extends Controller
{
    //
    public function create()
    {
        return view('cms.exhibition.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'statement' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string',
            'type' => 'required|in:solo,group',
            'description' => 'string',
            'filepath' => 'mime:zip'
        ]);

        if($request->has('filepath')) {
            $exhibition_year = Carbon::parse($request->end_date)->format('Y');
            $fp = $request['filepath'] . '.' . $exhibition_year . '.' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('exhibitions/{{$request->title}}'), $fp);
        }
        else {
            $fp = 'none.zip';
        }

        $exhibition = new Exhibition();
        $exhibition->title = $request->input('title');
        $exhibition->statement = $request->input('statement');
        $exhibition->start_date = Carbon::parse($request->input('start_date'))->format('Y-M-d');
        $exhibition->end_date = Carbon::parse($request->input('end_date'))->format('Y-M-d');
        $exhibition->location = $request->input('location');
        $exhibition->type = $request->input('type');
        if($request->has('description')) {
            $exhibition->description = $request->input('description');
        }
        else {
            $exhibition->description = 'none';
        }
        $exhibition->installation_views = $fp;
        $exhibition->save();

        return redirect()->route('add_exhibitions')->with('success', 'Exhibition successfully created');

    }

    public function edit($id)
    {
        $exhibition = Exhibition::find($id);
        return view('cms.exhibition.add', [
                                        'exhibition' => $exhibition,
                                        'route' => route('update_exhibition', $id)
                                    ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'statement' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'location' => 'required|string',
            'type' => 'required|in:solo,group',
            'description' => 'string',
            'filepath' => 'mime:zip'
        ]);

        if($request->has('filepath')) {
            $exhibition_year = Carbon::parse($request->end_date)->format('Y');
            $fp = $request['filepath'] . '.' . $exhibition_year . '.' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('exhibitions/{{$request->title}}'), $fp);
        }
        else {
            $fp = 'none.zip';
        }

        $exhibition = Exhibition::find($id);
        $exhibition->title = $request->input('title');
        $exhibition->statement = $request->input('statement');
        $exhibition->start_date = Carbon::parse($request->input('start_date'))->format('Y-M-d');
        $exhibition->end_date = Carbon::parse($request->input('end_date'))->format('Y-M-d');
        $exhibition->location = $request->input('location');
        $exhibition->type = $request->input('type');
        if($request->has('description')) {
            $exhibition->description = $request->input('description');
        }
        else {
            $exhibition->description = 'none';
        }
        $exhibition->installation_views = $fp;
        $exhibition->save();

        return redirect()->route('cms_profile')->with('success', 'Exhibition successfully updated');
    }

    public function destroy($id)
    {
        $exhibition = Exhibition::find($id);
        $exhibition->delete();

        return redirect()->back()->with('success', 'Exhibition successfully removed');
    }
}
