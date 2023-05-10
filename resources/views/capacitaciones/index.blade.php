@extends('layouts.app')

@section('template_title')
    Capacitacione
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Capacitacione') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('capacitaciones.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('nueva capacitacion') }}
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
                                        <th>id</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Fecha Inicio</th>
										<th>Fecha Fin</th>
										<th>Hora Inicio</th>
										<th>Hora Fin</th>
										<th>Cupos Disponibles</th>
										

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($capacitaciones as $capacitacione)
                                        <tr>
                                            <td>{{ $capacitacione->id }}</td>
                                            
											<td>{{ $capacitacione->nombre }}</td>
											<td>{{ $capacitacione->descripcion }}</td>
											<td>{{ $capacitacione->fecha_inicio }}</td>
											<td>{{ $capacitacione->fecha_fin }}</td>
											<td>{{ $capacitacione->hora_inicio }}</td>
											<td>{{ $capacitacione->hora_fin }}</td>
											<td>{{ $capacitacione->cupos_disponibles }}</td>
										

                                            <td>
                                                <form action="{{ route('capacitaciones.destroy',$capacitacione->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('capacitaciones.show',$capacitacione->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('capacitaciones.edit',$capacitacione->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
@endsection
