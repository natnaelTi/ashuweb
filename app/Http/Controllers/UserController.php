<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Embed\Embed;

class UserController extends Controller
{
    //

    public function edit($id)
    {
        $artist = User::find($id);

        return view('cms.profile.edit', [
            'artist' => $artist,
            'route' => route('update_profile', $id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'bio' => 'required|string',
            // 'dob' => 'required|date',
            'statement' => 'required|string',
        ]);
        if($request->has('filepath')) {
            $fp = $request['name'] . '.' . 'profile.picture' . '.' . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('artists'), $fp);
        }

        $artist = User::find($id);
        $artist->name = $request->input('name');
        $artist->bio = $request->input('bio');
        
        if($request->has('dob')){
            $artist->dob = Carbon::parse($request->input('dob'))->format('Y-M-d');
        }
        
        $artist->statement = $request->input('statement');

        if($request->has('exhibitions')){
            $artist->exhibitions = $request->input('exhibitions');
        }

        if($request->has('prs')){
            $artist->prs = $request->input('prs');
        }
        else{
            $artist->prs = 'none';
        }
        
        if($request->has('filepath')) {
            $artist->filepath = $fp;
        }
        $stat = $artist->update();

        if($stat) {
            return redirect()->route('cms_profile')->with('success', 'Profile Updated Successfully!');
        }
        else {
            return redirect()->back()->with('error', 'Failed to Update');
        }
    }
}