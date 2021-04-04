@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Prestamo</h1>
@stop

@section('content')
    
     <div class="card" >
        <div class="card-body">
            {!! Form::open(['route'=> 'admin.prestamos.store']) !!}

               {{-- user --}}

{{ Form::hidden('user_id',auth()->user()->id) }}

<div class="row">
    {{-- empleado --}}
    <div class="col-md-6">
        <div class="form-group">

            {{ Form::label("empleado_id","Empleado *:") }}
            {{ Form::select("empleado_id",$empleados,null,["class"=>"form-control"]) }}

        </div>
    </div>

    {{-- producto --}}

       <div class="col-md-6">
         <div class="form-group">
            {{ Form::label('producto_id', 'Producto') }}
            {{ Form::select('productos[]', $productos, null, 
            ['class' => 'form-control', 'required' => 'required','placeholder' => 'Productos...']) }}
        </div>
    </div>

    <div class="col-md-6">
         <div class="form-group">
            {{ Form::label('producto_id', 'Producto') }}
            {{ Form::select('productos[]', $productos, null, 
            ['class' => 'form-control', 'placeholder' => 'Productos...']) }}
        </div>
    </div>

   <div class="col-md-6" >
      {{ Form::label('producto_id', 'Producto') }}
         {{ Form::select('productos[]', $productos , null, ['placeholder' => 'Productos...','class'=> 'form-control'])}}
   </div>

 

    {{-- proeycto --}}
    <div class="col-md-6">
         <div class="form-group">
            {{ Form::label('proy_id', 'Proyectos') }}
            {{ Form::select('proyecto_id', $proyectos, null, 
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
            {{ Form::radio('pre_estado_devolucion',"buen estado",false)}}
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
            {{ Form::textarea('pre_description_prestamo',null, ['class'=> 'form-control','required' => 'required'])}}

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
                    {{ Form::submit("Generar Prestamo",["class" => "btn btn-primary"]) }}
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