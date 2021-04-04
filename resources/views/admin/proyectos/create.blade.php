@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Proyecto</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.proyectos.store']) !!}

                @include('admin.proyectos.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Crear productos",["class" => "btn btn-primary"]) }}
                </div>
               

            {!! Form::close() !!}
        </div>
    </div>

@stop