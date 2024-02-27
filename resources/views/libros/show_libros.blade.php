@extends('master')

@section('content')
    <h1 class="text-center mt-4 mb-5">Listado de Libros</h1>
    <div class="row mb-5 p-4">
        @foreach($libros as $libro)
            <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100 p-3 shadow" style="max-width: 60%;">
                    <img class="card-img-top img-fluid" src="{{ asset('storage/images/' . $libro->poster) }}" alt="Card image cap" style="max-height: 15rem;">
                    <div class="mt-3">
                        <h5 class="card-title" style="font-size: 1.2rem;">{{ $libro->titulo }}</h5>
                        <p class="card-text" style="font-size: 0.9rem;">
                            <!-- Add your book description here if available -->
                        </p>
                        <a href="{{ route('show_libro', ['id' => $libro['id']]) }}" class="btn btn-outline-primary btn-sm">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
