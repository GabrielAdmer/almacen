@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Role</h1>
@stop

@section('content')

    <div class="card" >
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.roles.store']) !!}

                <div class="form-group" >
                    {{ Form::label('name','Nombre')}}
                    {{ Form::text('name',null,['class' => 'form-control',"placeholder"=>"ingrese el nombre" ])}}

                    @error('name')
                        <small class="text-danger">
                            {{$message}}
                        </small>
                    @enderror
                </div>

                <h2 class="h3" >Lista de permiso</h2>
                @foreach ($permisos as $permiso)
                    <div>
                        <label>
                            {{ Form::checkbox('permissions[]',$permiso->id,null,['class'=>'mr-1']) }}
                            {{ $permiso->description }}
                        </label>
                    </div>
                @endforeach

                <div class="form-group">
                    {{ Form::submit("Crear role",["class" => "btn btn-primary"]) }}
                </div>
               

            {!! Form::close() !!}
        </div>
    </div>

@stop