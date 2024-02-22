@extends('master')
@section('content')
<div class="row mt-4">
    <div class="col-sm-4">
        {{-- TODO: Imagen de la película --}}
        <img style="width:90%;" src="{{ asset('storage/images/' . $libro['poster']) }}" alt="{{ $libro['titulo'] }}">
    </div>
    <div class="col-sm-8">
        {{-- TODO: Datos de la película --}}
        <div class="card-body">
        <h2><b>Título:</b> {{ $libro['titulo'] }}</h2>
        <h4><b>ISBN:</b> {{ $libro['isbn'] }}</h4>
        <h4><b>Año de publicación:</b> {{ $libro['anyo_publicacion'] }}</h4>
        <h4><b>Editorial:</b> {{ $libro['editorial'] }}</h4>
        <h4><b>Género:</b> {{ $libro['genero'] }}</h4>
        <h4><b>Número de páginas:</b> {{ $libro['num_paginas'] }}</h4>
        <h4><b>Cantidad total:</b> {{ $libro['cant_total'] }}</h4>
        <h4><b>Cantidad disponible:</b> {{ $libro['cant_disponible'] }}</h4>
        <h4><b>Estantería:</b> {{ $libro['estanteria'] }}</h4>
        <a href="{{ route('libro_edit', ['id' => $libro['id']]) }}" class="btn btn-warning">Editar libro</a>
        <a href="{{ route('show_libros') }}" class="btn btn-secondary">Volver al listado</a>
        <div class="d-inline-block">
            <form action="{{ route('libro_delete', ['id' => $libro['id']]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar libro</button>
            </form>
            
        </div>
        <div class="d-inline-block">
            <form action="{{ route('create_prestamo', ['id' => $libro['id'], 'user_id' => Auth::id()]) }}" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Generar prestamo</button>
            </form>
        </div>
        <div class="mt-2">
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
</div>
    </div>
    </div>
</div>
@endsection
