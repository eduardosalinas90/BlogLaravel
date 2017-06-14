@extends('front.templates.main');
@section('title',$article->title);
@section('content')
<div class="row">
    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <h1>{{ $article->title }}</h1>


        <p>{{ $article->content }}</p>
        <h3>Comentarios:</h3>
        <hr>
        <div id="disqus_thread"></div>
    </div>
@include('front.templates.partials.aside')
</div>
@endsection
