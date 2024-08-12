@extends('admin.layout.app')


@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card">

                <div class="card-header bg-secondary text-white">Crear Categoría</div>



                <div class="card-body">

                    <form action="{{ url('category') }}" method="POST">

                        @csrf
                        
                        @include('admin.category.form.form')

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection