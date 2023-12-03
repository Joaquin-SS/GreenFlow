@extends('layouts.app')

@section('template_title')
    {{ __('Crear') }} Evento
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">
                        <span class="card-title">{{ __('Crear') }} Evento</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('events.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('event.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
