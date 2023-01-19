<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use App\Models\Exhibition;
use App\Models\Event;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Artwork;
use App\Models\Workshop;
use Embed\Embed;

class PagesController extends Controller
{
    //
    public function index()
    {
        $artworks = Artwork::orderBy('created_at', 'desc')->get();
        $exhibitions = Exhibition::all();
        $workshops = Workshop::all();
        $artist = User::find(1);
        $years = [];
        $artwork_displays = [];
        $ads = [];
        $paintings = [];
        $painting_years = [];
        $drawings = [];
        $drawing_years = [];
        
        foreach($artworks as $artwork){
            if(in_array($artwork->year, $years) == false){
                array_push($years, $artwork->year);
            }
            
            if($artwork->type == 'painting'){
                if(in_array($artwork->year, $painting_years) == false){
                    array_push($painting_years, $artwork->year);
                }
                array_push($paintings, $artwork);
                rsort($painting_years);
            }
            
            if($artwork->type == 'drawing'){
                if(in_array($artwork->year, $drawing_years) == false){
                    array_push($drawing_years, $artwork->year);
                }
                array_push($drawings, $artwork);
                rsort($drawing_years);
            }
        }
        rsort($years);
        foreach($years as $year){
            foreach($artworks as $artwork){
                if($artwork->year == $year){
                    array_push($ads, $year);
                    array_push($ads, $artwork);
                }
            }
            array_push($artwork_displays, $ads);
        }
        
        $upcoming = Exhibition::where('start_date', '>=', Carbon::now())->orderBy('start_date', 'asc')->first();
        
        $embed = new Embed();
        $pr_views = [];

        if($artist->prs != 'none'){
            $prs = explode(',', $artist->prs);
            foreach($prs as $pr){
                $info = $embed->get($pr);
                array_push($pr_views, $info);
            }
        }
        return view('guest.index', [
            'artworks' => $artworks,
            'exhibitions' => $exhibitions,
            'workshops' => $workshops,
            'artist' => $artist,
            'years' => $years,
            'upcoming' => $upcoming,
            'prs' => $pr_views,
            'paintings' => $paintings,
            'painting_years' => $painting_years,
            'drawings' => $drawings,
            'drawing_years' => $drawing_years
        ]);
    }

    public function dashboard()
    {
        $artist = User::find(1);
        $artworks = Artwork::all();
        $total_artworks = count($artworks);
        $workshops = Workshop::all();
        $total_workshops = count($workshops);
        $exhibitions = Exhibition::all();
        $total_exhibitions = count($exhibitions);
        $profile_pic_path = asset('./artists/'.$artist->filepath);
        $age = Carbon::parse($artist->dob)->age;
        $alumni = ['Ale School of Fine Arts | AAU', 'Hamburg Fine Arts Fellowship'];
        $exhibitions  = [];

        return view('cms.dashboard', [
            'total_artworks' => $total_artworks,
            'total_workshops' => $total_workshops,
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
        $profile_pic_path = asset('artists/'.$artist->filepath);

        $alumnis = Alumni::all();

        $exhibitions = Exhibition::latest()->paginate(5);
        $workshops = Workshop::latest()->paginate(5);

        return view('cms.profile.view', [
            'artist' => $artist,
            'age' => $age,
            'profile_pic_path' => $profile_pic_path,
            'alumnis' => $alumnis,
            'year' => $year,
            'exhibitions' => $exhibitions,
            'workshops' => $workshops
        ]);
    }

    public function artwork()
    {
        $artworks = Artwork::latest()->paginate(15);

        return view('cms.artwork.list', [
            'artworks' => $artworks
        ]);
    }

    public function event()
    {
        $events = Event::latest()->paginate(15);

        return view('cms.event.list', ['events' => $events]);
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