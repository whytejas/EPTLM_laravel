@extends('master')
@section('title', 'EPTLM: Blog')
@section('content')

    @include('partials.logo')
<div class="content volunteerwithus orientation">
    <h1> Orientation Dates & Info </h1>

    <img  class="header-img" src="{{ asset('/images/pages/orientation.jpg') }}" alt="orientation">

    <div>
        <p>
            To become a English Pour Tout Le Monde volunteer, you will begin by attending one of our orientation sessions. We hold orientation sessions twice a month; one evening and one morning.</p>
        <p>    For December the date(s) and location(s) will be:</p>
        <ul>


            <li>Wednesday 4th December at 7:30am : Le Grande Breguet Cafe</li></ul>

        <br><br>
        <p> We will cover the following topics in the orientation session: </p><br>
        <ul class="list-group list-group-flush">

            <li class="list-group-item">An introduction to EPTLM’s history, objectives and our core team</li>
            <li class="list-group-item">Explanation of our volunteering opportunities</li>
            <li class="list-group-item">Guidance for volunteering with EPTLM</li>
            <li class="list-group-item">Group discussion of ideas!</li>
        </ul>

        <p> <br>We will give all attendees our official documentation; volunteer guidelines and safeguarding forms.
            <br> <br>
            Our orientation sessions are a relaxed get together, serving not only as a chance to learn more about EPTLM but also for new and existing volunteers and EPTLM team members to socialise.</p>


    </div>
    <p><strong>
            If you would like to volunteer with us in any capacity, however big or small, we would love to hear from you! Please drop us an email at
            <a href="mailto:info@eptlm.com">info@eptlm.com</a> or <a href="{{url('/contact')}}" target="_blank">Contact Us</a>.</strong>

{{--        <a class="linkTop" href="#top2">Top</a>--}}
    </p>


</div>

    @stop
