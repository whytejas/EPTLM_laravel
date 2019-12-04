@extends('master')

@section('content')




   <h1> {{$article->Title}}</h1>


   <div class="editing">
       <p>by
       <h4>{{ucfirst($user->username)}}</h4></p>
       <div class="btn-group" role="group" aria-label="Basic example">
           <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@edit', [$article->id])}}">Edit this Post</a></button>
           <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@create')}}">Write a New Post</a></button>
 <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@index')}}">All Posts</a></button>

       </div>
   </div>

   <article>
       <div class="content"><p>
           {!! $article->Content !!}
           </p>
       </div>

   </article>

   {!! Form::model($article, ['method'=> 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
   {!! Form::submit('Delete This Post', ['class' => 'btn btn-primary form-control deletebutton']) !!}
   {!! Form::close() !!}

  {{-- @if($article->tags)
    <h5>Tags:</h5>
    <ul>
        @foreach($article->tags as $tag)
            <li>{{$tag->name}}</li>
            @endforeach
    </ul>

    @endif
--}}



@stop
