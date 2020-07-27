
@extends('layouts.admin')
@section('content')

<div id="principal">
    <h1>JAYSA 21</h1>

</div>

<section class="botones">
    <div class="row">
        <a href="{{route('product.create')}}" class="botonrigth varones col-md-4">
            <div class="row">
                <div class="col-md-8">
                    <h2>Registar producto varón</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-edit"></i>
                </div>
            </div>
        </a>
        <a href="{{route('product.index')}}"  class="boton varones col-md-4">
        <div class="row">
            <div class="col-md-8">
                <h2>Actualizar producto varón</h2>
            </div>
            <div class="col-md-4">
                <i class="fas fa-user-tag"></i>
            </div>
        </div>
        </a>
        <a href="Administrador/ProductDelete" class="botonrigth varones col-md-4">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar producto varón</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-trash-alt"></i>
                </div>
            </div>
        </a>
        <a href="{{route('employee.create')}}" class="boton productos col-md-3">
            <div class="row">
                <div class="col-md-8">
                    <h2>Registrar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
        </a>
        <a href="{{route('employee.index')}}" class="botonrigth productos col-md-3">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-edit"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/employeeDelete" class="boton productos col-md-3">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-times"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/Coment" class="botonrigth comentario col-md-3">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar comentario</h2>
                </div>
                <div class="col-md-4">
                    <i class="far fa-comments"></i>
                </div>
            </div>
        </a>
    </div>
</section>

@endsection
