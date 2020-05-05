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
@endsection