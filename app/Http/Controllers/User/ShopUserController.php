<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ShopUserController extends Controller
{
    public function index()
    {
        $produk = Produk::all();

        return view('User.Page.Shop.Shop', compact('produk'));
    }

    public function detail($id)
    {
        $produk = produk::find($id);

        return view('User.Page.Shop.Detail', compact('produk'));
    }
}
