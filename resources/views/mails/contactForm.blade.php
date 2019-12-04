@component('mail::message')
    Hello ! **{{$name}}** just filled out the Contact form on our site!  {{-- use double space for line break --}}
    **Email: {{$email}}**<br>**Subject: {{$subject}}**<br>The following is the message they wrote:<br><br>{{$message}}




@endcomponent
