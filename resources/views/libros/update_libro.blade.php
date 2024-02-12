@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Actualizar libro</h5>
              <small class="text-muted float-end">Actualizar libro</small>
            </div>
            <div class="card-body">
              <form method="POST" action="{{ route('libro_update', ['id' => $libro->id]) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                  <label class="form-label" for="titulo">Titulo</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo" value="{{ old('titulo', $libro->titulo) }}" />
                  {{-- Mostrar mensajes de error para el campo 'titulo' --}}
                  @if($errors->has('titulo'))
                    <span class="text-danger">{{ $errors->first('titulo') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="isbn">ISBN</label>
                  <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN" value="{{ old('isbn', $libro->isbn) }}" />
                  {{-- Mostrar mensajes de error para el campo 'isbn' --}}
                  @if($errors->has('isbn'))
                    <span class="text-danger">{{ $errors->first('isbn') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="anyo_publicacion">Año publicacion</label>
                  <input type="number" class="form-control" name="anyo_publicacion" id="anyo_publicacion" placeholder="Año publicacion" value="{{ old('anyo_publicacion', $libro->anyo_publicacion) }}" />
                  {{-- Mostrar mensajes de error para el campo 'anyo_publicacion' --}}
                  @if($errors->has('anyo_publicacion'))
                    <span class="text-danger">{{ $errors->first('anyo_publicacion') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="editorial">Editorial</label>
                  <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial" value="{{ old('editorial', $libro->editorial) }}" />
                  {{-- Mostrar mensajes de error para el campo 'editorial' --}}
                  @if($errors->has('editorial'))
                    <span class="text-danger">{{ $errors->first('editorial') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="genero">Genero</label>
                  <input type="text" class="form-control" name="genero" id="genero" placeholder="Genero" value="{{ old('genero', $libro->genero) }}" />
                  {{-- Mostrar mensajes de error para el campo 'genero' --}}
                  @if($errors->has('genero'))
                    <span class="text-danger">{{ $errors->first('genero') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="num_paginas">Numero de paginas</label>
                  <input type="number" class="form-control" name="num_paginas" id="num_paginas" placeholder="Numero de paginas" value="{{ old('num_paginas', $libro->num_paginas) }}" />
                  {{-- Mostrar mensajes de error para el campo 'num_paginas' --}}
                  @if($errors->has('num_paginas'))
                    <span class="text-danger">{{ $errors->first('num_paginas') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cant_total">Cantidad total</label>
                  <input type="number" class="form-control" name="cant_total" id="cant_total" placeholder="Cantidad total" value="{{ old('cant_total', $libro->cant_total) }}" />
                   {{-- Mostrar mensajes de error para el campo 'cant_total' --}}
                  @if($errors->has('cant_total'))
                    <span class="text-danger">{{ $errors->first('cant_total') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cant_disponible">Cantidad disponible</label>
                  <input type="number" class="form-control" name="cant_disponible" id="cant_disponible" placeholder="Cantidad disponible" value="{{ old('cant_disponible', $libro->cant_disponible) }}" />
                  {{-- Mostrar mensajes de error para el campo 'cant_disponible' --}}
                  @if($errors->has('cant_disponible'))
                    <span class="text-danger">{{ $errors->first('cant_disponible') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="estanteria">Estanteria</label>
                  <input type="text" class="form-control" name="estanteria" id="estanteria" placeholder="Estanteria" value="{{ old('estanteria', $libro->estanteria) }}" />
                  {{-- Mostrar mensajes de error para el campo 'estanteria' --}}
                  @if($errors->has('estanteria'))
                    <span class="text-danger">{{ $errors->first('estanteria') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="poster">Poster</label>
                  <input type="file" class="form-control" name="poster" id="poster" placeholder="Poster" />
                  {{-- Mostrar mensajes de error para el campo 'poster' --}}
                  @if($errors->has('poster'))
                    <span class="text-danger">{{ $errors->first('poster') }}</span>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
              </form>
            </div>
          </div>
        </div>
@endsection
