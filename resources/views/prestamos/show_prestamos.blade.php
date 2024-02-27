@extends('master')
@section('content')
    <div class="card mt-3">
        <h5 class="card-header text-center">Listado de préstamos</h5>
        <div class="table-responsive text-nowrap">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>ID Libro</th>
                        <th>Fecha de Préstamo</th>
                        <th>Estado</th>
                        <th>Acciones</th> 
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($prestamos as $prestamo)
                    <tr>
                        <td>{{ $prestamo->id_usuario }}</td>
                        <td>{{ $prestamo->id_libro }}</td>
                        <td>{{ $prestamo->fecha_prestamo }}</td>
                        <td>{{ $prestamo->estado }}</td>
                        <td>
                            <a href="{{ route('show_prestamo', ['id' => $prestamo->id]) }}" class="btn btn-primary">Ver préstamo</a>
                            <a href="{{ route('create_multa', ['id' => $prestamo->id]) }}" class="btn btn-danger">Añadir multa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
