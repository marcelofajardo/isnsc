@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
    <h1></h1>
@stop
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('alumnos')
        </div>     
    </div>   
</div>
@endsection