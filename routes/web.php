<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
use App\Http\Controllers\CategoryProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Frontend
Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('cart',[FrontendController::class,'cart'])->name('cart');
//Danh muc trang chu
Route::get('/danh_muc_san_pham/{category_id}',[CategoryProduct::class,'show_category_home'])->name('show_category_home');
//san pham chi tiet
Route::get('/chi_tiet_san_pham/{product_id}',[ProductController::class,'details_product'])->name('details_product');
//cart


//Backend

Route::get('/admin',[BackendController::class,'index'])->name('index');
Route::get('/dashboard',[BackendController::class,'show_dashboard'])->name('show_dashboard');
Route::get('/logout',[BackendController::class,'logout'])->name('logout');

Route::post('/admin-dashboard',[BackendController::class,'dashboard'])->name('dashboard');


//Category Product
Route::get('/add_category_product',[CategoryProduct::class,'add_category_product'])->name('add_category_product');
Route::get('/all_category_product',[CategoryProduct::class,'all_category_product'])->name('all_category_product');
Route::get('/edit_category_product/{category_product_id}',[CategoryProduct::class,'edit_category_product'])->name('edit_category_product');
Route::get('/delete_category_product/{category_product_id}',[CategoryProduct::class,'delete_category_product'])->name('delete_category_product');

Route::post('/save_category_product',[CategoryProduct::class,'save_category_product'])->name('save_category_product');
Route::post('/update_category_product/{category_product_id}',[CategoryProduct::class,'update_category_product'])->name('update_category_product');

//Product
Route::get('/add_product',[ProductController::class,'add_product'])->name('add_product');
Route::get('/all_product',[ProductController::class,'all_product'])->name('all_product');
Route::get('/edit_product/{product_id}',[ProductController::class,'edit_product'])->name('edit_product');
Route::get('/delete_product/{product_id}',[ProductController::class,'delete_product'])->name('delete_product');

Route::post('/save_product',[ProductController::class,'save_product'])->name('save_product');
Route::post('/update_product/{product_id}',[ProductController::class,'update_product'])->name('update_product');

//cart
Route::post('/save_cart',[CartController::class,'save_cart'])->name('save_cart');
Route::get('/cart',[CartController::class,'cart'])->name('cart');
Route::get('/delete_cart/{rowId}',[CartController::class,'delete_cart'])->name('delete_cart');
Route::get('/delete_all_cart',[CartController::class,'delete_all_cart'])->name('delete_all_cart');
Route::post('/update_cart/{rowId}',[CartController::class,'update_cart'])->name('update_cart');

//Checkout
Route::get('/login_checkout',[CheckoutController::class,'login_checkout'])->name('login_checkout');
Route::post('/add_customer',[CheckoutController::class,'add_customer'])->name('add_customer');
Route::get('/checkout',[CheckoutController::class,'checkout'])->name('checkout');
Route::post('/save_checkout',[CheckoutController::class,'save_checkout'])->name('save_checkout');
Route::get('/payment',[CheckoutController::class,'payment'])->name('payment');

