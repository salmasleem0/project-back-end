<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\modiratorcontroller;

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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('women',[postcontroller::class,'index']);
Route::get('men',  [postcontroller::class,'men']);
Route::get('sale',[postcontroller::class,'sale']);
Route::get('search',[postcontroller::class,'search']);
//--------------------------cart-------------------------------------------
Route::get('products', [postcontroller::class, 'productList'])->name('products.list');
Route::get('cart', [postcontroller::class, 'cartList'])->name('cart.list');
Route::post('cart', [postcontroller::class, 'addToCart'])->name('cart.store');
Route::post('update-cart',[postcontroller::class, 'updateCart'])->name('cart.update');
Route::post('remove', [postcontroller::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [postcontroller::class, 'clearAllCart'])->name('cart.clear');
 //___________________________________dash_____________________________
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
Route::get('/modirator',[modiratorcontroller::class,'index'])->name('modirator');
Route::get('/login',[DashboardController::class,'login']);
Route::get('user',[Usercontroller::class,'index'])->name('user');
Route::get('showusers',[Usercontroller::class,'showusers']);
Route::delete('/commands/{commandId}/{carId}/delete','DashboardController@deleteUserCommands')->name('command.delete');
 Route::resources([
    "posts"=>DashboardController::class,
]);
 
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('isAdmin');
 