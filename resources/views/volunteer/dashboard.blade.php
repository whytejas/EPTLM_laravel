@extends('master')
@section('title', 'EPTLM: Volunteer Dashboard')

<img  class="header-img" src="{{ asset('/images/pages/dashboard_welcome.jpg') }}" alt="volunteer">

@section('content')
    <div class="intro">
        <div id="top"></div>

        <br><br>
    <h1>Welcome back, {{Auth::guard('volunteer')->user()->firstname}} ! </h1>

    </div>

    <div class="content">

<div class="dashboard-btn">
        <a href="{{url('/volunteer/classroom_show')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">Your Current Classroom Sessions</a>

        <a href="{{url('/volunteer/classroom_signup')}}" class="btn btn-success btn-lg btn-lg active" role="button" aria-pressed="true">Sign Up: Classroom Sessions</a>



</div>
    </div>
@endsection
