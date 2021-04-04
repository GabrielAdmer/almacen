@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Proyectos</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!!Form::model($proyecto, ['route'=> ['admin.proyectos.update',$proyecto],'method'=>'put'])!!}

                @include('admin.proyectos.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Editar Empleado",["class" => "btn btn-primary"]) }}
                </div>         

            {!! Form::close() !!}
        </div>
    </div>

@stop
