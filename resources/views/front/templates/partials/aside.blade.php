
<div class="col-md-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">{{trans('app.title-category')}}</h3>
                </div>
                <div class="panel-body">
                   <ul class="list-group">
                   @foreach ($categories as $category)
                       <li class="list-group-item">
                            <span class="badge">{{ $category->articles->count() }}</span>
                                <a href="{{ route('front.search.categories',$category->name)}}">{{ $category->name }}</a>
                        </li>
                   @endforeach

                    </ul>
                </div>
            </div>

            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">{{trans('app.title-tags')}}</h3>
                </div>
                <div class="panel-body">

                   @foreach ($tags as $tag)
                      <a href="{{ route('front.search.tags',$tag->name)}}">
                      <span class="label label-default">{{ $tag->name }}</span>
                      </a>

                   @endforeach


                </div>
            </div>
        </div>

