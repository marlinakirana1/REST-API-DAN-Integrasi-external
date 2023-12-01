<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Marlina";
        $alamat = "Kota Bandung";
        $tanggal_lahir = "10 Agustus 2002";
        $data_array = array(
            "nama" => array(
                "Marlina", "Wulan", "Resa",
            ),
        );

        return view('profil', compact('nama', 'alamat', 'tanggal_lahir', 'data_array'));
    }
}