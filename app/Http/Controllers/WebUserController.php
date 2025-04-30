<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class WebUserController extends Controller
{
    //
    public function beranda()
{
    return view('web_user.beranda'); // Menampilkan halaman beranda
}

public function kalkulator()
{
    return view('web_user.kalkulator'); // Menampilkan halaman kalkulator
}

}


