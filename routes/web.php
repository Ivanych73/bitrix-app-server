<?php

use App\Http\Controllers\BitrixController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BitrixController::class)->prefix('/bitrix')->name('bitrix.')->group(function () {
    Route::match(['get', 'post'], '/view', 'view')->name('view');
    Route::match(['get', 'post'], '/install', 'install')->name('install');
});

URL::forceScheme('https');
