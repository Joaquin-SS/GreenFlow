<div class="box box-info padding-1" style="background-color: #383c44; color: #ffffff;">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('user_id', 'ID de Usuario') }}
            {{ Form::text('user_id', $event->user_id, ['class' => 'form-control' . ($errors->has('user_id') ? ' is-invalid' : ''), 'placeholder' => 'ID de Usuario', 'readonly' => 'readonly']) }}
            {!! $errors->first('user_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tittle', 'Título') }}
            {{ Form::text('tittle', $event->tittle, ['class' => 'form-control' . ($errors->has('tittle') ? ' is-invalid' : ''), 'placeholder' => 'Título']) }}
            {!! $errors->first('tittle', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description', 'Descripción') }}
            {{ Form::text('description', $event->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Descripción']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('locate', 'Lugar') }}
            {{ Form::text('locate', $event->locate, ['class' => 'form-control' . ($errors->has('locate') ? ' is-invalid' : ''), 'placeholder' => 'Lugar']) }}
            {!! $errors->first('locate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('event_date', 'Fecha del Evento') }}
            {{ Form::text('event_date', $event->event_date, ['class' => 'form-control' . ($errors->has('event_date') ? ' is-invalid' : ''), 'placeholder' => 'Fecha del Evento']) }}
            {!! $errors->first('event_date', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Enviar') }}</button>
    </div>
</div>
