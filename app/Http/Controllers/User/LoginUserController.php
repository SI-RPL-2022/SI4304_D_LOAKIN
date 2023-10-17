<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite; //tambahkan library socialite

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

    //tambahkan script di bawah ini
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
  
  
    //tambahkan script di bawah ini 
    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if($user != null){
                Auth::login($user);
                $request->session()->put('user', $user);
                return redirect()->route('home.index');
            }else{
                User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now(),
                    'telepon'           => 0,
                    'alamat'            => "-",
                    'status'            => "Aktif"
                ]);
        
                
                $user = Auth::user();
                $request->session()->put('user', $user);
                return redirect(route('home.index'));
            }

        } catch (Exception $e) {
            dd($e->getMessage());
        }


    }
    
}
