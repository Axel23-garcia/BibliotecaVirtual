<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;

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

// INDEX LIBROS
Route::get('/libros',[LibrosController::class,'index'])->name('libro.index');

// SHOW LIBROS
Route::get('/libros/{id}/show',[LibrosController::class,'show'])->where('id','[0-9]+')->name('libro.show');
