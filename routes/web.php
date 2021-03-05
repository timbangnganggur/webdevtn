<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
use App\Http\Controllers\Admin\DashboardAdminController;
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

Route::get('', [LandingPageController::class, 'index']);

Route::get('/', function () {
    return view('general.landingpage');
});

Route::get('/profileTN', function () {
    return view('general.profileTN');
})->name('profileTN');
Route::get('/ayoMakaryo', function () {
    return view('general.ayoMakaryo');
})->name('ayoMakaryo');
Route::get('/detailLowongan', function () {
    return view('general.detailLowongan');
});

Route::get('/clbk', function () {
    return view('general.clbk');
})->name('clbk');
Route::get('/detailClbk', function () {
    return view('general.detailClbk');
});


// ROUTE ADMIN
Route::prefix('admin')->group(function(){
    Route::get('dashboard', [DashboardAdminController::class, 'index']);
});
