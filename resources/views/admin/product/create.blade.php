@extends('admin.layout.app')


@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header bg-secondary text-white">Crear Producto</div>



                <div class="card-body">

                    <form action="{{ url('product') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        
                        @include('admin.product.form.form')

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection