@extends('layouts.app')

@section('template_title')
    {{ $capacitaciones->name ?? "{{ __('Show') capacitaciones" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} capacitaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('capacitaciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $capacitaciones->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $capacitaciones->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Inicio:</strong>
                            {{ $capacitaciones->fecha_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Fin:</strong>
                            {{ $capacitaciones->fecha_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Inicio:</strong>
                            {{ $capacitaciones->hora_inicio }}
                        </div>
                        <div class="form-group">
                            <strong>Hora Fin:</strong>
                            {{ $capacitaciones->hora_fin }}
                        </div>
                        <div class="form-group">
                            <strong>Cupos Disponibles:</strong>
                            {{ $capacitaciones->cupos_disponibles }}
                        </div>
                   

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
