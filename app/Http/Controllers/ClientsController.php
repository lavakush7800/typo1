<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index(){
        return view('client');
    }

    public function store(Request $request){
        try{}catch(){
            
        }
    }
}
