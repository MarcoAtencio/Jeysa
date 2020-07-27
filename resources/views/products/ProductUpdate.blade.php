@extends('layouts.admin')
@section('content')

    <div id="productUpdate">
        <div class="container">
            <div class="alert alert-success topmargin-md content-center" role="alert">
                <b>Alerta!</b><br>
                Si no existe descuento en el producto ingresar el valor de 0.<br>
                El precio Actual se generara, el dato no debe ingresarse.
            </div>

            <form action="{{ route('product.update',$product->id)}}" method="post" enctype="multipart/form-data" class="was-validated">
                @csrf
                @method('patch')
                @include('partials.formProduct')

            </form>
        </div>

        <div class="atras">
            <a href="../Administrador" class="todo">
                <i class="fas fa-angle-double-left my-atras"></i>
            </a>
        </div>
    </div>

@endsection
