<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    

    public function dashboard (){
        return view('layouts.dashboard');
    }

    public function regular (){
        return view('layouts.regular');
    }

    public function login (){
        return view('connexion');
    }

    public function register (){
        return view('inscription');
    }


}
