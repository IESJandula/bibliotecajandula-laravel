<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        /*$rules = [
            'id_usuario' => 'required|exists:id_usuario',
            'id_libro' => 'required|exists:id_libro',
            'estado' => 'required|in:activa,cancelada',
            'fecha_reserva' => 'required|date',
        ];

        $messages = [
            'id_usuario.required' => 'El ID del usuario es obligatorio',
            'id_usuario.exists' => 'El ID del usuario no existe en la tabla',
            'id_libro.required' => 'El ID del libro es obligatorio',
            'id_libro.exists' => 'El ID del libro no existe en la tabla',
            'estado.required' => 'El estado es obligatorio',
            'estado.exists' => 'El estado no existe en la tabla',
            'fecha_reserva.required' => 'La fecha de reserva es obligatoria',
            'fecha_reserva.exists' => 'La fecha de reserva no existe en la tabla',
        ];

        // Validar los datos del formulario
        $validator = Validator::make($request->all(), $rules, $messages);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }*/

        $request->validate([
            'id_usuario' => 'required|exists:id_usuario',
            'id_libro' => 'required|exists:id_libro',
            'estado' => 'required|in:activa,cancelada',
            'fecha_reserva' => 'required|date',
        ]);

        $reserva = new Reserva();
        $reserva->id_usuario = $request->id_usuario;
        $reserva->id_libro = $request->id_libro;
        $reserva->fecha_reserva = now();
        $reserva->estado = 'activa';
        $reserva->save();

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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'estado' => 'required|in:activa,cancelada'
        ]);

        $reserva = Reserva::findOrFail($id);

        $reserva->estado = $request->estado;
        $reserva->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
