<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contacts', [ContactController::class, 'index'] );
Route::get('/create', [ContactController::class, 'create'] );
Route::post('/store', [ContactController::class, 'store'] );
Route::get('/show/{id}', [ContactController::class, 'show']);
Route::post('/update/{id}', [ContactController::class, 'update']);
Route::get('/delete/{id}', [ContactController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
