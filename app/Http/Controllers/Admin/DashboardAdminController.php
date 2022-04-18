<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Driver;
use App\Models\Order;

use Session;

class DashboardAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $produk = Produk::count();
            $user = User::count();
            $driver = Driver::count();
            $order = Order::count();
            return view('Admin.Page.Dashboard.Dashboard', compact('produk', 'user', 'driver', 'order'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
