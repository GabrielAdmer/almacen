@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
     <div class="d-flex  justify-content-between" >
        <h1>Lista de Roles</h1>
            
        <div>
            <a class="btn btn btn-dark" href="{{route("admin.roles.create")}}">Agregar Role</a>   
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
            <table class="table table-striped" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td width="10px">
                                <a href="{{ route('admin.roles.edit',$role) }}" class="btn btn-sm btn-primary" >Editar</a>
                            </td>
                            <td width="10px">
                                   <form action="{{route("admin.roles.destroy",$role)}}" method="POST" >
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
    <script> console.log('Hi!'); </script>
@stop