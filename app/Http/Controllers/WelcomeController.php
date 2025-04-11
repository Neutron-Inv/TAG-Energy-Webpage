<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Gallery};

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('website.home');
    }

    public function getContact()
    {
        return view('website.contact');
    }

    public function getCommunity()
    {
        return view('website.community');
    }

    public function getProducts()
    {
        return view('website.products');
    }

    public function getPolicy()
    {
        return view('website.local-policy');
    }

    public function getFlange()
    {
        return view('website.services.flange-service');
    }

    public function getIRM()
    {
        return view('website.services.irm-service');
    }

    public function getSealing()
    {
        return view('website.services.sealing-service');
    }

    public function getRenewable()
    {
        return view('website.services.renewable-service');
    }

    public function getManpower()
    {
        return view('website.services.manpower-service');
    }

    public function getValve()
    {
        return view('website.services.valve-service');
    }

    public function getProcurement()
    {
        return view('website.services.procurement-service');
    }

    public function getVAC()
    {
        return view('website.services.vac-service');
    }

    public function getDNVContainer()
    {
        return view('website.services.dnv-container-service');
    }

    public function getGallery()
    {
        $gallery = Gallery::orderBy('id', 'desc')->paginate(50);
        return view('website.gallery')->with(['gallery' => $gallery]);
    }
}
