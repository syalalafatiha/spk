<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //menampilkan form login
    public function showLoginForm()
    {
        return view('login.login');
    }

    //proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if (Auth::user()->role === 'admin') {
                return redirect()->intended('admin/dashboard');
            } elseif (Auth::user()->role === 'user') {
                return redirect()->intended('user/dashboard');
            }
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ]);
    }

    //proses logout
    public function logout(Request $request)
    {
        Auth::logout();  // Keluar dari sesi pengguna

        $request->session()->invalidate();  // Hapus sesi
        $request->session()->regenerateToken();  // Regenerasi token CSRF

        return redirect('/');  // Arahkan pengguna ke halaman utama setelah logout
    }
}
