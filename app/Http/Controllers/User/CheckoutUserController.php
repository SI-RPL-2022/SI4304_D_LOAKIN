<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use Session;
use App\Models\User;
use App\Models\Order;

class CheckoutUserController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->paginate(5);
        $order = Order::where('status', 'On Process')
                ->where('id_user', Auth::user()->id)
                ->orderBy('id','DESC')
                ->paginate(1);

        return view('User.Page.Order.checkout', compact('user', 'order'));
    }

    public function update($id)
    {
        $order = Order::find($id);

        $order->status     = 'Fix Order';
        $order->save();

        return redirect(route('status.index'))->with(['success' => 'Account Berhasil di Aktifkan']);
    }
}
