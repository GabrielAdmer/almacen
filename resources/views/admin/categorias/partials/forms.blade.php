<div class="form-group" >

    {{ Form::label("cat_nombre","Nombre") }}
    {{ Form::text("cat_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre de la categoria"]) }}

    @error('cat_nombre')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>
