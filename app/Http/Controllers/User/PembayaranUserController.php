<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\OrderShop;
use Session;

class PembayaranUserController extends Controller
{
    public function bayar($id)
    {
        $bayar = OrderShop::findOrFail($id);
        return view('User.Page.Pembayaran.pembayaran', compact('bayar'));
    }
    public function updateimg($id, Request $request)
    {
            $request->validate([
                'foto' => 'mimes:jpg,jpeg,png',
            ]);

            $user_id = Auth::user()->id;

            $bayar = OrderShop::find($id);
            
                if ($files = $request->file('foto')) {
                    $destinationPath = 'buktipembayaran/';
                    $file = $request->file('foto');
                    // upload path  
        
                    $profileImage = basename($request->file('foto')->getClientOriginalName(), '.' . $request->file('foto')->getClientOriginalExtension()) . "." .
                        $files->getClientOriginalExtension();
                    $pathImg = $file->storeAs('', $profileImage);
                    $files->move($destinationPath, $profileImage);
                    $bayar->buktibayar = $pathImg;
                }

                $bayar->status = 'Sudah Upload Bukti Pembayaran';
                $bayar->save();

            return redirect()->route('activityloakin.shoptrack');
    }
}
