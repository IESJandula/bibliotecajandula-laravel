@extends('master')

@section('content')
    <h1 class="text-center mt-4">Listado de Préstamos</h1>
    <div class="row mb-5">
        @foreach($prestamos as $prestamo)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ID Usuario: {{ $prestamo->id_usuario }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID Libro: {{ $prestamo->id_libro }}</h6>
                        <p class="card-text">Fecha de Préstamo: {{ $prestamo->fecha_prestamo }}</p>
                        <p class="card-text">Estado: {{ $prestamo->estado }}</p>
                        <p class="card-text">Devuelto: {{ $prestamo->devuelto ? 'Sí' : 'No' }}</p>
                        <a href="{{ route('show_devolucion', $prestamo->id) }}" class="btn btn-outline-primary">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
