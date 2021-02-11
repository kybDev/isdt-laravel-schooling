<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class RouteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function post(){
        return dd('this is a post page!');
    }


    public function home(){
        // return Redirect::route('contact', '12345678');
        // OR
        return Redirect::route('contact', [
            'contact' => '11111'
        ]);
    }

    public function about(){
        dd('this is about page');
    }

    public function contact($contact){
        dd($contact);
    }
}
