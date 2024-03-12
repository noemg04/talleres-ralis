@extends('layouts.app')

@section('template_title')
    {{ $reparacione->name ?? __('Show') . " " . __('Reparacione') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Reparacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reparaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Vehiculo Id:</strong>
                            {{ $reparacione->vehiculo_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $reparacione->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
