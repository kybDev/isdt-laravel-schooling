<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Redirect;
class CrudPersonnelController extends Controller
{
    protected $personnel;
    protected $request;

    protected $rules = [
        'first_name' => 'required ',
        'last_name' => 'required ',
        'middle_name' => 'required ',
        'age' => 'required ',
        'birthdate' => 'required ',
        'rating' => 'required '
    ];

    public function __construct(Request $request, Personnel $personnel)
    {
        $this->personnel    = $personnel;
        $this->request      = $request;
    }

    public function index(){

        $data = $this->personnel
        ->leftJoin('statistics', 'statistics.personnel_id', 'personnel.id')
        ->select(
            'personnel.*',
            'statistics.bmi',
            'statistics.height',
            'statistics.weight',
        )
        ->get();

        return view('index')->with([
            "personnel" => $data 
        ]);
    }



    

    #=========================================================================
    # CREATE =================================================================
    #=========================================================================
    public function create_form(){
        return view('personnel.create');
    }

    public function create_save(){

        $this->request->validate($this->rules);

        $db = $this->personnel->create($this->request->except('_token'));

        return Redirect::route('personnel')->with([
            'success' => 'Personnel has been created!'
        ]);
    }





    #=========================================================================
    # UPDATE =================================================================
    #=========================================================================

    public function update_form($id){
        return view('personnel.update')->with([
            "personnel" => $this->personnel->find($id)
        ]);
    }

    public function update_save($id){

        $this->request->validate($this->rules);

        $db = $this->personnel->find($id)->update($this->request->except('_token'));
 

        return Redirect::route('personnel')->with([
            'success' => 'Personnel has been updated!'
        ]);
    }





    #=========================================================================
    # DELETE =================================================================
    #=========================================================================

    public function delete($id){
        $db = $this->personnel->find($id)->delete();

        return Redirect::route('personnel')->with([
            'success' => 'Personnel has been deleted!'
        ]);
    }
}
