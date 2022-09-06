@extends('adminlte::page')

@section('title')
{{ $alumno->nombres ?? 'Ver Alumno' }}
@endsection
@section('content_header')
    <h3></h3>
@stop
@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"><strong>Alumno/a:</strong> {{ $alumno->nombres }} {{ $alumno->apellido }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('alumnos.index') }}">Volver</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $alumno->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $alumno->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $alumno->dni }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Nac:</strong>
                            {{ $alumno->fecha_nac }}
                        </div>
                        <div class="form-group">
                            <strong>Calle:</strong>
                            {{ $alumno->calle }}
                        </div>
                        <div class="form-group">
                            <strong>Numero:</strong>
                            {{ $alumno->numero }}
                        </div>
                        <div class="form-group">
                            <strong>Manzana:</strong>
                            {{ $alumno->manzana }}
                        </div>
                        <div class="form-group">
                            <strong>Casa:</strong>
                            {{ $alumno->casa }}
                        </div>
                        <div class="form-group">
                            <strong>Depto:</strong>
                            {{ $alumno->depto }}
                        </div>
                        <div class="form-group">
                            <strong>Barrio:</strong>
                            {{ $alumno->barrio }}
                        </div>
                        <div class="form-group">
                            <strong>Cp:</strong>
                            {{ $alumno->cp }}
                        </div>
                        <div class="form-group">
                            <strong>Ciudad:</strong>
                            {{ $alumno->ciudad }}
                        </div>
                        <div class="form-group">
                            <strong>Provincia:</strong>
                            {{ $alumno->provincia }}
                        </div>
                        <div class="form-group">
                            <strong>Celular:</strong>
                            {{ $alumno->celular }}
                        </div>
                        <div class="form-group">
                            <strong>Mail:</strong>
                            {{ $alumno->mail }}
                        </div>
                        <div class="form-group">
                            <strong>Obs:</strong>
                            {{ $alumno->obs }}
                        </div>
                        <div class="form-group">
                            <strong>Baja:</strong>
                            {{ $alumno->baja }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $alumno->genero }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
