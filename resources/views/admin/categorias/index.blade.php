@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
  <div class="d-flex  justify-content-between" >
       <h1>Listado de Almacenes</h1>
      <div>
            @can('admin.categorias.create')
               <a class="btn btn btn-dark" href="{{route("admin.categorias.create")}}">Agregar Categoria</a>
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
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $categoria)
                       <tr>
                            <td>{{ $categoria->id }}</td>
                            <td>{{ $categoria->cat_nombre }}</td>
                           <td width="10px">
                              @can('admin.categorias.show')
                                 <a class="btn btn-sm btn-info" href="{{route("admin.categorias.show",$categoria)}}">
                                    Ver
                                  </a>
                              @endcan
                           </td>
                            <td width="10px">
                                @can('admin.categorias.edit')
                                     <a class="btn btn-sm btn-success" href="{{route("admin.categorias.edit",$categoria)}}">
                                       Editar
                                    </a>
                                @endcan
                            </td>
                            <td width="10px">
                               @can('admin.categorias.destroy')
                                   <form action="{{route("admin.categorias.destroy",$categoria)}}" method="POST" >
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop