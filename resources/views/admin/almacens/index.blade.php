@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
    @endif

    <div class="card">

        <div class="card-header">
            <a class="btn btn btn-dark" href="{{route("admin.almacens.create")}}">Agregar Almacen</a>
         </div>
         
        <div class="card-body">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ubicacion</th>
                        <th>Ver</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($almacenes as $almacen)
                       <tr>
                            <td>{{ $almacen->id }}</td>
                            <td>{{ $almacen->alm_nombre }}</td>
                            <td>{{ $almacen->alm_ubicacion }}</td>
                             <td width="10px">
                                <a class="btn btn-sm btn-warning" href="{{route("admin.almacens.show",$almacen)}}">
                                    Ver
                                </a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-sm btn-warning" href="{{route("admin.almacens.edit",$almacen)}}">
                                    Editar
                                </a>
                            </td>
                            <td width="10px">
                                <form action="{{route("admin.almacens.destroy",$almacen)}}" method="POST" >
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ? ...')" >Eliminar</button>
                                </form>
                            </td>
                       </tr>
                    @endforeach

                </tbody>
            </table>
   
        </div>
    </div>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop