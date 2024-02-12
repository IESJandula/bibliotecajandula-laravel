@extends('master')

@section('content')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Lista de multas</h5>
                    <small class="text-muted float-end">Lista de multas</small>
                </div>
                <div class="card-body">
                    @if($multas->count() > 0)
                        <ul class="list-group">
                            @foreach($multas as $multa)
                                <li class="list-group-item">
                                    <strong>ID de usuario:</strong> {{ $multa->id_usuario }} <br>
                                    <strong>Motivo:</strong> {{ $multa->motivo }} <br>
                                    <strong>Cantidad:</strong> {{ $multa->cantidad }} <br>
                                    <strong>Id de préstamo:</strong> {{ $multa->id_prestamo }} <br>
                                    <strong>Estado:</strong> {{ $multa->estado }} <br>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No hay multas disponibles.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
