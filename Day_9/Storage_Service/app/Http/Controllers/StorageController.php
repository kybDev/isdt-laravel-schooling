<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
use Carbon\Carbon;


class StorageController extends Controller
{
    protected $product;
    protected $request;

    protected $rules = [
        'photo' => 'required',
        'name' => 'required',
        'name' => 'price'
    ];

    public function __construct(Product $product, Request $request){
        $this->product = $product;
        $this->request = $request;
    }

    public function index(){
        return view('index');
    }

    public function add(){
        return view('add');
    }

    public function add_save(){
        $saveFile = Storage::disk('public')
            ->putFileAs( 
                'products', // Folder 
                $this->request->photo, // Uploaded file photo
                $this->createFilename() // Filename
            );

        dd($saveFile);
        // $this->request->validate($this->rules);
    }

    public function getFileType(){;
        return $this->request->file('photo')->extension();
    }

    public function createFilename(){
        return rand(11111, 99999).'_'.
        Carbon::now()->format('mdY').'_'.
        Carbon::now()->format('his').'.'.$this->getFileType();
    }
}
