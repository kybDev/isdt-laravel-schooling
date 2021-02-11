<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reminder;
use Redirect;

class CrudController extends Controller
{
    protected $request;
    protected $model;

    public function __construct(Request $request, Reminder $model){
        $this->request = $request;
        $this->model = $model;
    }

    public function index(){
        return view('crud.index')->with([
            'reminder' => $this->model->all()
        ]);
    }

    public function createForm(){
        return view('crud.create');
    } 

    public function save(){

        $this->request->validate([
            'title' => 'required | max:10',
            'description' => 'required | max:30',
            'due_date' => 'required | date',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $db = $this->model->create($this->request->except('_token'));
        // OR
        // $db = $this->model->create([
        //     'title' => $this->request->title,
        //     'description'=> $this->request->description,
        //     'due_date' => $this->request->due_date,
        //     'priority' => $this->request->priority,
        //     'status' => $this->request->status,
        // ]);

        return Redirect::route('crud.index')->with([
            'success' => 'Reminder has been created!'
        ]);
    }

    public function updateForm($id){
        $reminder = $this->model->find($id);

        return view('crud.update')->with([
            'reminder' => $reminder
        ]);
    }

    public function update($id){

        $this->request->validate([
            'title' => 'required | max:10',
            'description' => 'required | max:30',
            'due_date' => 'required | date',
            'priority' => 'required',
            'status' => 'required',
        ]);

        $db = $this->model->find($id)->update($this->request->except('_token'));
 

        return Redirect::route('crud.index')->with([
            'success' => 'Reminder has been updated!'
        ]);
    }

    public function delete($id){
        $db = $this->model->find($id)->delete();

        return Redirect::route('crud.index')->with([
            'success' => 'Reminder has been deleted!'
        ]);
    }

}
