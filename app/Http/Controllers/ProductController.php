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
            $fname = $request->image->store('/public');
            // dd($fname);
            $data['image'] =$fname;
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
