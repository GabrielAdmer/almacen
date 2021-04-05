
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Proyectos</h1>
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
            <a class="btn btn btn-dark" href="{{route("admin.proyectos.create")}}">Agregar Proyectos</a>
         </div>
         
        <div class="card-body">

             

            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ubicacion</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @for ($i = 0; $i < count($proyectos) ; $i++)
                        <tr>
                            <td>{{ $proyectos[$i]->id }}</td>
                            <td>{{ $proyectos[$i]->proy_nombre }}</td>
                            <td>{{ $proyectos[$i]->proy_ubicacion }}</td>
                            <td>
                                @if ($proyectos[$i]->proy_estatus === "1")
                                    En proceso
                                @else
                                    Terminado
                                @endif 
                            </td>
                            <td width="10px">
                              @can("admin.proyectos.show")
                                  <a class="btn btn-sm btn-info" href="{{route("admin.proyectos.show",$proyectos[$i]->id)}}">
                                    Show
                                 </a>
                              @endcan
                            </td>
                            <td width="10px">
                                @can("admin.proyectos.edit")
                                   <a class="btn btn-sm btn-warning" href="{{route("admin.proyectos.edit",$proyectos[$i]->id)}}">
                                Editar
                                </a>
                                @endcan
                            </td>
                            <td width="10px">
                               @can("admin.proyectos.destroy")
                                   <form action="{{route("admin.proyectos.destroy",$proyectos[$i]->id)}}" method="POST" >
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ? ...')" >Eliminar</button>
                                </form>
                               @endcan
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

