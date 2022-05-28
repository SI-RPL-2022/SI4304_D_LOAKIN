<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
use Session;


class CartUserController extends Controller
{
    public function index()
    {
            $cart = cart::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);

            $tot = cart::where('id_user', Auth::user()->id)
            ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
            ->join('produks', 'produks.id', '=', 'carts.id_produk')
            ->sum(cart::raw('produks.harga * carts.jumlah'));

            return view('User.Page.Cart.Cart', compact('cart', 'tot'));

    }

    public function create($id)
    {

            $produk = Produk::find($id)->id;
            $user_id = Auth::user()->id;

            $pro =Produk::find($id);
            
                $cart = new cart;

                $cart->id_produk = $produk;
                $cart->id_user = $user_id;
                $cart->jumlah = '1';
                
                $cart->save();
                Session::put('cart', $cart);

                $pro->stok_produk = $pro->stok_produk-1;
                $pro->save();

                return redirect(route('cart.index'))->with(['success' => 'Delete Cart Berhasil']);
            

    }

    public function delete($id)
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect(route('cart.index'))->with(['success' => 'Delete Cart Berhasil']);
    }
}
