<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\GuestReview;
use App\Http\Controllers\GuestbookController;
use App\Models\GBook;
use App\Http\Controllers\BookController;


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
    $guestReviews = GuestReview::all();
    $gBook = GBook::all();
    return view('welcome', compact('guestReviews', 'gBook'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/history', function () {
    $guestReviews = GuestReview::all();
    return view('history', compact('guestReviews'));
})->middleware(['auth', 'verified'])->name('history');

Route::post('/review', [GuestbookController::class, 'store']);

Route::delete('history/{review}', [GuestbookController::class, 'destroy'])->name('review.destroy');
Route::put('history/{review}', [GuestbookController::class, 'update'])->name('review.update');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
