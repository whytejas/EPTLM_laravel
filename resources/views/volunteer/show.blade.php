@extends('master')

@section('content')


    <div class="editing">
        <h1> {{ucfirst($volunteer->firstname)}}'s Classroom Schedule</h1>

    </div>
    <div class="dashboard-btn">
        <a href="{{url('/volunteer/logout')}}" class="btn btn-dark btn-lg btn-lg active" role="button" aria-pressed="true">Logout</a>

        <a href="{{url('/volunteer/classroom_signup')}}" class="btn btn-success btn-lg btn-lg active" role="button" aria-pressed="true">Sign Up: Classroom Sessions</a>


    </div>
    <br> <br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
            <tr>

                <th scope="col">RSVP</th>
                <th scope="col">Session Date</th>
                <th scope="col">Session Day</th>
                <th scope="col">In</th>

            </tr>
            </thead>
            <tbody>


            @foreach($lessons as $lesson)

                <tr>
                    <th scope="row"><a href="{{url('volunteer/lessons/cancel', [$lesson->id])}}"><button type="button" class="btn btn-secondary">CANCEL</button></a></th>
                    <td>{{ \Carbon\Carbon::parse($lesson->session_date)->format('d M Y')}}</td>
                    <td>{{ \Carbon\Carbon::parse($lesson->session_date)->format('l')}}</td>
                    <td>{{ \Carbon\Carbon::parse($lesson->session_date)->diffForHumans()}}</td>


                </tr>

        @endforeach
            </tbody>
        </table>
    </div>




    @endsection
