<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\LatestNews;
use App\Http\Controllers\LatestNewsController;
use App\Models\FaqCategory;
use App\Models\Faq;


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
    $latestNews = LatestNews::all();
    return view('welcome', compact('latestNews'));
});

Route::get('/news', function () {
    $latestNews = LatestNews::all();
    return view('news', compact('latestNews'));
})->middleware(['auth', 'verified'])->name('news');

Route::get('/faq', function () {
    $faqCategories = FaqCategory::all();
    $faqs = Faq::all();
    return view('faq.index', compact('faqCategories', 'faqs'));
})->middleware(['auth', 'verified'])->name('faq.index');

Route::get('/faq/{faqCategory}', function (FaqCategory $faqCategory) {
    return view('faq.show', compact('faqCategory'));
})->name('faq.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/history', function () {
    $latestNews = LatestNews::all();
    return view('history', compact('latestNews'));
})->middleware(['auth', 'verified'])->name('history');

Route::post('/dashboard', [LatestNewsController::class, 'store']);

Route::delete('latestNews/{latest_news}', [LatestNewsController::class, 'destroy'])->name('latestNews.destroy');
Route::put('update/content/{latest_news}', [LatestNewsController::class, 'update'])->name('latestNews.update');
Route::put('update/title/{latest_news}', [LatestNewsController::class, 'updateTitle'])->name('latestNews.updateTitle');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
