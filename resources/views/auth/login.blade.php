@extends('layouts.app')

@section('content')
<div class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100 mt-5">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card text-white" style="border-radius: 1rem; background-color: #000232">
                    <div class="card-header fw-bold mb-2  text-center"><h3>Bienvenida</h3></div>
                    <div class="card-body px-5 text-center">
                        <form method="POST" action="{{ route('signup') }}">
                            @csrf
                            <div class="pb-4">
                                <img class="login-img rounded-circle" src="{{ asset('files/img/img-02.jpg') }}"/>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-start">Usuario</label>
                                <div class="col">
                                    <input id="username" class="form-control transparent-input @error('password') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-start">Contraseña</label>
                                <div class="col">
                                    <input id="password" type="password" class="form-control transparent-input @error('password') is-invalid @enderror" name="password" required>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div>
                                    <button type="submit" class="btn btn-outline-primary">Ingresar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
