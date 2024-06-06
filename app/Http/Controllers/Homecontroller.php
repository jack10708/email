<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function home(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function profile(){
        return view('profile');
    }
}
