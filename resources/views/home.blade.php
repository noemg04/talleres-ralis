@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<!--Tres botones Clientes, Vehiculos, Reparaciones-->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('¡Ha iniciado sesión correctamente!') }}

                </div>
            </div>
            <div style="margin-top: 2.5%; margin-left: 2.5%;">
                <a href="http://127.0.0.1:8000/clientes"><button type="button" class="btn btn-primary">Clientes</button></a>
                <a href="http://127.0.0.1:8000/vehiculos"><button type="button" class="btn btn-primary">Vehiculos</button></a>
                <a href="http://127.0.0.1:8000/reparaciones"><button type="button" class="btn btn-primary">Reparaciones</button></a>
            </div>
        </div>
    </div>
</div>
@endsection
