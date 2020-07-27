@extends('layouts.admin')
@section('content')

    <div id="productList">
        <div class="contenedor">

            <table id="bnhombre" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Talla</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Precio Actual</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Editar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->id }}</td>
                    <td>M</td>
                    <td>{{ $product->description }}</td>
                    <td>20 %</td>
                    <td>{{ $product->price }}</td>
                    <td>5</td>
                    <td>{{$product->imagen1}}</td>
                    <td>{{$product->imagen2}}</td>
                    <td>{{$product->imagen3}}</td>
                    <td>activo</td>
                    <td>
                        <a href="ProductUpdate">
                            <i class="far fa-edit"></i>
                        </a>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>




            {{ $products->links() }}

    </div>

@endsection
