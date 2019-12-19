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
        <a href="{{url('/volunteer/classroom_show')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">Manage Your Current Classroom Sessions</a>

        <a href="{{url('/volunteer/classroom_signup')}}" class="btn btn-success btn-lg btn-lg active" role="button" aria-pressed="true">Sign Up: Classroom Sessions</a>



</div>
    </div>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script>
        jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ url('/grocery/post') }}",
                    method: 'post',
                    data: {
                        name: jQuery('#name').val(),
                        type: jQuery('#type').val(),
                        price: jQuery('#price').val()
                    },
                    success: function(result){
                        console.log(result);
                    }});
            });
        });
    </script>
@endsection
