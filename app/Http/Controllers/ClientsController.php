<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\Crud\Client;

class ClientsController extends Controller
{
    public function index(){
        return view('client');
    }

    public function store(Request $request){
        try{
            $data = $request->all();
            $result = Client::get($data);
            // return redirect('client');
        }catch(\Exception $e){

        }
    }
    // public function show(){
    //     try{
    //         $results = Client::show();
    //         return view('clientShow', compact('results'));
    //     }catch(\Exception $e){

    //     }
    // }
}
