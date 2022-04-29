<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Exhibition;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Artwork;

class PagesController extends Controller
{
    //
    public function index()
    {
        $artworks = Artwork::all();
        $exhibitions = Exhibition::all();
        $artist = User::find(1);
        $years = [];
        foreach($artworks as $artwork){
            if(in_array($artwork->year, $years) == false){
                array_push($years, $artwork->year);
            }
        }
        rsort($years);
        // $upcoming = Exhibition::where('start_date')

        return view('guest.index', [
            'artworks' => $artworks,
            'exhibitions' => $exhibitions,
            'artist' => $artist,
            'years' => $years
        ]);
    }

    public function dashboard()
    {
        $artist = User::find(1);
        $total_artworks = 0;
        $total_photos = 0;
        $total_exhibitions = 0;
        $profile_pic_path = asset($artist->profile_pic_path);
        $age = Carbon::parse($artist->dob)->age;
        $alumni = ['Ale School of Fine Arts | AAU', 'Hamburg Fine Arts Fellowship'];
        $exhibitions  = [];

        return view('cms.dashboard', [
            'total_artworks' => $total_artworks,
            'total_photos' => $total_photos,
            'total_exhibitions' => $total_exhibitions,
            'profile_pic_path' => $profile_pic_path,
            'artist' => $artist,
            'alumni' => $alumni,
            'age' => $age,
            'exhibitions' => $exhibitions
        ]);
    }

    public function profile()
    {
        $artist = User::find(1);
        $year = Carbon::now()->format('Y');
        $age = Carbon::parse($artist->dob)->age;
        $profile_pic_path = asset($artist->profile_pic_path);

        $alumnis = Alumni::all();

        $exhibitions = Exhibition::latest()->paginate(5);

        return view('cms.profile.view', [
            'artist' => $artist,
            'age' => $age,
            'profile_pic_path' => $profile_pic_path,
            'alumnis' => $alumnis,
            'year' => $year,
            'exhibitions' => $exhibitions
        ]);
    }

    public function artwork()
    {
        $artworks = Artwork::latest()->paginate(15);

        return view('cms.artwork.list', [
            'artworks' => $artworks
        ]);
    }

    public function photography()
    {
        return view('cms.photography.list');
    }

    public function videoart()
    {
        return view('cms.videoart.list');
    }
}
