@extends('master')
@section('content')
<section class="h-100 w-100 gradient-form d-flex justify-content-center align-items-center">
    <div class="container py-2">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-md-12">
                <div class="card rounded-3 text-black">
                            <div class="card-body p-md-5 mx-md-4 d-flex flex-column justify-content-center align-items-center">
                                <div class="text-center mb-5">
                                    <img src="{{ asset('storage/images/jandula.webp') }}" style="width: 185px;" alt="Logo Instituto Jándula">
                                </div>
                                <h4 class="mt-1 mb-4 pb-1 text-center">Bienvenido a la biblioteca del IES Jándula</h4>
                                <a href="{{ route('show_libros') }}" class="btn btn-outline-danger">Ver libros</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

@endsection
