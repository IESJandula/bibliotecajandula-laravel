@extends('master')

@section('content')
<div class="card mt-3">
    <h5 class="card-header text-center">Listado de multas</h5>
    <div class="table-responsive text-nowrap">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Id de usuario</th>
                    <th>Motivo</th>
                    <th>Cantidad</th>
                    <th>Id de préstamo</th>
                    <th>Estado</th>
                    <th>Pagar</th>
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
                    <td>
                        @if($multa->estado !== 'PAGADO')
                            <form action="{{ route('update_multa', ['id' => $multa['id']]) }}" method="post">
                            @method('PUT')
                            @csrf
                            <button type="submit" class="btn btn-warning">Pagar Multa</button>
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
