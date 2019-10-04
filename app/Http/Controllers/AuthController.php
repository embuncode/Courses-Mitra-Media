<?php

namespace App\Http\Controllers;

use Auth\Models\User;
Use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if(!Session::get('/login')){
            return redirect('/login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('admin/home');
        }
    }

    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request){

        // $username = $request->username;
        // $password = $request->password;

        // $data = \App\Models\User::where('username',$username)->first();
        // if($data){ //apakah username tersebut ada atau tidak
        //     if(Hash::check($password,$data->password)){
        //         Session::put('username',$data->username);
        //         Session::put('email',$data->email);
        //         Session::put('login',TRUE);
        //         return redirect('/home');
        //     }
        //     else{
        //         return redirect('/login')->with('alert','Username atau Password, Salah !');
        //     }
        // }
        // else{
        //     return redirect('/login')->with('alert','Username dan Password, Diisi!');
        // }

        if(Auth::attempt($request->only('username','password')))
        {
            return redirect('/home');
        } 
        return redirect('/login');
    }

    public function logout(){
        Session::flush();
        return redirect('/login')->with('alert','Kamu sudah logout');
    }
}
