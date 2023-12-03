@extends('layouts.app')

@section('template_title')
    {{ $event->name ?? "{{ __('Show') Evento" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Mostrar') }} Evento</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('events.index') }}"> {{ __('Regresar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>ID de Usuario:</strong>
                            {{ $event->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Título:</strong>
                            {{ $event->title }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción:</strong>
                            {{ $event->description }}
                        </div>
                        <div class="form-group">
                            <strong>Lugar:</strong>
                            {{ $event->locate }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha del Evento:</strong>
                            {{ $event->event_date }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
