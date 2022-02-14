@extends('layouts.app')

@section('content')
<div class="main-container">
    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container px-md-5">
                <img src="{{ asset('files/img/Amorcito.png') }}" alt=""  class="main-name card-border">
                <h1 class="masthead-heading mb-0">Feliz Día del Cariño!</h1>
                {{-- <h2 class="masthead-subheading mb-0">Te Amo</h2> --}}
                <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#mainCard">Me Amas?</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>
    <div class="content">
        <section id="mainCard">
            <div class="container px-sm-5">
                <div class="row gx-sm-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('files/img/valentines3.jpg') }}"/></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-sm-3 p-md-5">
                            <h2 class="display-4">Preciosa</h2>
                            <p>
                                Mi amorcito lindo hoy es un día muy especial para mí, quiero recordarte lo mucho que Te Amo y que me encanta todo de ti. 
                                Tu carita toda preciosa, sabes que me gustas muchísimo mi hermosa. Tú eres perfecta para mí cielo y no te cambiaría por nada mi amor.
                            </p>
                            <a class="btn btn-primary btn-xl rounded-pill mt-md-5" href="#secondCard">Te gusto?</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>
        <section id="secondCard">
            <div class="container px-sm-5">
                <div class="row gx-sm-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="pt-4 p-sm-5">
                            <img src="{{ asset('files/img/collage.jpg') }}" class="main-image card-border img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pt-4 p-sm-3 p-md-5">
                            <p>
                                Quiero recordarte todos los momentos tan lindos que hemos tenido mi amor. Hice esto con mucho esfuerzo para ti mi vida, sé que estamos pasando una etapa difícil y que no podemos estar juntos. 
                                Pero sabes que siempre estaré para ti mi vida. Te amo con todo mi corazón mi vida, te agradezco todo lo que haces por mí. Te juro que contigo me siento tan diferente amor, como con nadie más. 
                                Tú me haces ser una mejor persona y te agradezco tanto por eso mi vida hermosa. Todo este tiempo me ha servido para entenderte mejor, hacer lo mejor para ti, porque tú eres lo mejor de mi vida. 
                                Me haces tanta falta pero sé que tenemos toda la vida para estar juntos, quiero que tú y yo siempre estemos juntos amor. Espero que te guste este regalo para ti mi vida, quiero demostrarte lo mucho que te quiero con lo poquito que sé mi amor. 
                                Quiero alegrarte y que sea un día muy especial mi vida, que lo recuerdes con mucho cariño preciosa. Te amo mucho cielito.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<footer class="py-5 bg-black">
    <div class="container px-5"><p class="m-0 text-center text-white small">Hecho con Amor por @cris_gf</p></div>
</footer>
@endsection
