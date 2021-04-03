@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
      <div class="card">
         <div class="card-body">
            <h1>{{ $almacen->alm_nombre }}</h1>
               @for ($i = 0; $i < count($productos); $i++)
                   <ul>
                      <li>
                          <p>{{ $productos[$i]->pro_nombre }}</p>
                      </li>
                   </ul>
               @endfor
         </div>
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop