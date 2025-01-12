<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\TiktokAd;


class TiktokAdsController extends Controller
{
    public function tiktokAds(Request $request)
    {

        return view('user.tiktok');

    }
}
