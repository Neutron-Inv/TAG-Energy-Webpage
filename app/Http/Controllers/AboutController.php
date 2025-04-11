<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('website.about');
    }

    public function getTeam()
    {
        return view('website.team');
    }

    public function getVideo()
    {
        return view('website.about.video');
    }

    public function getQualityPolicy()
    {
        return view('website.about.quality-policy');
    }

    public function getPastPerformance()
    {
        return view('website.about.past-performance');
    }
}
