<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('vehiculo_id') }}
            {{ Form::text('vehiculo_id', $reparacione->vehiculo_id, ['class' => 'form-control' . ($errors->has('vehiculo_id') ? ' is-invalid' : ''), 'placeholder' => 'Vehiculo Id']) }}
            {!! $errors->first('vehiculo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $reparacione->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>