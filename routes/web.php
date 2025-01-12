<?php

use App\Http\Controllers\User\PinterestAdsController as UserPinterestAdController;
use App\Http\Controllers\User\FacebookAdsController as UserFacebookAdController;
use App\Http\Controllers\User\TiktokAdsController as UserTiktokAdController;

use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\FacebookAdsController;
use App\Http\Controllers\PinterestAdsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TiktokAdsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FrontPageController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Public Routes
Route::get('/', [FrontPageController::class, 'home'])->name('home');
Route::get('/pricing', [FrontpageController::class, 'pricing'])->name('pricing');
Route::get('/privacy-and-policy', [FrontpageController::class, 'privacy'])->name('privacy');
Route::get('/terms-and-conditions', [FrontpageController::class, 'terms'])->name('terms-and-conditions');
Route::get('/contact-us', [FrontpageController::class, 'contact'])->name('contact');




// Google Authentication Routes
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);


// Subscription Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/subscribe', [SubscriptionController::class, 'redirectToGateway'])->name('pay');
    // Other routes that require authentication
    Route::get('/payment/callback', [SubscriptionController::class, 'handleGatewayCallback']);

});

// Route::post('/subscribe', [SubscriptionController::class, 'redirectToGateway'])->name('pay');
// Route::get('/payment/callback', [SubscriptionController::class, 'handleGatewayCallback']);


Auth::routes();


//Language Translation
Route::get('index/{locale}', [AdminController::class, 'lang'])->name('locale');;


// User Routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'profile'])->name('user.profile');
    Route::get('/upgrade', [UserController::class, 'pricing'])->name('user.pricing');

    Route::get('/confirmation', [SubscriptionController::class, 'showConfirmationPage'])->name('confirmation.page');


    Route::get('/facebook', [UserFacebookAdController::class, 'facebookAds'])->name('user.facebook');
    Route::get('/tiktoks', [UserTiktokAdController::class, 'tiktokAds'])->name('user.tiktok');
    Route::get('/pinterest', [UserPinterestAdController::class, 'pinterestAds'])->name('user.pinterest');

    Route::get('/snapchat', [UserTiktokAdController::class, 'snapchat'])->name('user.snapchat');
    Route::get('/snapchat', [UserTiktokAdController::class, 'snapchat'])->name('user.snapchat');



});


//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\AdminController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\AdminController::class, 'updatePassword'])->name('updatePassword');

Route::get('{any}', [App\Http\Controllers\AdminController::class, 'index'])->name('index');



// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/user-list', [AdminController::class, 'userList'])->name('admin.userList');


    Route::get('/pinterest', [PinterestAdsController::class, 'pinterestAds'])->name('pinterest');

    Route::get('/facebook', [FacebookAdsController::class, 'facebookAds'])->name('facebook');

    Route::get('/tiktok', [TiktokAdsController::class, 'tiktokAds'])->name('tiktok');




});













