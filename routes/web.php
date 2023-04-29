<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BackendController;
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
Route::get('/single',[FrontendController::class,'single'])->name('single');


//Backend

Route::get('/admin',[BackendController::class,'index'])->name('index');
Route::get('/dashboard',[BackendController::class,'show_dashboard'])->name('show_dashboard');
Route::get('/logout',[BackendController::class,'logout'])->name('logout');

Route::post('/admin-dashboard',[BackendController::class,'dashboard'])->name('dashboard');
