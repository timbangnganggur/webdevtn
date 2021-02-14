<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
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
});
Route::get('/ayoMakaryo', function () {
    return view('general.ayoMakaryo');
});
Route::get('/detailLowongan', function () {
    return view('general.detailLowongan');
});

Route::get('/clbk', function () {
    return view('general.clbk');
});
