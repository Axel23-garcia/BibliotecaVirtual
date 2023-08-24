<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibrosController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\UsuariosController;



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

// RUTAS PARA LOS DATOS DE LA TABLA LIBROS

// INDEX LIBROS
Route::get('/libros',[LibrosController::class,'index'])->name('libro.index');

// SHOW LIBROS
Route::get('/libros/{id}/show',[LibrosController::class,'show'])->where('id','[0-9]+')->name('libro.show');

// CREATE Y STORE PRESTAMO
Route::get('/libros/create',[LibrosController::class,'create'])->name('libros.crear');
Route::post('/libros/create',[LibrosController::class,'store'])->name('libros.store');

// EDIT Y UPDATE PRESTAMO
Route::get('/libros/{id}/editar',[LibrosController::class,'edit'])->whereNumber('id')->name('libro.editar');
Route::put('/libros/{id}/editar',[LibrosController::class,'update'])->whereNumber('id')->name('libro.update');

// DESTROYD PRESTAMO
Route::delete('/libros/{id}/borrar',[LibrosController::class,'destroy'])->whereNumber('id')->name('libro.borrar');




// RUTAS PARA LOS DATOS DE LA TABLA PRESTAMOS

// INDEX PRESTAMOS
Route::get('/prestamos',[PrestamosController::class,'index'])->name('prestamo.index');

// SHOW PRESTAMOS
Route::get('/prestamos/{id}/show',[PrestamosController::class,'show'])->where('id','[0-9]+')->name('prestamo.show');

// CREATE Y STORE PRESTAMO
Route::get('/prestamos/create',[PrestamosController::class,'create'])->name('prestamo.crear');
Route::post('/prestamos/create',[PrestamosController::class,'store'])->name('prestamo.store');

// EDIT Y UPDATE PRESTAMOS
Route::get('/prestamos/{id}/editar',[PrestamosController::class,'edit'])->whereNumber('id')->name('prestamo.editar');
Route::put('/prestamos/{id}/editar',[PrestamosController::class,'update'])->whereNumber('id')->name('prestamo.update');

// DESTROYD PRESTAMOS
Route::delete('/prestamos/{id}/borrar',[PrestamosController:: class,'destroy'])->whereNumber('id')->name('prestamo.borrar');




// RUTAS PARA LOS DATOS DE LA TABLA USUARIOS

// INDEX USUARIOS
Route::get('/usuarios',[UsuariosController::class,'index'])->name('usuario.index');

// SHOW USUARIOS
Route::get('/usuarios/{id}/show',[UsuariosController::class,'show'])->where('id','[0-9]+')->name('usuario.show');

// CREATE Y STORE USUARIOS
Route::get('/usuarios/create',[UsuariosController::class,'create'])->name('usuario.crear');
Route::post('/usuarios/create',[UsuariosController::class,'store'])->name('usuario.store');

// EDIT Y UPDATE USUARIOS
Route::get('/usuarios/{id}/editar',[UsuariosController::class,'edit'])->whereNumber('id')->name('usuario.editar');
Route::put('/usuarios/{id}/editar',[UsuariosController::class,'update'])->whereNumber('id')->name('usuario.update');

// DESTROYD USUARIOS
Route::delete('/usuarios/{id}/borrar',[UsuariosController::class,'destroy'])->whereNumber('id')->name('usuario.borrar');

