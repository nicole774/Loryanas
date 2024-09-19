<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function website()
    {
        return view('website.index');
    }
    function contact () {
        return view('website.contact');
    }

    function boutique () {
        return view('website.boutique');
    }

    function detailsProduit () {
        return view('website.details-produit');
    }

    function checkout () {
        return view('website.checkout');
    }

    function about () {
        return view('website.about');
    }
}
