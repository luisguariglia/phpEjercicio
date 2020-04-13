<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<header>
    <meta charset="utf-8">
    <title>Persona</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/estilo.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</header>
<body>
<h1>ADM Personas</h1>
@yield('contenido')

<script src="{{asset('js/jquery-3.4.1.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>
