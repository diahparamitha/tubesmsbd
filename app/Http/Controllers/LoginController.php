<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function regist()
    {
        return view('page.regist', [
            'title' => 'CBT : Registrasi'
        ]);
    }

    public function registerAkun(Request $request)
    {
        $regist = $request->validate([
            'name' => 'required | max:50',
            'NipNisn' => 'required',
            'password' => 'required | min:8',
        ]);

        $regist['password'] = bcrypt($regist['password']);    //Meng-enkripsi password

        User::create($regist);
        return redirect('/')->with('regist', 'Registrasi kamu berhasil! Silahkan login');
    }

    public function login()
    {
        return view('page.login', [
            'title' => 'CBT : Login'
        ]);
    }

    public function loginAkun(Request $request)
    {
        $auth = $request->validate([
            'NipNisn' => 'required',
            'password' => 'required | min:8',
        ]);

        if (Auth::attempt($auth)) {  //Jika data yang diinput sesuai
            $request->session()->regenerate();

            return redirect()->intended('/beranda'); //diarahkan ke halaman dashboard
        }

        return back()->with('login', 'login gagal!'); //gagal login balik ke halaman login lagi dan tampilkan pesan kesalahan
    }

     public function beranda()
    {
        return view('page.beranda', [
            'title' => 'CBT : Halaman',
        ]);
    }

    public function logoutAkun(Request $request) //untuk logout
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');   //diarahkan ke halaman login
    }
}
