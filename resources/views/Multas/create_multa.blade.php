@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="container mt-4">
      <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Crear Multa</h5>
              <small class="text-muted float-end">Crear Multa</small>
            </div>
            <div class="card-body">
              <form action="{{ route('create_multa_post') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label class="form-label" for="motivo">Motivo</label>
                  <input type="text" class="form-control" name="motivo" id="motivo" placeholder="motivo"  />
                  {{-- Mostrar mensajes de error para el campo 'motivo' --}}
                     @if($errors->has('motivo'))
                      <span class="text-danger">{{ $errors->first('motivo') }}</span>
                     @endif
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cantidad">Cantidad</label>
                  <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="cantidad"  />
                  {{-- Mostrar mensajes de error para el campo 'cantidad' --}}
                  @if($errors->has('cantidad'))
                    <span class="text-danger">{{ $errors->first('cantidad') }}</span>
                  @endif
                </div>
                <input type="hidden" name="id_usuario" id="id_usuario" value="{{$usuario->id}}">
                <input type="hidden" name="id_prestamo" id="id_prestamo" value="{{$prestamo->id}}">
                <button type="submit" class="btn btn-primary">Generar multa</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    
@endsection