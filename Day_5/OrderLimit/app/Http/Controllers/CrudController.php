<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class CrudController extends Controller
{
    protected $model;

    // This load first before any other function
    public function __construct(Project $model){
        $this->model = $model;
    }

    public function index(){
        $data = $this->model::all();
        dd($data);
    }

    public function create(){
        // $data = $this->model::insert([
        //     [
        //         'name' => 'CARMIS',
        //     ]
        // ]);
        // OR
        $data = $this->model::create( [
            'name' => 'WAHAHA'
        ]);
        dd($data);
    }

    public function update(){
        // $data = $this->model::find(5)
        // ->update([
        //     'description' => 'PA Inventory_1',
        // ]);
        // OR
        $data = $this->model::find(5);
        $data->description = 'PA Inventory_12';
        $data->update();
        
        dd($data);
    }

    public function delete(){
        $data = $this->model::find(2)->delete();
        dd($data);
    }

}
