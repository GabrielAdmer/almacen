@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Kit</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!! Form::model($kit, ['route'=> ['admin.kits.update',$kit],'method'=>'put'])!!}

                @include('admin.kit.partials.forms')

                <div class="form-group">
                    {{ Form::submit("Editar Kit",["class" => "btn btn-primary"]) }}
                </div>
    
            

            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop