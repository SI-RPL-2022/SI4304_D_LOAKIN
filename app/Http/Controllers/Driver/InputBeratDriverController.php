<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Driver;

use Session;


class InputBeratDriverController extends Controller
{
    public function index($id)
    {
        if(Session::has('driver')){

            $produk = Order::find($id);

            $order = Order::with(['user'])
                    ->where('id', $id)
                    ->paginate(5);

            

            return view('Driver.Page.Berat.InputBerat', compact('produk','order'));
        }
        else{
            return redirect()->route('logindriver');
        }
    }

    public function inputdetail($id, Request $request)
    {
        if(Session::has('driver')){
            $request->validate([
                'item_asli'               => 'required',
                'berat_asli'               => 'required',
            ]);
            
            $order = Order::find($id);

            $order->item_asli       = $request->item_asli;
            $order->berat_asli      = $request->berat_asli;
            $order->total_harga     = $request->berat_asli*3000;
            $order->status          = "Pesanan Selesai - Pembayaran";
            $order->save();

            return redirect(route('inputberat.konf', $id));
        }
        else{
            return redirect()->route('logindriver');
        }
    }

    public function konf($id)
    {
        if(Session::has('driver')){

            $produk = Order::find($id);

            $order = Order::with(['user'])
                    ->where('id', $id)
                    ->paginate(5);

            return view('Driver.Page.Berat.KonfirmBerat', compact('order'));
        }
        else{
            return redirect()->route('logindriver');
        }
    }

}
