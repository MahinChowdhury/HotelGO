<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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
        return view("admin.dashboard");
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

    protected function guard()
    {
        return auth()->guard('admin');
    }

}
