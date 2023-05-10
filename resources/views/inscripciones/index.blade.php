@extends('layouts.app')

@section('template_title')
    Inscripcione
@endsection

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('capacitaciones') }}
                            </span>

                         
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
                                        
                                        
										<th>nombre</th>
										<th>descripcion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscripciones as $inscripcione)
                                        <tr>
                                            
											<td>{{ $inscripcione->nombre }}</td>
											<td>{{ $inscripcione->descripcion }}</td>
                                             @if (is_null($inscripcione->capacitacion_id))
                                                 <td>
                                                       
                                               <form action="{{ route('saveinscripcion') }}" method="POST">
                                                 <input type="hidden" name='capacitacion_id' value={{$inscripcione->idcapacitacion}}>
                                                    @csrf
                                                 
                                                    <button type="submit" class="btn btn-info btn-sm">inscribir</button>
                                                </form>
                                            </td>
                                          @else
   <td>
                                           <form action="{{ route('deleteinscripcion') }}" method="POST" name="form2">
                                                 <input type="hidden" name='id' value={{$inscripcione->id}}>
                                                    @csrf
                                                 
                                                    <button type="submit" class="btn btn-danger btn-sm">eliminar inscripcion</button>
                                                </form>
                                            </td>
                                             @endif
                                            
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
