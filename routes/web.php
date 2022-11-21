<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WalletController;
use App\Http\Controllers\BuyController;

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

Route::post('/user/wallet', [WalletController::class, 'deposit'])->middleware('api-key');

Route::post('/user/buy', [BuyController::class, 'buy'])->middleware('api-key');

