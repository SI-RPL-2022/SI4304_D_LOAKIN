<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Session;

class OrderAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){

            return view('Admin.Page.DataOrder.Order');
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
