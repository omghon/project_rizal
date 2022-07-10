<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.registrasi');
    }

    public function store(Request $request)
    {
        $kredensial = $request->validate([
            'name' => 'required|string|min:5',
            'username' => 'required|string|min:5',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
        ]);

        $kredensial['password'] = Hash::make($kredensial['password']);
        $user = User::create($kredensial);
        return redirect('/login')->with('berhasil', 'Berhasil mendaftar, silahkan login');
    }
}
