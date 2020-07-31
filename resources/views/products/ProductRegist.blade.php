@extends('layouts.admin')
@section('content')

<div id="productRegist">
    <div class="container">
        <div class="alert alert-success topmargin-md content-center" role="alert">
            <b>Alerta!</b><br>
            Si no existe descuento en el producto ingresar el valor de 0.<br>
            El precio Actual se generara, el dato no debe ingresarse.
        </div>

        <form action="{{ route('product.store')}}" method="post" enctype="multipart/form-data" class="was-validated">
            @csrf
            @include('partials.formProduct',['ypes'=> $types, 'genders'=> $genders])

        </form>
    </div>

    <div class="atras">
        <a href="{{ route('adminHome')}}" class="todo">
            <i class="fas fa-angle-double-left my-atras"></i>
        </a>
    </div>
</div>

@endsection
