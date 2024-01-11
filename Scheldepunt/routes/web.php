<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\LatestNews;
use App\Http\Controllers\LatestNewsController;
use App\Models\FaqCategory;
use App\Models\Faq;
use App\Http\Controllers\FaqController;

Route::get('/', function () {
    $latestNews = LatestNews::all();
    return view('welcome', compact('latestNews'));
});


//FAQ
Route::get('/faq', function () {
    $faqCategories = FaqCategory::all();
    $faqs = Faq::all();
    return view('faq.index', compact('faqCategories', 'faqs'));
})->middleware(['auth', 'verified'])->name('faq.index');

Route::get('/faq/{faqCategory}', function (FaqCategory $faqCategory) {
    return view('faq.show', compact('faqCategory'));
})->name('faq.show');

Route::get('/faq/edit/{faq}', function (Faq $faq) {
    $faqCategories = FaqCategory::all();
    return view('faq.edit', compact('faq', 'faqCategories'));
})->name('faq.edit');

Route::delete('faq/destoy/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');
Route::put('update/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');



//NEWS
Route::get('/news', function () {
    $latestNews = LatestNews::all();
    return view('news', compact('latestNews'));
})->middleware(['auth', 'verified'])->name('news');


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
