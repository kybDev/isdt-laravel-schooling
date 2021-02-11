<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelRequest extends Controller
{
    public function indexsView(){
        return view('welcome');
    }

    public function aboutUsView(){
        return view('aboutus');
    }

    public function contactView(){
        return view('contact');
    }

    public function servicesView(){
        return view('services');
    }

    public function galleryView(){
        return view('gallery');
    }


}
