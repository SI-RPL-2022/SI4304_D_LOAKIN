<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use App\Models\Alamat;
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

    public function updateimg(Request $request)
    {

        $request->validate([
            'foto' => 'mimes:jpg,jpeg,png',
        ]);

        $user_id = Auth::user()->id;
        $account = User::findOrFail($user_id);
        
            if ($files = $request->file('foto')) {
                $destinationPath = 'fotouser/';
                $file = $request->file('foto');
                // upload path  
    
                $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                    $files->getClientOriginalExtension();
                $pathImg = $file->storeAs('', $profileImage);
                $files->move($destinationPath, $profileImage);
                $account->foto = $pathImg;
            }
            $account->save();

        return redirect(route('account.index'));
    }

    public function alamat($id)
    {   
        $account = User::find($id);
            
        return view('User.Page.Profile.tambahalamat', compact('account'));

    }

    public function tambah(Request $request, $id)
    {
        $request->validate([
            'alamat'      => 'required',
        ]);

        $account = User::findOrFail($id);
        $alamat = new Alamat;

        $alamat->alamat        = $request->alamat;
        $alamat->id_user       = $id;
        $alamat->save();

        return redirect(route('account.index'));
    }

    public function ubah($id)
    {   
        $account = User::find($id);
        $alamat = Alamat::with(['user'])->where('id_user', Auth::user()->id)->get();
            
        return view('User.Page.Order.ubahalamat', compact('account', 'alamat'));

    }
}
