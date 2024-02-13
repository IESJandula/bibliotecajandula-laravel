@extends('master')
@section('content')
    <div class="card">
        <h5 class="card-header">Mostrar reservas</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID Usuario</th>
                        <th>ID Libro</th>
                        <th>Fecha de Reservas</th>
                        <th>Estado</th>
                  </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $prestamo->id_usuario }}</td>
                        <td>{{ $prestamo->id_libro }}</td>
                        <td>{{ $prestamo->fecha_reserva }}</td>
                        <td>{{ $prestamo->estado }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
