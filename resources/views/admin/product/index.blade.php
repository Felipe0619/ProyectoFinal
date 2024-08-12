@extends('admin.layout.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card">

                <div class="card-header bg-secondary text-white">Productos</div>



                <div class="card-body">

                    <div class="buttons level">
                        <div class="flex">

                            <a href="/product/create" class="btn btn-success btn-sm">Crear</a>

                        </div>
                    </div>

                    

                    <div class="table-responsive mt-4">

                        <table class="table">

                            <thead class="thead-light">

                                <tr>
                                    <th scope="col" style="background-color: lightgray;">#</th>

                                    <th scope="col" style="background-color: lightgray;">Nombre</th>

                                    <th scope="col" style="background-color: lightgray;">Categoría</th>

                                    <th scope="col" style="background-color: lightgray;">Marca</th>

                                    <th scope="col" style="background-color: lightgray;">Precio</th>

                                    <th scope="col" style="background-color: lightgray;">Cantidad</th>

                                    <th scope="col" style="background-color: lightgray;"></th>

                                </tr>

                            </thead>

                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>{{ $product->brand }}</td>
                                    <td>{{ $product->price }} </td>
                                    <td>{{ $product->stock }} </td>
                                    <td class="d-flex justify-content-center">
                                        <a class="mx-4" href="/product/{{ $product->id }}/edit">Editar</a>

                                        <form method="POST" action="{{ url('product/'. $product->id) }}" data-confirm="Estas Seguro?">

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