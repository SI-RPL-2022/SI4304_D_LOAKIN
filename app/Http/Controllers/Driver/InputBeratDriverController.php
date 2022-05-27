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
}
