@extends('master')

@section('content')
    @include('partials.logo')
    <h1>Create a new classroom lesson</h1>

    <div class="articles">
        {!! Form::open(['url' => 'lessons/create']) !!}

        @include('volunteer.lessons.form', ['submitBtnText'=> 'Add New Classroom Session'])

        {!! Form::close() !!}
        @include('errors.list')
    </div>




@stop
