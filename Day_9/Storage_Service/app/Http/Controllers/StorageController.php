<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;
use Carbon\Carbon;
use Redirect;

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
        return view('index')->with([
            'product' => $this->product->all()
        ]);
    }

    public function add(){
        return view('add');
    }

    public function add_save(){
        $fileName = $this->createFilename();

        $saveFile = Storage::disk('public')
            ->putFileAs( 
                'products', // Folder 
                $this->request->file, // Uploaded file photo
                $fileName // Filename
            );

        $this->request->merge(['photo' => $fileName]); 
        
        $this->product->create(
            $this->request->except('_token', 'file')
        );

        return Redirect::route('index')->with([
            'success' => 'Product has been created!'
        ]);
    }

    public function getFileType(){;
        return $this->request->file('file')->extension();
    }

    public function createFilename(){
        return rand(11111, 99999).'_'.
        Carbon::now()->format('mdY').'_'.
        Carbon::now()->format('his').'.'.$this->getFileType();
    }
}
