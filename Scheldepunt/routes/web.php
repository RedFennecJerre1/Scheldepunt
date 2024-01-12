<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\LatestNews;
use App\Http\Controllers\LatestNewsController;
use App\Models\FaqCategory;
use App\Models\Faq;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FaqCategoryController;


Route::get('/', function () {
    return view('about');
})->name('/');

Route::get('/welcome', function () {
    $latestNews = LatestNews::all();
    return view('welcome', compact('latestNews'));
})->name('/welcome');



//FAQ
Route::get('/faq', function () {
    $faqCategories = FaqCategory::all();
    $faqs = Faq::all();
    return view('faq.index', compact('faqCategories', 'faqs'));
})->middleware(['auth', 'verified'])->name('faq.index');

Route::get('/faq/add', function () {
    $faqCategories = FaqCategory::all();
    $faqs = Faq::all();
    return view('faq.add', compact('faqCategories'));
})->middleware(['auth', 'verified'])->name('faq.add');

Route::get('/faq/plus', function () {
    $faqCategories = FaqCategory::all();
    return view('faq.plus', compact('faqCategories'));
})->middleware(['auth', 'verified'])->name('faq.plus');

Route::get('/faq/{faqCategory}', function (FaqCategory $faqCategory) {
    return view('faq.show', compact('faqCategory'));
})->name('faq.show');

Route::get('/faq/edit/{faq}', function (Faq $faq) {
    $faqCategories = FaqCategory::all();
    return view('faq.edit', compact('faq', 'faqCategories'));
})->name('faq.edit');

Route::delete('faqCategory/destroy/{faqCategory}', [FaqCategoryController::class, 'destroy'])->name('faqCategory.destroy');
Route::put('update/faqCategory/{faqCategory}', [FaqCategoryController::class, 'update'])->name('faqCategory.update');
Route::post('/add/faqCategory', [FaqCategoryController::class, 'store']);
Route::post('/add/faq', [FaqController::class, 'store']);
Route::delete('faq/destoy/{faq}', [FaqController::class, 'destroy'])->name('faq.destroy');
Route::put('update/faq/{faq}', [FaqController::class, 'update'])->name('faq.update');

//user profile
Route::get('/user/{id}', [ProfileController::class, 'show'])->name('userprofile');
Route::post('/user/{user}/upgrade', [ProfileController::class, 'upgrade'])->name('user.upgrade');
Route::post('/user/{user}/downgrade', [ProfileController::class, 'downgrade'])->name('user.downgrade');


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

//contact 
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


require __DIR__.'/auth.php';
