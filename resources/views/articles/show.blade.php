@extends('master')

@section('content')

    @include('partials.logo')





   <div class="editing">
       <h1> {{$article->Title}}</h1>
       <div class="btn-group" role="group" aria-label="Basic example">
           <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@edit', [$article->id])}}">Edit this Post</a></button>
           <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@create')}}">Write a New Post</a></button>
 <button type="button" class="btn btn-secondary btn-light"><a href="{{ action('ArticlesController@index')}}">All Posts</a></button>

       </div>
   </div>




   <div class="col-md-6 offset-md-3 book-desc">
       <div class="card">

           <div class="card-body">
{{--               <h1>{{ $article->Title}}</h1>--}}
               <img class="card-img-top" src="{{asset('/uploads/blog/images/'.$article->filename) }}" alt="{{$article->filename}}">
{{--               <h4 class="card-title">Book No: {{ $book->id}}</h4>--}}
               <p class="card-text">
                  Written by <strong>{{ucfirst($article->user->username)}}</strong>
               </p>
               <a href="{{ url('/admin') }}" class="btn btn-dark">Back to Blog Admin page</a>
           </div>
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




@stop
