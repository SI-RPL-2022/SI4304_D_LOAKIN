<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class ShopUserController extends Controller
{
    public function index(Request $request)
    {
        $keyword=$request->get('search');
        $produk = Produk::where('stok_produk', '>=', '1')->get();

        if($keyword !=null){
            $produk = Produk::where('stok_produk', '>=', '1')->where('nama_produk', 'like', '%'.$keyword.'%')->paginate(10);
        }

        return view('User.Page.Shop.Shop', compact('produk'));
    }

    public function detail($id)
    {
        $produk = produk::find($id);

        return view('User.Page.Shop.Detail', compact('produk'));
    }
}
