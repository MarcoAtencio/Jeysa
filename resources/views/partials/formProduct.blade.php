@php
    // listado
    $type  = ["pantalon",
    "camisa",
    "polo"];

    $gender  = ["male",
    "female"];
@endphp

<div class="form-group row">
    <label class="col-sm-2 col-form-label">Nombres</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="name" required="" placeholder="Ingrese nombre.." value="{{ isset($product->name ) ? $product->name  : '' }}"/>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Descripcion</label>
    <div class="col-sm-10">
        <textarea class="form-control" name="description" required="" placeholder="Ingrese descripcion.." >{{ isset($product->description ) ? $product->description  : '' }}</textarea>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Tipo</label>
    <div class="col-sm-10">
        <select class="custom-select is-invalid" name="type">
            @foreach($type as $item)
                <option value="{{ $item }}" selected="{{($product->ID_Type?? '' == $item) ? 'selected' :''}}" >{{ $item }}</option>
            @endforeach

        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Genero</label>
    <div class="col-sm-10">
        <select class="custom-select is-invalid" name="gender">
            @foreach($gender as $item)
                <option value="{{ $item }}"  selected="{{($product->ID_Gender ?? ''== $item) ? 'selected' : ''}}">{{ $item }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="form-group row">
    <label class="col-sm-2 col-form-label">Precio anterior</label>
    <div class="col-sm-10">
        <div class="input-group is-invalid">
            <input type="text" class="form-control" name="price" required="" placeholder="Ingrese precio anterior.." value="{{ isset($product->price) ? $product->price : '' }}"/>
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
            <input type="text" class="form-control" name="discount" required="" placeholder="Ingrese el descuento.." value="{{ isset($product->discount) ? $product->discount : '' }}"/>
            <div class="input-group-prepend">
                <span class="input-group-text" id="validatedInputGroupPrepend">%</span>
            </div>
        </div>
    </div>
</div>

<div class="row imag">
    <label class="col-sm-4"><b>Seleccione las imagenes</b></label>
    <div class="form-group col-md-12">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo1" required />
            <label class="custom-file-label" for="validatedCustomFile">Ingrese la primera imagen...</label>
            <div class="invalid-feedback">Imagen aun no seleccionada</div>
        </div>
    </div>

    <div class="form-group col-md-12">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo2" required/>
            <label class="custom-file-label" for="validatedCustomFile">Ingrese la segunda imagen...</label>
            <div class="invalid-feedback">Imagen aun no seleccionada</div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="photo3" required/>
            <label class="custom-file-label" for="validatedCustomFile">Ingrese la tercera imagen...</label>
            <div class="invalid-feedback">Imagen aun no seleccionada</div>
        </div>
    </div>

    <div class="btnregistrar">
        <button class="btnreg btn btn-dark" name="accion" value="Registrar">Registrar</button>
    </div>
</div>
