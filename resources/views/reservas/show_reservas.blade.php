@extends('master')

@section('content')
    <h1 class="text-center mt-4">Listado de reservas</h1>
    <div class="row mb-5">
        @foreach($reservas as $reserva)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">ID de usuario: {{ $reserva->id_usuario }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">ID Libro: {{ $reserva->id_libro }}</h6>
                        <p class="card-text">Fecha de reserva: {{ $reserva->fecha_reserva }}</p>
                        <p class="card-text">Estado: {{ $reserva->estado }}</p>
                        <a href="{{ route('show_reserva', $reserva->id) }}" class="btn btn-outline-primary">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
