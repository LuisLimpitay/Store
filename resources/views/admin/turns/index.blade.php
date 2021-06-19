@extends('adminlte::page')

@section('title', 'Turnos')

@section('content_header')
    <h1>Turnos</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Turnos</h3>
                            <div class="card-tools">
                                <a class="btn btn-success" href="{{route('admin.turns.create')}}"><i
                                    class="fas fa-plus-square"></i></a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="table-product" class="table table-striped table-responsive-lg">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Cliente</th>
                                        <th>Estado</th>
                                        
                                        <th width="90px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($turns as $turn)
                                    <tr>
                                        <td>{{$turn->id}}</td>
                                        <td>{{$turn->date}}</td>
                                        <td>{{$turn->time}}</td>
                                        <td>Falta</td>
                                        <td>{{$turn->status}}</td>

                                        <td>
                                            <a class="btn btn-primary btn-sm" href="{{ route('admin.turns.edit',$turn) }}"><i
                                                class="fas fa-edit"></i></a>
                                            {!! Form::open(['method' => 'DELETE','route' => ['admin.turns.destroy', $turn],'style'=>'display:inline']) !!}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm'] )  }}
                                            {!! Form::close() !!}
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