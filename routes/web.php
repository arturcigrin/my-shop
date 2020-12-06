<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\{AdminController,CategoryController,ProductController};

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

// Запрет к файлам из папки public

Route::get('robots.txt',function () {
     abort(404);
});




Route::get('/', [HomeController::class, 'index'])->name('home');


// Admin
Route::prefix('0259i')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    // Категории
    Route::resource('categories', CategoryController::class);
    // Route::resource('subcategory', SubcategoryController::class);

    // Товары

    Route::get('products/{nameCategory}/{id}', [ProductController::class, 'index'])->where(['id' => '[0-9]+'])->name('products.category');



  
});