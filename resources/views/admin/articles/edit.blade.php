@extends('templates.base')
@section('title','Actualizar de Articulos')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('plugins/trumbowyg/dist/ui/trumbowyg.min.css')}}">
@endsection

@section('content')
<div class="container">
{!! Form::open(['route'=>['admin.articles.update',$article],'method'=>'PUT']) !!}

<div class="form-group">
    {!! Form::label('title', 'titulo') !!}
    {!! Form::text('title', $article->title, ['class'=>'form-control','required']) !!}

    <div class="form-group">
        {!! Form::label('category_id', 'Categoria') !!}

        {!! Form::select('category_id', $categories, $article->category->id, ['class'=>'form-control selec-category','placeholder'=>'Select Your Options']) !!}
    </div>

    <div class="form-group">

        {!! Form::label('content', 'Contenido') !!}

        {!! Form::textarea('content', $article->content, ['class'=>'form-control edit-content','required','placeholder'=>'Contenido']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('id_tags', 'Etiquetas') !!}
        {!! Form::select('id_tags[]', $tags, $my_tags, ['class'=>'form-control selec-tags','multiple','multiple']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Actualizar', ['class'=>'btn btn-success']) !!}
    </div>
</div>

{!! Form::close() !!}
@endsection

@section('js')
<script>
$('.selec-tags').chosen({
    placeholder_text_multiple:'Selecciona maximo 3 Tags',
    max_selected_options:3,
    no_results_text: 'Etiqueta no encontrada'
});

$('.selec-category').chosen({
    placeholder_text_single:'Selecciona una categoria'
});

$('.edit-content').trumbowyg({lang: 'es'});



</script>
@endsection
</div>
