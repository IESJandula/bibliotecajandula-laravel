@extends('master')
@section('content')
<div class="row mt-4">
    <div class="col-sm-4">
        {{-- TODO: Imagen de la película --}}
        <img style="width:90%;" src="{{ asset('storage/images/' . $libro['poster']) }}" alt="{{ $libro['titulo'] }}">
    </div>
    <div class="col-sm-8">
        {{-- TODO: Datos del prestamo --}}
        <div class="card-body">
        <h2><b>ID Usuario:</b> {{ $prestamo['id_usuario'] }}</h2>
        <h4><b>ID Libro:</b> {{ $prestamo['id_libro'] }}</h4>
        <h4><b>Fecha prestamo</b> {{ $prestamo['fecha_prestamo'] }}</h4>
        <h4><b>Estado:</b> {{ $prestamo['estado'] }}</h4>
        <h4><b>Devuelto:</b> {{ $prestamo['devuelto'] ? 'NO' : 'SI' }}</h4>
        <a href="{{ route('prestamo_edit', ['id' => $prestamo['id']]) }}" class="btn btn-warning">Devolver libro</a>
        <a href="{{ route('show_prestamos') }}" class="btn btn-secondary">Volver al listado</a>
    </div>
    </div>
    </div>
</div>
@endsection
