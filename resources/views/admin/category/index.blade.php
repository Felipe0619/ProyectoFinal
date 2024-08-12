@extends('admin.layout.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header bg-secondary text-white">Categorías</div>



                <div class="card-body">

                    <div class="buttons level">
                        <div class="flex">

                            <a href="/category/create" class="btn btn-success btn-sm">Crear</a>

                        </div>
                    </div>

                    

                    <div class="table-responsive mt-4">

                        <table class="table">

                            <thead class="thead-light">

                                <tr>

                                    <th scope="col" style="background-color: lightgray;">#</th>

                                    <th scope="col" style="background-color: lightgray;">Nombre</th>

                                    <th scope="col" style="background-color: lightgray;">Descripción</th>

                                    <th scope="col" style="background-color: lightgray;"></th>

                                </tr>

                            </thead>

                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $category->id }}</td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->description }}</td>
                                        <td class="d-flex justify-content-center">
                                            <a class="mx-4" href="/category/{{ $category->id }}/edit">Editar</a>

                                            <form method="POST" action="{{ url('category/'. $category->id) }}" data-confirm="Estas Seguro?">

                                                @csrf

                                                {{ method_field('DELETE')}}

                                                <button type="submit" class="btn btn-danger btn-sm waves-effect">

                                                    Eliminar

                                                </button>

                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection