<?php

use Illuminate\Support\Facades\Route;

// controllers
use App\Http\Controllers\Admin\ComicsController;
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
    return view('template-main');
})->name('home');

Route::resource('comics', ComicsController::class);
Route::get('/confirm-delete/{x}', [ComicsController::class,'preDelete'])->name('preDelete');