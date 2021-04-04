<div class="form-group">

    {{ Form::label("proy_nombre","Nombre") }}
    {{ Form::text("proy_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre del proyecto"]) }}

    @error('proy_nombre')
    <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("proy_ubicacion","Ubicacion") }}
    {{ Form::text("proy_ubicacion",null,["class" => "form-control","placeholder"=>"Ingrese la ubicacion del proyecto"]) }}

    @error('proy_ubicacion')
        <span class="text-danger" >{{$message}}</span>
    @enderror
</div>


<div class="form-group">
    <p>Estado : </p>
    {{-- <br> --}}
    <label>
        {{ Form::radio('proy_estatus',1,true)}}
        En proceso
    </label>
    <label>
        {{ Form::radio('proy_estatus',2,false)}}
        Terminado
    </label>
</div>
