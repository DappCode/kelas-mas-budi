<?php

namespace App\Http\Controllers;  //--> Hanya membuat namespace

class LoginController extends Controller {

    public function index() 
    {
        $nama = 'Muamar Kadapi bin Kholil';
        $sekolah = 'SMKN 1 Mandau';
        $dataArray = ['Kamu', 'Tambah', 'Aku', 'Jadi', 'Sampeyan'];
        // || Cara pertama ||
        // return view('login.login', ['nama' => $nama]); 
        
        // || Cara Kedua ||
        // return view('login.login')->with('nama', $nama);

        // || Cara Ketiga ||
        return view('login.login', compact('nama', 'sekolah', 'dataArray'));
    }

}