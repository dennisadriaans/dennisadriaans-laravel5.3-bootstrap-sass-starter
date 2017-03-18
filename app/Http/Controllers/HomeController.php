<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function returnHomeView()
    {
        return view('home');
    }

    public function returnBootstrap()
    {
        return view('bootstrap');
    }
}
