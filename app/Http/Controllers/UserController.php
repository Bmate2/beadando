<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function LoginPage() {
        return view('login');
    }
    public function RegisterPage(){
        return view('register');
    }

    public function login(){
        return view('lego.index')->with('success', 'Sikeres bejelentkezés');;
    }
    public function register(){
        return redirect('login')->with('success', 'Sikeres regisztráció, mostmár bejelentkezhet.');;

    }
}
