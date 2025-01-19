<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinterestAd;



class TiktokAdsController extends Controller
{
    public function tiktokAds(Request $request)
    {

        // Fetch ads with pagination
        $pinterestAds = PinterestAd::paginate(12);

        // Check if the request is an AJAX call
        if ($request->ajax()) {
            // Render the view with the next set of ads
            $view = view('user.partials.pinterest_ads', compact('pinterestAds'))->render();

            // Return the rendered HTML as a JSON response
            return response()->json(['html' => $view]);
        }

        return view('user.tiktok', compact('pinterestAds'));

    }
}
