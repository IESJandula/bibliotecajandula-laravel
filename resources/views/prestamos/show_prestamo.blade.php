@extends('master')

@section('content')
<div class="row mt-4 justify-content-center">
    <div class="col-md-8">
        <div class="card p-4">
            <div class="row no-gutters">
                <div class="col-md-4 d-flex align-items-center">
                    <img src="{{ asset('storage/images/' . $libro['poster']) }}" class="card-img" alt="{{ $libro['titulo'] }}">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="text-center mb-4">
                            <h2>ID Préstamo: {{ $prestamo->id}}</h2>
                        </div>
                        <h4><b>ID Usuario:</b> {{ $prestamo['id_usuario'] }}</h4>
                        <h4><b>ID Libro:</b> {{ $prestamo['id_libro'] }}</h4>
                        <h4><b>Fecha prestamo:</b> {{ $prestamo['fecha_prestamo'] }}</h4>
                        <h4><b>Estado:</b> {{ $prestamo['estado'] }}</h4>

                        @if($prestamo['estado'] !== 'DEVUELTO')
                        <form action="{{ route('prestamo_update', ['id' => $prestamo['id']]) }}" method="post">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-warning">Devolver préstamo</button>
                        </form>
                        @endif
            
                        <a href="{{ route('show_prestamos') }}" class="btn btn-secondary mt-2">Volver al listado</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
