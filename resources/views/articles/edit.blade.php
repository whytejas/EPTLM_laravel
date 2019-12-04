@extends('master')

@section('content')

    <h1>Edit article: {{$article->Title}}</h1>

    <div class="articles">
    {!! Form::model($article, ['method'=> 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

    @include('articles.form', ['submitBtnText'=> 'Update This Article'])

    {!! Form::close() !!}

    @include('errors.list')

    </div>

@stop
