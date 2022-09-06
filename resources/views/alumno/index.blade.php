@extends('adminlte::page')

@section('title', 'Alumnos')

@section('content_header')
    <h1>Alumnos</h1>
@stop

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Alumno') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('alumnos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped table-hover w-auto">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Apellido</th>
										<th>Nombres</th>
										<th>Dni</th>
										<th>Fecha Nac</th>

										<th>Celular</th>
										<th>Mail</th>

										<th>Genero</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($alumnos as $alumno)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $alumno->apellido }}</td>
											<td>{{ $alumno->nombres }}</td>
											<td>{{ $alumno->dni }}</td>
											<td>{{ $alumno->fecha_nac }}</td>

											<td>{{ $alumno->celular }}</td>
											<td>{{ $alumno->mail }}</td>

											<td>{{ $alumno->genero }}</td>

                                            <td>
                                                <form class="btn-group">
                                                    <form class='form-group' action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
                                                        <a class="btn btn-sm btn-primary" href="{{ route('alumnos.show',$alumno->id) }}"><i class="fa fa-fw fa-eye"></i></a>
                                                        <a class="btn btn-sm btn-success" href="{{ route('alumnos.edit',$alumno->id) }}"><i class="fa fa-fw fa-edit"></i></a>
                                                        {{-- @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                                     --}}</form>


                                                </form>
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $alumnos->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hola!'); </script>
@stop