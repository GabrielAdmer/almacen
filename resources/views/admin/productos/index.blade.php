
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <div class="d-flex  justify-content-between" >
       <h1>Listado de Productos</h1>
      <div>
            @can('admin.productos.create')
               <a class="btn btn btn-dark" href="{{route("admin.productos.create")}}">Agregar Productos</a>
           @endcan
      </div>
    </div>
@stop

@section('css')
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

@endsection

@section('content')

    @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
    @endif

    <div class="card">

        <div class="card-body">             

            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>kit</th>
                        <th>almacen</th>
                        <th>categoria</th>
                        <th>Estatus</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                     @foreach ($productos as $producto)
                         <tr>
                            <td> {{ $producto->id }}</td>
                            <td> {{ $producto->pro_nombre }}</td>
                            <td> {{ $producto->kit->kit_nombre }}</td>
                            <td> {{ $producto->almacen->alm_nombre }}</td>
                            <td> {{ $producto->categoria->cat_nombre }}</td>
                            <td>
                               @if ($producto->pro_estatus === '0')
                                 {{ "si" }}
                                 @else
                                 {{ "no" }}
                               @endif
                            </td>
                            <td width="10px">
                               @can("admin.productos.show")
                                    <a class="btn btn-sm btn-info" href="{{route("admin.productos.show",$producto)}}">
                                       Show
                                    </a>
                               @endcan
                            </td>
                            <td width="10px">
                                @can("admin.productos.edit")
                                   <a class="btn btn-sm btn-warning" href="{{route("admin.productos.edit",$producto)}}">
                                    Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can("admin.productos.destroy")
                                    <form action="{{route("admin.productos.destroy",$producto )}}" method="POST" >
                                       @csrf
                                       @method("delete")
                                       <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ? ...')" >Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                         </tr>
                     @endforeach

                </tbody>
            </table>

           
        </div>
    </div>
@stop


@section('js')

    <script src="https://code.jquery.com/jquery}-3.5.1.js" defer ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" defer ></script>

    <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                                }
                });
                
             } );
    </script>
    
@endsection

