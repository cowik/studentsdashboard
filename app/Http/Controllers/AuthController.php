<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt($request->only('username','password'))){
            return redirect('/home');
        } 
        return redirect('/login')->with('failed', 'Invalid Email and Password !');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
