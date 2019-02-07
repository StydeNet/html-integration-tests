<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} {{ app()->version() }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css">
    </head>
    <body>
        <div id="app">
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <a class="navbar-item" href={{ url('/') }}>Styde\Html</a>

                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>

                <div id="navbarBasicExample" class="navbar-menu" >
                    {!! Menu::make('menu.main', 'navbar-start') !!}

                    <div class="navbar-end">
                            @if (Auth::guest())
                                <a class="navbar-item " href="{{ route('login') }}">Login</a>
                                <a class="navbar-item " href="{{ route('register') }}">Register</a>
                            @else
                                <div class="navbar-item has-dropdown is-hoverable">
                                    <a class="navbar-link" href="#">{{ Auth::user()->name }}</a>

                                    <div class="navbar-dropdown">
                                        <a class="navbar-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                </div>
            </nav>
            @yield('content')
        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>