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
                    <th scope="col">Precio Anterior</th>
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

                <tr>
                    <td></td>
                    <td></td>
                    <td>Polos</td>
                    <td>M</td>
                    <td>50</td>
                    <td>20 %</td>
                    <td>40</td>
                    <td>5</td>
                    <td>Imagen1</td>
                    <td>Imagen2</td>
                    <td>Imagen3</td>
                    <td>activo</td>
                    <td>
                        <a href="ProductUpdate">
                            <i class="far fa-edit"></i>
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
