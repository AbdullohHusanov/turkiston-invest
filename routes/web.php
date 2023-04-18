<?php

use Illuminate\Support\Facades\Route;

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

Illuminate\Support\Facades\Auth::routes([]);

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);

Route::get('/clients', [App\Http\Controllers\HomeController::class, 'index'])->name('clients');

Route::get('/simple', [\App\Http\Controllers\SimpleController::class, 'index']);
Route::get('/repost', [\App\Http\Controllers\SimpleController::class,'repost']);

Route::get('/{locale?}', [\App\Http\Controllers\MainController::class, 'indexSetLocale']);

Route::get('locale/{locale}', [\App\Http\Controllers\MainController::class, 'indexChangeLocale']);
