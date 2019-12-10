@extends('master')
@section('title', 'EPTLM: Contact')

@section('content')

    @include('partials.logo')


    <div class="intro">


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



                {!! Form::open(array('url' => "/formInput", 'id'=>"form")) !!}

                <span id="address">

                            <strong>All fields are required.</strong>
                        </span>
                @include('main.form')

                {!! Form::close() !!}
                @include('errors.list')

            </div>



        </div>

    </section>





    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#form').validate({ // initialize the plugin
                rules: {
                    Name: {
                        required: true,
                    },
                    Email: {
                        required: true,
                        email: true
                    },
                    Subject: {
                        required: true
                    },
                    Message: {
                        required: true
                    }

                }
            });
        });
    </script>




@stop
