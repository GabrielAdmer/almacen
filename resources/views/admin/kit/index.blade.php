@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="d-flex  justify-content-between" >
       <h1>Listado de Kits</h1>
      <div>
            <a class="btn btn-dark" href="{{ route('admin.kits.create') }}" >Crear Kit</a>
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
         <table class="table" >
            <thead>
               <tr> 
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Cantidad Piezas</td>
                  <td></td>
                  <td></td>
                  <td></td>
               </tr>
            </thead>

            <tbody>
               @foreach ($kits as $kit)
                   <tr>
                     <td>{{ $kit->id }}</td>
                     <td>{{ $kit->kit_nombre }}</td>
                     <td>{{ $kit->kit_cantidad_piezas }}</td>
                     <td width="10px"> 
                        @can('admin.kits.show')
                           <a class="btn btn-info btn-sm" href="{{ route('admin.kits.show',$kit) }}">Ver</a> 
                        @endcan
                     </td>
                     <td width="10px">
                          @can('admin.kits.edit')
                              <a class="btn btn-success btn-sm" href="{{ route('admin.kits.edit',$kit) }}">Editar</a>
                          @endcan 
                     </td>


                      <td width="10px"> 
                          @can("admin.kits.destroy")
                              <form action="{{route("admin.kits.destroy",$kit)}}" method="POST" >
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

         {{ $kits->links("pagination::bootstrap-4") }}

      </div>
   </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop