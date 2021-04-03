@extends('adminlte::page')

@section('title', 'AdminBlog')

@section('content_header')
    <h1>Crear kit</h1>
@stop

@section('content')


     <div class="card">
        <div class="card-body">
            {!!Form::open(['route'=> 'admin.proveedor.store'])!!}

                @include('admin.proveedores.partials.forms')


                <div class="form-group">
                   {{ Form::submit("Crear proveedor",["class" => "btn btn-primary"]) }}
                </div>


            {!!Form::close()!!}
        </div>
     </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop



