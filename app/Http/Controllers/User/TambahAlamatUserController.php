<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahAlamatUserController extends Controller
{
    public function index()
    {
        return view('User.Page.Profile.tambahalamat');
    }
    public function lihat()
    {
        return view('User.Page.Profile.lihatalamat');
    }
}
