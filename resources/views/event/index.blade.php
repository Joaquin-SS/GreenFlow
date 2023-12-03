@extends('layouts.app')

@section('template_title')
    Eventos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card" style="background-color: #383c44; color: #ffffff;">
                    <div class="card-header" style="background-color: #333333; color: #ffffff;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Eventos') }}
                            </span>

                            <!--<div class="float-right">
                                <a href="{{ route('events.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Nuevo') }}
                            </a>
                          </div> -->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover" style="color: #ffffff;">
                                <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>{{ __('ID de Usuario') }}</th>
                                    <th>{{ __('Título') }}</th>
                                    <th>{{ __('Descripción') }}</th>
                                    <th>{{ __('Lugar') }}</th>
                                    <th>{{ __('Fecha del Evento') }}</th>

                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($events as $event)
                                    <tr>
                                        <td>{{ ++$i }}</td>

                                        <td>{{ $event->user_id }}</td>
                                        <td>{{ $event->tittle }}</td>
                                        <td>{{ $event->description }}</td>
                                        <td>{{ $event->locate }}</td>
                                        <td>{{ $event->event_date }}</td>

                                        <td>
                                            <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                                                <a class="btn btn-outline-info" href="{{ route('events.show',$event->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Mostrar') }}</a>
                                                <a class="btn btn-outline-success" href="{{ route('events.edit',$event->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger"><i class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $events->links() !!}
            </div>
        </div>
    </div>
@endsection
