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




Auth::routes();

// Google Authentication Routes
Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);


// Subscription Routes
Route::middleware(['auth'])->group(function () {
    Route::post('/subscribe', [SubscriptionController::class, 'redirectToGateway'])->name('pay');
    // Other routes that require authentication
    Route::get('/payment/callback', [SubscriptionController::class, 'handleGatewayCallback']);

});





// User Routes
Route::group(['middleware' => ['auth', 'check.banned']], function () {
    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/profile', [UserController::class, 'showProfile'])->name('user.profile');
    Route::post('/profile/update', [UserController::class, 'updateProfile'])->name('user.profile.update');
    Route::post('/profile/security', [UserController::class, 'updatePassword'])->name('user.profile.security');
    Route::get('/upgrade', [UserController::class, 'pricing'])->name('user.pricing');

    Route::get('/payment', [UserController::class, 'payment'])->name('user.payment');

    Route::post('/cancel-subscription', [UserController::class, 'cancelSubscription'])->name('user.cancelSubscription');


    Route::get('/invoice/{id}/download', [SubscriptionController::class, 'downloadInvoice'])->name('user.invoice.download');
    Route::get('/confirmation', [SubscriptionController::class, 'showConfirmationPage'])->name('confirmation.page');


    Route::get('/facebook', [UserFacebookAdController::class, 'facebookAds'])->name('user.facebook');
    Route::get('/tiktoks', [UserTiktokAdController::class, 'tiktokAds'])->name('user.tiktok');
    Route::get('/pinterest', [UserPinterestAdController::class, 'pinterestAds'])->name('user.pinterest');

    Route::get('/snapchat', [UserTiktokAdController::class, 'snapchat'])->name('user.snapchat');
    Route::get('/snapchat', [UserTiktokAdController::class, 'snapchat'])->name('user.snapchat');




});


// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/profile', [AdminController::class, 'showProfile'])->name('admin.profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('admin.profile.update');
    Route::post('/profile/password', [AdminController::class, 'updatePassword'])->name('admin.profile.password');


    Route::get('/user-list', [AdminController::class, 'userList'])->name('admin.userList');

    Route::post('/add-user', [AdminController::class, 'addUser'])->name('admin.addUser');
    Route::post('/update-user', [AdminController::class, 'updateUser'])->name('admin.updateUser');


    Route::post('/create-subscription', [AdminController::class, 'createSubscription'])->name('admin.createSubscription');
    Route::post('/update-subscription', [AdminController::class, 'updateSubscription'])->name('admin.updateSubscription');
    Route::get('/cancel-subscription/{id}', [AdminController::class, 'cancelSubscription'])->name('admin.cancelSubscription');


    Route::post('/toggle-subscription/{id}', [AdminController::class, 'toggleSubscription'])->name('admin.toggleSubscription');


    Route::get('/ban-user/{id}', [AdminController::class, 'banUser'])->name('admin.banUser');
    Route::get('/unban-user/{id}', [AdminController::class, 'unbanUser'])->name('admin.unbanUser');
    Route::delete('/remove-user/{id}', [AdminController::class, 'removeUser'])->name('admin.removeUser');



    Route::get('/pinterest', [PinterestAdsController::class, 'pinterestAds'])->name('pinterest');
    Route::get('/facebook', [FacebookAdsController::class, 'facebookAds'])->name('facebook');
    Route::get('/tiktok', [TiktokAdsController::class, 'tiktokAds'])->name('tiktok');




});


//Language Translation
Route::get('index/{locale}', [AdminController::class, 'lang'])->name('locale');;

Route::get('{any}', [App\Http\Controllers\AdminController::class, 'index'])->name('index');








