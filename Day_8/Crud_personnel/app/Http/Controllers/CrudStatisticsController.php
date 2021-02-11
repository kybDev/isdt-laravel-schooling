<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistics;
use Redirect;

class CrudStatisticsController extends Controller
{
    protected $statistics;
    protected $request;
    protected $rules = [
        'height' => 'required',
        'weight' => 'required'
    ];

    private function bmi(){
        $w = $this->request->weight;
        $h = $this->request->height/100;
        return round($w/($h*$h), 2);
    }   

    public function __construct(Request $request, Statistics $statistics)
    {
        $this->statistics   = $statistics;
        $this->request      = $request;
    }

    public function index($id){
        $find = $this->statistics->wherePersonnel_id($id);

        if(!$find->exists()) return view('bmi.create')->with([
            "id" => $id
        ]);

        return view('bmi.update')->with([
            "statistics" => $find->first()
        ]);
    }

    public function create($id){
        $this->request->validate($this->rules);

        $this->request->merge([
            'personnel_id' => $id,
            'bmi' => $this->bmi()
        ]);

        $db = $this->statistics->create($this->request->except('_token'));

        return Redirect::route('personnel')->with([
            'success' => 'BMI has been set!'
        ]);
    }

    public function update($id){
        $this->request->validate($this->rules);

        $db = $this->statistics->find($id)->update($this->request->except('_token'));

        return Redirect::route('personnel')->with([
            'success' => 'BMI has been updated!'
        ]);
    }
}
