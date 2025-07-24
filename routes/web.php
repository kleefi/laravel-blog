<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\DigitalMarketing;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UiUxDesign;
use App\Http\Controllers\WebDevelopment;
use Illuminate\Support\Facades\Route;

// ======= PUBLIC ROUTES =======
Route::get('/', [PostController::class, 'index']);
Route::get('/category', [CategoryController::class, 'index']);
Route::resource('/digital-marketing', DigitalMarketing::class);
Route::resource('/web-development', WebDevelopment::class);
Route::resource('/uiux-design', UiUxDesign::class);

// ======= DASHBOARD ROUTES =======
Route::middleware(['auth'])->prefix('dashboard')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::resource('/posts', AdminPostController::class);
    Route::resource('/categories', AdminCategoryController::class);

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/{slug}', [PostController::class, 'show'])->name('show');
