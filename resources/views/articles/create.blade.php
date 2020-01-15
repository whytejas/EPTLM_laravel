@extends('master')

@section('content')
    @include('partials.logo')
    <h1>Write a new article</h1>

    <div class="articles">
        {!! Form::open(['url' => 'articles', 'files' => true]) !!}

        @include('articles.form', ['submitBtnText'=> 'Add New Article'])

        {!! Form::close() !!}
        @include('errors.list')
    </div>




@stop
