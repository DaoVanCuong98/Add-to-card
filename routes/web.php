<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\IVRController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('trangchu', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::post('coupon', [CouponsController::class, 'store'])->name('coupon.store');  
Route::delete('coupon', [CouponsController::class, 'destroy'])->name('coupon.destroy');

Route::get('totalmoney', [CouponsController::class, 'store'])->name('totalmoney');
Route::post('vnpay_payment', [CouponsController::class, 'vnpay_payment']);

Route::get('dathang', [CustomerController::class, 'customer']);
Route::post('dathang', [CustomerController::class, 'postcustomer']);












