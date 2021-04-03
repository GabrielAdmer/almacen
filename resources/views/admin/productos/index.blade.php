
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Productos</h1>
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

        <div class="card-header">
            <a class="btn btn btn-dark" href="{{route("admin.productos.create")}}">Agregar Productos</a>
         </div>
         
        <div class="card-body">

             

            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>kit</th>
                        <th>almacen</th>
                        <th>categoria</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @for ($i = 0; $i < count($productos) ; $i++)
                        <tr>
                            <td>{{ $productos[$i]->id }}</td>
                            <td>{{ $productos[$i]->pro_nombre }}</td>
                            <td>{{ $productos[$i]->kit_nombre }}</td>
                            <td>{{ $productos[$i]->alm_nombre }}</td>
                            <td>{{ $productos[$i]->cat_nombre }}</td>
                            <td width="10px">
                                <a class="btn btn-sm btn-info" href="{{route("admin.productos.show",$productos[$i]->id)}}">
                                Show
                                </a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-sm btn-warning" href="{{route("admin.productos.edit",$productos[$i]->id)}}">
                                Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{route("admin.productos.destroy",$productos[$i]->id)}}" method="POST" >
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ? ...')" >Eliminar</button>
                                </form>
                            </td>
                        </tr>

                     
                    @endfor

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

