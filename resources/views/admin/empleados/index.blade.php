@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
   <div class="d-flex  justify-content-between" >
       <h1>Listado de Empleados</h1>
      <div>
            @can('admin.empleados.create')
              <a class="btn btn btn-dark" href="{{route("admin.empleados.create")}}">Agregar Empleado</a>
           @endcan
      </div>
    </div>
@stop

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
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Lugar</th>
                        <th span="3"></th>
                    </tr>
                </thead>
                <tbody>
                    
                    @for ($i = 0; $i < count($empleados) ; $i++)
                        <tr>
                            <td>{{ $empleados[$i]->id }}</td>
                            <td>{{ $empleados[$i]->emp_nombre }}</td>
                            <td>{{ $empleados[$i]->emp_app_paterno }}</td>
                            <td>{{ $empleados[$i]->emp_app_materno }}</td>
                            <td>{{ $empleados[$i]->emp_lugar }}</td>
                            <td width="10px">
                               @can("admin.empleados.show")
                                     <a class="btn btn-sm btn-info" href="{{route("admin.empleados.show",$empleados[$i]->id)}}">
                                       Ver..
                                    </a>
                               @endcan
                            </td>
                            <td width="10px">
                                @can("admin.empleados.edit")
                                    <a class="btn btn-sm btn-success" href="{{route("admin.empleados.edit",$empleados[$i]->id)}}">
                                       Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10px">
                               @can("admin.empleados.destroy")
                                    <form action="{{route("admin.empleados.destroy",$empleados[$i]->id)}}" method="POST" >
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop