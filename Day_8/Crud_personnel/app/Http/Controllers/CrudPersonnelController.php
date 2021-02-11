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

    /** 
     * Get personnel Query
     * 
     * @return personnel data
     */
    private function getPersonnel(){
        return  $this->personnel
        ->leftJoin('statistics', 'statistics.personnel_id', 'personnel.id')
        ->select(
            'personnel.*',
            'statistics.bmi',
            'statistics.height',
            'statistics.weight',
        );
    }

    public function index(){
        return view('index')->with([
            'trash' => false,
            "personnel" => $this
            ->getPersonnel()
            ->get()
        ]);
    }

    public function trash(){
        return view('index')->with([
            'trash' => true,
            "personnel" => $this
            ->getPersonnel()
            ->onlyTrashed()
            ->get()
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
        $db = $this->personnel->find($id)
        // ->forceDelete() // Permanent delete the data
        ->delete();

        return Redirect::route('personnel')->with([
            'success' => 'Personnel has been deleted!'
        ]);
    }

    #=========================================================================
    # RESTORE ================================================================
    #=========================================================================
    public function restore($id){
        $db = $this->personnel
        ->whereId($id)
        ->onlyTrashed()
        ->sole()
        /** 
         * sole()
         * same function as first()
         * 
         * @returns Object Model
         */
        ->restore();

        return Redirect::route('crud.trash')->with([
            'success' => 'Personnel has been restore!'
        ]);
    }


    #=========================================================================
    # FORCE DELETE ===========================================================
    #=========================================================================
    public function force_delete($id){
        $db = $this->personnel
        ->whereId($id)
        ->onlyTrashed()
        ->sole()
        /** 
         * sole()
         * same function as first()
         * 
         * @returns Object Model
         */
        ->forceDelete(); // Permanent delete the data

        return Redirect::route('crud.trash')->with([
            'success' => 'Personnel has been permanently deleted!'
        ]);
    }
}
