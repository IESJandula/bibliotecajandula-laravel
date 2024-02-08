<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('libros.create_libro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'tiulo' => 'required|string',
            'isbn' => 'required|string',
            'anyo_publicacion' => 'required|integer',
            'editorial' => 'required|string',
            'genero' => 'required|string',
            'num_paginas' => 'required|integer',
            'cant_total' => 'required|integer',
            'estanteria' => 'required|string',
            'poster' => 'required',
        ], [
            'titulo.required' => 'Por favor, introduce un titulo.',
            'isbn.unique' => 'El ISBN no existe.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'anyo_publicacion.required' => 'Por favor, introduce el año.',
            'editorial.required' => 'La editorial es obligatoria.',
            'genero.required' => 'El género es obligatorio.',
            'num_paginas.required' => 'El numero de paginas es obligatorio.',
            'cant_total.required' => 'El numero de paginas es obligatorio.',
            'estanteria.required' => 'La estanteria es obligatoria.',
            'poster.required' => 'La portada es obligatoria.',
        ]);

        info('ok');

        // Maneja la carga de la imagen
        if ($request->hasFile('poster')) {
            $imagePath = $request->file('poster')->storeAs('public/images', $request->file('poster')->getClientOriginalName());

            // Obtén el nombre del archivo de la ruta generada
            $imageName = pathinfo($imagePath, PATHINFO_BASENAME);
        }

        // Crea una nueva película
        $libro = new Libro([
            'titulo' => $request->input('titulo'),
            'isbn' => $request->input('isbn'),
            'anyo_publicacion' => $request->input('anyo_publicacion'),
            'poster' => $imageName,
            'editorial' => $request->input('editorial'), // Valor predeterminado a false si no se proporciona
            'genero' => $request->input('genero'),
            'num_paginas' => $request->input('num_paginas'),
            'cant_total' => $request->input('cant_total'),
            'estanteria' => $request->input('estanteria'),
        ]);

        // Asigna el valor de 'cant_total' a 'cant_disponible'
        $libro->cant_disponible = $request->input('cant_total');

        // Guarda la película en la base de datos
        $libro->save();

        // Redirige a la página de detalles de la película recién creada
        return redirect()->route('show_libro', ['id' => $libro->id])
            ->with('success', 'Libro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Busca la película por su identificador
        $libro = Libro::findOrFail($id);

        // Pasa la película a la vista
        return view('show_libro_id', ['libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
