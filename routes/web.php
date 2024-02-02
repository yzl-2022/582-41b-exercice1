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

Route::get('/home', [App\Http\Controllers\BlogController::class, 'index']);
Route::get('/about', [App\Http\Controllers\BlogController::class, 'about']);
Route::get('/projet', [App\Http\Controllers\BlogController::class, 'projet']);
Route::get('/contact', [App\Http\Controllers\BlogController::class, 'contact']);
Route::post('/contact', [App\Http\Controllers\BlogController::class, 'contactForm']);

//Configurez au moins 4 routes pointant vers le contrôleur créé précédemment.
Route::get('/projet/{id}', [App\Http\Controllers\BlogController::class, 'projetId']);
Route::get('/add', [App\Http\Controllers\BlogController::class, 'add']);
Route::post('/add', [App\Http\Controllers\BlogController::class, 'addForm']);