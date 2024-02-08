@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Crear libro</h5>
              <small class="text-muted float-end">Crear libro</small>
            </div>
            <div class="card-body">
              <form action="{{ route('createLibroPost') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="titulo">Titulo</label>
                  <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo"  />
                  {{-- Mostrar mensajes de error para el campo 'titulo' --}}
                     @if($errors->has('titulo'))
                      <span class="text-danger">{{ $errors->first('titulo') }}</span>
                     @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="isbn">ISBN</label>
                  <input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN"  />
                  {{-- Mostrar mensajes de error para el campo 'isbn' --}}
                  @if($errors->has('isbn'))
                    <span class="text-danger">{{ $errors->first('isbn') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="anyo_publicacion">Año publicacion</label>
                  <input type="number" class="form-control" name="anyo_publicacion" id="anyo_publicacion" placeholder="Año publicacion"  />
                  {{-- Mostrar mensajes de error para el campo 'anyo_publicacion' --}}
                  @if($errors->has('anyo_publicacion'))
                    <span class="text-danger">{{ $errors->first('anyo_publicacion') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="editorial">Editorial</label>
                  <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial"  />
                  {{-- Mostrar mensajes de error para el campo 'editorial' --}}
                  @if($errors->has('editorial'))
                    <span class="text-danger">{{ $errors->first('editorial') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="genero">Genero</label>
                  <input type="text" class="form-control" name="genero" id="genero" placeholder="Genero"  />
                  {{-- Mostrar mensajes de error para el campo 'genero' --}}
                  @if($errors->has('genero'))
                    <span class="text-danger">{{ $errors->first('genero') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="num_paginas">Numero de paginas</label>
                  <input type="number" class="form-control" name="num_paginas" id="num_paginas" placeholder="Numero de paginas"  />
                  {{-- Mostrar mensajes de error para el campo 'num_paginas' --}}
                  @if($errors->has('num_paginas'))
                    <span class="text-danger">{{ $errors->first('num_paginas') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cant_total">Cantidad total</label>
                  <input type="number" class="form-control" name="cant_total" id="cant_total" placeholder="Cantidad total"  />
                   {{-- Mostrar mensajes de error para el campo 'cant_total' --}}
                  @if($errors->has('cant_total'))
                    <span class="text-danger">{{ $errors->first('cant_total') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="estanteria">Estanteria</label>
                  <input type="text" class="form-control" name="estanteria" id="estanteria" placeholder="Estanteria"  />
                  {{-- Mostrar mensajes de error para el campo 'estanteria' --}}
                  @if($errors->has('estanteria'))
                    <span class="text-danger">{{ $errors->first('estanteria') }}</span>
                  @endif
                </div>
                <div class="mb-3">
                  {{-- TODO: Completa el input para el poster --}}
                  <label class="form-label" for="poster">Poster</label>
                  <input type="file" name="poster" id="poster" class="form-control">
                  {{-- Mostrar mensajes de error para el campo 'poster' --}}
                  @if($errors->has('poster'))
                    <span class="text-danger">{{ $errors->first('poster') }}</span>
                  @endif
                </div>
                <button type="submit" class="btn btn-primary">Crear</button>
              </form>
            </div>
          </div>
        </div>
@endsection