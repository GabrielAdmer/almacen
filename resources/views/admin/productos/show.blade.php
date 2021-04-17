@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle del producto</h1>
@stop

@section('content')
      <div class="card">
         <div class="card-body">
            <h1>{{ $producto->pro_nombre }}</h1>
          
               <li>{{ $producto->pro_precio }}</li>
               <li>{{ $producto->pro_cantidad }}</li>
               <li>{{ $producto->kit->kit_nombre }}</li>
               
         </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop