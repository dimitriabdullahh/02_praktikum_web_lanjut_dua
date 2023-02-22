<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }

    public function about(){
        echo "Nama  : Dimitri Abdullah \n";
        echo "Kelas : 2F-TI \n";
        echo "NIM   : 2141720249 \n";
    }

    public function articles($id) {
        echo " Halaman Artikel Dengan ID ". $id;
    }
    
}
