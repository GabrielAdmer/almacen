@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex  justify-content-between" >
       <h1>Listado de Almacenes</h1>
      <div>
            @can('admin.almacens.create')
               <a class="btn btn btn-dark" href="{{route("admin.almacens.create")}}">Agregar Almacen</a>
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

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ubicacion</th>
                        <th span="3"></th>
                        
                    </tr>
                </thead>
                <tbody>

                    @foreach ($almacenes as $almacen)
                       <tr>
                            <td>{{ $almacen->id }}</td>
                            <td>{{ $almacen->alm_nombre }}</td>
                            <td>{{ $almacen->alm_ubicacion }}</td>
                             <td width="10px">
                               @can('admin.almacens.show')
                                   <a class="btn btn-sm btn-info" href="{{route("admin.almacens.show",$almacen)}}">
                                    Ver
                                    </a>
                               @endcan
                            </td>
                            <td width="10px">
                               @can('admin.almacens.edit')
                                   <a class="btn btn-sm btn-success" href="{{route("admin.almacens.edit",$almacen)}}">
                                    Editar
                                </a>
                               @endcan
                            </td>
                            <td width="10px">
                                @can('admin.almacens.destroy')
                                   <form action="{{route("admin.almacens.destroy",$almacen)}}" method="POST" >
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
    </div>@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop