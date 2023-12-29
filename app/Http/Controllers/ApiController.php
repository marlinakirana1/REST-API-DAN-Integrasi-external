<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class ApiController extends Controller
{
    Public function produk_index(){
        $produk = produk::get();
        return response()->json($produk);
    }
    public function produk_store(Request $Request){
        produk::insert([
            'produk'    =>$request->api_produk,
            'price'     =>$request->api_price,
            'stock'     =>$request->api_stock,
        ]);

        $response = array (
            'responseCode'     =>'00',
            'responseStatus'    =>'Success'
        );
        return response()->json($response);
    }
}