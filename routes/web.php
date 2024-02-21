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
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');


/* libros */
Route::get('/libros/create', [LibroController::class, 'create'])->name('createLibro');
Route::get('/libros/show', [LibroController::class, 'index'])->name('show_libros');
Route::get('/libros/show/{id}', [LibroController::class, 'show'])->name('show_libro');
Route::post('/libros/createPost', [LibroController::class, 'store'])->name('createLibroPost');
Route::get('/libros/edit/{id}', [LibroController::class, 'edit'])->name('libro_edit');
Route::put('/libros/update/{id}', [LibroController::class, 'update'])->name('libro_update');
Route::delete('/libros/delete/{id}', [CatalogController::class, 'destroy'])->name('libro_delete');


/* multas */
Route::get('/multas/show', [MultaController::class, 'index'])->name('show_multas');

/* prestamos */
Route::get('/prestamos/show', [PrestamoController::class, 'index'])->name('show_prestamos');
Route::get('/prestamos/show/{id}', [PrestamoController::class, 'show'])->name('show_prestamo');
Route::post('/prestamos/create/{id}/{user_id}', [PrestamoController::class, 'store'])->name('create_prestamo');
Route::get('/prestamos/edit/{id}', [PrestamoController::class, 'edit'])->name('prestamo_edit');
Route::put('/prestamos/update/{id}', [PrestamoController::class, 'update'])->name('prestamo_update');

/* reservas */
Route::get('/reservas/show', [ReservaController::class, 'index'])->name('show_reservas');

/* transacciones */
Route::get('/transacciones/show', [TransacciónController::class, 'index'])->name('show_transacciones');

/* users */






/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
