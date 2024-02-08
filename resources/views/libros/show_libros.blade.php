@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Lista de Libros</h5>
                    <small class="text-muted float-end">Lista de Libros</small>
                </div>
                <div class="card-body">
                    @if($libros->count() > 0)
                        <ul class="list-group">
                            @foreach($libros as $libro)
                                <li class="list-group-item">
                                    <strong>Título:</strong> {{ $libro->titulo }} <br>
                                    <strong>ISBN:</strong> {{ $libro->isbn }} <br>
                                    <strong>Año de publicación:</strong> {{ $libro->anyo_publicacion }} <br>
                                    <strong>Editorial:</strong> {{ $libro->editorial }} <br>
                                    <strong>Género:</strong> {{ $libro->genero }} <br>
                                    <strong>Número de páginas:</strong> {{ $libro->num_paginas }} <br>
                                    <strong>Cantidad total:</strong> {{ $libro->cant_total }} <br>
                                    <strong>Cantidad disponible:</strong> {{ $libro->cant_disponible }} <br>
                                    <strong>Estantería:</strong> {{ $libro->estanteria }} <br>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No hay libros disponibles.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
