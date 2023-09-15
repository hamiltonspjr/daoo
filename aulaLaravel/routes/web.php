<?php

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
    return view('welcome');
});

Route::get('alo', [\App\Http\Controllers\homeController::class, 'index']);
Route::get('/produtos', [\App\Http\Controllers\ProdutoController::class, 'index']);
Route::get('/produto/{id}', [\App\Http\Controllers\ProdutoController::class, 'show']);
