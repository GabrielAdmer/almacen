<div class="form-group">

    {{ Form::label("kit_nombre","Nombre") }}
    {{ Form::text("kit_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre del kit"]) }}

</div>

<div class="form-group">

    {{ Form::label("kit_cantidad_piezas","Cantidad de Pieazas") }}
    {{ Form::number("kit_cantidad_piezas",null,["class" => "form-control","placeholder"=>"Ingrese la cantidad de pieazas que tiene el kit"]) }}

</div>

<div class="form-group">
    {{ Form::label('kit_descripcion','Descripcion:')}}
    {{ Form::textarea('kit_descripcion',null, ['class'=> 'form-control'])}}
</div>