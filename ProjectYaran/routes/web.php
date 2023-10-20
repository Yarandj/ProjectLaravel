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

Route::get('/', [GalleryController::class, 'index']);

Auth::routes();

Route::get('/', [App\Http\Controllers\GalleryController::class, 'index'])->name('index');
Route::get('/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'show'])->name('show');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/galleries/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('create');
Route::post('/galleries', [App\Http\Controllers\GalleryController::class, 'store'])->name('index');
Route::get('/galleries/edit/{gallery}', [App\Http\Controllers\GalleryController::class, 'edit'])->name('edit');
Route::put('/galleries/{gallery}', [App\Http\Controllers\GalleryController::class, 'update'])->name('update');


