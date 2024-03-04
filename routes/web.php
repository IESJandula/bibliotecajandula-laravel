<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

/* Home */
Route::get('/', function () {
    return view('index');
})->name('home');

/* Login y logout */
Route::get('/register', [RegisteredUserController::class, 'create'])->name('create_user');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout')->middleware('auth');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('/update', [ProfileController::class, 'edit'])->name('update')->middleware('auth');
Route::put('/update/{id}', [ProfileController::class, 'update'])->name('update_user')->middleware('auth');


/* libros */
Route::get('/libros/create', [LibroController::class, 'create'])->name('createLibro')->middleware('auth');
Route::get('/libros/show', [LibroController::class, 'index'])->name('show_libros');
Route::get('/libros/show/{id}', [LibroController::class, 'show'])->name('show_libro');
Route::post('/libros/createPost', [LibroController::class, 'store'])->name('createLibroPost')->middleware('auth');
Route::get('/libros/edit/{id}', [LibroController::class, 'edit'])->name('libro_edit')->middleware('auth');
Route::put('/libros/update/{id}', [LibroController::class, 'update'])->name('libro_update')->middleware('auth');
Route::delete('/libros/delete/{id}', [LibroController::class, 'destroy'])->name('libro_delete')->middleware('auth');


/* multas */
Route::get('/multas/show', [MultaController::class, 'index'])->name('show_multas')->middleware('auth');
Route::get('/multas/create/{id}', [MultaController::class, 'create'])->name('create_multa')->middleware('auth');
Route::post('/multas/createPost', [MultaController::class, 'store'])->name('create_multa_post')->middleware('auth');
Route::put('/multas/update/{id}', [MultaController::class, 'update'])->name('update_multa')->middleware('auth');

/* prestamos */
Route::get('/prestamos/show', [PrestamoController::class, 'index'])->name('show_prestamos')->middleware('auth');
Route::get('/prestamos/show/{id}', [PrestamoController::class, 'show'])->name('show_prestamo')->middleware('auth');
Route::post('/prestamos/create/{id}/{user_id}/{id_reserva}', [PrestamoController::class, 'store'])->name('create_prestamo')->middleware('auth');
Route::put('/prestamos/update/{id}', [PrestamoController::class, 'update'])->name('prestamo_update')->middleware('auth');

/* reservas */
Route::get('/reservas/show', [ReservaController::class, 'index'])->name('show_reservas')->middleware('auth');
Route::post('/reservas/create/{id}/{user_id}', [ReservaController::class, 'store'])->name('create_reserva')->middleware('auth');
Route::put('/reservas/update/{id}', [ReservaController::class, 'update'])->name('reserva_update')->middleware('auth');


/* transacciones */
Route::get('/transacciones/show', [TransaccionController::class, 'index'])->name('show_transacciones')->middleware('auth');
require __DIR__.'/auth.php';
