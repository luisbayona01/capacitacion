@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Capacitacione
@endsection

@section('content')
    <section class="content container">
        <div class="row">
            <div class="col-md-12">

              

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Crear') }} Capacitaciones</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('capacitaciones.store') }}"  role="form" enctype="multipart/form-data" class="needs-validation" novalidate>
                            @csrf

                            @include('capacitaciones.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
