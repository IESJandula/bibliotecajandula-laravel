<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;
use App\Models\Libro;
use Carbon\Carbon;

class PrestamoController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prestamos = Prestamo::all();

        return view('prestamos/show_prestamos', ['prestamos' => $prestamos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store($id, $user_id)
     {
        info('llega');
         // Buscar el libro por su ID
        $libro = Libro::findOrFail($id);
        
        info('busca libro');
         // Verificar si hay copias disponibles del libro
        if ($libro->cant_disponible <= 0) {
            return redirect()->back()->with('error', 'No hay copias disponibles de este libro para prestar.');
        }
        info('pasa fallo');

        // Crear un nuevo préstamo en la base de datos
        $prestamo = new Prestamo();
        $prestamo->id_libro = $id;
        $prestamo->id_usuario = $user_id;
        $prestamo->fecha_prestamo = Carbon::now();
        $prestamo->estado = "PRESTADO";
        $prestamo->devuelto = false;
        $prestamo->save();
     
        // Restar una copia disponible del libro
        $libro->cant_disponible -= 1;
        $libro->save();
     
         // Redireccionar a la vista de los préstamos
        return redirect()->route('show_prestamo', ['id' => $prestamo->id])
        ->with('success', 'Prestamo creado exitosamente.');
     }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        $libro = Libro::findOrFail($prestamo->id_libro);
        return view('prestamos.show_prestamo',['prestamo' => $prestamo, 'libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prestamo $prestamo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
   
public function update($id)
{
    $prestamo = Prestamo::findOrFail($id);

    // Verificar si el préstamo está devuelto
    if ($prestamo->estado === 'DEVUELTO') {
        return redirect()->back()->with('error', 'El préstamo ya ha sido devuelto anteriormente.');
    }

    // Cambiar el estado del préstamo a devuelto
    $prestamo->update([
        'estado' => 'DEVUELTO',
        'devuelto' => true,
    ]);

    // Buscar el libro devuelto por su ID
    $libro = Libro::findOrFail($prestamo->id_libro);

    // Sumar una copia disponible al libro devuelto
    $libro->cant_disponible += 1;
    $libro->save();

    // Redireccionar a la vista del préstamo con un mensaje de éxito
    return redirect()->route('show_prestamos')
        ->with('success', 'Préstamo devuelto exitosamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prestamo $prestamo)
    {
        //
    }
}
