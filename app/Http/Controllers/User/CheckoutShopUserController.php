<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderShop;
use App\Models\cart;
use Illuminate\Support\Facades\Auth;
$numberorder = Str::random(5);
use Session;


class CheckoutShopUserController extends Controller
{
    public function index()
    {
        return view('User.Page.CheckoutShop.checkout');
    }

    public function get_checkout()
    {
            $user = User::where('id', Auth::user()->id)->get();

            $trans = cart::with(['produk'])
            ->where('id_user', Auth::user()->id)
            ->paginate(5);

            $tot = cart::where('id_user', Auth::user()->id)
            ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
            ->join('produks', 'produks.id', '=', 'carts.id_produk')
            ->sum(cart::raw('produks.harga * carts.jumlah'));

            return view('User.Page.CheckoutShop.checkout', compact('trans', 'tot',  'user'));

    }

    public function create(Request $request)
    {
            $cart =  Cart::count();        
            $user_id = Auth::user()->id;
            $cr = cart::with(['produk'])->where('id_user', Auth::user()->id)->paginate(5);
            $numberorder = Str::random(5);

            $tot = cart::where('id_user', Auth::user()->id)
                ->select('produks.harga', 'produks.id as id_produk', 'produks.harga', 'carts.jumlah', 'carts.id as id')
                ->join('produks', 'produks.id', '=', 'carts.id_produk')
                ->sum(cart::raw('produks.harga * carts.jumlah'));

            foreach($cr as $c)
            {
                $ordershop = new OrderShop;
                $ordershop->id_user = $user_id;
                $ordershop->no_order = $numberorder;
                $ordershop->total = $tot;
                $ordershop->id_produk = $c->id_produk;
                $ordershop->id_user = $user_id;
                $ordershop->jumlah =  $c->jumlah;
                $ordershop->no_order = $numberorder;
                $ordershop->save();

                $c->delete();
            }

            return redirect(route('bayar.index', $cr->id));

    }
}
