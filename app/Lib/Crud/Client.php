<?php
namespace App\Lib\Crud;
use App\Http\Controllers\ClientsController;
use App\Models\Clients as Model;
use Illuminate\Support\Facades\Log;

class Client{
    public static function get(array $data){
        try{
            // dd($data);
            $result = Model::create($data);
            // return $result;
            dd($result);
            if($result){
                return $result->toArray();
            }else{
                return [];
            }
        }catch(\Exception $e){
            Log::error($e);
        }
    }
    // public static function show():array{
    //     try{
    //         $data = Model::all();
    //         if($data){
    //             return $data->toArray();
    //         }else{
    //             return [];
    //         }
    //     }catch(\Exception $e){
    //         Log::error($e);
    //     }
    // }
}