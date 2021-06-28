<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\General\LandingPageController;
use App\Http\Controllers\General\ProfileTNController;
use App\Http\Controllers\General\AyoMakaryoController;
use App\Http\Controllers\General\ClbkController;

use App\Http\Controllers\AuthController;

use App\Http\Controllers\Admin\DashboardAdminController;
use App\Http\Controllers\Admin\InfoLokerAdminController;
use App\Http\Controllers\Admin\PerusahaanAdminController;
use App\Http\Controllers\Admin\DaerahAdminController;
use App\Http\Controllers\Admin\ArticleAdminController;

use App\Http\Controllers\Company\DashboardCompanyController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImageUploadController;

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
Route::get('/Article', [ArticleController::class, 'index'])->name('articles');

Route::get('image-upload', [ ImageUploadController::class, 'imageUpload' ])->name('image.upload');
Route::post('image-upload', [ ImageUploadController::class, 'imageUploadPost' ])->name('image.upload.post');

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
});

Route::get('view_clear', function () {

    \Artisan::call('view:clear');

    dd("view 3 is cleared");

});

Route::get('view_cache', function () {

    \Artisan::call('view:cache');

    dd("view 3 is cleared");

});

Route::get('config_cache', function () {

    \Artisan::call('config:cache');

    dd("view 3 is cleared");

});

Route::get('config_clear', function () {

    \Artisan::call('config:clear');

    dd("view 3 is cleared");

});

Route::get('dump_autoload', function () {

   shell_exec('composer dump-autoload');

    dd("view 3 is cleared");

});
