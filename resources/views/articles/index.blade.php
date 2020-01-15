@extends('master')

@section('content')


    @include('partials.logo')


    <div>  <h1>Welcome {{ucfirst(session('user_name'))}}</h1></div>
    <div class="dashboard-btn">

        <a href="{{url('/logout')}}" class="btn btn-dark btn-lg btn-lg active" role="button" aria-pressed="true">Logout</a>

        <a href="{{url('/lessons/list')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">GO TO: Classroom Sessions</a>
        <a href="{{url('/directory')}}" class="btn btn-danger btn-lg btn-lg active" role="button" aria-pressed="true">Volunteer Directory</a>

    </div>
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
                    <h2 class="card-title"><a href="{{ action('ArticlesController@show', [$article->id])}}">{{$article->Title}}</a></h2>
                    <img class="card-img-top" src="{{asset('/uploads/blog/images/'.$article->filename) }}" alt="{{$article->filename}}">
                    <p class="card-text">Click title to read</p>
                </div>
            </div>



        @endforeach
    </div>
@stop
