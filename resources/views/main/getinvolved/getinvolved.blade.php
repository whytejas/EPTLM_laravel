@extends('master')
@section('title', 'EPTLM: Get Involved')
@section('content')
    @include('partials.logo')



    <div id="top2"  class="intro">
        <h1> Get Involved</h1>
        <div  class="menu">
            <nav>

                <ul>
                    <li><a href="#anchor5">Orientation Sessions</a></li>
                    <li><a href="{{url('/contact')}}">Volunteer</a></li>

                </ul>
            </nav>
        </div>

    </div>

    <div class="content volunteerwithus orientation">
        <h2> Orientation Sessions: Info & Dates</h2>
        <div>
            <p>
                To become a English Pour Tout Le Monde volunteer, you will begin by attending one of our orientation sessions. We hold orientation sessions twice a month; one evening and one morning.</p>
            <p>    For December the date(s) and location(s) will be:</p>
            <ul>


                <li>Wednesday 4th December at 7:30am : Le Grande Breguet Cafe</li></ul>

            <br><br>
            <p> We will cover the following topics in the orientation session: </p><br>
            <ul class="list-group list-group-flush">

                <li class="list-group-item">An introduction to English Pour Tout Le Monde’s history, objectives and our core team</li>
                <li class="list-group-item">Explanation of our volunteering opportunities</li>
                <li class="list-group-item">Guidance for volunteering with English Pour Tout Le Monde</li>
                <li class="list-group-item">Group discussion of ideas!</li>
            </ul>

            <p> <br>We will give all attendees our official documentation; volunteer guidelines and safeguarding forms.
                <br> <br>
                Our orientation sessions are a relaxed get together, serving not only as a chance to learn more about English Pour Tout Le Monde but also for new and existing volunteers and English Pour Tout Le Monde team members to socialise.</p>


        </div>
        <p><strong>
                If you would like to volunteer with us in any capacity, however big or small, we would love to hear from you! Please drop us an email at
                <a href="mailto:info@eptlm.com">info@eptlm.com</a> or <a href="{{url('/contact')}}" target="_blank">Contact Us</a>.</strong></p>

        <a class="linkTop" href="#top2">Top</a>
    </div>



@stop
