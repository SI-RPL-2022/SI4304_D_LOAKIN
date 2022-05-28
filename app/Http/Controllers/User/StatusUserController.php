<?php

namespace App\Http\Controllers\USer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Order;

class StatusUserController extends Controller
{
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->paginate(5);
        $order = Order::where('id_user', Auth::user()->id)
                ->orderBy('id','DESC')
                ->paginate(1);

        return view('User.Page.Status.status', compact('user', 'order'));
    }
}
