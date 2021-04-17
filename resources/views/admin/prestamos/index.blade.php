@extends('adminlte::page')

@section('title', 'Dashboard')

@section('css')
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

@endsection

@section('content_header')
       <div class="d-flex  justify-content-between" >
       <h1>Listado de Prestamos</h1>
      <div>
            @can('admin.prestamos.create')
               <a class="btn btn btn-dark" href="{{route("admin.prestamos.create")}}">Agregar Prestamos</a>
           @endcan
      </div>
    </div>
@stop

@section('content')
  

@if (session("info"))
<div class="alert alert-success">
    <strong>{{session("info")}}</strong>
</div>
@endif

<div class="card">
     
    <div class="card-body">
        <div id="buttons" >

        </div>

        <table class="table" id="example">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Empleado</th>
                    <th>Estado</th>
                    <th>Creado</th>
                    <th>Actulizado</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>    

               @foreach ($prestamos as $prestamo)
                    <tr>
                        <td>{{ $prestamo->id }}</td>
                        <td>{{ $prestamo->empleado->emp_nombre }}</td>
                        <td>{{ $prestamo->pre_estatus }}</td>
                        <td>{{ $prestamo->created_at }}</td>
                        <td>{{ $prestamo->updated_at }}</td>
                        <td width="10px">
                            <a class="btn btn-sm btn-info" href="{{route("admin.prestamos.show",$prestamo->id)}}">
                            Show
                            </a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-sm btn-warning" href="{{route("admin.prestamos.edit",$prestamo->id)}}">
                            Editar
                            </a>
                        </td>
                        <td width="10px">
                            <form action="{{route("admin.prestamos.destroy",$prestamo)}}" method="POST" >
                                @csrf
                                @method("delete")
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Desea eliminar ? ...')" >Eliminar</button>
                            </form>
                        </td>
                    </tr>
               @endforeach

            </tbody>
        </table>

       
    </div>
</div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    
 
@stop

@section('js')
   <script src="https://code.jquery.com/jquery}-3.5.1.js" defer ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js" defer ></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js" defer ></script> 

   

    <script>
            $(document).ready(function() {
                $('#example').DataTable({
                    "language": {
                                "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                                },
                    responsive:"true",

                });
                
             } );
    </script>
@stop


 
