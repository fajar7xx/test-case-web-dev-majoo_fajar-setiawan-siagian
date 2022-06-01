<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ProductController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

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

Route::get('/', HomepageController::class)->name('homepage');


Route::middleware('auth')->group(function () {
    Route::get('/admin', fn () => view('admin.pages.dashboard.index'))->name('admin');
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
});

require __DIR__ . '/auth.php';
