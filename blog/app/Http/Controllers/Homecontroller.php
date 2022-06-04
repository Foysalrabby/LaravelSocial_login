<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{

     function homepage(Request $request){
        $agerloinvalu= $request->session()->has('token');
        if($agerloinvalu == true){
            return redirect('/dashboard');
        }
        else{
            return view('Home');
        }
     }
}
