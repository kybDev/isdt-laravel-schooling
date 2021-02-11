<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class RequestController extends Controller
{

    protected $request;

    public function __construct(Request $request){

        $this->request = $request;

    }

    public function name(){

        return dd($this->request->all());

    }

    public function form(){

        return view('form');

    }
}
