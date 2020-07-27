@extends('layouts.client')
@section('content')

<div id="comentarios">
    <h1>Comentarios</h1>
    <h2>Tu comentario es fundamental para la mejora de nuestro servicio.</h2>

    <div class="container">
        <div class="formcomentario">
            <form action="" method="post">
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" placeholder="Escribe tu nombre" required=""/>

                <label>Comentario</label>
                <textarea class="form-control" name="comentario" placeholder="Escribe tu comentario..." required=""></textarea>
                <input type="submit" class="btn btn-dark" name="accion" value="Comentar"/>
            </form>
        </div>
    </div>

    <div class="listacomentario">
        <h2>Lista de comentarios</h2>

        <div class="coment">
            <h3></h3>
            <p></p>
            <h5></h5>
        </div>
    </div>

    <div class="todocomentario">
        <a href="" class="todo">
            <i class="fas fa-angle-double-up my-todo"></i>
        </a>
    </div>
</div>

@endsection
