<?php

namespace App\Http\Controllers;

use App\Lib\Crud\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        return view('product');
    }
}
