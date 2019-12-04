@extends('master')
@section('title', 'EPTLM: Contact')

@section('content')

    @include('partials.logo')


    <div class="intro">

        <script>
            $(document).ready(function () {

                $('.submit').click(function () {

                    $('.parent').append("<div class='alert alert-success alert-dismissable fade show' role='alert'><strong>Thank you !</strong> If filled out correctly, your form will be received. Please check your email for a response!<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>")



                })

            });

        </script>

        <div class="parent">
        </div>


        <h1> Contact</h1>

    </div>
    <img  class="header-img" src="{{ asset('/images/pages/contact.jpg') }}" alt="contact">
<div class="content">
    <p>If you would like to volunteer with us in any capacity, however big or small, we would love to hear from you! Please fill out the form or email us at <a href="mailto:info@eptlm.com">info@eptlm.com</a> </p></div>

    <section>
        <div id="anchor4"></div>
        <div id="contact">
            <br>
{{--            <div id="carte"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4011.723539684663!2d2.362239914831146!3d48.88718773768702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e79b168c281%3A0x62ebb624556731de!2zSmFyZGlucyBk4oCZw4lvbGU!5e0!3m2!1sfr!2sfr!4v1571909659031!5m2!1sfr!2sfr"></iframe>--}}


                {!! Form::open(array('url' => "/formInput")) !!}

                <span id="address">

                            <strong>All fields are required.</strong>
                        </span>
                @include('main.form')

                {!! Form::close() !!}
                @include('errors.list')

            </div>



        </div>

    </section>







@stop
