@extends('master')
@section('content')
    <div class="card mt-3">
        <h5 class="card-header text-center">Listado de reservas</h5>
        <div class="table-responsive text-nowrap">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>ID Reserva</th>
                        <th>ID Usuario</th>
                        <th>ID Libro</th>
                        <th>Fecha de Reserva</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>{{ $reserva->id_usuario }}</td>
                        <td>{{ $reserva->id_libro }}</td>
                        <td>{{ $reserva->fecha_reserva }}</td>
                        <td>{{ $reserva->estado }}</td>
                        <td>
                        @if($reserva['estado'] !== 'CANCELADO')
                            <form action="{{ route('reserva_update', ['id' => $reserva['id']] ) }}" method="post" class="d-inline-block">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-primary mb-2">Cancelar reserva</button>
                            </form>
                            <form action="{{ route('create_prestamo', ['id' => $reserva->id_libro, 'user_id' => Auth::id(), 'id_reserva' => $reserva->id ])}}" method="post" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-primary mb-2">Generar préstamo</button>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
