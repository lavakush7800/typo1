<?php

namespace App\Http\Controllers;

use App\Lib\Crud\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(){
        return view('product');
    }
    public function store(Request $request){
        try{
            $data = $request->all();
            // dd($data);
            $result = Product::get($data);
            // return redirect('product');
        }catch(\Exception $e){

        }
    }
    public function show(){
        try{
            $results = Product::show();
            return view('productShow', compact('results'));
        }catch(\Exception $e){

        }
    }
}
