<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Driver;

use Session;

class DriverAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $driver = Driver::paginate(10);

            return view('Admin.Page.DataDriver.Driver',  compact('driver'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

}
