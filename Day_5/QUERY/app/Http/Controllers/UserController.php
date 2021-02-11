<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{   
    protected $model;

    public function __construct(User $model){
        $this->model= $model;
    }

    public function create(){
        $db = $this->model->create([
            'name' => 'Son Guko',
            'age' => '30',
            'birthdate' => '1990-10-01'
        ]);
        dd($db);
    }

    public function update(){
        $db = $this->model->find(1)->update([
            'status' => 'haha',
        ]);
        dd($db);
    }

    public function delete(){
        $db = $this->model->find(1)->delete();
        dd($db);
    }

    public function get(){
        $db = $this->model->get();
        dd($db);
    }
}
