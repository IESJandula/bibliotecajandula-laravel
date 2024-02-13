@extends('master')
@section('content')
    <div class="card">
        <h5 class="card-header">Mostrar préstamos</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>ID Libro</th>
                        <th>Fecha de Préstamo</th>
                        <th>Estado</th>
                        <th>Devuelto</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($prestamos as $prestamo)
                    <tr>
                        <td>{{ $prestamo->id_usuario }}</td>
                        <td>{{ $prestamo->id_libro }}</td>
                        <td>{{ $prestamo->fecha_prestamo }}</td>
                        <td>{{ $prestamo->estado }}</td>
                        <td>{{ $prestamo->devuelto ? 'Sí' : 'No' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
