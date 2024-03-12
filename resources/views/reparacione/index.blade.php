@extends('layouts.app')

@section('template_title')
    Reparacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reparaciones') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reparaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Añadir') }}
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Vehiculo Id</th>
										<th>Descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reparaciones as $reparacione)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reparacione->vehiculo_id }}</td>
											<td>{{ $reparacione->descripcion }}</td>

                                            <td>
                                                <form action="{{ route('reparaciones.destroy',$reparacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reparaciones.show',$reparacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reparaciones.edit',$reparacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <a href="http://127.0.0.1:8000/home"><button type="button" class="btn btn-success">Volver a la página principal</button></a>
                        </div>
                    </div>
                </div>
                {!! $reparaciones->links() !!}
            </div>
        </div>
    </div>
@endsection
