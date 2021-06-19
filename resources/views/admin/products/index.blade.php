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
                            <h3 class="card-title">Productos</h3>
                            <div class="card-tools">
                                @can('admin.products.create')
                                <a class="btn btn-success" href="{{route('admin.products.create')}}"><i
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
                                        <th>Nombre</th>
                                        <th>Stock</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        
                                        <th width="90px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>$ {{$product->price}}</td>
                                        <td>{{$product->category->name}}</td>

                                        <td>
                                            @can('admin.products.edit')
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.products.edit',$product) }}"><i
                                                class="fas fa-edit"></i></a>
                                            @endcan
                                            
                                            @can('admin.products.destroy')
                                            {!! Form::open(['method' => 'DELETE','route' => ['admin.products.destroy', $product],'style'=>'display:inline']) !!}
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
@stop