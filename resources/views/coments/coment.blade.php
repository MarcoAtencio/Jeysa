

@extends('layouts.admin')
@section('content')

<div id="coment">
    <div class="contenedor">
        <h2>Lista de comentarios</h2>

        <table id="bnhombre" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha</th>
                <th scope="col">Comentario</th>
                <th scope="col">Eliminar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Marco</td>
                <td>26/07/2020</td>
                <td>Excelente pagina!!!</td>
                <td>
                    <a href="">
                        <i class="far fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>

    </div>


    <div class="atras">
        <a href="../Administrador" class="todo">
            <i class="fas fa-angle-double-left my-atras"></i>
        </a>
    </div>

</div>

@endsection
