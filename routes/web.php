<?php

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CompanyController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schedule;

Route::get('/', [PageController::class, "home"])->name('home');
Route::get('/category/{slug}', [PageController::class, "newByCategories"])->name('category');
Route::get("/news/{id}", [PageController::class, 'post'])->name('news');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('company', CompanyController::class)->names('company');
    Route::resource('category', CategoryController::class)->names('category');
    Route::resource('post', PostController::class)->names('post');
});

require __DIR__ . '/auth.php';
