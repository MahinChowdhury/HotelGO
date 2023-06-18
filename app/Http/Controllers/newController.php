<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function rooms(){
        return view('rooms');
    }
    public function contact(){
        return view('contact');
    }
    public function facilities(){
        return view('facilities');
    }
    public function about(){
        return view('about');
    }
}
