@extends('front.templates.main')
@section('content')
<h3>{{trans('app.test',['name'=>'Eduardo','company'=>'Codigo Facilito'])}}</h3>
    <h3>{{trans('app.title-main')}}</h3>

    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

            <div class="row">

                @foreach ($articles as $article)


                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <a href="{{ route('front.view.article',$article->slug) }}">
                                <h3 class="panel-title">{{ $article->title}}</h3>
                                </a>
                            </div>
                    <div class="panel-body">
                        @foreach ($article->images as $image)
                            <a href="{{ route('front.view.article',$article->slug) }}" class="thumbnail">
                            <img src="{{ asset('img/articles/'.$image->name) }}" alt="" class="img-responsive">
                            </a>
                        @endforeach
                    <hr>
                        <a href="{{ route('front.search.categories',$article->category->name)}}">
                        <i class="fa fa-folder-open-o" aria-hidden="true"> {{ $article->category->name }}</i></a>
                        <div class="pull-right">
                            <i class="fa fa-clock-o" aria-hidden="true"> {{ $article->created_at->diffForHumans()}}</i>
                        </div>

                    </div>
                </div>

        </div>
        @endforeach

            </div>
            <div class="text-center">
                {!! $articles->render() !!}
            </div>

        </div>



         @include('front.templates.partials.aside')


    </div>
@endsection

