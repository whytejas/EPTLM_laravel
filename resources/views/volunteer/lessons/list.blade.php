@extends('master')
@section('title', 'EPTLM: Classroom Sign Up')

@include('partials.logo')

@section('content')

    <div class="dashboard-btn">

        <a href="{{url('/logout')}}" class="btn btn-dark btn-lg btn-lg active" role="button" aria-pressed="true">Logout</a>
        <a href="{{url('/admin')}}" class="btn btn-danger btn-lg btn-lg active" role="button" aria-pressed="true">Volunteer Directory</a>
        <a href="{{url('/admin')}}" class="btn btn-warning btn-lg btn-lg active" role="button" aria-pressed="true">Blog Articles</a>
    </div>
    <div class="intro">
        <div id="top"></div>
        <br><br>
        <h1>Classroom Sessions</h1>

    </div>

    <div class="dashboard-btn">
        <a href="{{url('/lessons/create')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">Add a new Classroom Session</a>




    </div>


    <br><br>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead class="thead-light">
            <tr>

                <th scope="col">Modify</th>
                <th scope="col">Session Date</th>
                <th scope="col">Session Day</th>
                <th scope="col">Total Volunteers</th>
                <th scope="col">Volunteers Signed Up</th>
                <th scope="col">**Delete Permanently**</th>
            </tr>
            </thead>
            <tbody>

            @foreach($lessons as $lesson)

                <tr>


                    <th scope="row"><a href="{{url('/lessons/edit', [$lesson->id])}}"><button type="button" class="btn btn-secondary">Modify</button></a></th>
                    <td>{{ \Carbon\Carbon::parse($lesson->session_date)->format('d M Y')}}</td>
                    <td>{{ \Carbon\Carbon::parse($lesson->session_date)->format('l')}}</td>
                    <td>{{$lesson->volunteers->count()}}</td>
                    <td>


                        @if($lesson->volunteers)

                            @foreach($lesson->volunteers as $volunteer)
                                {{$volunteer->firstname. " ". $volunteer->lastname}}<br>
                            @endforeach
                        @else
                            {{"None"}}

                        @endif




                    </td>
                    <td><a href="{{url('/lessons/delete', [$lesson->id])}}"><button type="button" class="btn btn-success">DELETE</button></a></td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>

@endsection
