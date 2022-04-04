<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

use Session;

class DashboardAdminController extends Controller
{
    public function index()
    {
        if(Session::has('admin')){
            $produk = Produk::count();
            return view('Admin.Page.Dashboard.Dashboard', compact('produk'));
        }
        else{
            return redirect()->route('loginadmin');
        }
    }
}
