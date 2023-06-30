<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class adminController extends Controller
{
    //

    use AuthenticatesUsers;

    protected $redirectTo = '/admin/dashboard';

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect('/admin/dashboard');
        }

        // Authentication failed
        return redirect('/admin/dashboard');
    }

    public function showDashboard(){

        $users_count = DB::select("SELECT COUNT(*) AS user_count FROM users")[0]->user_count;
        $rooms_count = DB::select("SELECT COUNT(*) AS room_count FROM rooms")[0]->room_count;
        $bookings_count = DB::select("SELECT COUNT(*) AS booking_count FROM bookings")[0]->booking_count;

        return view("admin.dashboard",[
            'users_cnt' => $users_count,
            'bookings_cnt' => $bookings_count,
            'rooms_cnt' => $rooms_count
        ]);
    }

    public function showQueries(){
        return view("admin.userqueries");
    }

    public function showUser(){
        return view("admin.users",[
            'users' => User::all(),
            'index' => 0
        ]);
    }
    public function destroyUser(User $user){
        $filePath = public_path('upload/users/' . $user->image);

        // Delete the file if it exists
        if (File::exists($filePath)) {
            File::delete($filePath);
        }

        $user->delete();

        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function showBookings(){



        return view('admin.bookings',[
            'bookings' => Booking::all(),
            'index' => 0
        ]);
    }

    public function destroyBookings(Booking $booking){
        $booking->delete();

        return redirect()->back()->with('success', 'Booking deleted successfully');
    }


    protected function guard()
    {
        return auth()->guard('admin');
    }

}
