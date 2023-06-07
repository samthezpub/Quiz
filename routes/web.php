<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Quiz;

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

Route::get('/', [Quiz::class, 'index'])->name('index');
Route::get('/create', [Quiz::class, 'createQuiz'])->name('create');
Route::post('/create_confirmed', [Quiz::class, 'createQuiz_confirmed'])->name('createQuiz_confirmed');
Route::get('/edit/{id}', [Quiz::class, 'edit'])->name('edit');
Route::post('/edit_confirmed', [Quiz::class, 'edit_confirmed'])->name('edit_confirmed');
Route::get('/delete/{id}', [Quiz::class, 'delete'])->name('delete');
Route::post('/delete_confirmed', [Quiz::class, 'delete_confirmed'])->name('delete_confirmed');