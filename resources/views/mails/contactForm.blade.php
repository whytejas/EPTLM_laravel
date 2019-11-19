@component('mail::message')
    Hello ! **{{$name}}** just filled out the Contact form on our site!  {{-- use double space for line break --}}
    **Email: {{$email}}**

    The following is the message they wrote:

    {{$message}}




@endcomponent
