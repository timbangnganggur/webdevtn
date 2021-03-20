<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
use App\Http\Controllers\General\ProfileTNController;
use App\Http\Controllers\General\AyoMakaryoController;
use App\Http\Controllers\General\ClbkController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\InfoLokerAdminController;

use App\Http\Controllers\Company\DashboardCompanyController;

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

Route::get('', [LandingPageController::class, 'index'])->name('home');
Route::get('/profileTN', [ProfileTNController::class, 'index'])->name('profileTN');
Route::get('/ayoMakaryo', [AyoMakaryoController::class, 'index'])->name('ayoMakaryo');
Route::get('/ayoMakaryo/{id}', [AyoMakaryoController::class, 'show'])->name('ayoMakaryo.show');

Route::get('/clbk', [ClbkController::class, 'index'])->name('clbk');
Route::get('/clbk/{id}', [ClbkController::class, 'show'])->name('detailClbk');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE COMPANY
Route::get('dashboard', [DashboardCompanyController::class, 'index'])->name('company.dashboard');

// ROUTE ADMIN
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [DashboardAdminController::class, 'index']);
    Route::resource('info-loker', InfoLokerAdminController::class);
});
