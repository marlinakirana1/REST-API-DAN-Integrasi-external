<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends controller
{
    public function index(){
        $nama = "Marlina Kirana";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "10 Agustus 2002";

        $data_array = array(
            "nama" => array(
                "Marlina", "Insania", "Kirana",     
            ),
        );

        return view('profil', compact('nama',
            'alamat',
            'tanggal_lahir',
            'data_array')
        );
    }
}