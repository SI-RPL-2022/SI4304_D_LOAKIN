<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;

use Session;


class UserAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $user = User::paginate(10);

            return view('Admin.Page.DataUser.User',  compact('user'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function update($id)
    {
        
        $user = User::find($id);

        $user->status     = 'Aktif';
        $user->save();

        return redirect(route('userdata.index'))->with(['success' => 'Account Berhasil di Aktifkan']);
    }

    public function view($id)
    {
        $user = User::find($id);
        return view('Admin.Page.DataUser.Show', compact('user'));
    }
}
