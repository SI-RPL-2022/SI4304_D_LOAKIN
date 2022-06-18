<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Driver;

use Session;

class OrderLoakInAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){

            $order = Order::with(['user'])->orderBy('created_at', 'desc')->where('status', '!=', 'On Process')->paginate(10);

            return view('Admin.Page.DataOrder.Order', compact('order'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function view($no_order)
    {
        $order = Order::with(['driver'])->where('no_order', $no_order)->paginate(5);

        return view('Admin.Page.DataOrder.Detail', compact('order'));
    }

    public function fixorder($id)
    {
        if(Session::has('admin')){
            $order = Order::find($id);

            $order->status     = 'Fix Order';
            $order->save();

            return redirect(route('orderadmin.index'))->with(['success' => 'Pesanan Berhasil di Approval']);
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function pilihdriver($id)
    {
        if(Session::has('admin')){
            $order = Order::find($id);

            $driver = Driver::all();

            return view('Admin.Page.DataOrder.PilihDriver',  compact('driver', 'order'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function submitdriver($id, Request $request)
    {
        if(Session::has('admin')){

            $request->validate([
                'update_driver'               => 'required',
            ]);

            $order = Order::find($id);

            $order->id_driver       = $request->update_driver;
            $order->status          = "Berhasil Menemukan Driver";
            $order->save();

            return redirect(route('orderadmin.index'))->with(['success' => 'Berhasil Mendapatkan Driver']);
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    
}
