@extends('master')
@section('content')
    <!-- Basic Layout -->
    <div class="row">
        <div class="col-xl">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h5 class="mb-0">Crear libro</h5>
              <small class="text-muted float-end">Crear libro</small>
            </div>
            <div class="card-body">
              <form>
                <div class="mb-3">
                  <label class="form-label" for="titulo">Titulo</label>
                  <input type="text" class="form-control" id="titulo" placeholder="Titulo" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="isbn">ISBN</label>
                  <input type="text" class="form-control" id="isbn" placeholder="ISBN" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="anyo_publicacion">Año publicacion</label>
                  <input type="year" class="form-control" id="anyo_publicacion" placeholder="Año publicacion" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="editorial">Editorial</label>
                  <input type="text" class="form-control" id="editorial" placeholder="Editorial" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="genero">Genero</label>
                  <input type="text" class="form-control" id="genero" placeholder="Genero" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="num_paginas">Numero de paginas</label>
                  <input type="number" class="form-control" id="num_paginas" placeholder="Numero de paginas" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cant_total">Cantidad total</label>
                  <input type="number" class="form-control" id="cant_total" placeholder="Cantidad total" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="cant_disponible">Cantidad disponible</label>
                  <input type="number" class="form-control" id="cant_disponible" placeholder="Cantidad disponible" />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="estanteria">Estanteria</label>
                  <input type="text" class="form-control" id="estanteria" placeholder="Estanteria" />
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
              </form>
            </div>
          </div>
        </div>
@endsection