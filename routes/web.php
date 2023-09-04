<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;


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
Route::get('/',[AuthController::class,'home']);

Route::get('/shop', function () {
    return view('shop');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/dashbord', function () {
    return view('dash/main');
});







Route::get('/signup',[AuthController::class,'signup']);
Route::POST('/signup',[AuthController::class,'add']);

Route::get('/login',[AuthController::class,'login']);
Route::POST('/login',[AuthController::class,'logs']);


Route::get('/insert',[ProductController::class,'insert']);
Route::POST('/padd',[ProductController::class,'add']);
Route::get('/dhome',[ProductController::class,'dhome']);
Route::get('/shop',[ProductController::class,'shop']);


