<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function create(Request $request){
        $frm_data = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'password' => 'required|confirmed|min:6'
        ]);

        $frm_data['password'] = bcrypt($frm_data['password']);

        $user = User::create($frm_data);

        auth()->login($user);

        return redirect('/')->with('success','Registration completed successfully!');
    }

    //Authenticate user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('success', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request){
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success','You have logged  out successfully!');
    }
}
