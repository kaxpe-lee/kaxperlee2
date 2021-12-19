<?php

use App\Http\Controllers\EnlaceController;
use App\Http\Controllers\LibroController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ShowTitle;
use App\Http\Livewire\ShowTitle2;

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

Route::get('/', [EnlaceController::class, 'index']);

Route::get('enlaces', [EnlaceController::class, 'index']);
Route::get('libros', [LibroController::class, 'index'])->name('libros.index');
Route::get('libros/create', [LibroController::class, 'create'])->name('libros.create');
Route::get('libros/{libro}', [LibroController::class, 'show'])->name('libros.show');
Route::post('libros', [LibroController::class, 'store'])->name('libros.store');

