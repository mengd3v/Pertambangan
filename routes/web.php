<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])
    ->name('index');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('profile', [\App\Http\Controllers\SiteController::class, 'profile'])
        ->middleware('password.confirm')
        ->name('profile');

    Route::get('pesanan', [\App\Http\Controllers\PemakaianController::class, 'index'])->name('pesanan');
    Route::get('pesanan/create', [\App\Http\Controllers\PemakaianController::class, 'create'])->name('pesanan.create');
    Route::post('pesanan/store', [\App\Http\Controllers\PemakaianController::class, 'store'])->name('pesanan.store');
    Route::get('pesanan/terima/{id}', [\App\Http\Controllers\PemakaianController::class, 'terima'])->name('pesanan.terima');
    Route::get('pesanan/batalkan/{id}', [\App\Http\Controllers\PemakaianController::class, 'destroy'])->name('pesanan.batal');
});
