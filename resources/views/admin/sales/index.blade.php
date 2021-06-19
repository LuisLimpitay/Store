@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1>CRUD</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ventas de los Empleados</h3>
                            <div class="card-tools">
                                @can('admin.sales.create')
                                <a class="btn btn-success" href="{{route('admin.sales.create')}}"><i
                                    class="fas fa-plus-square"></i></a>
                                @endcan
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-product" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        {{-- <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Estado del Turno</th> --}}
                                        <th>Nombre Vendedor</th>
                                        
                                        
                                        <th width="90px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sales as $sale)
                                    <tr>
                                        <td>{{$sale->id}}</td>
                                        <td>{{$sale->user->name}}</td>
                                        

                                        <td>
                                            <a class="btn btn-primary btn-sm" href="#" data-toggle="modal" data-target="#exampleModal">
                                                <i class="far fa-eye"></i></a>
                                            @can('admin.sales.destroy')
                                            {!! Form::open(['method' => 'DELETE','route' => ['admin.sales.destroy', $sale],'style'=>'display:inline']) !!}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                            {!! Form::close() !!}
                                            @endcan
                                        </td>
                                    </tr>
                                    @endforeach

                                    </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
    $(function() {

        $('#table-product').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>

@include('admin.sales.show')

@stop