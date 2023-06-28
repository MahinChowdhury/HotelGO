<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Rooms;
use Illuminate\Http\Request;

class newController extends Controller
{
    //
    public function index(){
        return view('index',[
            'rooms' => Rooms::latest()->take(3)->get()
        ]);
    }
    public function rooms(){
        return view('rooms',[
            'rooms' => Rooms::all()
        ]);

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
