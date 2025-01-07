<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home(){
        return view('HomePage');
    }

    public function About(){
        return view('AboutPage');
    }

    public function Contact(){
        return view('ContactPage');
    }
}
