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
                  @foreach ($proveedor->productos as $producto)
                       <tr>
                           <td>
                              {{ $producto->pro_nombre }}
                           </td>
                             <td>
                              {{ $producto->pro_precio }}
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