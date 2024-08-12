@extends('web.layout.app')

@section('content')
<div class="container d-flex justify-content-center mt-4">
    <div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header bg-secondary text-white">Información del producto</div>



                <div class="card-body" >

                    <div class="d-flex justify-content-end">
                        <a href="/" style="text-decoration:none; color:white;" class="btn btn-sm btn-info">Regresar</a>
                    </div>

                    <h2 class="mb-4">{{ $product->name }}</h2>

                    @if (isset($product))
                        <div class="d-flex justify-content-center items-center">
                            <img src="{{ asset('storage/' . $product['img_url']) }}" style="width: 200px; height:200px;" alt="">
                        </div>
                    @endif
                    
                    <div class="mb-4">
                        <h4>Categoría: {{ $product->category->name }}</h4>
                    </div>

                    <div class="mb-4">
                        <h4>Marca: {{ $product->brand }}</h4>
                    </div>

                    <div class="mb-4">
                        <h4>Disponible: {{ $product->stock }}</h4>
                    </div>

                    <div class="mb-4">
                        <h4>Descripción:</h4>
                        <p>{{  $product->description }}</p>
                    </div>
                </div>

            </div>

        </div>

    </div>

    </div>
</div>
@endsection