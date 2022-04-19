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
            'medium' => 'required|in:oil,acrylic,wood-cut,stensil-print,sculpture,mixed-media',
            'year' => 'required|year',
            'price' => 'required|numeric',
            'description' => 'string',
            'filepath' => 'required'
        ]);

    }

    public function edit($id)
    {
        $artwork = Artwork::find($id);
        return view('cms.artwork.add', [
                                        'artwork' => $artwork
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
            'year' => 'required|year',
            'price' => 'required|numeric',
            'description' => 'string',
            'filepath' => 'required'
        ]);
        $artwork = Artwork::find($id);
        $artwork->title = $request->input('title');
        $artwork->width = $request->input('width');
        $artwork->height = $request->input('height');
        $artwork->type = $request->input('type');
        $artwork->medium = $request->input('medium');
        $artwork->year = $request->input('year');
    }

    public function destroy($id)
    {
        $artwork = Artwork::find($id);
        $artwork->delete();
        return redirect()->back()->with('success', 'Artwork successfully removed');
    }
}
