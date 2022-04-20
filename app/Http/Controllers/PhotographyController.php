<?php

namespace App\Http\Controllers;

use App\Models\Photography;
use Illuminate\Http\Request;

class PhotographyController extends Controller
{
    //
    public function create()
    {
        return view('cms.photos.add');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'year' => 'required|year',
            'ar_width' => 'required|numeric',
            'ar_height' => 'required|numeric',
            'camera' => 'required|string',
            'iso' => 'numeric',
            'sh_speed' => 'numeric',
            'filepath' => 'required'
        ]);

        $fp = $request['year'] . '.' . $request['title'] . '.' . $request['camera'] . time() . '.' . $request->filepath->extension();
        $request->filepath->move(public_path('photographies'), $fp);

        $photo = new Photography();
        $photo->title = $request->input('title');
        $photo->year = $request->input('year');
        $photo->ar_width = $request->input('ar_width');
        $photo->ar_height = $request->input('ar_height');
        $photo->camera = $request->input('camera');
        if($request->has('iso')) {
            $photo->iso = $request->input('iso');
        } else {
            $photo->iso = 0;
        }
        if($request->has('sh_speed')) {
            $photo->sh_speed = $request->input('sh_speed');
        } else {
            $photo->sh_speed = 0;
        }
        $photo->filepath = $fp;
        $photo->save();

        return redirect()->route('list_photographs')->with('success', 'Photo successfully added.');
    }

    public function edit($id)
    {
        $photo = Photography::find($id);
        return view('cms.photos.add', [
                                        'photo' => $photo,
                                        'route' => route('update_photograph', $id)
                                    ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'year' => 'required|year',
            'ar_width' => 'required|numeric',
            'ar_height' => 'required|numeric',
            'camera' => 'required|string',
            'iso' => 'numeric',
            'sh_speed' => 'numeric',
            'filepath' => 'required'
        ]);

        $fp = $request['year'] . '.' . $request['title'] . '.' . $request['camera'] . time() . '.' . $request->filepath->extension();
        $request->filepath->move(public_path('photographies'), $fp);

        $photo = Photography::find($id);
        $photo->title = $request->input('title');
        $photo->year = $request->input('year');
        $photo->ar_width = $request->input('ar_width');
        $photo->ar_height = $request->input('ar_height');
        $photo->camera = $request->input('camera');
        if($request->has('iso')) {
            $photo->iso = $request->input('iso');
        } else {
            $photo->iso = 0;
        }
        if($request->has('sh_speed')) {
            $photo->sh_speed = $request->input('sh_speed');
        } else {
            $photo->sh_speed = 0;
        }
        $photo->filepath = $fp;
        $photo->save();

        return redirect()->route('list_photographs')->with('success', 'Photo successfully updated.');
    }

    public function destroy($id)
    {
        $photo = Photography::find($id);
        $photo->delete();

        return redirect()->back()->with('success', 'Photo successfully removed');
    }
}
