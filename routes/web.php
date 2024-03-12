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

Auth::routes();

Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');

Route::get('/p/create', [App\Http\Controllers\PostController::class, 'create']);

Route::post('/p', [App\Http\Controllers\PostController::class, 'store']);
