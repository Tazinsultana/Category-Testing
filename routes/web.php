<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Route;

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
    return view('Index');
});

Route::resource('categories',CategoryController::class);
// Route::get('/abc',[CategoryController::class,"Index"])->name('ABC');
Route::resource('products',ProductController::class);
Route::resource('file', FileUpload::class);