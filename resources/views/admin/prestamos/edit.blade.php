@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    
    <div class="card" >
        <div class="card-body">
            
            {!!Form::model($prestamo, ['route'=> ['admin.prestamos.update',$prestamo],'method'=>'put'])!!}

                {{-- user --}}

{{ Form::hidden('usu_id',auth()->user()->id) }}

<div class="row">
    {{-- empleado --}}
    <div class="col-md-6">
        <div class="form-group">

            {{ Form::label("emp_id","Empleado *:") }}
            {{ Form::select("emp_id",$empleados,null,["class"=>"form-control"]) }}

        </div>
    </div>

    {{-- proeycto --}}
    <div class="col-md-6">
         <div class="form-group">
            {{ Form::label('proy_id', 'Proyectos') }}
            {{ Form::select('proy_id', $proyectos, null, 
            ['class' => 'form-control']) }}
            
        </div>
    </div>


    {{--  estado de prestamo --}}

    <div class="col-md-6">
        <div class="form-group">
            <p>Estado de prestamo * : </p>
            {{-- <br> --}}
            <label>
                {{ Form::radio('pre_estado_prestamo',"buen estado",true)}}
                buen estado
            </label>
            <label>
                {{ Form::radio('pre_estado_prestamo',"regular",false)}}
                regular
            </label>
            <label>
                {{ Form::radio('pre_estado_prestamo',"mal-estado",false)}}
                mal estado
            </label>
        </div>

    </div>
    {{-- estado de devolucion --}}

   <div class="col-md-6">
       
        <p>Estado de devolucion : </p>
        {{-- <br> --}}
        <label>
            {{ Form::radio('pre_estado_devolucion',"buen estado",true)}}
            buen estado
        </label>
        <label>
            {{ Form::radio('pre_estado_devolucion',"regular",false)}}
            regular
        </label>
        <label>
            {{ Form::radio('pre_estado_devolucion',"mal-estado",false)}}
            mal estado
        </label>

   </div>

    {{-- prestamo estatus --}}

    <div class="col-md-6">
        <div class="form-group">
            <p>Estado de Prestamo : </p>
            {{-- <br> --}}
            <label>
                {{ Form::radio('pre_estatus',"devuelto",true)}}
                devuelto
            </label>
            <label>
                {{ Form::radio('pre_estatus',"prestamo",false)}}
                prestamo
            </label>
        </div>
    </div>

    {{-- description del prestamo --}}

    <div class="col-md-6">
        <div class="form-group">
            {{ Form::label('pre_description_prestamo','Descripcion del prestamo *: ')}}
            {{ Form::textarea('pre_description_prestamo',null, ['class'=> 'form-control'])}}

            @error('pre_description_prestamo')
            <span class="text-danger" >{{$message}}</span>
            @enderror
        </div>
    </div>

    {{-- description de la devolucion --}}
    <div class="col-md-6">
        
            {{ Form::label('pre_description_devolucion','Descripcion de la devolucion:')}}
            {{ Form::textarea('pre_description_devolucion',null, ['class'=> 'form-control'])}}

        @error('pre_description_devolucion')
            <span class="text-danger" >{{$message}}</span>
         @enderror
    </div>


</div>



      

                <div class="form-group">
                    {{ Form::submit("Editar prestamo",["class" => "btn btn-primary"]) }}
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