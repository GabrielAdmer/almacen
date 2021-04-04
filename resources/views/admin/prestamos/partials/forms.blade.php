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

    {{-- producto --}}
    <div class="col-md-6">
         <div class="form-group">
            {{ Form::label('pro_id', 'Producto') }}
            {{ Form::select('producto_id[]', $productos, null, 
            ['class' => 'form-control', 'required' => 'required','placeholder' => 'Productos...']) }}
        </div>
    </div>

   <div class="col-md-6" >
      {{ Form::label('pro_id', 'Producto') }}
         {{ Form::select('producto_id[]', $productos , null, ['placeholder' => 'Productos...','class'=> 'form-control'])}}
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



      