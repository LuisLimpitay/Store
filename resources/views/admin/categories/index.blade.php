@extends('adminlte::page')

@section('title', 'Categorias')

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
                            <h3 class="card-title">Categorias</h3>
                            <div class="card-tools">
                                @can('admin.categories.create')
                                <a class="btn btn-success" href="{{route('admin.categories.create')}}"><i
                                    class="fas fa-plus-square"></i></a>
                                @endcan
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-category" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        
                                        <th width="90px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->name}}</td>
                                        
                                        <td>
                                            @can('admin.categories.edit')
                                                <a class="btn btn-primary btn-sm" href="{{ route('admin.categories.edit',$category) }}"><i
                                                    class="fas fa-edit"></i></a>
                                            @endcan
                                            @can('admin.categories.destroy')
                                                {!! Form::open(['method' => 'DELETE','route' => ['admin.categories.destroy', $category],'style'=>'display:inline']) !!}
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

        $('#table-category').DataTable({
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
@stop