@extends('master')
@section('title', 'EPTLM: Programmes')
@section('content')
    @include('partials.logo')
    <div class="intro">
        <h1> Volunteer </h1>
        <div class="menu">
            <nav>

                <ul>
                    <li><a href="#anchorWHY">Why Volunteer?</a></li>
                    <li><a href="#anchorHWW">How We Work</a></li>
                    <li><a href="#anchorVR">Volunteer Roles</a></li>


                </ul>
            </nav>
        </div>
    </div>

    <img  class="header-img" src="{{ asset('/images/pages/volunteer.jpg') }}" alt="volunteer">

    <div class="content">
        <div id="anchorWHY"></div>
        <div class="whyVolunteer">
            <h2 >Why Become an EPTLM Volunteer?</h2>

            <ul class="list-group list-group-flush">

                <li class="list-group-item">Make a real difference</li>
                <li class="list-group-item">Learn new skills</li>
                <li class="list-group-item">Meet new people</li>
                <li class="list-group-item">Exchange languages</li>
                <li class="list-group-item">Be part of building a new association</li>
                <li class="list-group-item">Contribute on a personal level to help those less privileged</li>
            </ul>


            <a class="linkTop" href="#top">Top</a>
            <br><br>
        </div>

        <div id="anchorHWW"></div>
        <div>
            <h2 >How We Work</h2>

            <p>To become a English Pour Tout Le Monde volunteer, you will begin by attending one of our <a href="{{url('/orientation')}}">orientation sessions</a>. We hold orientation sessions twice a month; one evening and one morning. We run our orientation sessions to give you a background about EPTLM, basic training for our programmes and to get to know each other.
                <br>
                When you are an EPTLM volunteer you will be continuously supported by our core team, to make sure you are happy! One of our priorities within our association is to ask for feedback and ideas about how we can grow and  make EPTLM better.
            </p>


            <a class="linkTop" href="#top">Top</a>
            <br><br>
        </div>

        <div id="anchorVR"></div>
        <div class="volunteerRoles">
            <h2 >Volunteer Roles</h2>

            <p>We are always happy to welcome anyone into EPTLM volunteer community, our only requirement is that you are enthusiastic, kind and want to make a positive difference to society.
                <br>
                Our volunteer roles include: </p>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">English speaking classroom assistant (no skill requirement or time commitment)</li>
                <li class="list-group-item">English speaking classroom facilitator (English teaching experience or TEFL/CELTA certification preferred) *</li>
                <li class="list-group-item">Tutors for our one to one programme ((no skill requirement but 3 month -1hr per week, time commitment) *</li>
                <li class="list-group-item">Curriculum developer (experience with curriculum development or TEFL/CELTA certificate preferred)</li>
                <li class="list-group-item">Volunteers to help with social media communications (no skill requirement or time commitment)</li>
                <li class="list-group-item">Events (organising fundraising or awareness building events) </li>
            </ul>
            <br><br>
            <p>* In addition all classroom facilitator/tutors must be willing to partake in KPI assessments so that EPTLM can measure effectiveness of our activities. All classroom assistants/facilitators/tutors must undertake and present a clean police check with the French authorities (instructions of how to obtain this document will be provided in volunteer induction). </p>


            <a class="linkTop" href="#top">Top</a>
            <br><br>
        </div>
    </div>
@stop
