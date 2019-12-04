@extends('master')
@section('title', 'EPTLM: Programmes')
@section('content')
    @include('partials.logo')


    <div id="top2"  class="intro">
        <h1> Regular Classroom Sessions </h1>

        <img  class="header-img" src="{{ asset('/images/pages/classroom.jpg') }}" alt="classroom">

        <div class="content">



            <p>
                Every Tuesday and Thursday morning we meet with our volunteers at Jardin d’Éole and help serve breakfast with the association P’tit Dej (this is fun and good for practising french, but it is optional for EPTLM volunteers). Then at 9:30am we meet in the park with our students and walk together to our indoor space close by. We then teach English using worksheets, games and conversation until 11:30am.</p>

        {{--    <a class="linkTop" href="#top">Top</a>
            <br><br>--}}
        </div>
    </div>
@stop
