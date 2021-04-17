<div class="form-group">

    {{ Form::label("pro_nombre","Nombre") }}
    {{ Form::text("pro_nombre",null,["class" => "form-control","placeholder"=>"Ingrese el nombre de la categoria"]) }}

    @error('pro_nombre')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("pro_precio","Precio") }}
    {{ Form::text("pro_precio",null,["class" => "form-control","placeholder"=>"Ingrese la cantidad de pieazas que tiene el kit"]) }}

    @error('pro_precio')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">

    {{ Form::label("pro_cantidad","Cantidad de Pieazas") }}
    {{ Form::number("pro_cantidad",null,["class" => "form-control","placeholder"=>"Ingrese la cantidad de pieazas que tiene el kit"]) }}

    @error('pro_cantidad')
        <span class="text-danger" >{{$message}}</span>
    @enderror

</div>

<div class="form-group">
    <p>Estado : </p>
    {{-- <br> --}}
    <label>
        {{ Form::radio('pro_estatus',0,true)}}
        No hablitado
    </label>
    <label>
        {{ Form::radio('pro_estatus',1,false)}}
        Habilitado
    </label>
</div>

<div class="form-group">
    <p>Protocolo de Prueba : </p>
    {{-- <br> --}}
    <label>
        {{ Form::radio('pro_protocolo_prueba',0,true)}}
        Tiene
    </label>
    <label>
        {{ Form::radio('pro_protocolo_prueba',1,false)}}
        No tiene
    </label>
</div>

<div class="form-group">

    {{ Form::label("almacen_id","Almacen") }}
    {{ Form::select("almacen_id",$almacenes,null,["class"=>"form-control"]) }}

</div>

<div class="form-group">

    {{ Form::label("categoria_id","Categoria") }}
    {{ Form::select("categoria_id",$categorias,null,["class"=>"form-control"]) }}

</div>

<div class="form-group">

    {{ Form::label("kit_id","Kit") }}
    {{ Form::select("kit_id",$kits,null,["class"=>"form-control"]) }}

</div>

<div class="form-group">

    {{ Form::label("proveedor_id","Proveedores") }}
    {{ Form::select("proveedor_id",$proveedores,null,["class"=>"form-control"]) }}

</div>

<div class="form-group">
    {{ Form::label('pro_descripcion','Descripcion:')}}
    {{ Form::textarea('pro_descripcion',null, ['class'=> 'form-control'])}}

    @error('pro_descripcion')
    <span class="text-danger" >{{$message}}</span>
@enderror
</div>