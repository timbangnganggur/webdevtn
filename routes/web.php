<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
use App\Http\Controllers\General\ProfileTNController;
use App\Http\Controllers\General\AyoMakaryoController;
use App\Http\Controllers\General\ClbkController;
use App\Http\Controllers\General\ArtikelController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\InfoLokerAdminController;
use App\Http\Controllers\Admin\PerusahaanAdminController;
use App\Http\Controllers\Admin\DaerahAdminController;
use App\Http\Controllers\Admin\ArticleAdminController;
use App\Http\Controllers\Admin\RoleAdminController;

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

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::get('/profile-tn', [ProfileTNController::class, 'index'])->name('profileTN');
Route::get('/ayo-makaryo', [AyoMakaryoController::class, 'index'])->name('ayoMakaryo');
Route::get('/ayo-makaryo/{id}', [AyoMakaryoController::class, 'show'])->name('ayoMakaryo.show');
Route::resource('/artikel', ArtikelController::class);

Route::get('/clbk', [ClbkController::class, 'index'])->name('clbk');
Route::get('/clbk/{id}', [ClbkController::class, 'show'])->name('detailClbk');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE COMPANY
Route::get('dashboard', [DashboardCompanyController::class, 'index'])->name('company.dashboard');

// ROUTE ADMIN
Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
    Route::resource('info-loker', InfoLokerAdminController::class);
    Route::resource('perusahaan', PerusahaanAdminController::class);
    Route::resource('daerah', DaerahAdminController::class);
    Route::resource('artikel', ArticleAdminController::class);
    Route::get('/article/detail/{id}/{slug}',[ArticleAdminController::class,'show'])->name('article.show');
    Route::resource('role', RoleAdminController::class);
});