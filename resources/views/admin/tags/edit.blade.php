@extends('templates.base')
@section('title')
Editar Tag - {{$tag->name}}
@endsection

@section('content')
<div class="container">
{!! Form::open(['route'=>['admin.tags.update',$tag], 'method'=>'PUT']) !!}
<div class="form-group">
    {!! Form::label('name','Nombre') !!}:
    {!! Form::text('name', $tag->name, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required']) !!}

</div>


<div class="form-group">

    {!! Form::submit('Actualizar',['class'=>'btn btn-success']) !!}


</div>

{!! Form::close() !!}
</div>

@endsection
