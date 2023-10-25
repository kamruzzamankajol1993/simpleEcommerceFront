<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\FrontController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/clear', function() {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('config:cache');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return redirect()->back();
});

Route::controller(CartController::class)->group(function () {

Route::get('/cart', 'cart')->name('cart.index');
Route::post('/cart/add', 'add')->name('cart.store');
Route::post('/cart/update', 'update')->name('cart.update');
Route::post('/cart/remove', 'remove')->name('cart.remove');
Route::post('/cart/clear', 'clear')->name('cart.clear');

Route::get('/buyNow/{id}', 'buyNow')->name('buyNow');


});
Route::controller(CheckOutController::class)->group(function () {


    Route::get('/success/{id}', 'success')->name('success');


    Route::get('/checkOut', 'checkOut')->name('checkOut');


    Route::post('/confirmOrder', 'confirmOrder')->name('confirmOrder');



    // Checkout (URL) User Part
Route::get('/bkash/pay','payment')->name('url-pay');
Route::get('/bkash/create','createPayment')->name('url-create');
Route::get('/bkash/callback','callback')->name('url-callback');

// Checkout (URL) Admin Part
Route::get('/bkash/refund','getRefund')->name('url-get-refund');
Route::post('/bkash/refund','refundPayment')->name('url-post-refund');



});

Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('index');


    Route::get('/comboProduct', 'comboProduct')->name('comboProduct');
    Route::get('/singleProduct', 'singleProduct')->name('singleProduct');


    Route::get('/productDetail/{id}', 'productDetail')->name('productDetail');




    Route::get('/returnPolicy', 'returnPolicy')->name('returnPolicy');
    Route::get('/privacyPolicy', 'privacyPolicy')->name('privacyPolicy');
    Route::get('/contact', 'contact')->name('contact');


    Route::post('/message', 'message')->name('message');
    Route::post('/review', 'review')->name('review');

    Route::get('/checkout', 'checkout')->name('checkout');

});

// Route::get('/', function () {
//     return view('welcome');
// });
