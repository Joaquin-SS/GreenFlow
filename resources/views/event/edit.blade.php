@extends('layouts.app')

@section('template_title')
    {{ __('Actualizar') }} Evento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">
                        <span class="card-title">{{ __('Actualizar') }} Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.update', $event->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('event.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

