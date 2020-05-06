@extends('layout')

@section('content')
    <section class="section first_section" style="background-image: url('{{asset('assets/images/bg-principal.jpg')}}');">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center" data-column="first">
                    <div class="container_text">
                        <div class="title_section">OROGOLD</div>
                        <div class="slogan_title">Cuando belleza y glamour<br/> van de la mano</div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center" data-column="second">
                    <div class="card w-75">
                        <div class="card-body justify-content-center">
                            <h5 class="card-title">Reserva ahora tu cita</h5>
                            <form action="">
                                <input type="text" class="form-control" placeholder="nombre" />
                                <input type="email" class="form-control" placeholder="email" />
                                <input type="tel" class="form-control" placeholder="telefono" />
                                <div style="display: flex; justify-content: center;">
                                    <input type="button" class="btn btn-reservar" value="Reserva ahora">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section second_section">
        <div class="container" style="padding: 1em 0;">
            <div class="row text-center justify-content-center">
                <h1 class="title">NUESTROS TRATAMIENTOS</h1>
                <h5 class="subtitle">
                    El tratamiento de la casa de dos horas de duración transporta a los clientes a un oasis de relajación.
                    Incluye un masajede espalda, hombros, piernas y pies utilizando aceites de masaje.
                </h5>
            </div>
            <div class="row text-center">
                <div class="col-md-4" data-column="first">
                    <div class="container-img">
                        <img width="150" height="auto" src="{{asset('assets/images/photo-1516238840914-94dfc0c873ae.jpg')}}" alt="masajes de oro">
                    </div>
                    <h5 class="card-title">MASAJES DE ORO</h5>
                    <br>
                    <p>
                        <strong>SPA Orogold</strong> ofrece tratamientos especializados de la mano de nuestros
                        profesionales expertos, con productos excepcionales de marcas galardonadas.
                    </p>
                </div>
                <div class="col-md-4" data-column="second">
                    <div class="container-img">
                        <img width="150" height="auto" src="{{asset('assets/images/photo-1515377905703-c4788e51af15.jpg')}}" alt="masajes de oro">
                    </div>
                    <h5 class="card-title">EXFOLIACIÓN CON PRODUCTOS NATURALES</h5>
                    <p>
                        El tratamiento de la casa de dos horas de duración transporta a los clientes
                        a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies.
                    </p>
                </div>
                <div class="col-md-4" data-column="third">
                    <div class="container-img">
                        <img width="200" height="auto" src="{{asset('assets/images/photo-1552693673-1bf958298935.jpg')}}" alt="masajes de oro">
                    </div>
                    <h5 class="card-title">RECONSTRUCCIÓN FACIAL</h5>
                    <p>
                        El tratamiento de la casa de dos horas de duración transporta a los clientes
                        a un oasis de relajación. Incluye un masaje de espalda, hombros, piernas y pies.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section third_section" style="background-image: url('{{asset('assets/images/photo-1520473378652-85d9c4aee6cf.jpg')}}');">
        <div class="transbox">
            <div class="container-fluid">
                <div class="row flex-column justify-content-center align-items-center" data-column="first">
                    <h1>QUIENES SOMOS</h1>
                    <p>El lujoso spa en Orogold, en México, ofrece un refugio sumblime en pleno corazón de la ciudad</p>
                    <p>Los huéspedes pueden disfrutar de un gimnasio de última generación, una relajante sauna o duchas
                        a chorro durante su escapada de 5 estrellas en nuestro hotel boutique en París. Por otra parte, nuestra
                        nueva asociación con ZEAL COSMETICS asegura la disponibilidad de una gama de relajantes tratamientos faciales
                        y corporales para mimarse y revitalizarse.</p>
                </div>
                <div class="row">
                    <div class="owl-carousel">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1553540751-988bd7918c7e.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1554057009-6798cb3d4a04.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1560944527-a4a429848866.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1489659639091-8b687bc4386e.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1513104806186-1b00f3e7a65e.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1531853121101-cb94c8ed218d.jpg')}}">
                        <img width="auto" height="220px" src="{{asset('assets/images/photo-1555820585-c5ae44394b79.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth_section" style="background-color: #F8F8F8;">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div id="map" style="width: 700px; height: 350px;"></div>
                </div>
                <div class="col-md-4" data-column="second">
                    <div class="row">
                        <div class="col">
                            <h5>HORARIOS</h5>
                            <p>
                                Lunes a viernes de 10:00 a 19:30 <br>
                                Sábados, domingos y festivos de 10:00 a 18:30.
                            </p>
                            <p>
                                Pueden concertarse tratamientos fuera del horario de apertura indicado
                                con cita previa.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h5>DIRECCIÓN</h5>
                            <p>
                                Av. Insurgentes Sur 105, Roma Sur, Cuahutémoc, 06600 Ciudad de México,
                                CDMX, México
                            </p>
                            <button class="btn btn-outline-orogold_map">Ver en Mapa</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="fifth_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <img src="{{asset('assets/images/photo-1489659639091-8b687bc4386e.jpg')}}" alt="Imagen de test">
                </div>
            </div>
            <div class="row justify-content-center">
                <h5>NO DEJES PASAR ESTA OPORTUNIDAD</h5>
                <p class="text-center">
                    Sabías que un masaje debido a su acción calmante y análgesica viene dada mediante actos reflejos
                    que afectan al sistema nervioso central o esto causa liberación de endorfinas que anulan las sensaciones
                    de dolor en el cerebro. El estímulo de los mecanos receptores mediante el masaje se ha demostrado
                    que alivia el dolor y la tensión muscular.
                </p>
                <button class="btn btn-reservar">Reserva ahora</button>
            </div>
        </div>
    </section>
@endsection