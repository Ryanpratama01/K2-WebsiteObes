<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 

class WebUserController extends Controller
{
    //
    public function beranda()
{
    // Kode untuk mengembalikan view beranda
    return view('web_user.beranda');
}

public function kalkulator()
{
    // Kode untuk mengembalikan view kalkulator
    return view('web_user.kalkulator');
}
}


