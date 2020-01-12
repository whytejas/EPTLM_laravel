@extends('master')
@section('title', 'EPTLM: Classroom Sign Up')

@include('partials.logo')

@section('content')


    <div class="intro">
        <div id="top"></div>
        <br><br>
        <h1>Classroom Sessions: Sign Up </h1>

    </div>
<div class="content volunteerwithus orientation">

<h3>Venue for all sessions:</h3><br>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"> <strong>Tuesday :</strong> Maison des Associations (address) </li>
            <li class="list-group-item"> <strong>Thursday :</strong> Bibliothèque-Discothèque Hergé (address)</li>

        </ul>

</div>


<br>
    <div class="dashboard-btn">
        <a href="{{url('/volunteer/logout')}}" class="btn btn-dark btn-lg btn-lg active" role="button" aria-pressed="true">Logout</a>
        <a href="{{url('/volunteer/classroom_show')}}" class="btn btn-primary btn-lg btn-lg active" role="button" aria-pressed="true">Manage Your Current Classroom Sessions</a>





    </div>

   <br><br>
   <div class="table-responsive">
   <table class="table table-striped table-bordered table-hover">
       <thead class="thead-light">
       <tr>

           <th scope="col">RSVP</th>
           <th scope="col">Session Date</th>
           <th scope="col">Session Day</th>
           <th scope="col">Total Volunteers</th>
           <th scope="col">Volunteers Signed Up</th>
       </tr>
       </thead>
       <tbody>

       @foreach($lessons as $lesson)

       <tr>
           @if ($lesson->volunteers()->where('volunteer_id', Auth::guard('volunteer')->user()->id)->doesntExist())


           <th scope="row"><a href="{{url('volunteer/lessons/signup', [$lesson->id])}}"><button type="button" class="btn btn-secondary">SIGN UP</button></a></th>

           @else
               <th scope="row"><button type="button" class="btn btn-light"><em>Signed Up</em></button></th>

           @endif

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
       </tr>

       @endforeach

       </tbody>
   </table>
   </div>

@endsection
