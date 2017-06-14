@extends('templates.base')
@section('title','Lista de Usuarios')
@section('content')
<div class="container">
<div class="row">
<div class="col-xs-8 col-sm-8 col-md-offset-2 col-md-8 col-lg-8">

<p><a href="{{route('admin.users.create')}}" class="btn btn-info">Registrar Nuevo Usuario</a></p>

<table class="table table-condensed table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Tipo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>

            @if($user->type == 'admin')
            <td><span class="label label-primary">{{$user->type}}</span></td>

            @else
            <td><span class="label label-default">{{$user->type}}</span></td>

            @endif

             <td>
                <a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-cog"></span> Editar</a>
                <a href="{{route('admin.users.destroy',$user->id)}}" class="btn btn-danger" onclick=" return confirm('Seguro que quieres eliminar?')"> <span class="glyphicon glyphicon-remove"></span> Eliminar</a>
             </td>

        </tr>
        @endforeach
    </tbody>
</table>
{!! $users->render() !!}
</div>
</div>
</div>
@endsection
