<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $authUser = User::updateOrCreate(
                ['email' => $googleUser->email],
                [
                    'name' => $googleUser->name,
                    'google_id' => $googleUser->id,
                    'avatar' => $googleUser->avatar
                    // Removed the password field
                ]
            );

            Auth::login($authUser);

            return redirect()->route('home');
        } catch (Exception $e) {
            // Consider logging the exception and redirecting with an error message
            \Log::error($e->getMessage());
            return redirect()->route('login')->withErrors('Login failed, please try again.');
        }
    }
}
