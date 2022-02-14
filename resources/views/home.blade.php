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
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ex consectetur aperiam doloremque ipsa dolores pariatur iusto assumenda perferendis ea fugit dolorum doloribus impedit vitae debitis quisquam ab, alias voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ex consectetur aperiam doloremque ipsa dolores pariatur iusto assumenda perferendis ea fugit dolorum doloribus impedit vitae debitis quisquam ab, alias voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ex consectetur aperiam doloremque ipsa dolores pariatur iusto assumenda perferendis ea fugit dolorum doloribus impedit vitae debitis quisquam ab, alias voluptate.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita ex consectetur aperiam doloremque ipsa dolores pariatur iusto assumenda perferendis ea fugit dolorum doloribus impedit vitae debitis quisquam ab, alias voluptate.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<footer class="py-5 bg-black">
    <div class="container px-5"><p class="m-0 text-center text-white small">Hecho con Amor por Cristian González</p></div>
</footer>
@endsection
