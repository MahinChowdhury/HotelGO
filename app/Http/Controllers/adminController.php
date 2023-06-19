<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
        return view("admin.dashboard");
    }

    public function showQueries(){
        return view("admin.userqueries");
    }

    protected function guard()
    {
        return auth()->guard('admin');
    }

}
