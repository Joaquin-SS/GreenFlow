@extends('layouts.app')

@section('template_title')
    {{ $user->name ?? __('Mostrar Usuario') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar Usuario') }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('users.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>{{ __('Nombre') }}:</strong>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <strong>{{ __('Correo Electrónico') }}:</strong>
                            {{ $user->email }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
