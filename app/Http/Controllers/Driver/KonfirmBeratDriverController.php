<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class KonfirmBeratDriverController extends Controller
{
    public function index()
    {
        if(Session::has('driver')){
            return view('Driver.Page.Berat.KonfirmBerat');
        }
        else{
            return redirect()->route('logindriver');
        }
    }
}
