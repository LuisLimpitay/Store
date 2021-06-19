@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Crear Categoria</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.categories.store', 'autocomplete' => 'off']) !!}

                <div class="form-group">

                    {!! Form::label('name', 'Nombre' ) !!}
                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la Categoria' ]) !!}
                    @error('name')
                        <small class="text-danger">*{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">

                    {!! Form::label('slug', 'Slug' ) !!}
                    {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

                </div>

                
                {!! Form::submit('Guardar', ['class' => 'btn btn-success']) !!}
                <a href="{{route('admin.categories.index')}}" class="btn btn-danger" type="submit">Cancelar</a>


            {!! Form::close() !!}


        </div>
    </div>
@stop


@section('js')
<script src="{{asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js')}}"></script>
<script>
    $(document).ready( function() {
        $("#name").stringToSlug({
        setEvents: 'keyup keydown blur',
        getPut: '#slug',
        space: '-'
        });
    });
</script>

@endsection
