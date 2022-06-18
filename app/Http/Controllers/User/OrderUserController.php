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
        $user   = User::where('id', Auth::user()->id)->paginate(5);
        $alamat = Order::with(['user'])->where('status', 'Pilih Alamat')->get();

        return view('User.Page.Order.order', compact('user', 'alamat'));
    }

    public function orderbaru()
    {
        $user   = User::where('id', Auth::user()->id)->paginate(5);

        return view('User.Page.Order.orderbaru', compact('user'));
    }

    public function neworder(Request $request)
    {
        $user_id = Auth::user()->id;
        $numberorder = Str::random(6);

        $request->validate([
            'alamat'                => 'required',
        ]);

        $order = new Order;
        $order->alamat      = $request->alamat;
        $order->id_user     = $user_id;
        $order->save();

        return redirect(route('order.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }

    public function order(Request $request, $id)
    {
        $user_id = Auth::user()->id;
        $numberorder = Str::random(6);

        $request->validate([
            'tipeweight'                => 'required',
            'desc'                      => 'required',
            'weight'                    => 'required',
            'payment'                   => 'required',
        ]);

        $order = Order::find($id);

        $order->id_user     = $user_id;
        $order->no_order    = $numberorder;
        $order->tipeweight  = $request->tipeweight;
        $order->items       = $request->desc;
        $order->weight      = $request->weight;
        $order->status      = 'On Process';
        $order->payment     = $request->payment;
        $order->save();

        return redirect(route('checkout.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }

    public function ordernew(Request $request, $id)
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
        $order->status      = 'On Process';
        $order->payment     = $request->payment;
        $order->save();

        return redirect(route('checkout.index'))->with(['success' => 'Tambah Produk Berhasil']);
    }
    
}
