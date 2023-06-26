<?php

namespace App\Http\Controllers;

use App\Models\Facility;
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
        return view('facilities',[
            'facilities' => Facility::latest()->paginate(4)
        ]);
    }
    public function about(){
        return view('about');
    }
}
