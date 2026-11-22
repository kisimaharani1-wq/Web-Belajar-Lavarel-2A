<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // cek email dan password
    public function cek(Request $request) {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();
            session(['email' => $user->email]);
            session(['logged_in' => true]);

            return redirect('/dashboard');
        }

        return redirect('/')->with('error', 'Email atau password salah');
    }

    // hapus semua session lalu kembali ke login
    public function logout(Request $request) {
        $request->session()->flush();

        return redirect('/');
    }
}