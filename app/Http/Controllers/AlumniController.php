<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumni;
use Carbon\Carbon;

class AlumniController extends Controller
{
    //
    public function create()
    {
        return view('cms.alumni.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'organisation' => 'required|string',
            'year' => 'required|year',
            'location' => 'required|string',
        ]);

        $user = User::find(1);

        $alumni = new Alumni();
        $alumni->organisation = $request->input('organisation');
        $alumni->year = $request->input('year');
        $alumni->location = $request->input('location');
        $alumni->user_id = $user->id;
        $alumni->save();

        return redirect()->route('cms_profile')->with('success', 'Alumni successfully created');

    }

    public function edit($id)
    {
        $alumni = Alumni::find($id);
        return view('cms.alumni.add', [
                                        'alumni' => $alumni,
                                        'route' => route('update_alumni', $id)
                                    ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'organisation' => 'required|string',
            'year' => 'required|year',
            'location' => 'required|string',
        ]);

        $user = User::find(1);

        $alumni = Alumni::find($id);
        $alumni->organisation = $request->input('organisation');
        $alumni->year = $request->input('year');
        $alumni->location = $request->input('location');
        $alumni->user_id = $user->id;
        $alumni->save();

        return redirect()->route('cms_profile')->with('success', 'Alumni successfully updated');
    }

    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $alumni->delete();

        return redirect()->back()->with('success', 'Artwork successfully removed');
    }
}
