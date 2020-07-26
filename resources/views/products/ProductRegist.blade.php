@extends('layouts.admin')
@section('content')

<div id="productRegist">
    <div class="container">
        <div class="alert alert-success topmargin-md content-center" role="alert">
            <b>Alerta!</b><br>
            Si no existe descuento en el producto ingresar el valor de 0.<br>
            El precio Actual se generara, el dato no debe ingresarse.
        </div>

        <form action="#" method="post" enctype="multipart/form-data" class="was-validated">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombres</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="txtnombre" required="" placeholder="Ingrese nombre.."/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tipo</label>
                <div class="col-sm-10">
                    <select class="custom-select is-invalid">
                        <option name="0">Prueba</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Talla</label>
                <div class="col-sm-10">
                    <select class="custom-select is-invalid">
                        <option name="0">Prueba</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Precio anterior</label>
                <div class="col-sm-10">
                    <div class="input-group is-invalid">
                        <input type="text" class="form-control" name="txtprecioanterior" required="" placeholder="Ingrese precio anterior.."/>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">S/.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Descuento</label>
                <div class="col-sm-10">
                    <div class="input-group is-invalid">
                        <input type="text" class="form-control" name="txtdescuento" required="" placeholder="Ingrese el descuento.."/>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <div class="input-group is-invalid">
                        <input type="text" class="form-control" name="txtstock" required="" placeholder="Ingrese la cantidad.."/>
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validatedInputGroupPrepend">uni.</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row imag">
                <label class="col-sm-4"><b>Seleccione las imagenes</b></label>
                <div class="form-group col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" required/>
                        <label class="custom-file-label" for="validatedCustomFile">Ingrese la primera imagen...</label>
                        <div class="invalid-feedback">Imagen aun no seleccionada</div>
                    </div>
                </div>

                <div class="form-group col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fileFoto2" required/>
                        <label class="custom-file-label" for="validatedCustomFile">Ingrese la segunda imagen...</label>
                        <div class="invalid-feedback">Imagen aun no seleccionada</div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="fileFoto3" required/>
                        <label class="custom-file-label" for="validatedCustomFile">Ingrese la tercera imagen...</label>
                        <div class="invalid-feedback">Imagen aun no seleccionada</div>
                    </div>
                </div>

                <div class="btnregistrar">
                    <button class="btnreg btn btn-dark" name="accion" value="Registrar">Registrar</button>
                </div>
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
