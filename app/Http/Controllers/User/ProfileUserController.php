<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use Session;

class ProfileUserController extends Controller
{
    public function index()
    {   
            $account = User::where('id', Auth::user()->id)->firstOrFail();
            
            return view('User.Page.Profile.Profile', compact('account'));

    }

    public function update(Request $request)
    {
        $request->validate([
            'nama'      => 'required',
            'alamat'    => 'required',
            'nomor'     => 'required',
        ]);

        $user_id = Auth::user()->id;
        $account = User::findOrFail($user_id);

        $account->name          = $request->nama;
        $account->alamat        = $request->alamat;
        $account->telepon  = $request->nomor;
        $account->save();

        return redirect(route('account.index'));
    }
}
