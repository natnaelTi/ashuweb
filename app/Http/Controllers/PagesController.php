<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function dashboard()
    {
        return view('cms.dashboard');
    }

    public function profile()
    {
        return view('cms.profile.view');
    }

    public function artwork()
    {
        return view('cms.artwork.list');
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
