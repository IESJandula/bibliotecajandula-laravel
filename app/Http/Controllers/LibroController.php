<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LibroController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtén todas las películas desde la base de datos
        $libros = Libro::all();

        return view('libros/show_libros', ['libros' => $libros]);
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
        // Define reglas de validación
        $rules = [
            'titulo' => 'required|string',
            'isbn' => 'required|string|unique:libros',
            'anyo_publicacion' => 'required|integer',
            'editorial' => 'required|string',
            'genero' => 'required|string',
            'num_paginas' => 'required|integer',
            'cant_total' => 'required|integer',
            'cant_disponible' => 'integer',
            'estanteria' => 'required|string',
            'poster' => 'required',
        ];
    
        // Define mensajes personalizados de error
        $messages = [
            'titulo.required' => 'Por favor, introduce un título.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'isbn.unique' => 'El ISBN ya existe.',
            'anyo_publicacion.required' => 'Por favor, introduce el año de publicación.',
            'editorial.required' => 'La editorial es obligatoria.',
            'genero.required' => 'El género es obligatorio.',
            'num_paginas.required' => 'El número de páginas es obligatorio.',
            'cant_total.required' => 'La cantidad total de ejemplares es obligatoria.',
            'estanteria.required' => 'La estantería es obligatoria.',
            'poster.required' => 'La portada es obligatoria.',
        ];
    
        // Ejecuta la validación
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Si la validación falla, redirecciona con errores de validación
        if ($validator->fails()) {
            return redirect('libros/create')
                        ->withErrors($validator)
                        ->withInput();
        }
    
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
            'editorial' => $request->input('editorial'),
            'genero' => $request->input('genero'),
            'num_paginas' => $request->input('num_paginas'),
            'cant_total' => $request->input('cant_total'),
            'estanteria' => $request->input('estanteria'),
        ]);
    
        // Asigna el valor de 'cant_total' a 'cant_disponible'
        $libro->cant_disponible = $request->input('cant_total');
    
        // Guarda el libro en la base de datos
        $libro->save();
    
        // Redirige a la página de detalles del libro recién creado
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
        return view('libros.show_libro_id', ['libro' => $libro]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro = Libro::findOrFail($id);

        // Pasa el libro a la vista de edición
        return view('libros.update_libro', ['libro' => $libro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        info('llega a update');
        // Define reglas de validación
        $rules = [
            'titulo' => 'required|string',
            'isbn' => 'required|string|unique:libros',
            'anyo_publicacion' => 'required|integer',
            'editorial' => 'required|string',
            'genero' => 'required|string',
            'num_paginas' => 'required|integer',
            'cant_total' => 'required|integer',
            'cant_disponible' => 'integer',
            'estanteria' => 'required|string',
            'poster' => 'required',
        ];
    
        // Define mensajes personalizados de error
        $messages = [
            'titulo.required' => 'Por favor, introduce un título.',
            'isbn.required' => 'El ISBN es obligatorio.',
            'isbn.unique' => 'El ISBN ya existe.',
            'anyo_publicacion.required' => 'Por favor, introduce el año de publicación.',
            'editorial.required' => 'La editorial es obligatoria.',
            'genero.required' => 'El género es obligatorio.',
            'num_paginas.required' => 'El número de páginas es obligatorio.',
            'cant_total.required' => 'La cantidad total de ejemplares es obligatoria.',
            'estanteria.required' => 'La estantería es obligatoria.',
            'poster.required' => 'La portada es obligatoria.',
        ];

        // Ejecuta la validación
        $validator = Validator::make($request->all(), $rules, $messages);
    
        // Si la validación falla, redirecciona con errores de validación
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput();
        }

        $libro = Libro::findOrFail($id);

        // Borra la imagen vieja si existe y se carga un nuevo poster
        if ($request->hasFile('poster') && $libro->poster) {
            Storage::delete('public/images/' . $libro->poster);
        }

        if ($request->hasFile('poster')) {
            $imagePath = $request->file('poster')->storeAs('public/images', $request->file('poster')->getClientOriginalName());

            // Obtén el nombre del archivo de la ruta generada
            $imageName = pathinfo($imagePath, PATHINFO_BASENAME);
        }

        // Verifica si la nueva cant_total es menor a la cant_total vieja
        if ($request->input('cant_total') < $libro->cant_total) {
            // Calcula la nueva cant_disponible
            $nuevaCantDisponible = $request->input('cant_total');

            // Actualiza el libro con la nueva cant_total y cant_disponible
            $libro->update([
                'titulo' => $request->input('titulo'),
                'isbn' => $request->input('isbn'),
                'anyo_publicacion' => $request->input('anyo_publicacion'),
                'poster' => $imageName,
                'editorial' => $request->input('editorial'),
                'genero' => $request->input('genero'),
                'num_paginas' => $request->input('num_paginas'),
                'cant_total' => $request->input('cant_total'),
                'cant_disponible' => $nuevaCantDisponible,
                'estanteria' => $request->input('estanteria'),
            ]);
        } else {
            $nuevaCantDisponible = $request->input('cant_total') - $libro->cant_disponible;

            // Actualiza el libro con la nueva cant_total y cant_disponible
            $libro->update([
                'titulo' => $request->input('titulo'),
                'isbn' => $request->input('isbn'),
                'anyo_publicacion' => $request->input('anyo_publicacion'),
                'poster' => $imageName,
                'editorial' => $request->input('editorial'),
                'genero' => $request->input('genero'),
                'num_paginas' => $request->input('num_paginas'),
                'cant_total' => $request->input('cant_total'),
                'cant_disponible' => $nuevaCantDisponible,
                'estanteria' => $request->input('estanteria'),
            ]);
        }

        // Redirige a la página de detalles de la película actualizada
        return redirect()->route('show_libro', ['id' => $libro->id])
            ->with('success', 'Libro actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libro = Libro::findOrFail($id);

        // Borra la imagen asociada si existe
        if ($libro->poster) {
            Storage::delete('public/images/' . $libro->poster);
        }

        // Elimina la película de la base de datos
        $libro->delete();

        // Redirige a la página principal del catálogo con un mensaje de éxito
        return redirect()->route('show_libros')->with('success', 'Libro eliminado exitosamente.');
    }
}
