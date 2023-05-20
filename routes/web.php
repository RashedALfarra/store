<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [CategoryController::class, 'index']);
    Route::get('/categories/index', [CategoryController::class, 'index']);
    Route::get('/categories/create', [CategoryController::class, 'create']);
    Route::get('/categories/edit/{id}', [CategoryController::class, 'edit']);
    Route::get('/categories/delete/{id}', [CategoryController::class, 'destroy']);
    Route::post('/categories/store', [CategoryController::class, 'store']);
    Route::patch('/categories/update/{id}', [CategoryController::class, 'update']);

    Route::get('/products/index', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/edit/{id}', [ProductController::class, 'edit']);
    Route::get('/products/delete/{id}', [ProductController::class, 'destroy']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::patch('/products/update/{id}', [ProductController::class, 'update']);
});
