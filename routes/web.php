<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DetailProductController;
use App\Http\Controllers\SearchController;

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


Route::get('/shop-grid/{id}', [ProductController::class, 'index'])->name('shop-grid');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/{id}', [PageController::class, 'index']);
Route::get('/', [PageController::class, 'home']);
Route::get('/shop-details/{id}', [DetailProductController::class, 'index'])->name('shop-details');





// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
