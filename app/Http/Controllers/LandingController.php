<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function getLandingPage(){
        return view('layout');        
    }

    public function getAboutPage(){
        return view('about');   
    }
}
