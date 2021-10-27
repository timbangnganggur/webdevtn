<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
use App\Http\Controllers\General\ProfileTNController;
use App\Http\Controllers\General\AyoMakaryoController;
use App\Http\Controllers\General\ClbkController;
use App\Http\Controllers\General\ArtikelController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\UserController;

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
Route::get('/cari', [LandingPageController::class, 'cari'])->name('cari');
Route::get('/profile-tn', [ProfileTNController::class, 'index'])->name('profileTN');
Route::get('/ayo-makaryo', [AyoMakaryoController::class, 'index'])->name('ayoMakaryo');
Route::get('/ayo-makaryo/{id}', [AyoMakaryoController::class, 'show'])->name('ayoMakaryo.show');
Route::resource('/artikel', ArtikelController::class);

Route::get('/clbk', [ClbkController::class, 'index'])->name('clbk');
Route::get('/clbk/{id}', [ClbkController::class, 'show'])->name('detailClbk');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE COMPANY
Route::get('dashboard', [DashboardCompanyController::class, 'index'])->name('company.dashboard');

// ROUTE ADMIN
Route::middleware(['auth:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [DashboardAdminController::class, 'index'])->name('dashboard.index');
    Route::resource('info-loker', InfoLokerAdminController::class);
    Route::get('/info-loker/edit/{id}', [InfoLokerAdminController::class, 'edit'])->name('admin.infoLoker.edit');
    Route::resource('perusahaan', PerusahaanAdminController::class);
    Route::resource('daerah', DaerahAdminController::class);
    Route::resource('artikel', ArticleAdminController::class);
    Route::get('/artikel/edit/{slug}', [ArticleAdminController::class, 'edit'])->name('admin.artikel.edit');
    Route::put('/artikel/edit/{id}', [ArticleAdminController::class, 'update'])->name('admin.artikel.edit');
    // Route::get('/article/detail/{id}/{slug}',[ArticleAdminController::class,'show'])->name('article.show');
    Route::resource('role', RoleAdminController::class);
    Route::get('/password', [PasswordController::class, 'edit'])->name('password.edit');
    Route::patch('/password', [PasswordController::class, 'update'])->name('password.update');
    Route::get('/users/edit/', [UserController::class, 'changeUserStatus'])->name('admin.users.index');
    Route::get('/users', [UserController::class, 'index'])->name('admin.users.index');
});
