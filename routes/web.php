<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AllCategoryController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

// All Category Listing Routes (allcategory.blade.php)
Route::get('/box-by-industry', [AllCategoryController::class, 'boxByIndustry'])->name('box-by-industry');
Route::get('/box-by-style', [AllCategoryController::class, 'boxByStyle'])->name('box-by-style');
Route::get('/box-by-material', [AllCategoryController::class, 'boxByMaterial'])->name('box-by-material');
Route::get('/promotional', [AllCategoryController::class, 'promotional'])->name('promotional');

// Individual Category Page (catagorypage.blade.php)
// URL example: /category/industry/cosmetics-beauty
Route::get('/category/{type}/{slug}', [AllCategoryController::class, 'categoryPage'])->name('category.page');

