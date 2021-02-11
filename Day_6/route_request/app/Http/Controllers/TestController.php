<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class TestController extends Controller
{
    public function simple(){
        dd('simple');
    }

    public function redirect(){
        return Redirect::route('test.landing');
    }

    public function landing(){
        dd('Redirect');
    }

    public function update($id){
        dd($id);
    }

    public function submit(){
        return Redirect::route('test.update', [
            'id' => '11111'
        ]);
    }

    public function create($id = null){
      return $id ?? Redirect::route('test.landing');
    } 
}
