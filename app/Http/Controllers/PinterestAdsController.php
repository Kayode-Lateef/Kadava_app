<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PinterestAd;


// use Symfony\Component\HttpClient\HttpClient;
// use GuzzleHttp\Client;

class PinterestAdsController extends Controller
{
    // public function pinterestAd(Request $request)
    // {
        // $client = HttpClient::create();
        // $response = $client->request('GET', '');

        // $content = $response->getBody();
        // $data = json_decode($content, true);



        // logger($data);

        // return view('pinterest');
    // }

    public function pinterestAds(Request $request){

        // $url = 'https://library.tiktok.com/ads?region=all&start_time=1664607600000&end_time=1713553418991&adv_name=&adv_biz_ids=&query_type=&sort_type=last_shown_date,desc';

        // $client = new Client();

        // $response = $client->get($url);

        // $data = $response->getBody()->getContents();

        // logger($data);
        // return view('pinterest');


        // Fetch ads with pagination
        $pinterestAds = PinterestAd::paginate(12);

        // Check if the request is an AJAX call
        if ($request->ajax()) {
            // Render the view with the next set of ads
            $view = view('partials.pinterest_ads', compact('pinterestAds'))->render();

            // Return the rendered HTML as a JSON response
            return response()->json(['html' => $view]);
        }

        // For initial page load, return the full view
        return view('pinterest', compact('pinterestAds'));


    }


}
