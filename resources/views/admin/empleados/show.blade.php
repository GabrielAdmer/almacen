@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
   <div class="card">
      <div class="card-body">
         <h1>{{ $empleado->emp_nombre }}</h1>
         <ul>
            @foreach ($empleado->prestamos as $prestamo)
                <li>{{ $prestamo->id }} --- {{ $prestamo->pre_estado_devolucion }} -- {{ $prestamo->created_at }}</li>
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