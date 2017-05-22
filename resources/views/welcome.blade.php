<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            
            .links {
                margin-top: 70px;
                width: 100%;
                text-align: center;
            }
            
            .links img {
                width: 150px;
            }

            .links > a {
                color: #636b6f;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            
            .topWithLogo {
                height: 70px;
                background-color: #f39200;
                text-align: center;
            }
            
            .topWithLogo img {
                height: 50px;
                margin-top: 10px;
            }

            
        </style>
    </head>
    <body>
        <div class="topWithLogo">
            <img src="{{ asset('images/quickTaLogo.png')}}"/>
        </div>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="redirect"><img src="{{ asset('images/facebook.png')}}"/></a><br><br><br><br>
                        
                        <a href="{{ url('/login') }}"><img src="{{ asset('images/newUser.png')}}"/></a><br><br><br><br>
                    
                    <a href="{{ url('/register') }}">Opret bruger</a>
                    @endif
                </div>
            @endif
        </div>
    </body>
</html>