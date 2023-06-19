<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/daftar-buku', function () {
    return view('daftar-buku');
})->middleware(['auth', 'verified'])->name('daftar-buku');

Route::get('/book-detail', function () {
    return view('book-detail');
})->middleware(['auth', 'verified'])->name('book-detail');

Route::get('/history', function () {
    return view('history');
})->middleware(['auth', 'verified'])->name('history');

Route::get('/peminjaman', function () {
    return view('peminjaman');
})->middleware(['auth', 'verified'])->name('peminjaman');

Route::get('/pengembalian', function () {
    return view('pengembalian');
})->middleware(['auth', 'verified'])->name('pengembalian');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
