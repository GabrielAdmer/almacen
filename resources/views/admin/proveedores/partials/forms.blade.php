<div class="form-group" >

    {{ Form::label("prov_nombre","Nombre del proveedor") }}
    {{ Form::text("prov_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre de la categoria"]) }}

    @error('prov_nombre')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>
