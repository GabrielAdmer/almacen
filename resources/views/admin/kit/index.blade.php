@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Kits</h1>
@stop

@section('content')

    @if (session("info"))
    <div class="alert alert-success">
        <strong>{{session("info")}}</strong>
    </div>
    @endif
    
   <div class="card">

      <div class="card-body" >
         <a class="btn btn-outline-dark btn-sm" href="{{ route('admin.kits.create') }}" >Crear Kit</a>
      </div>

      <div class="card-body">
         <table class="table" >
            <thead>
               <tr> 
                  <td>Id</td>
                  <td>Nombre</td>
                  <td>Cantidad Piezas</td>
                  <td>Editar</td>
                  <td>Eliminar</td>
               </tr>
            </thead>

            <tbody>
               @foreach ($kits as $kit)
                   <tr>
                      <td>{{ $kit->id }}</td>
                      <td>{{ $kit->kit_nombre }}</td>
                      <td>{{ $kit->kit_cantidad_piezas }}</td>
                      <td width="100px"> <a class="btn btn-success btn-sm" href="{{ route('admin.kits.show',$kit) }}">Ver</a> </td>
                      <td width="100px"> <a class="btn btn-success btn-sm" href="{{ route('admin.kits.edit',$kit) }}">Editar</a> </td>


                      <td width="100px"> 
                           <form action="{{route("admin.kits.destroy",$kit)}}" method="POST" >
                              @csrf
                              @method("delete")
                              <input type="submit" value="Eliminar" class="btn btn-sm btn-danger"
                                       onclick="return confirm('Desaea eliminar ? ..')"
                              >
                           </form>
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