<?php

use App\Http\Controllers\GalleryController;
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

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\GalleryController::class, 'index'])->name('index');
    Route::post('/status/{gallery}', [App\Http\Controllers\GalleryController::class, 'status'])->name('gallery.status');
    Route::put('/', [App\Http\Controllers\GalleryController::class, 'search'])->name('gallery.search');

    Route::get('/galleries/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('create')->middleware('viewed.galleries');
    Route::get('/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'show'])->name('show');
    Route::post('/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'show'])->name('viewed.galleries');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');
    Route::post('/galleries', [App\Http\Controllers\GalleryController::class, 'store']);
    Route::get('/galleries/edit/{gallery}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('edit');
    Route::put('/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'update'])->name('update');
    Route::get('/galleries/{gallery}/delete', [App\Http\Controllers\GalleryController::class, 'warning'])->name('warning');
    Route::delete('/galleries/{gallery}/delete', [App\Http\Controllers\GalleryController::class, 'delete'])->name('delete');
    Route::get('/profile/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('user');
    Route::get('/profile/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('profileEdit');
    Route::put('/profile/{user}', [App\Http\Controllers\UserController::class, 'update']);
});
