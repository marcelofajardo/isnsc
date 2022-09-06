@extends('adminlte::page')

@section('title', 'Docentes')

@section('content_header')
    <h1></h1>
@stop

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('docentes')
        </div>     
    </div>   
</div>
@endsection