@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Detalle del prestamo</h1>
@stop

@section('content')
    <div class="card">
       <div class="card-body">
          <p><strong>Estado del prestamo: </strong>{{ $prestamo->pre_estado_prestamo }}</p>
          <p><strong>Estado del devolucion: </strong>{{ $prestamo->pre_estado_devolucion }}</p>
          <p><strong>Descripcion del prestamo:</strong> {{ $prestamo->pre_description_prestamo }}</p>
          <p><strong>Descripcion devolucion:</strong> {{ $prestamo->pre_description_devolucion }}</p>
          <p><strong>Estado:</strong> {{ $prestamo->pre_estatus }}</p>
          <p><strong>Empleado: </strong>{{ $prestamo->empleado->emp_nombre }}</p>
          <p><strong>Proyecto: </strong>{{ $prestamo->proyecto->proy_nombre }}</p>
          <p><strong>Creado:</strong> {{ ($prestamo->created_at) }}</p>
          <p><strong>Devuelto:</strong> {{ ($prestamo->updated_at) }}</p>
          <p><strong>Producto:</strong> {{ count($prestamo->productos) }}</p>

         <ul>
            @foreach ($prestamo->productos as $item)
               <li> {{$item->pro_nombre}}</li>
            @endforeach
         </ul>

       </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop