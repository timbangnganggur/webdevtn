<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Zoom\MeetingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/meetings', [MeetingController::class, 'list'])->name('zoom.index');
Route::get('/index-create', [MeetingController::class, 'edit'])->name('zoom.create');
Route::get('/index-update/{id}', [MeetingController::class, 'edit2'])->name('zoom.update');

Route::post('/create-meetings', [MeetingController::class, 'create'])->name('create-zoom');
Route::get('/meetings/{id}', [MeetingController::class, 'get'])->where('id', '[0-9]+')->name('zoom.meetings');
Route::post('/meetings-update/{id}', [MeetingController::class, 'update'])->where('id', '[0-9]+')->name('update-zoom');
Route::delete('/meetings/{id}', [MeetingController::class, 'delete'])->where('id', '[0-9]+')->name('delete-zoom');
