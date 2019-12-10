@extends('master')

@section('content')



    <div class="editing">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@create')}}">Write a New Post</a></button>
            <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@index')}}">All Posts</a></button>

        </div>
    </div>

  <div>  <h1>Welcome {{ucfirst(session('user_name'))}}</h1></div>
    <div class="card-deck">
    @foreach($articles as $article)


        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$article->created_at->diffForHumans()}}</div>
            <div class="card-body text-primary">
                <h2 class="card-title"><a href="{{ action('ArticlesController@show', [$article->id])}}">{{$article->Title}}</a></h2>
                <img class="card-img-top" src="{{asset('/uploads/blog/images/'.$article->filename) }}" alt="{{$article->filename}}">
                <p class="card-text">Click title to read</p>
            </div>
        </div>




{{--<div>
        <article>
            <ul>
                <li><h4><a href="{{ action('ArticlesController@show', [$article->id])}}">{{$article->Title}}</a></h4></li>
            </ul>



        </article>
</div>--}}

    @endforeach
    </div>
@stop
