@extends('../layouts/plantillaL')
@section('contenido')
    
@if (session('status'))
<div class="mb-4 font-medium text-sm text-green-600">
    {{ session('status') }}
</div>
@endif
    <div class="container">
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group text-center">
                                <h2>INICIAR SESION</h2>
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                </svg>
                            </div>
                            <div class="form-group">
                                <label for="email" value="{{ __('Email') }}">Email</label>
                                <input type="email" name="email" id="email" class="form-control" :value="old('email')" required autofocus aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="password" value="{{ __('Password') }}">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control" :value="old('password')" autocomplete="current-password" required autofocus aria-describedby="helpId">
                            </div>
                            <div class="form-group">
                                <label for="remember_me" class="flex items-center">
                                    <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('recuerdame') }}</span>
                                </label>
                            </div>
                            <div class="form-group">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('olvidaste su contraseña?') }}
                                    </a>
                                @endif
                            </div>
                            <button type="submit" name="" id="" class="btn btn-primary" btn-lg btn-block">{{ __('iniciar sesion') }}</button>
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