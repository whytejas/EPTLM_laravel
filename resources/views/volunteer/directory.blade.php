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
<div id="volunteer_details" class="content">
<p>Choose a volunteer from the dropdown menu to see their details</p>
</div>
 {{--   <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
            <tr>

                <th scope="col">S.No</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>

            </tr>
            </thead>
            <tbody>


            @foreach($volunteers as $volunteer)

                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ucfirst($volunteer->firstname)}}</td>
                    <td>{{ucfirst($volunteer->lastname)}}</td>
                    <td>{{ucfirst($volunteer->email)}}</td>


                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
--}}




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
