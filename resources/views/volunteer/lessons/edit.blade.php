@extends('master')

@section('content')
    @include('partials.logo')
    <div class="intro">
        <h1>Edit Classroom Session: <br> {{ \Carbon\Carbon::parse($lesson->session_date)->format('d M Y')}}</h1>
    </div>
    <div class="articles">
        {!! Form::model($lesson, ['method'=> 'PATCH', 'action' => ['LessonsController@update', $lesson->id]]) !!}

        @include('volunteer.lessons.form', ['submitBtnText'=> 'Update This Session'])

        {!! Form::close() !!}

        @include('errors.list')

    </div>

@stop
