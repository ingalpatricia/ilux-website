<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/what-we-do', function () {
    return view('what-we-do');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/login', function () {
    return view('log-in');
});

Route::get('/register', function () {
    return view('regform');
});

Route::get('/offer', function () {
    return view('offer');
});

Route::get('/offer-instagram', function () {
    return view('offer-instagram');
});

Route::get('/offer-facebook', function () {
    return view('offer-facebook');
});

Route::get('/offer-twitter', function () {
    return view('offer-twitter');
});

Route::get('/offer-youtube', function () {
    return view('offer-youtube');
});

Route::get('/offer-tiktok', function () {
    return view('offer-tiktok');
});

Route::get('/order-fb-event-1k', function () {
    return view('order-view/order-fb-event-1k');
});

Route::get('/order-fb-LikesAndFollow-1k', function () {
    return view('order-view/order-fb-LikesandFollow-1k');
});

Route::get('/order-fb-LikesAndFollow-10k', function () {
    return view('order-view/order-fb-LikesandFollow-10k');
});

Route::get('/order-fb-LikesAndFollow-100k', function () {
    return view('order-view/order-fb-LikesandFollow-100k');
});

Route::get('/order-fb-live-1k', function () {
    return view('order-view/order-fb-live-1k');
});

Route::get('/order-fb-members-1k', function () {
    return view('order-view/order-fb-members-1k');
});

Route::get('/order-fb-reacts-1k', function () {
    return view('order-view/order-fb-reacts-1k');
});

Route::get('/order-fb-views-1k', function () {
    return view('order-view/order-fb-views-1k');
});

Route::get('/order-ig-follow-1k', function () {
    return view('order-view/order-ig-follow-1k');
});

Route::get('/order-ig-follow-10k', function () {
    return view('order-view/order-ig-follow-10k');
});

Route::get('/order-ig-follow-100k', function () {
    return view('order-view/order-ig-follow-100k');
});

Route::get('/order-ig-likes-1k', function () {
    return view('order-view/order-ig-likes-1k');
});

Route::get('/order-ig-likes-10k', function () {
    return view('order-view/order-tiktok-likes-10k');
});

Route::get('/order-tiktok-follow-1k', function () {
    return view('order-view/order-tiktok-follow-1k');
});

Route::get('/order-tiktok-follow-10k', function () {
    return view('order-view/order-tiktok-follow-10k');
});

Route::get('/order-tiktok-follow-100k', function () {
    return view('order-view/order-tiktok-follow-100k');
});

Route::get('/order-tiktok-likes-1k', function () {
    return view('order-view/order-tiktok-likes-1k');
});

Route::get('/order-tiktok-views-1k', function () {
    return view('order-view/order-tiktok-views-1k');
});

Route::get('/order-tiktokph-views-1k', function () {
    return view('order-view/order-tiktokph-views-1k');
});

Route::get('/order-tiktokph-ads-1k', function () {
    return view('order-view/order-tiktokph-ads-1k');
});

Route::get('/order-twitter-likes-1k', function () {
    return view('order-view/order-twitter-likes-1k');
});

Route::get('/order-twitter-follow-1k', function () {
    return view('order-view/order-twitter-follow-1k');
});

Route::get('/order-twitter-retweet-1k', function () {
    return view('order-view/order-twitter-retweet-1k');
});

Route::get('/order-yt-likes-1k', function () {
    return view('order-view/order-yt-likes-1k');
});

Route::get('/order-yt-subs-1k', function () {
    return view('order-view/order-yt-subs-1k');
});

Route::get('/order-yt-views-1k', function () {
    return view('order-view/order-yt-views-1k');
});



//protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {


    Route::get('/dashboard', function () {
        return view('home');
    });

    Route::get('/service-list', function () {
        return view('service-list');
    });

    Route::get('/order', function () {
        return view('order-view/order-form');
    });

    Route::post('order/form-submit', [App\Http\Controllers\TurboSMMController::class, 'addOrder']);
});
