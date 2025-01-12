<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Symfony\Component\HttpClient\HttpClient;


class FacebookAdsController extends Controller
{
    public function facebookAds(Request $request)
    {
        // Create a new Guzzle HTTP client
        // $client = new Client();
        // $response = $client->get('https://www.facebook.com/ads/library/?active_status=all&ad_type=all&country=NG&q=‍&search_type=keyword_unordered&media_type=all', [
        //     'headers' => [
        //         'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
        //     ],
        // ]);

        // Use DomCrawler to parse the HTML
        // $crawler = new Crawler($response->getBody()->getContents());
        // $ads = $crawler->filter('div.xh8yej3')->each(function (Crawler $node) {
        //     return $node->text(); // Adjust this to target the specific parts of the ad you need
        // });

        // Log or process the ads data as needed
        // logger($ads);

        $client = new Client();
        $url = 'https://www.facebook.com/ads/library/?active_status=all&ad_type=all&country=NG&q=‍&search_type=keyword_unordered&media_type=all';

        // Request the URL and get the response
        $response = $client->request('GET', $url, [
            'headers' => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.3',
            ],
        ]);

        // Get the body content of the response
        $content = $response->getBody()->getContents();

        // Optional: If expecting JSON, decode it
        $allAds = json_decode($content, true);

        // Log the decoded data
        logger($allAds);

        return view('facebook');
    }
}
