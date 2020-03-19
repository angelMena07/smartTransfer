<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <title>SmartTransfers</title>
        <link rel="icon" type="img/png" href="{{ asset('assets/img/smart.png') }}"/>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">


    </head>
    <body>

            @yield('sidebar')


        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div>
                @yield('content')
            </div>

        </div>
        <footer>
            @extends('includes.footer')
        </footer>

    </body>
</html>
