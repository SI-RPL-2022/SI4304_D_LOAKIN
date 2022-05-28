<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\OrderShop;
use App\Models\Driver;

use Session;

class OrderShopAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){

            $order = OrderShop::with(['user'])->orderBy('created_at', 'desc')->paginate(10);

            return view('Admin.Page.DataOrderShop.Order', compact('order'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }

    public function view($no_order)
    {
        if(Session::has('admin')){
            $order = OrderShop::with(['produk'])->where('no_order', $no_order)->paginate(5);

            return view('Admin.Page.DataOrderShop.Detail', compact('order'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
