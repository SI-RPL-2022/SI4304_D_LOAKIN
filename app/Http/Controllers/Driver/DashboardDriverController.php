<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Driver;

use Session;

class DashboardDriverController extends Controller
{
    public function index()
    {
        if(Session::has('driver')){

            $order = Order::with(['user'])
                    ->where('id_driver', session()->get('driver')->id)
                    ->where('status', 'Driver Menuju Ke Lokasi')
                    ->paginate(5);

            return view('Driver.Page.Dashboard.Dashboard', compact('order'));
        }
        else{
            return redirect()->route('logindriver');
        }
    }

    public function view($no_order)
    {
        $order = Order::with(['user'])->where('no_order', $no_order)->paginate(5);

        return view('Driver.Page.PickUp.Detail', compact('order'));
    }
}
