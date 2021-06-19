@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1>Crear Turno</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.turns.store', 'autocomplete' => 'off']) !!}

            {!! Form::hidden('user_id', auth()->user()->id) !!}

            <div class="form-group">

                {!! Form::label('date', 'Fecha del Curso') !!}
                {!! Form::date('date', null, ['class' => 'form-control']) !!}
                @error('date')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">

                {!! Form::label('time', 'Hora del Turno') !!}
                {!! Form::time('time', null, ['class' => 'form-control']) !!}
                @error('time')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

         

            <div class="form-group">
                {!! Form::label('status', 'Estado') !!}
                {!! Form::select('status', ['ausente' => 'ausente', 'presente' => 'presente'], null, ['class' => 'form-control' ]) !!}
                @error('status')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>


            {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('admin.products.index') }}" class="btn btn-danger" type="submit">Cancelar</a>


            {!! Form::close() !!}


        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });

    </script>

@endsection
