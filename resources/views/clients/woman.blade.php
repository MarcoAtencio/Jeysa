@extends('layouts.client')
@section('content')


    <div id="caballeros">
        <h1>Productos para damas</h1>

        <div class="contenedor">
            <div class="row">
                <div class="filtro col-lg-3 col-md-4 col-12">
                    <div class="filtrocuadro">
                        <h3>Filtre su producto</h3>

                        <label>Tipo de producto</label>
                        <div id="divtipoM">
                            <select class="form-control">
                                <option value="0">Todo</option>
                                <option value="1">Pantalon</option>
                                <option value="2">Camisa</option>
                                <option value="3">Polo</option>
                            </select>
                        </div>

                        <label>Talla</label>
                        <div id="divtallaM">
                            <select class="form-control">
                                <option value="0">Todo</option>
                                <option value="1">M</option>
                                <option value="2">L</option>
                                <option value="3">XL</option>
                            </select>
                        </div>

                        <div class="content-center topmargin-sm">
                            <input type="button" class="btnfiltrar btn btn-outline-success" value="Filtrar" onclick="FiltrarM()"/>
                        </div>

                    </div>
                </div>

                <div id="divcatalogoM" class="col-lg-9 col-md-8 col-12">
                    <div class="row">

                        <div class="productos">
                            <div class="row">

                            @foreach($products as $product)
                                <div class="col-lg-4 col-md-6 col-6 content-center">
                                    <div class="cab">
                                        <h6><i class="fas fa-tags"></i> {{ $product->discount }}%</h6>
                                        <a href="https://jeysa21.herokuapp.com/woman/{{$product->id}}"  class="iconver">
                                            <i class="fas fa-expand"></i> <br><h3>Ver</h3>
                                        </a>
                                        <img src="https://jeysa21.herokuapp.com/product/img/{{$product->image1}}"  alt=""/>
                                        <div class="cuadrilla">
                                            <h2>{{ $product->name }}</h2>
                                            <div class="contenido">
                                                <div class="row content-center">
                                                    <div class="col-md-6">
                                                        <h3>Talla M</h3>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <p>Stock 1 uni.</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h4>Antes <br>S/. <del>{{ $product->price }}</del></h4>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $des = ($product->price*$product->discount)/100 }}
                                                        {{ $precio = $product->price - $des}}
                                                        <h5>Ahora <br>S/. {{$precio}}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>


@endsection
