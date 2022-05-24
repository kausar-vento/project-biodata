<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index()
    {
        return view('admin.form_login');
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8'
        ]);

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->intended('/home-admin');
        }   
        return back()->with('gagalLogin', 'Anda Gagal Melakukan Login ');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/login-admin');
        // $request->session()->invalidate();
 
        // $request->session()->regenerateToken();
    }

    public function adminRegister()
    {
        return view('admin.form_register');
    }

    public function registerAdmin(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email:dns|string|unique:users',
            'password' => 'required|min:8|string'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);

        User::create($validateData);
        return redirect('/login-admin')->with('success', 'Akun Register Berhasil Dibuat');

    }
}
