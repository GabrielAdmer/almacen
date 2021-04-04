<div class="form-group">

    {{ Form::label("emp_nombre","Nombre Empleado") }}
    {{ Form::text("emp_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre del empleado"]) }}

    @error('emp_nombre')
        <span class="text-danger" >{{$message}}</span>
    @enderror


</div>

<div class="form-group">

    {{ Form::label("emp_app_paterno","Apellido Paterno") }}
    {{ Form::text("emp_app_paterno",null,["class" => "form-control","placeholder"=>"Ingrese su apellido paterno"]) }}

    @error('emp_app_paterno')
    <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("emp_app_materno","Apellido Paterno") }}
    {{ Form::text("emp_app_materno",null,["class" => "form-control","placeholder"=>"Ingrese su apellido materno"]) }}

    @error('emp_app_materno')
        <span class="text-danger" >{{$message}}</span>
    @enderror
</div>


<div class="form-group">

    {{ Form::label("emp_direccion","Direccion") }}
    {{ Form::text("emp_direccion",null,["class" => "form-control","placeholder"=>"Dirección del empleado"]) }}

    @error('emp_direccion')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("emp_lugar","Lugar") }}
    {{ Form::text("emp_lugar",null,["class" => "form-control","placeholder"=>"Ingrese su lugar de procedencia"]) }}

    @error('emp_lugar')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <p>Estado : </p>
    {{-- <br> --}}
    <label>
        {{ Form::radio('emp_estatus',0,true)}}
        Activo
    </label>
    <label>
        {{ Form::radio('emp_estatus',1,false)}}
        Inactivo
    </label>
</div>
