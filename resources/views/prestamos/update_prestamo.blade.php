@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Actualizar Préstamo</h5>
                    <small class="text-muted float-end">Actualizar Préstamo</small>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('prestamos.update', $prestamo->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label" for="id_usuario">ID Usuario</label>
                            <input type="number" class="form-control" name="id_usuario" id="id_usuario" placeholder="ID Usuario" value="{{ old('id_usuario', $prestamo->id_usuario) }}" />
                            {{-- Mostrar mensajes de error para el campo 'id_usuario' --}}
                            @if($errors->has('id_usuario'))
                                <span class="text-danger">{{ $errors->first('id_usuario') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="id_libro">ID Libro</label>
                            <input type="number" class="form-control" name="id_libro" id="id_libro" placeholder="ID Libro" value="{{ old('id_libro', $prestamo->id_libro) }}" />
                            {{-- Mostrar mensajes de error para el campo 'id_libro' --}}
                            @if($errors->has('id_libro'))
                                <span class="text-danger">{{ $errors->first('id_libro') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="fecha_prestamo">Fecha de Préstamo</label>
                            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo" placeholder="Fecha de Préstamo" value="{{ old('fecha_prestamo', $prestamo->fecha_prestamo) }}" />
                            {{-- Mostrar mensajes de error para el campo 'fecha_prestamo' --}}
                            @if($errors->has('fecha_prestamo'))
                                <span class="text-danger">{{ $errors->first('fecha_prestamo') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="estado">Estado</label>
                            <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado" value="{{ old('estado', $prestamo->estado) }}" />
                            {{-- Mostrar mensajes de error para el campo 'estado' --}}
                            @if($errors->has('estado'))
                                <span class="text-danger">{{ $errors->first('estado') }}</span>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="devuelto">Devuelto</label>
                            <select class="form-control" name="devuelto" id="devuelto">
                                <option value="0" @if(old('devuelto', $prestamo->devuelto) == 0) selected @endif>No</option>
                                <option value="1" @if(old('devuelto', $prestamo->devuelto) == 1) selected @endif>Sí</option>
                            </select>
                            {{-- Mostrar mensajes de error para el campo 'devuelto' --}}
                            @if($errors->has('devuelto'))
                                <span class="text-danger">{{ $errors->first('devuelto') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
