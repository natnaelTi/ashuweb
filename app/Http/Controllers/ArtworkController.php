<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    //
    public function create()
    {
        return view('cms.artwork.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'type' => 'required|in:painting,drawing',
            'medium' => 'required',
            'year' => 'required|numeric',
            'description' => 'string',
            'filepath' => 'required'
        ]);

        $fp = $request['year'] . '.' . $request['title'] . '.' . $request['medium'] . time() . '.' . $request->filepath->extension();
        $request->filepath->move(public_path('artworks'), $fp);

        $artwork = new Artwork();
        $artwork->title = $request->input('title');
        $artwork->width = $request->input('width');
        $artwork->height = $request->input('height');
        $artwork->type = $request->input('type');
        $artwork->medium = $request->input('medium');
        $artwork->year = $request->input('year');
        $artwork->price = $request->input('price');
        $artwork->description = $request->input('description');
        $artwork->filepath = $fp;
        $stat = $artwork->save();

        if($stat){
            return redirect()->route('cms_artwork')->with('success', 'Artwork successfully created');
        }
        else{
            return back()->with('error', 'Artwork failed to be saved');
        }

    }

    public function edit($id)
    {
        $artwork = Artwork::find($id);
        return view('cms.artwork.add', [
                                        'artwork' => $artwork,
                                        'route' => route('update_artwork', $id)
                                    ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'type' => 'required|in:painting,drawing',
            'medium' => 'required|in:oil,acrylic,wood-cut,stensil-print,sculpture,mixed-media',
            'year' => 'required|numeric',
            // 'price' => 'required|numeric',
            'description' => 'string',
            // 'filepath' => 'required'
        ]);

        if($request->has('filepath')){
            $fp = $request['year'] . '.' . $request['title'] . '.' . $request['medium'] . time() . '.' . $request->filepath->extension();
            $request->filepath->move(public_path('artworks'), $fp);   
        }

        $artwork = Artwork::find($id);
        $artwork->title = $request->input('title');
        $artwork->width = $request->input('width');
        $artwork->height = $request->input('height');
        $artwork->type = $request->input('type');
        $artwork->medium = $request->input('medium');
        $artwork->year = $request->input('year');
        $artwork->price = $request->input('price');
        if($request->has('description')){
            $artwork->description = $request->input('description');
        }
        if($request->has('filepath')){
            $artwork->filepath = $fp;
        }
        $artwork->save();

        return redirect()->route('cms_artwork')->with('success', 'Artwork successfully updated');
    }

    public function destroy($id)
    {
        $artwork = Artwork::find($id);
        $artwork->delete();

        return redirect()->back()->with('success', 'Artwork successfully removed');
    }
}