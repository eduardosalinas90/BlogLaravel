@extends('templates.base')
@section('title')
Crear Usuario
@endsection

@section('content')
<div class="container">

{!! Form::open(['route'=>'admin.users.store', 'method'=>'POST']) !!}
<div class="form-group">
    {!! Form::label('name','Nombre') !!}:
    {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('email','Email') !!}:
    {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Email', 'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('password','Password') !!}:
    {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'required']) !!}

</div>

<div class="form-group">
    {!! Form::label('type','Tipo de Usuario') !!}:
    {!! Form::select('type', [''=>'Seleccionar', 'menber'=>'Mienbro', 'admin'=>'Administrador'], null, ['class'=>'form-control']) !!}

</div>

<div class="form-group">

    {!! Form::submit('Guadar',['class'=>'btn btn-success']) !!}

</div>

{!! Form::close() !!}
</div>

@endsection
