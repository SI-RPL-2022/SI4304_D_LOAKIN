<?php

namespace App\Http\Controllers\Driver;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Driver;

use Session;

class TrackingAlamatDriverController extends Controller
{
    public function index($no_order)
    {
        if(Session::has('driver')){

            $order = Order::with(['user'])
                    ->where('id_driver', session()->get('driver')->id)
                    ->where('no_order', $no_order)
                    ->paginate(5);

            return view('Driver.Page.Track.trackinguser', compact('order'));
        }
        else{
            return redirect()->route('logindriver');
        }
    }
}
