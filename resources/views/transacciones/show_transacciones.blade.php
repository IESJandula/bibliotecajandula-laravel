@extends('master')
@section('content')
    <div class="card mt-3">
        <h5 class="card-header text-center">Listado de transacciones</h5>
        <div class="table-responsive text-nowrap">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tipo</th>
                        <th>ID Usuario</th>
                        <th>ID Reserva</th>
                        <th>ID Multa</th>
                        <th>ID Prestamo </th>                    
                        <th>Fecha Transacción </th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($transacciones as $transaccion)
                    <tr>
                        <td>{{ $transaccion->id }}</td>
                        <td>{{ $transaccion->tipo }}</td>
                        <td>{{ $transaccion->id_usuario }}</td>
                        <td>{{ $transaccion->id_reserva }}</td>
                        <td>{{ $transaccion->id_multa }}</td>
                        <td>{{ $transaccion->id_prestamo }}</td>
                        <td>{{ $transaccion->fecha_transaccion }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
