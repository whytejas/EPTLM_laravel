@extends('master')
@section('title', 'EPTLM: Contact')

@section('content')

    @include('partials.logo')


    <div class="intro">


        <div class="parent">
        </div>


        <h1> Contact</h1>

        <!-- Begin Mailchimp Signup Form -->
       {{-- <link href="//cdn-images.mailchimp.com/embedcode/slim-10_7.css" rel="stylesheet" type="text/css">
        <style type="text/css">
            #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
               We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
        </style>--}}
        <div id="mc_embed_signup">
            <form action="https://eptlm.us4.list-manage.com/subscribe/post?u=0cef73766ed443d90ab5f29d2&amp;id=ab0f69f92b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL"><h3>If you haven't already, subscribe to English Pour Tout Le Monde updates &amp; newsletter</h3></label>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_0cef73766ed443d90ab5f29d2_ab0f69f92b" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
            </form>
        </div>

        <!--End mc_embed_signup-->

    </div>
    <br>
    <div class="content">
        <p><strong>If you would like to volunteer with English Pour Tout Le Monde in any capacity, however big or small, we would love to hear from you! Please fill out the form below or email us at <a href="mailto:info@eptlm.com">info@eptlm.com</a> </strong></p></div>

    <img  class="header-img" src="{{ asset('/images/pages/contact.jpg') }}" alt="contact">


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
