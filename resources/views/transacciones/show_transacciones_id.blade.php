@extends('master')

@section('content')
<div class="card">
    <h5 class="card-header">Mostrar transacciones</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Id de préstamo</th>
                    <th>Id de reserva</th>
                    <th>Id de multa</th>
                    <th>Fecha de transacción</th>
                    <th>Id de usuario</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($transacciones as $transaccion)
                <tr>
                    <td>{{ $transaccion->tipo }}</td>
                    <td>{{ $transaccion->id_prestamo }}</td>
                    <td>{{ $transaccion->id_reserva }}</td>
                    <td>{{ $transaccion->id_multa }}</td>
                    <td>{{ $transaccion->fecha_transaccion }}</td>
                    <td>{{ $transaccion->id_usuario }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
