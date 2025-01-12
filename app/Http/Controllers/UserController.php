<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function dashboard()
    {
        $user = auth()->user();

        return view('user.index', compact('user'));
    }

    public function pricing()
    {
        return view('user.pricing');
    }


    public function profile()
    {
        return view('user.profile');
    }
}
