<?php

use App\Http\Controllers\DashboardCategoryController;
use App\Http\Controllers\DashboardContactController;
use App\Http\Controllers\DashboardLabelController;
use App\Http\Controllers\DashboardLandingPageController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/blog', [PostController::class, 'index'])->name('post');
Route::post('/', [LandingPageController::class, 'store'])->name('email');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/dashboard/landingpage', DashboardLandingPageController::class);
    Route::resource('/dashboard/category', DashboardCategoryController::class);
    Route::resource('/dashboard/post', DashboardPostController::class);
    Route::resource('/dashboard/contact', DashboardContactController::class);
    Route::resource('/dashboard/label', DashboardLabelController::class);

    // Route::post('/dashboard/post/create/upload', [DashboardPostController::class, 'upload'])->name('ckeditor.upload');
    Route::post('image-upload', [ImageUploadController::class, 'storeImage'])->name('image.upload');
});

require __DIR__.'/auth.php';
