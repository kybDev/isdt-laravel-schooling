<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Analytic;
use Redirect;

class AnalyticController extends Controller
{
    protected $analytic, $request;
    public function __construct(Analytic $analytic, Request $request){
        $this->analytic = $analytic;
        $this->request = $request;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = $this->analytic;
        // Search By Age
        if(($this->request->has('age') && !empty($this->request->age)) && ( $this->request->has('operator') && !empty($this->request->operator)) ){
            $data = $data->where('age', $this->request->operator ,$this->request->age);
        }
        // Search By Gender
        if($this->request->has('gender') && !empty($this->request->gender)) $data = $data->orWhere('gender', $this->request->gender);
        // Search By City
        if($this->request->has('city') && !empty($this->request->city))$data =  $data->orWhere('city', 'LIKE', '%'.$this->request->city.'%');

         // Search Between Date
         if(($this->request->has('date1') && !empty($this->request->date1)) && ( $this->request->has('date2') && !empty($this->request->date2)) ){
            $data = $data->whereBetween('created_at', [$this->request->date1, $this->request->date2]);
        }

        return view('analytic.index')->with([
            "data" => $data->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('analytic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {   

        $validatedData = $this->request->validate([
            'gender' => 'in:M,F', 
            'age' => ['required'],
            'city' => ['required'],
        ]);

        $this->analytic->create($this->request->except('_token'));

        return Redirect::route('analytic_index')->With([
            'success' => "Record Successfully Created!"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('analytic.edit')->with([
            "data" => $this->analytic->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $validatedData = $this->request->validate([
            'gender' => 'in:M,F', 
            'age' => ['required'],
            'city' => ['required'],
        ]);

        $this->analytic->find($id)->update($this->request->except('_token'));

        return Redirect::route('analytic_index')->With([
            'success' => "Record Successfully Updated!"
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->analytic->destroy($id);

        return Redirect::route('analytic_index')->With([
            'success' => "Record Successfully Deleted!"
        ]);
    }
}
