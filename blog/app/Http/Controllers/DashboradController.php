<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboradController extends Controller
{
   function ONdashboard(){
       return view('Dashboard');
   }
}
