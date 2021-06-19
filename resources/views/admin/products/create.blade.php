@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>Crear Productos</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">

            {!! Form::open(['route' => 'admin.products.store', 'autocomplete' => 'off']) !!}

            
            <div class="form-group">

                {!! Form::label('name', 'Nombre del Curso') !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Curso']) !!}
                @error('name')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'readonly']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('stock', 'Stock') !!}
                {!! Form::text('stock', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Stock']) !!}
                @error('stock')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                {!! Form::label('price', 'Precio en ARS $') !!}
                {!! Form::number('price', null, ['class' => 'form-control', 'placeholder' => 'EJ: 2000']) !!}
                @error('price')
                    <small class="text-danger">*{{ $message }}</small>
                @enderror
            </div>


            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                {!! Form::select('category_id', $category, null, ['class' => 'form-control', 'placeholder' => 'Seleccione una Categoria']) !!}
                @error('category_id')
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
