<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class StorageController extends Controller
{
    protected $product;
    protected $request;

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
        
    }
}
