
@extends('layouts.client')
@section('content')


    <div id="productocaballero">
        <div class="productoMostar">
            <div class="row">
                <div class="col-lg-9 col-md-12">
                    <div class="content-center">
                        <h1>CAMISAS</h1>
                        <div class="carusel">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <h6><i class="fas fa-tags" style="font-size: 20px; color: white"></i> -20%</h6>

                                    <div class="carousel-item active" style="height: 100vh">
                                        <img src="{{asset('product/img/'.$product->image1)}}" >
                                    </div>
                                    <div class="carousel-item" style="height: 100vh">
                                        <img src="{{asset('product/img/'.$product->image2)}}" >
                                    </div>
                                    <div class="carousel-item" style="height: 100vh">
                                        <img src="{{asset('product/img/' .$product->image3)}}" >
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12">
                    <div class="texto-detalles">
                        <h4 class="detalles">Detales del producto</h4>
                        <div class="row content-center texto">
                            <div class="col-md-12">
                                <h2>Camisa</h2><br>
                            </div>
                            <div class="col-md-12 col-6">
                                <h3>Talla <br>M</h3><br>
                            </div>
                            <div class="col-md-12 col-6">
                                <h6>Stock <br>2 uni.</h6><br>
                            </div>
                            <div class="col-md-12 col-6">
                                <h4>Antes <br>S/. <del>50</del></h4><br>
                            </div>
                            <div class="col-md-12 col-6">
                                <h5>Ahora <br>S/. 40</h5><br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="content topmargin-md">
            <div class="container">
                <h4>Producto más vendidos</h4>
                <div class="row">
                    <div class="col-sm-3 col-6 content-center">
                        <div class="caba">
                            <h6 class="desc"><i class="fas fa-tags"></i> -20%</h6>


                            <a href="" class="iconver">
                                <i class="fas fa-expand"></i> <br><h3>Ver</h3>
                            </a>
                            <img src="{{asset('image/camisa1.jpg')}}" alt=""/>
                            <div class="cuadrilla">
                                <h2>Camisa blanca</h2>
                                <div class="contenido">
                                    <div class="row content-center">
                                        <div class="col-md-6 col-6">
                                            <h3>Talla<br>S</h3>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <h6>Stock <br>1 uni.</h6>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <h5 >S/. 35</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="todocomentario">
            <a href="../woman" class="todo">
                <i class="fas fa-arrow-alt-circle-left my-todo"></i>
            </a>
        </div>

    </div>

@endsection
