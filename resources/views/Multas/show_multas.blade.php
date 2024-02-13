@extends('master')

@section('content')
<div class="card">
    <h5 class="card-header">Mostrar multas</h5>
    <div class="table-responsive text-nowrap">
        <table class="table">
            <thead>
                <tr>
                    <th>Id de usuario</th>
                    <th>Motivo</th>
                    <th>Cantidad</th>
                    <th>Id de préstamo</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($multas as $multa)
                <tr>
                    <td>{{ $multa->id_usuario }}</td>
                    <td>{{ $multa->motivo }}</td>
                    <td>{{ $multa->cantidad }}</td>
                    <td>{{ $multa->id_prestamo }}</td>
                    <td>{{ $multa->estado }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
