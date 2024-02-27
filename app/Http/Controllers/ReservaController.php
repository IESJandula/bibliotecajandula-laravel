<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Libro;
use Illuminate\Http\Request;
use Carbon\Carbon;


class ReservaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reserva::all();

        return view('reservas/show_reservas', ['reservas' => $reservas]);
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
    public function store($id, $id_user)
    {
        $libro = Libro::findOrFail($id);
        
        // Verificar si hay copias disponibles del libro
        if ($libro->cant_disponible <= 0) {
            return redirect()->back()->with('error', 'No hay copias disponibles de este libro para prestar.');
        }

        // Crear un nuevo préstamo en la base de datos
        $reserva = new Reserva();
        $reserva->id_libro = $id;
        $reserva->id_usuario = $id_user;
        $reserva->fecha_reserva = Carbon::now();
        $reserva->estado = "ACTIVA";
        $reserva->save();

        // Restar una copia disponible del libro
        $libro->cant_disponible -= 1;
        $libro->save();

    
        // Redireccionar a la vista de los préstamos
        return redirect()->route('show_reservas')
        ->with('success', 'Reserva creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        $libro = Libro::findOrFail($reserva->id_libro);
        return view('reservas.show_reservas',['reserva' => $reserva, 'libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $reserva = Reserva::findOrFail($id);

        if ($reserva->estado === 'CANCELADO') {
            return redirect()->back()->with('error', 'La reserva ya ha sido cancelada anteriormente.');
        }

        // Cambiar el estado del préstamo a devuelto
        $reserva->update([
            'estado' => 'CANCELADO',
        ]);

        // Buscar el libro devuelto por su ID
        $libro = Libro::findOrFail($reserva->id_libro);

        $libro->cant_disponible += 1;
        $libro->save();

        // Redireccionar a la vista del préstamo con un mensaje de éxito
        return redirect()->route('show_reservas')
        ->with('success', 'Reserva cancelada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
