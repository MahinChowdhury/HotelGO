<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Rooms;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function invoice(Request $request){

        $tran_id = $request['tran_id'];

        $bookingId = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('bookingId')->first();

        $booking = DB::table('bookings')
            ->where('id', $bookingId->bookingId)
            ->get();

        $pdf = Pdf::loadView("invoice",[
            'bookings' => $booking
        ]);
        return $pdf->download("invoice.pdf");
    }
}
