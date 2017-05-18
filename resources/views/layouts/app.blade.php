<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>
    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    
    <style>
        body {
            background-color: white;
        }
        .layoutLogo img {
            height: 50px;
            margin: 10px 0px;
        }
        
        .layoutLogoBox {
            text-align: center;
        }
        
        .navbar-default {
            background-color: #f39200;
            border-color: none;
        }
        
        .navbar-default .navbar-toggle .icon-bar {
            background-color: white;
        }
        
        .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover {
            background-color: #f39200;
        }

        .navbar-default .navbar-toggle {
            border-color: #f39200;
        }
        
        .navbar-default .navbar-nav>li>a, .navbar-default .navbar-text {
            color: white;
            font-weight: 100;
        }
        
        .navbar-default .navbar-collapse, .navbar-default .navbar-form {
            border-color: #f39200;
        }
        
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    
                    <div class="row">
                        <div class="col-xs-2">Tilbage</div>
                        <div class="col-xs-8 layoutLogoBox">
                            <!-- Branding Image -->
                            <a class="layoutLogo" href="{{ url('/') }}">
                                <img src="{{ asset('images/quickTaLogo.png')}}"/>
                            </a>
                        </div>
                        <div class="col-xs-2">
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>

        @yield('content')
    </div>
</body>
</html>