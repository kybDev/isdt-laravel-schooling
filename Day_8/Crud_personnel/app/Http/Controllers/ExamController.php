<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ExamController extends Controller
{
    public function exam1(){
        $data = DB::table('personnel')
        ->get();
        dd( $data );
    }

    public function exam2(){
        $data = DB::table('personnel')->avg('age');
        dd( $data );
    }

    public function exam3(){
        $data = DB::table('personnel')
        ->whereId(8)
        //->find(8)
        ->get();
        dd( $data );
    }

    public function exam4(){
        $data = DB::table('personnel')->count();
        dd( $data );
    }

    public function exam5(){
        $data = DB::table('statistics')
        ->join('personnel', 'personnel.id', 'statistics.personnel_id')
        ->select(
            'personnel.first_name AS fname',
            'personnel.last_name AS lname',
            'personnel.middle_name AS mname',
            'statistics.bmi AS bmi'
        )->get();
        dd( $data );
    }

    public function exam6(){
        $data = DB::table('statistics')->sum('weight');
        dd( $data );
    }

    public function exam7(){
        $data = DB::table('personnel')->pluck('last_name');
        dd( $data );
    }

    public function exam8(){
        $data = DB::table('statistics')
        ->join('personnel', 'personnel.id', '=', 'statistics.personnel_id')
        ->get();
        dd( $data );
    }



    public function exam9(){
        $data = DB::table('personnel')
        ->where('age', '<', 25)
        ->get();
        dd( $data );
    }

    public function exam10(){
        $data = DB::table('personnel')
        ->where('age', '<', 30)
        ->avg('age');
        dd( $data );
    }



    public function exam11(){
        $data = DB::table('statistics')
        ->join('personnel', 'personnel.id', '=', 'statistics.personnel_id')
        ->where('statistics.height', '<', 165)
        ->count();
        dd( $data );
    }


    public function exam12(){
        $data = DB::table('statistics')
        ->join('personnel', 'personnel.id', 'statistics.personnel_id')
        ->where('personnel.age', '>', 25)
        ->select(
            'personnel.first_name AS fname',
            'personnel.last_name AS lname',
            'personnel.middle_name AS mname',
            'statistics.bmi AS bmi'
        )->get();
        dd( $data );
    }

    public function exam13(){
        $data = DB::table('statistics')
        ->where('height', '>', 130)
        ->sum('weight');
        dd( $data );
    }

    public function exam14(){
        $data = DB::table('personnel')
        ->where('id', '>', 10)
        ->pluck('last_name');
        // or
        // ->select('last_name')
        dd( $data );
    }

    public function exam15(){
        $data = DB::table('statistics')
        ->join('personnel', 'personnel.id', '=', 'statistics.personnel_id')
        ->where('bmi', '>', 30)
        ->get();
        dd( $data );
    }

    public function asc(){
        $data = DB::table('personnel')
        ->orderBy('last_name', 'ASC')
        ->pluck('last_name');
        dd( $data );
    }

    public function desc(){
        $data = DB::table('personnel')
        ->orderBy('last_name', 'DESC')
        ->pluck('last_name');
        dd( $data );
    }

}
