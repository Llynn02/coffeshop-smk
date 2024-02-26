<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function manageaccount() {
        return view('authenticate/manage-account'); //untuk views halaman tambah akun
    }

    public function createaccount(Request $request){
        //fillable untuk penambahan akun di tabel users
        User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), //hash password agar terjaga kerahasiannya
            'remember_token' => Str::random(60), //untuk membuat string acak sebagai token authentikasi
            'role' => $request->role,
        ]);
        return redirect('/manageaccount');
    }

    public function login(){
        return view('authenticate/login'); //tampilan login form
    }

    public function loginauth(Request $request){
        //sistem authentikasi yang merequest nilai email dan password dari tabel users
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/'); //jika berhasil login akan dikirim ke halaman admin
        }else{
            return \redirect('login'); //jika gagal login akan dikembalikan ke halaman login form
    }
    }

    public function logout(){
        //jika ada user yang terdeteksi login akan bisa mengakses fitur logout
        Auth::logout();
        return \redirect('/login'); //lalu akan dikembalikan ke halaman login
    }
}