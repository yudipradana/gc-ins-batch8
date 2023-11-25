<?php

namespace App\Http\Controllers;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function welcome()
    {
        // Ambil data dari sesi
        $data = [
            'nama_depan' => session('nama_depan'),
            'nama_belakang' => session('nama_belakang')
        ];
        return view('welcome', compact('data'));
    }

}