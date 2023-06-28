<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class userController extends Controller
{
    //
    public function create(Request $request){
        $frm_data = $request->validate([
            'name' => 'required',
            'email' => ['required','email'],
            'password' => 'required|confirmed|min:6',
            'image' => 'required'
        ]);

        $frm_data['password'] = bcrypt($frm_data['password']);

        $file = $request->file('image');

        if($file->move("upload/users",$file->getClientOriginalName())){

            // Get the original file name
            $filename = $file->getClientOriginalName();

            // Store the facility information in the database
            $frm_data['image'] = $filename;
        }

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

    public function updatePassword(Request $request){

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                // You can perform any additional actions after the password is updated,
                // such as logging in the user or sending a confirmation email.

                event(new PasswordReset($user));
            }
        );

        return $status == Password::PASSWORD_RESET
            ? redirect("/")->with("success",'Password Changed Successfully!')
            : back()->with("error","Error changing Password!");
    }

}
