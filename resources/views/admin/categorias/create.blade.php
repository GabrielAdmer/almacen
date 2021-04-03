@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Categorias</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.categorias.store']) !!}

                @include('admin.categorias.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Crear Categoria",["class" => "btn btn-primary"]) }}
                </div>
               

            {!! Form::close() !!}
        </div>
    </div>

@stop
