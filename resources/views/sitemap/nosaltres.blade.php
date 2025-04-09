<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="{{isset($nosaltres->descripcioCurta) ? $nosaltres->descripcioCurta : ''}}"/>
        <meta name="keywords" content="{{isset($nosaltres->paraulesClau) ? $nosaltres->paraulesClau : ''}}"/>
        <meta name="author" content="Oriol Riu Gispert, Tecnolord i Gerard Riu Gisperd" />
        <meta name="copyright" content="Oriol Riu Gispert, Tecnolord" />

        <title>{{isset($nosaltres->nom) ? $nosaltres->nom : ''}} -Nosaltres {{isset($nosaltres->titol) ? $nosaltres->titol : ''}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,600">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="{{ asset('css/principal.css') }}" rel="stylesheet">
        <link href="{{ asset('css/navigataur.css') }}" rel="stylesheet">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{ asset('ico/LogoGerard.png') }}">
    </head>
    <body>
            @include('inicial.navbar.navbar')
            @include('inicial.nosaltres.nosaltres')

            @include('inicial.peu.peu')
        <!--<script>
            AOS.init();
        </script>-->
    </body>
</html>
