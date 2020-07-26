@extends('layouts.admin')
@section('content')

<div id="employeeList">
    <div class="container">
        <table id="bnhombre"  class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Dni</th>
                <th scope="col">Nacimiento</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Editar</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Marca</td>
                <td>Atencio</td>
                <td>12345678</td>
                <td>21/01/1997</td>
                <td>978546321</td>
                <td>marco@marco.com</td>
                <td>
                    <a href="employeeUpdate">
                        <i class="fas fa-user-edit"></i>
                    </a>
                </td>
            </tr>
            </tbody>
        </table>


        <div class="atras">
            <a href="../Administrador" class="todo">
                <i class="fas fa-angle-double-left my-atras"></i>
            </a>
        </div>
    </div>
</div>

@endsection
