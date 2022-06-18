<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use Session;

class ProfileUserController extends Controller
{
    public function index()
    {   
            return view('User.Page.Profile.Profile');
    }

    
}
