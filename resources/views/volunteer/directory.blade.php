@extends('master')

@section('content')



    @include('partials.logo')



    <div class="editing">
        <h1> Volunteer Directory</h1>

    </div>

    <div class="dashboard-btn">

        <a href="{{url('/logout')}}" class="btn btn-dark btn-lg btn-lg active" role="button" aria-pressed="true">Logout</a>
        <a href="{{url('/lessons/create')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">Add a new Classroom Session</a>

        <a href="{{url('/admin')}}" class="btn btn-warning btn-lg btn-lg active" role="button" aria-pressed="true">Blog Articles</a>
    </div>



    <div>
        <h2>List of Volunteers</h2>
        <ul>
            @foreach ($volunteers->sortBy('lastname') as $volunteer)
                <li> {{ucfirst($volunteer->firstname)}} {{strtoupper($volunteer->lastname) }}</li>
            @endforeach
        </ul>
    </div>


    <div id="volunteer_details" class="content">
        <p>Choose a volunteer from the dropdown menu to see their details</p>
    </div>
    <br><br>
    <div class="articles">
        {!! Form::open(['method' => 'get', 'url' => url('volunteer/directory/getvolunteer/')]) !!}
        <div class="form-group">
            {!! Form::label('volunteername', 'Select a Volunteer') !!}
            {!! Form::select('volunteer_list[]', $volunteers->pluck('firstname'), null, ['class' => 'form-control','id'=>'volunteername' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Select', ['class' => 'btn btn-primary form-control', 'id'=>'ajaxSubmit']) !!}
        </div>

        {!! Form::close() !!}
        @include('errors.list')
    </div>
    <br><br>



    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
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
                    url: '/volunteer/directory/getvolunteer/',
                    type: 'GET',
                    data: {name: jQuery("#volunteername option:selected").html()},
                    dataType: "json",
                    success: function(response){
                        console.log(response);
                        var $firstname = response.volunteer.firstname.toUpperCase() ;
                        var $lastname = response.volunteer.lastname.toUpperCase() ;
                        var $email = response.volunteer.email;
                        var $lessons = response.lessons;

                        $("#volunteer_details").html(function(){
                            return "Volunteer Name: <strong>" + $firstname + " " + $lastname + "</strong><br> Volunteer Email: " + $email + "<br><br>Signed up (upcoming session): " + $lessons  ;
                        });



                    }});
            });
        });
    </script>

@stop
