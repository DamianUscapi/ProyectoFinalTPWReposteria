@extends('../layouts/plantillaL')
@section('contenido')
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group text-center">
                                <h2>REGISTRAR USUARIO</h2>
                            </div>
                            <div class="form-group">
                                <label for="name" value="{{ __('nombre') }}">Nombre</label>
                                <input type="text" name="name" id="name" class="form-control" :value="old('name')" required autofocus autocomplete="name" aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}">Email</label>
                                <input type="email" name="email" id="email" class="form-control" :value="old('email')" required aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" :value="old('password')" autocomplete="new-password" required aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirmar Contraseña</label>
                                <input type="password" name="password_confirmation" id="password" class="form-control" autocomplete="new-password" required aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                    {{ __('ya registrado?') }}
                                </a>
                            </div>
                            <button type="submit" class="btn btn-primary" btn-lg btn-block">{{ __('Register') }}</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card imgL">
                    <div class="card-body">
                        <img src="{{asset('img/logoF.png')}}" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
