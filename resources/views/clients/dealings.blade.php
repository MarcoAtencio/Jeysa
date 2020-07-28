@extends('layouts.client')
@section('content')

    <div id="reparto">
        <div class="container">
            <h2>Nuestras zonas de entrega</h2>
            <h4>Las entregas se realizan en las zonas ya establecidas con un tiempo no mayor a 24 horas de la solicitud del producto.</h4>
            <div class="row">
                <div class="rep col-lg-6 col-md-12 col-6">
                    <div class="zona content-center">
                        <a href="https://www.google.com/maps/place/Royal+Plaza/@-11.9901018,-77.0627441,15z/data=!4m5!3m4!1s0x0:0xbb0f0c367f9dac4b!8m2!3d-11.9901018!4d-77.0627441" target="_blank">
                            <h3><i class="fas fa-map-marker-alt"></i> Royal Plaza</h3>
                            <img src="{{asset('image/royal.jpg')}}" alt=""/>
                            <p>Av. Carlos Izaguirre 287-289, Independencia 15311</p>
                        </a>
                    </div>
                </div>
                <div class="rep col-lg-6 col-md-12 col-6">
                    <div class="zona content-center">
                        <a href="https://www.google.com/maps/place/Mega+Plaza/@-11.9942378,-77.0612389,15z/data=!4m5!3m4!1s0x0:0x9d64f6794789376b!8m2!3d-11.9942378!4d-77.0612389" target="_blank">
                            <h3><i class="fas fa-map-marker-alt"></i> Mega plaza</h3>
                            <img src="{{asset('image/megaplaza.jpg')}}" alt=""/>
                            <p>Av. Alfredo Mendiola 3698, Independencia 15311</p>
                        </a>
                    </div>
                </div>
                <div class="rep col-lg-6 col-md-12 col-6">
                    <div class="zona content-center">
                        <a href="https://www.google.com/maps/place/Plaza+Norte/@-12.007004,-77.0582257,15z/data=!4m5!3m4!1s0x0:0x6a1b58f36fcc79a6!8m2!3d-12.007004!4d-77.0582257" target="_blank">
                            <h3><i class="fas fa-map-marker-alt"></i> Plaza Norte</h3>
                            <img src="{{asset('image/plazanorte.jpg')}}" alt=""/>
                            <p>Av. Tomas Valle, Independencia 15311</p>
                        </a>
                    </div>
                </div>
                <div class="rep col-lg-6 col-md-12 col-6">
                    <div class="zona content-center">
                        <a href="https://www.google.com/maps/dir/-11.9854853,-77.0449321/real+plaza+centro+civico/@-12.0172372,-77.0849736,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x9105c8c6c76e03e5:0x3e12ff686b901453!2m2!1d-77.0374173!2d-12.0567891" target="_blank">
                            <h3><i class="fas fa-map-marker-alt"></i> Real Plaza</h3>
                            <img src="{{asset('image/realplaza.jpg')}}" alt=""/>
                            <p>Av Inca Garcilaso de la Vega 1337, Cercado de Lima 15001</p>
                        </a>
                    </div>
                </div>
                <div class="rep col-md-12 col-12">
                    <div class="zona content-center">
                        <a href="https://www.google.com/maps/place/Terminal+Naranjal/@-11.9829536,-77.0585582,15z/data=!4m5!3m4!1s0x0:0x12bbd1f2cb562071!8m2!3d-11.9829536!4d-77.0585582" target="_blank">
                            <h3><i class="fas fa-map-marker-alt"></i> Estaciones del Metropolitano</h3>
                            <img src="{{asset('image/metropolitano.jpg')}}" alt=""/>
                            <p>Av. Tupac Amaru, Independencia 15332</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
