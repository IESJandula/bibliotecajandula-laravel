@extends('master')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-md-8">
        <div class="card p-4 shadow">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex aligns-item-center">
                    <img src="{{ asset('storage/images/' . $libro['poster']) }}" class="card-img img-fluid" alt="{{ $libro['titulo'] }}">
                </div>
                <div class="col-md-8 ">
                    <div class="card-body ">
                        <h2 class="card-title">{{ $libro['titulo'] }}</h2>
                        <p class="card-text"><b>ISBN:</b> {{ $libro['isbn'] }}</p>
                        <p class="card-text"><b>Año de publicación:</b> {{ $libro['anyo_publicacion'] }}</p>
                        <p class="card-text"><b>Editorial:</b> {{ $libro['editorial'] }}</p>
                        <p class="card-text"><b>Género:</b> {{ $libro['genero'] }}</p>
                        <p class="card-text"><b>Número de páginas:</b> {{ $libro['num_paginas'] }}</p>
                        <p class="card-text"><b>Cantidad total:</b> {{ $libro['cant_total'] }}</p>
                        <p class="card-text"><b>Cantidad disponible:</b> {{ $libro['cant_disponible'] }}</p>
                        <p class="card-text"><b>Estantería:</b> {{ $libro['estanteria'] }}</p>
                        <a href="{{ route('libro_edit', ['id' => $libro['id']]) }}" class="btn btn-warning mb-2">Editar libro</a>
                        <a href="{{ route('show_libros') }}" class="btn btn-secondary mb-2">Volver al listado</a>
                        <form action="{{ route('libro_delete', ['id' => $libro['id']]) }}" method="post" class="d-inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger mb-2">Eliminar libro</button>
                        </form>

                        <form action="{{ route('create_prestamo', ['id' => $libro['id'], 'user_id' => Auth::id()]) }}" method="post" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-primary mb-2">Generar préstamo</button>
                        </form>
                        <form action="{{ route('create_reserva', ['id' => $libro['id'], 'user_id' => Auth::id()]) }}" method="post" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-primary mb-2">Generar Reserva</button>
                        </form>
                        @if(session('error'))
                            <div class="mt-2 alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
