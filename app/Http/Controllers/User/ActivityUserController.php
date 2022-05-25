<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use Session;

use App\Models\Driver;
use App\Models\Order;
use App\Models\User;

class ActivityUserController extends Controller
{
    public function loakintrack()
    {
        $order = Order::with(['driver'])->orderBy('created_at', 'desc')->where('id_user', Auth::user()->id)->get();
            
        return view('User.Page.Activity.Tracking.activity', compact('order'));
    }

    public function viewtrack($no_order)
    {
        $account = User::where('id', Auth::user()->id)->firstOrFail();

        $order = Order::with(['driver'])->where('no_order', $no_order)->paginate(5);

        return view('User.Page.Activity.Tracking.tracking', compact('order', 'account'));
    }

}
