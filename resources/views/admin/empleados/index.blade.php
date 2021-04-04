@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de empleados</h1>
@stop

@section('content')
    


  @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn btn-dark" href="{{route("admin.empleados.create")}}">Agregar Empleado</a>
         </div>
         
        <div class="card-body">
    
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Apellido</th>
                        <th>Lugar</th>
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
                                <a class="btn btn-sm btn-info" href="{{route("admin.empleados.show",$empleados[$i]->id)}}">
                                Ver..
                                </a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-sm btn-warning" href="{{route("admin.empleados.edit",$empleados[$i]->id)}}">
                                Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{route("admin.empleados.destroy",$empleados[$i]->id)}}" method="POST" >
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop