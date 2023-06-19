<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowedBookController;
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

// Routes that's available for all
Route::get('/', [BookController::class, 'home'])->name('home.index');
Route::get('/pencarian', [BookController::class, 'search'])->name('home.search');
Route::get('/daftar-buku', [BookController::class, 'index'])->name('book.index');

// Routes that's only available for Librarians
Route::group(['middleware' => ['role:librarian']], function () {
    // Page Peminjaman Buku
    Route::get('/peminjaman', [BorrowedBookController::class, 'index'])->name('book.borrowing');
    Route::post('/peminjaman', [BorrowedBookController::class]);

    // Page Pengembalian Buku
    Route::get('/pengembalian', [BorrowedBookController::class, 'returning'])->name('book.returning');
    Route::patch('/pengembalian', [BorrowedBookController::class]);

    // Page Riwayat Peminjaman Buku
    Route::get('/riwayat', [BorrowedBookController::class, 'history'])->name('book.history');

    // Librarian Routes buat CRUD Buku
    Route::prefix('/book')->group(function () {
        Route::post('/create', [BookController::class, 'store']);
        Route::patch('/{book}/edit', [BookController::class, 'update']);
        Route::delete('/{book}/delete', [BookController::class, 'destroy']);
    });
});

// ---------------------------------------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
