<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('auth.register');
    }

    public function registerAction(Request $request){
        $request->validate([
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required|min:8'
        ]);

        User::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password) ,
            'role' => 'user'
        ]);

        
        return redirect('/')->with('sukses', 'berhasil membuat akun');
    }

    function login(){
        return view('auth.login');
    }

    function loginAction(Request $request){
      $datalogin =  $request->validate([
            'email' => 'required|email',
            'password'=> 'required'
        ]);

        if(Auth::attempt($datalogin)){
            $request->session()->regenerate();

            return redirect('/obat')->with('sukses', 'berhasil login');
        }else{
            return back()->with('gagal', 'email atau password salah');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/')->with('sukses', 'berhasil logout');
    }
}
