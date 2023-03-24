<?php

use App\Models\Cart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\ProductController;

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
    return view('Home');
});

Route::resource('/product', ProductController::class);
Route::resource('/katalog', KatalogController::class);
Route::get('/cart', []);

Route::get('/cart', function () {
    return view('cart.index', [
        'carts' => Cart::all(),
    ]);
});
