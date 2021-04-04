@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Productos</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!!Form::model($empleado, ['route'=> ['admin.empleados.update',$empleado],'method'=>'put'])!!}

                @include('admin.empleados.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Editar Empleado",["class" => "btn btn-primary"]) }}
                </div>         

            {!! Form::close() !!}
        </div>
    </div>

@stop
