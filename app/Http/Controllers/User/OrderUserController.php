<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Session;
use App\Models\User;
use App\Models\Order;

class OrderUserController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->paginate(5);
        return view('User.Page.Order.order', compact('user'));
    }

    public function order(Request $request)
    {
        $user_id = Auth::user()->id;
        $numberorder = Str::random(6);

        $request->validate([
            'tipeweight'                => 'required',
            'desc'                      => 'required',
            'weight'                    => 'required',
            'payment'                   => 'required',
        ]);

        $order = new Order;
        $order->id_user     = $user_id;
        $order->no_order    = $numberorder;
        $order->tipeweight  = $request->tipeweight;
        $order->items       = $request->desc;
        $order->weight      = $request->weight;
        $order->payment     = $request->payment;
        $order->save();

        return redirect(route('checkout.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }
}
