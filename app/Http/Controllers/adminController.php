<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function showLoginform(){
        return view('admin.adminLogin');
    }

    public function authenticate(Request $request){
        $frm_data = $request->validate([
            'admin_name'=> 'required',
            'admin_pass' => 'required'
        ]);


    }

}
