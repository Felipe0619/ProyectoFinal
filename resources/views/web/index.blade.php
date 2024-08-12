@extends('web.layout.app')

@section('content')
    <div class="container-store">
        <div class="categories-container">
            <div class="categories-card">
                <span>Todas las Categorías</span>
                <form method="GET" action="{{url('/')}}">
                    <div class="categories">
                        @if(count($categories) > 0)
                            @foreach ($categories as $category)
                                <div>
                                    <input type="checkbox" name="category[]" value="{{ $category['id'] }}" {{ in_array($category['id'], $search) ? 'checked' : '' }} />
                                    <label for="scales">{{ $category['name'] }}</label>
                                </div>
                            @endforeach
                        @else 
                            <p style="font-size: 15px; margin-top:20px;">No hay categorías disponibles</p>
                        @endif
                    </div>
                    <button class="btn btn-sm btn-success mt-2">Filtrar</button>
                </form>
            </div>
        </div>

        <div class="products-container">
            <div class="products-card">
                <div class="products">
                    <h1>Todos Nuestros Productos</h1>

                    <div class="product-search">
                        <!-- <input type="text" name="search" placeholder="buscar..."> -->
                    </div>
                    
                    <div class="all-products">
                        @if (count($products) > 0)
                            @foreach ($products as $product)
                                <a class="product-item" style="text-decoration:none; color: black;" href="/show/{{$product['id']}}">
                                    <img class="product-img" 
                                    src="{{ asset('storage/' . $product['img_url']) }}" 
                                    alt="">
                                    <div class="product-information">
                                        <span>{{ $product['category']['name'] }}</span>
                                        <span class="product-title">{{ $product['name'] }}</span>
                                        <span class="product-brand">Marca: {{ $product['brand'] }}</span>
                                    </div>

                                    <h2>CRC {{ $product['price'] }}</h2>
                                </a>
                            @endforeach
                        @else
                            <h1 style="font-size:30px;">No hay productos agregados!</h1>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection