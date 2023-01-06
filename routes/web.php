<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes(
    ['register' => false]
);

Route::get('/', [DashController::class, 'index'])->middleware('auth')->name('dashboard');
Route::resource('product', ProductController::class);
