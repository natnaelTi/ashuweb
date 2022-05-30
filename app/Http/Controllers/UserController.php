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
        $embed = new Embed();
        $pr_views = [];

        if(count($artist->prs) > 0 && !in_array('none', $artist->prs)){
            $prs = $artist->prs;
            foreach($prs as $pr){
                $info = $embed->get($prs);
                array_push($pr_views, $pr);
            }
        }

        return view('cms.profile.edit', [
            'artist' => $artist,
            'prs' => $pr_views,
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
            $prs = explode(',', $request->input('prs'));
            $artist->prs = $prs;
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
