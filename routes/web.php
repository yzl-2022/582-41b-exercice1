<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/about', [App\Http\Controllers\BlogController::class, 'about']);
Route::get('/post', [App\Http\Controllers\BlogController::class, 'post']);
Route::get('/contact', [App\Http\Controllers\BlogController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\BlogController::class, 'contactForm']);