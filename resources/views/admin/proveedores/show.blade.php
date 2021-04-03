@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
      <div class="card">
         <div class="card-body">
            <h1>{{ $proveedor->prov_nombre }}</h1>
            <table class="table">
               <thead>
                  <tr>
                     <td>Nombre Producto</td>
                     <td>Precio</td>
                  </tr>
               </thead>
               <tbody>
                   @for ($i = 0; $i < count($productos); $i++)
                        <tr>
                           <td>
                              {{ $productos[$i]->pro_nombre }}
                           </td>
                             <td>
                              {{ $productos[$i]->pro_precio }}
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