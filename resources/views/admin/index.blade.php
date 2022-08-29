@extends('adminlte::page')

@section('title', 'Tablero')

@section('content_header')
    <h1>Tablero</h1>
@stop

@section('content')
    @for ($i = 0; $i < 100; $i++)
    The current value is {{ $i }} <br>
    @endfor
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hola!'); </script>
@stop