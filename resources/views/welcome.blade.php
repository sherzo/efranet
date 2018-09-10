<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        {{-- <div class="row">
            <div class="col-md-12">
                
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Area de clientes</a>
                        @else
                            <a href="{{ route('login') }}">Iniciar sesión</a>
                            <a href="{{ route('register') }}">Registrase</a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>
 --}}

        <div id="app">
            <app></app>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
