@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de proveedores</h1>
@stop

@section('content')
    @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
    @endif
    
   <div class="card">

      <div class="card-body" >
         <a class="btn btn-outline-dark btn-sm" href="{{ route('admin.proveedor.create') }}" >Crear Proveedor</a>
      </div>

      <div class="card-body">
         <table class="table" >
            <thead>
               <tr> 
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Ver</td>
                  <td>Editar</td>
                  <td>Eliminar</td>
               </tr>
            </thead>

            <tbody>
               @foreach ($proveedores as $proveedor)
                   <tr>
                      <td>{{ $proveedor->id }}</td>
                      <td>{{ $proveedor->prov_nombre }}</td>
                      <td width="100px">
                         @can('admin.proveedor.show')
                             <a class="btn btn-success btn-sm" href="{{ route('admin.proveedor.show',$proveedor) }}">Ver</a> 
                         @endcan
                      </td>
                      <td width="100px"> 
                         @can('admin.proveedor.edit')
                            <a class="btn btn-success btn-sm" href="{{ route('admin.proveedor.edit',$proveedor) }}">Editar</a>
                         @endcan 
                     </td>


                      <td width="100px"> 
                          @can("admin.proveedor.destroy")
                              <form action="{{route("admin.proveedor.destroy",$proveedor)}}" method="POST" >
                                 @csrf
                                 @method("delete")
                                 <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                                          onclick="return confirm('Desaea eliminar ? ..')"
                                 >
                              </form>
                          @endcan
                     </td>

                   </tr>
               @endforeach
            </tbody>
            
         </table>

         {{-- {{ $proveedores->links("pagination::bootstrap-4") }} --}}

      </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop