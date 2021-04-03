
<div class="form-group">

    {{ Form::label("alm_nombre","Nombre") }}
    {{ Form::text("alm_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre del almacen"]) }}

    @error('alm_nombre')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("alm_ubicacion","Ubicación") }}
    {{ Form::text("alm_ubicacion",null,["class" => "form-control","placeholder"=>"Ingrese la ubicacion del almacen"]) }}

    @error('alm_ubicacion')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>
