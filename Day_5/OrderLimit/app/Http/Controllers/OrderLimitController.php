<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class OrderLimitController extends Controller
{
    private function orderBy($colmunn, $order){
        return DB::table('personnel')->orderBy($colmunn, $order);
    }

    public function asc(){
        $data = $this->orderBy('last_name', 'ASC')->get();
        dd( $data);
    }

    public function desc(){
        $data = $this->orderBy('last_name', 'DESC')->get();
        dd( $data );
    }

    public function limit(){
        $data = $this->orderBy('last_name', 'DESC')->limit(5)->get();
        dd( $data );
    }

    public function latest(){
        $data = DB::table('personnel')->latest()->get();
        dd( $data );
    }

    public function oldest(){
        $data = DB::table('personnel')->oldest()->get();
        dd( $data );
    }
}
