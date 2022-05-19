<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class InputBeratDriverController extends Controller
{
    public function index()
    {
        if(Session::has('driver')){
            return view('Driver.Page.Berat.InputBerat');
        }
        else{
            return redirect()->route('logindriver');
        }
    }
}
