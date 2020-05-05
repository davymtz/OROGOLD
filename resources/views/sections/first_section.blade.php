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
        <div class="container" style="padding: 2em 0;">
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
@endsection