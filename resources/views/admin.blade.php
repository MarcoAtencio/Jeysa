
@extends('layouts.admin')
@section('content')

<div id="principal">
    <h1>JAYSA 21</h1>

</div>

<section class="botones">
    <div class="row">
        <a href="" class="boton productos col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Registrar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-plus"></i>
                </div>
            </div>
        </a>
        <a href="" class="botonrigth productos col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-edit"></i>
                </div>
            </div>
        </a>
        <a href="" class="boton productos col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar usuario</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-times"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/ProductRegist" class="botonrigth varones col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Registar producto varón</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-edit"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/ProductList" class="boton varones col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar producto varón</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-tag"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/ProductDelete" class="botonrigth varones col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar producto varón</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-trash-alt"></i>
                </div>
            </div>
        </a>


        <a href="#" class="botonrigth damas col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Registar producto dama</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-edit"></i>
                </div>
            </div>
        </a>
        <a href="#" class="boton damas col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Actualizar producto dama</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-user-tag"></i>
                </div>
            </div>
        </a>
        <a href="#" class="botonrigth damas col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar producto dama</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-trash-alt"></i>
                </div>
            </div>
        </a>
        <a href="Administrador/Coment" class="boton comentario col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>Eliminar comentario</h2>
                </div>
                <div class="col-md-4">
                    <i class="far fa-comments"></i>
                </div>
            </div>
        </a>
        <a href="#" style="cursor: context-menu;" class="botonrigth col-md-2" >
            <div class="row">
                <div class="col-md-8">
                    <h2>No disponible</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-times-circle"></i>
                </div>
            </div>
        </a>
        <a href="#" style="cursor: context-menu;" class="boton col-md-2">
            <div class="row">
                <div class="col-md-8">
                    <h2>No disponible</h2>
                </div>
                <div class="col-md-4">
                    <i class="fas fa-times-circle"></i>
                </div>
            </div>
        </a>
    </div>
</section>

@endsection
