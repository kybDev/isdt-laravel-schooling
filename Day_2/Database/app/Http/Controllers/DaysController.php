<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DaysController extends Controller
{
    public function dayTwo(){
        return view('day.one. ');
    }

    public function dayThree(){

        $todo = DB::table('todo_users')->first();
        dd($todo );

        return view('day.two.index');
       
    }
}
