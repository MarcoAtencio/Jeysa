@extends('layouts.client')
@section('content')

    <div id="principal">
        <section id="home">
            <h1>JEYSA 21</h1>
            <p>Ropa a tu alcance y al mejor precio, conoce nuestros prodcutos y la entrega sera en menos de 24 horas.</p>
            <div class="container">
                <h4>Nuestras redes sociales</h4>
                <div class="row" align="center">
                    <div class="col-md-4 col-4"></div>
                    <div class="col-md-2 col-2">
                        <a href="https://www.facebook.com/JEYSA-21-101644014948245/" target="_blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                    </div>
                    <div class="col-md-2 col-2">
                        <a href="https://www.instagram.com/_jeysa_21/?igshid=jlxzqz9gp2z3" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <div style="height: 200px; overflow: hidden;" class="ondas"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C299.94,226.47 305.58,2.47 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
        <section id="service">
            <h2>Servicios</h2>
            <div class="container">
                <div class="row">
                    <div class="servicio col-md-6 col-6">
                        <a href="{{route('man.index')}}" class="content-center">
                            <div class="ser">
                                <img src="image/hombre.png" alt=""/>
                                <h3>Caballeros</h3>
                                <p>Productos para tallas S - M - L - XL</p>
                            </div>
                        </a>
                    </div>
                    <div class="servicio col-md-6 col-6">
                        <a href="woman" class="content-center">
                            <div class="ser">
                                <img src="image/mujer.png" alt=""/>
                                <h3 style="color: red">Damas</h3>
                                <p>Productos para tallas XS - M - L</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
