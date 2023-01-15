<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionController;
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

Route::middleware('auth')->group(function () {
    Route::get('/', [DashController::class, 'index'])->name('dashboard');
    Route::resource('product', ProductController::class);
    Route::resource('product-gallery', ProductGalleryController::class)->except(['edit', 'update', 'show']);
    Route::get('transaction/{id}/set-status', [TransactionController::class, 'setStatus'])->name('transaction.status');
    Route::resource('transaction', TransactionController::class);
});
