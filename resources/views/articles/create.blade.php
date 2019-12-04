@extends('master')

@section('content')

<h1>Write a new article</h1>

<div class="articles">
    {!! Form::open(['url' => 'articles']) !!}

    @include('articles.form', ['submitBtnText'=> 'Add New Article'])

    {!! Form::close() !!}
@include('errors.list')
</div>




@stop
