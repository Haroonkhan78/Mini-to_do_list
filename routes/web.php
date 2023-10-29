<?php

use App\Http\Controllers\taskController;
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

Route::get('/', [taskController::class,'showtask'])->name('home');

Route::post('/taskinput', [taskController::class,'insert'])->name('taskinput');

Route::get('/showtask', [taskController::class,'showtask'])->name('showtask');

Route::get('/donetask/{id}', [taskController::class,'donetask'])->name('donetask');
Route::get('/deltask/{id}', [taskController::class,'deltask'])->name('deltask');

Route::get('/completed', [taskController::class,'completed'])->name('completed');

Route::post('/search', [taskController::class,'search'])->name('search');
