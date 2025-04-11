<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getFlangeProducts()
    {
        return view('website.products.flanges');
    }

    public function getFlowProducts()
    {
        return view('website.products.flow-controls');
    }

    public function getGasketProducts()
    {
        return view('website.products.gaskets');
    }

    public function getPipeProducts()
    {
        return view('website.products.pipes');
    }

    public function getInsulationProducts()
    {
        return view('website.products.insulation');
    }
    
    public function getBoschProducts()
    {
        return view('website.products.bosch');
    }
}
