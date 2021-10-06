<?php
namespace App\Lib\Crud;
use App\Http\Controllers\ProductController;
use App\Models\Product as Model;
use Illuminate\Support\Facades\Log;

class Product{
    public static function get(array $data){
        try{
            // dd($data);
            $result = Model::create($data);
            return $result;
            // dd($result);
            // if($result){
            //     return $result->toArray();
            // }else{
            //     return [];
            // }
        }catch(\Exception $e){
            Log::error($e);
        }
    }

}