<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function register()
    {
        return view('form');
    }

    public function welcome()
    {
        return view('sapa');
    }

    public function welcome_post(Request $request)
    {
        $namaawal = $request['firstname'];
        $namaakhir = $request['lastname'];
        $nama = "$namaawal $namaakhir";
        return view('sapa', ['nama' => $nama]);
    }
}
