<?php

namespace App\Http\Controllers;
use App\Models\Multa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MultaController extends Controller
{
    
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multas = Multa::all();

        return view('multas/show_multas', ['multas' => $multas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('multas.create_multa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = [
            'motivo' => 'required|string',
            'cantidad' => 'required|numeric',
            'id_prestamo' => 'required|numeric',
            'id_usuario' => 'required|numeric',
        ];

        // Define mensajes personalizados de error
        $messages = [
            'motivo.required' => 'El campo motivo es obligatorio.',
            'motivo.string' => 'El campo motivo debe ser una cadena de texto.',
            
            'cantidad.required' => 'El campo cantidad es obligatorio.',
            'cantidad.numeric' => 'El campo cantidad debe ser un valor numérico.',
            
            'id_prestamo.required' => 'El campo ID de préstamo es obligatorio.',
            'id_prestamo.numeric' => 'El campo ID de préstamo debe ser un valor numérico.',
            
            'id_usuario.required' => 'El campo ID de usuario es obligatorio.',
            'id_usuario.numeric' => 'El campo ID de usuario debe ser un valor numérico.',
        ];

        // Ejecuta la validación
        $validator = Validator::make($request->all(), $rules, $messages);

        // Si la validación falla, redirecciona con errores de validación
        if ($validator->fails()) {
            return redirect('multas/create')
                        ->withErrors($validator)
                        ->withInput();
        }

        // Crea una nueva película
        $multa = new Multa([
            'motivo' => $request->input('motivo'),
            'cantidad' => $request->input('cantidad'),
            'id_usuario' => $request->input('id_usuario'),
            'id_prestamo' => $request->input('id_prestamo'),
            'estado' => 'POR ABONAR'
        ]);

        $multa->save();

        return redirect()->route('show_multas')
            ->with('success', 'Multa creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Multa $multa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multa $multa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Multa $multa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multa $multa)
    {
        //
    }
}
