@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content_header')
    <h1>Editar Roles</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <p>Nombre del Usuario</p>
            <p class="form-control">{{ $user->name }}</p>
            <br><hr>
            <h4>Listado de Roles</h4><br>
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                @foreach ($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}    
                            {{$role->name}}
                        </label>
                    </div>
                @endforeach
                {!! Form::submit('Asignar Rol', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop
