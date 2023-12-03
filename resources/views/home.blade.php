@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">{{ __('Panel') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('¡Has iniciado sesión!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
