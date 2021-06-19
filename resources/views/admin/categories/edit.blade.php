@extends('adminlte::page')

@section('title', 'Categoria')

@section('content_header')
    <h1>Editar Categoria</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card card-primary card-outline">
                <div class="card-body">

                    {!! Form::model($category, ['route' => ['admin.categories.update', $category], 'autocomplete' => 'off', 'method' => 'put']) !!}

                    <div class="row">
                        <div class="col-md-6">
                            {!! Form::label('name', 'Nombre') !!}
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">

                                {!! Form::label('slug', 'Slug') !!}
                                {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}

                            </div>
                        </div>
                    </div>



                    {!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-danger" type="submit">Cancelar</a>

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