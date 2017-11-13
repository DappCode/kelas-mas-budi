<?php

namespace App\Http\Controllers;  //--> Hanya membuat namespace

use App\Student;

class LoginController extends Controller {

    public function index() 
    {

        // // Menampilkan data yang id nya 1
        // return Student::find(1);

        // Menampilkan apa yang ingin di tampilkan
        // return Student::where('age', 21)->orWhere('age', 25)->orWhere('id', 28)->get();

        // first = untuk satu saja yang di tampilkkan
        // get = Menampilkan semuanya atau lebih dari satu
        
        // return Student::all();  //--> untuk mendapatkan semua data yang di student

        // Insert Data
        // Student::create([
        //     'nama' => 'Kadapi',
        //     'address' => 'Jauh',
        //     'age' => 70,
        //     'email' => 'ibnukholil004@gmail.com'
        // ]);

        // Delete Data
        // $student = student::find(2);
        // if($student) {
        //     $student->delete();
        // }

        //Update Data
        $student2 = Student::find(3);
        if($student2) {
            $student2->update([
                'nama' => 'curanmor',
                'address' => 'Babakan Herang',
                'age' => 17,
                'email' => 'matsuryucorvinia00@gmail.com'
            ]);
        }



        // $nama = 'Muamar Kadapi bin Kholil';
        // $sekolah = 'SMKN 1 Mandau';
        // $dataArray = ['Kamu', 'Tambah', 'Aku', 'Jadi', 'Sampeyan'];


        // || Cara pertama ||
        // return view('login.login', ['nama' => $nama]); 
        
        // || Cara Kedua ||
        // return view('login.login')->with('nama', $nama);

        // || Cara Ketiga ||
        return view('login.login', compact('nama', 'sekolah', 'dataArray'));
    }

}