<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PinterestAd;



class PinterestAdsController extends Controller
{
    public function pinterestAds(Request $request)
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

        return view('user.pinterest', compact('pinterestAds'));

    }
}
