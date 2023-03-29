<?php

use App\Http\Controllers\BitrixController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BitrixController::class)->prefix('/bitrix')->group(function(){
    Route::match(['get', 'post'], '/view', 'view');
    Route::match(['get', 'post'], '/install', 'install');
});

