<?php

namespace App\Http\Controllers;

use App\Models\userQuery;
use Illuminate\Http\Request;

class userQueryController extends Controller
{
    //
    public function storeQuery(Request $request){

        $frm_data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        userQuery::create($frm_data);

        return redirect('/contact')->with('success','Message sent successfully!');
    }

    public function showAllQueries(){
        return view("admin.userqueries",[
            'queries' => userQuery::all()
        ]);
    }
}
