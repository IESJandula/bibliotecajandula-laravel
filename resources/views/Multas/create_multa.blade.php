@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Crear multa</h5>
              <small class="text-muted float-end">Crear multa</small>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="motivo">Motivo</label>
                  <input type="text" class="form-control" id="motivo" name="motivo" placeholder="Expon el motivo de la multa" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cantidad">Cantidad</label>
                  <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="Cantidad a pagar" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="estado">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado de la multa" />
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
@endsections