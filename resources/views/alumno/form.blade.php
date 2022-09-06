<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $alumno->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $alumno->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dni') }}
            {{ Form::text('dni', $alumno->dni, ['class' => 'form-control' . ($errors->has('dni') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('dni', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fecha_nac') }}
            {{ Form::text('fecha_nac', $alumno->fecha_nac, ['class' => 'form-control' . ($errors->has('fecha_nac') ? ' is-invalid' : ''), 'placeholder' => 'Fecha Nac']) }}
            {!! $errors->first('fecha_nac', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('calle') }}
            {{ Form::text('calle', $alumno->calle, ['class' => 'form-control' . ($errors->has('calle') ? ' is-invalid' : ''), 'placeholder' => 'Calle']) }}
            {!! $errors->first('calle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('numero') }}
            {{ Form::text('numero', $alumno->numero, ['class' => 'form-control' . ($errors->has('numero') ? ' is-invalid' : ''), 'placeholder' => 'Numero']) }}
            {!! $errors->first('numero', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('manzana') }}
            {{ Form::text('manzana', $alumno->manzana, ['class' => 'form-control' . ($errors->has('manzana') ? ' is-invalid' : ''), 'placeholder' => 'Manzana']) }}
            {!! $errors->first('manzana', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('casa') }}
            {{ Form::text('casa', $alumno->casa, ['class' => 'form-control' . ($errors->has('casa') ? ' is-invalid' : ''), 'placeholder' => 'Casa']) }}
            {!! $errors->first('casa', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('depto') }}
            {{ Form::text('depto', $alumno->depto, ['class' => 'form-control' . ($errors->has('depto') ? ' is-invalid' : ''), 'placeholder' => 'Depto']) }}
            {!! $errors->first('depto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('barrio') }}
            {{ Form::text('barrio', $alumno->barrio, ['class' => 'form-control' . ($errors->has('barrio') ? ' is-invalid' : ''), 'placeholder' => 'Barrio']) }}
            {!! $errors->first('barrio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cp') }}
            {{ Form::text('cp', $alumno->cp, ['class' => 'form-control' . ($errors->has('cp') ? ' is-invalid' : ''), 'placeholder' => 'Cp']) }}
            {!! $errors->first('cp', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ciudad') }}
            {{ Form::text('ciudad', $alumno->ciudad, ['class' => 'form-control' . ($errors->has('ciudad') ? ' is-invalid' : ''), 'placeholder' => 'Ciudad']) }}
            {!! $errors->first('ciudad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('provincia') }}
            {{ Form::text('provincia', $alumno->provincia, ['class' => 'form-control' . ($errors->has('provincia') ? ' is-invalid' : ''), 'placeholder' => 'Provincia']) }}
            {!! $errors->first('provincia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('celular', $alumno->celular, ['class' => 'form-control' . ($errors->has('celular') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('celular', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mail') }}
            {{ Form::text('mail', $alumno->mail, ['class' => 'form-control' . ($errors->has('mail') ? ' is-invalid' : ''), 'placeholder' => 'Mail']) }}
            {!! $errors->first('mail', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('obs') }}
            {{ Form::text('obs', $alumno->obs, ['class' => 'form-control' . ($errors->has('obs') ? ' is-invalid' : ''), 'placeholder' => 'Obs']) }}
            {!! $errors->first('obs', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('baja') }}
            {{ Form::text('baja', $alumno->baja, ['class' => 'form-control' . ($errors->has('baja') ? ' is-invalid' : ''), 'placeholder' => 'Baja']) }}
            {!! $errors->first('baja', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('genero') }}
            {{ Form::text('genero', $alumno->genero, ['class' => 'form-control' . ($errors->has('genero') ? ' is-invalid' : ''), 'placeholder' => 'Genero']) }}
            {!! $errors->first('genero', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <a href="/alumnos" class="btn btn-secondary">Volver</a>
        <button type="submit" class="btn btn-primary float-right">Grabar datos</button>
        
    </div>
   
</div>