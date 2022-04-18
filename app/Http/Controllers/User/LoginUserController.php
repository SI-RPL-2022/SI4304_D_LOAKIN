<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;

class LoginUserController extends Controller
{
    public function loginuser()
    {
        return view('User.Authentifikasi.login');
    }

    public function proses_loginuser(Request $request)
    {
        $kredensil =[
            'email'     => $request->input('email'),
            'password'  => $request->input('password'),
        ];
            if (Auth::attempt($kredensil)) {
                if(Auth::User()->status == 'Belum Aktif')
                {
                    return redirect(route('loginuser'))->with('success', 'Gagal Login Account Anda Masih Tahap Verifikasi Admin');
                }
                else
                {
                    $user = Auth::User();
                    $request->session()->put('user', $user);
                    return redirect(route('home.index'));
                } 
            }
            else{
                return redirect(route('loginuser'))->with('success', 'Gagal Login Username dan Password Tidak Sesuai');
            }
    }

    public function logoutuser(Request $request)
    {
        $user = Auth::logout();
        $request->session()->forget('user', $user);
        return Redirect(route('home.index'));
    }
}
