@extends('layouts.admin')
@section('content')

    <div id="employeeRegist">
        <div class="container">

            <div class="alert alert-success topmargin-lg content-center" role="alert">
                <b>Alerta!</b> la contraseña debe tener como minimo <u>6 caracteres</u>.
            </div>

            <form action="RegistroUsuario" method="post" class="was-validated">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nombres</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtnombre" required="" placeholder="Ingrese nombre.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Apellidos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtapellidos" required="" placeholder="Ingrese apellidos.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Dni</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" maxlength="8" name="txtdni" required="" placeholder="Ingrese numero de dni.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nacimiento</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" name="txtnacimiento" required="" placeholder="Ingrese fecha de nacimiento.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="txttelefono" required="" placeholder="Ingrese numero de telefono.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Correo</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" name="txtcorreo" required="" placeholder="Ingrese direccion electronica.."/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtpassword" required="" placeholder="Ingrese contraseña"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Rep Password</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="txtreppassword" required="" placeholder="Vuelva a escribir la contraseña"/>
                    </div>
                </div>
                <div class="btnregistrar">
                    <input type="submit" class="btnreg btn btn-dark" name="btnRegistrar" value="Registrar" />
                </div>

            </form>
        </div>

        <div class="atras">
            <a href="../Administrador" class="todo">
                <i class="fas fa-angle-double-left my-atras"></i>
            </a>
        </div>
    </div>

@endsection
