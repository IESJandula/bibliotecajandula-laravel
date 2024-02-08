<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\MultaController;
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
});

/* Login y logout */


/* libros */
Route::get('/libros/create', [LibroController::class, 'create'])->name('createLibro');
Route::get('/libros/shows', [LibroController::class, 'index'])->name('show_libros');
Route::get('/libros/show', [LibroController::class, 'show'])->name('show_libro');
Route::post('/libros/createPost', [LibroController::class, 'store'])->name('createLibroPost');



/* multas */
Route::get('/multas/create', [MultaController::class, 'create'])->name('createMulta');

/* prestamos */


/* reservas */
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('createReserva');

/* transacciones */


/* users */






/* Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); */

require __DIR__.'/auth.php';
