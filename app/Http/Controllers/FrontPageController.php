<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function home()
    {
        // Your logic to display the homepage

        return view('frontend.index');
    }

    public function pricing()
    {
        // Your logic to display the homepage

        return view('frontend.pricing');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }


    public function terms()
    {
        return view('frontend.terms-and-conditions');
    }

    public function contact()
    {
        return view('frontend.contact-us');
    }
}
