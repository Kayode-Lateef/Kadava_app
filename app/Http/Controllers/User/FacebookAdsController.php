<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FacebookAd;


class FacebookAdsController extends Controller
{
    public function facebookAds(Request $request)
    {

        return view('user.facebook');

    }
}
