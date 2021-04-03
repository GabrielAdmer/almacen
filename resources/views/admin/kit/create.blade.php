@extends('adminlte::page')

@section('title', 'AdminBlog')

@section('content_header')
    <h1>Crear kit</h1>
@stop

@section('content')

    @if (session("info"))
        <div class="alert alert-success">
            <strong>{{session("info")}}</strong>
        </div>
    @endif

     <div class="card">
        <div class="card-body">
            {!!Form::open(['route'=> 'admin.kits.store'])!!}

                @include('admin.kit.partials.forms')


                <div class="form-group">
                   {{ Form::submit("Crear kit",["class" => "btn btn-primary"]) }}
                </div>


            {!!Form::close()!!}
        </div>
     </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop
