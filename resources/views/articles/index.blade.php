@extends('master')

@section('content')

    <h1>LATEST NEWS</h1>

    <div class="editing">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@create')}}">Write a New Post</a></button>
            <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@index')}}">All Posts</a></button>

        </div>
    </div>

    <div class="card-deck">
    @foreach($articles as $article)


        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$article->created_at->diffForHumans()}}</div>
            <div class="card-body text-primary">
                <h2 class="card-title">{{$article->Title}}</h2>
                <p class="card-text"><a href="{{ action('ArticlesController@show', [$article->id])}}">{!!$article->Content!!}</a></p>
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
