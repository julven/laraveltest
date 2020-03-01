<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Styles -->
        
    </head>
    <body>
        <div id="navbar">
            @include('navbar')
        </div>

        <div class="container">
            @yield('component')
        </div>
        <style>
            #navbar {
                min-height: 80px;
            }
        </style>
        <script type="text/javascript" src="{{asset('index.js')}}"></script>
    </body>
</html>
