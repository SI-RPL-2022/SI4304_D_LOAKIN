<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\AdminLoginVerifyRequest;

use App\Models\Driver;
use Session;

class LoginDriverController extends Controller
{
    public function logindriver()
    {
            return view('Driver.Authentifikasi.login');
    }

    public function proses_logindriver(request $request)
    {
        $username = request('username');
        $password = request('password');

        $driver = Driver::where('username', $username)->first();
        
        if($driver==null)
        {
            $request->session()->flash('error', 'Invalid Username');
            
            return redirect(route('logindriver'));
        }
        
        else
        {
            if($password == $driver -> password)
            {
                session()->put('driver',$driver);
                //$request->session()->put('username', $request->Username);
                return redirect(route('driver.index'));
            }
            else if($request->Password!=$driver->password)
            {
                return view('Driver.Authentifikasi.login')->with(['success' => 'Invalid Password']);
            }
        }
    }

    public function logoutdriver(Request $request)
    {
        $user = Auth::user();
        $request->session()->forget('driver', $user);
        return Redirect('logindriver');
    }
}
