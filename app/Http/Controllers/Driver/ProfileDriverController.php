<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\Driver;
use Session;

class ProfileDriverController extends Controller
{
    public function index()
    {   
        if(Session::has('driver')){
            $account = Driver::where('id', session()->get('driver')->id)->firstOrFail();
            
            return view('Driver.Page.Profile.Profile', compact('account'));
        }
        else{
            return redirect()->route('logindriver');    
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'username'  => 'required',
            'nama'      => 'required',
            'alamat'    => 'required',
            'nomor'     => 'required',
        ]);

        $user_id = session()->get('driver')->id;
        $account = Driver::findOrFail($user_id);

        $account->username  = $request->username;
        $account->name      = $request->nama;
        $account->alamat    = $request->alamat;
        $account->nomortelepon     = $request->nomor;
        $account->save();

        return redirect(route('profile.index'));
    }
}
