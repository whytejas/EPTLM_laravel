

@extends('master')

@section('title', 'EPTLM: About')

@section('content')

    @include('partials.logo')


    <div class="intro">
        <div id="top"></div>
        <br><br>
        <h1 >About</h1>


    </div>
    <img  class="header-img" src="{{ asset('/images/pages/about.jpg') }}" alt="about">
    <div class="content">
        <div id="anchor1"></div>
        <br>
        <div class="whatIsEPTLM">
            <h1>What is English Pour Tout Le Monde ?</h1>
            <div>
                <h2>Our Mission Statement</h2>

                <p>
                    Our goal is to provide English learning opportunities to those facing difficult life circumstances and helping all our volunteers and beneficiaries to live a full, happy and integrated life in France.

                </p>
                <a class="linkTop" href="#top">Top</a>
            </div>

            <div>
                <h2> Our Core Values</h2>

                <p>
                    The English Pour Tout Le Monde team truly believes that providing education to everyone (pour tout le monde) is essential to developing a more sustainable society. Combined with building compassion through relationships across all walks of life, together we can build a more kind and inclusive society.
                    <br><br>
                    As our team member <a href="#Tejas">Tejas </a>wrote:
                    <blockquote class="blockquote text-center">
                <p class="mb-0"><em> “I believe in the power of words. Words are portals — doors to the bridges that can lead us to each other.<br> And language is that bridge. We can meet each other half way if we try.”</em></p>
                </blockquote>
                <p>

                    Learning a new language is always an invaluable tool and it has been proven that having English language skills can aid individuals in the job and education spheres. Therefore, we hope through English exchange we can offer individuals access to more opportunities.
                    <br><br>
                    English Pour Tout Le Monde works on a cooperative basis; we want all our participants to have a say in the way our programmes are run. We hold monthly meet-ups (open to all), to not only socialise but importantly to share and discuss how we can improve our work.

                </p>

                <a class="linkTop" href="#top">Top</a>
            </div>


        </div>




        <div id="anchor2"></div>
        <br>
        <div class="teamMembers">
            <br> <br>
            <h1> Our Team </h1>
            <div class="team">

                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/katieOGILVIE.jpg') }}"  alt="Katie Ogilvie">
                        <div class="container"><a href="mailto:katie@eptlm.com">Katie OGILVIE</a><br>
                            Co-Founder & Lead Coordinator</div>
                    </div>

                    <br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo1">Read Bio</button><br><br>
                    <div id="demo1" class="collapse"> In 2016 Katie moved to Paris and has since tutored english and worked for an NGO running a volunteer food distribution programme. Whilst working in the NGO sector in Paris she continually met able and inspiring individuals on the streets who wanted to practice and improve their English language skills, but didn’t have the opportunity to do so. With this in mind, she along with the other co-founders decided to create English Pour Tout Le Monde. She now together with her team, coordinates the growth and day to day activities of English Pour Tout Le Monde.
                        <br>
                        Katie loves to read, hike and travel to learn about new cultures. She also co-created and runs a successful social action book club at Shakespeare and Co.
                        <br>
                        Katie believes that there is hope for a positive future for ALL, and intends that English Pour Tout Le Monde will be part of that future.


                    </div>
                </div>

                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/kathrynCHALMERS.jpg') }}" alt="Kathryn Chalmers">
                        <div class="container"><a href="mailto:kathryn@eptlm.com">Kathryn CHALMERS</a><br>Coordinator
                        </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo4">Read Bio</button><br><br>


                    <div id="demo4" class="collapse">Since moving to Paris in 2012, Kathryn has been increasingly concerned by the ever-growing refugee/migrant and homeless crisis. As a result, she started to volunteer with food distribution charities in Paris and really valued the interactions with the people she was meeting on the streets. This then led to joining the English Pour Tout Le Monde team where she helps coordinate the classroom sessions and support the overall growth of English Pour Tout Le Monde.
                        <br>
                        Kathryn really believes in the importance of taking time to exchange with people and that even where a common language is limited, very valuable and warm connections can be made.
                        <br>
                        Outside of English Pour Tout Le Monde, Kathryn continues to work with food distribution charities and link with other associations offering support to the refugee/migrant population. She also enjoys reading, music and Pilates



                    </div>

                </div>



                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/lindsayHYDE.png') }}" alt="Lindsay HYDE">
                        <div class="container"><a href="mailto:lindsay@eptlm.com">Lindsay HYDE</a><br>
                            Coordinator
                        </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo5">Read Bio</button><br><br>


                    <div id="demo5" class="collapse">

                        Lindsay moved to Paris in August 2018. Immediately confronted by the plight of homeless in the streets, she reached out to a previous charity organisation in Brussels (where she had lived before). Via this charity she made contact and was immediately welcomed. Through this organisation of food distribution to the homeless she found P’tit Dej.
                        <br>
                        She is currently assisting with the setup of English Pour Tout Le Monde and enjoying making friends and helping the lovely young people that come along each week, eager to learn English. She is not a teacher but has worked with teenagers in the past training sport teams, and as a personal trainer. Plus having her own two kids in their twenties can empathise with the group.
                        <br>
                        Lindsay would encourage anyone interested in helping to come along and meet us. You could make a difference.

                    </div>

                </div>

                <div class="col">
                    <div class="polaroid" id="Tejas"> <img src="{{ asset('/images/team/tejasYADAV.jpg') }}" alt="Tejas Yadav">
                        <div class="container"><a href="mailto:tejas@eptlm.com">Tejas YADAV</a><br>
                            Web & Project Developer </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo3">Read Bio</button><br><br>


                    <div id="demo3" class="collapse">
                        Tejas grew up in India. He trained in the UK and obtained a PhD in the US before moving to Paris in 2017 to work as a molecular biologist. Currently, Tejas assists with web and project development at English Pour Tout Le Monde. Themes of belonging, race, immigration and identity are close to his heart. When he isn't writing or coding, Tejas enjoys a good coffee, reading, traveling to new places and learning new languages.


                    </div>

                </div>



            </div>
            <a class="linkTop" href="#top">Top</a>
        </div>


        <div id="anchor3"></div>
        <br>
        <div class="partnerships">

            <div><br> <br>
                <h1> Partners </h1>
                <p>We currently work with the association P’tit Dej Solidaires, a group of neighbours in the 19th arrondissement, that serve breakfast to those in need in the Stalingrad area.
                    If you are interested in volunteering for P’tit Dej then please contact them directly on their <a href="https://www.facebook.com/ptitsdejsolidaires/" target="_blank">Facebook</a> page.</p>
                    <br>
                    <p><strong>
                    We are continually looking for new partners to offer our services. If you are an association or group interested in working with us then please email us at
                    <a href="mailto:info@eptlm.com">info@eptlm.com</a> or <a href="{{url('/contact')}}" target="_blank">Contact Us</a>.</strong></p>
                <a class="linkTop" href="#top">Top</a>
            </div>

          {{--  <div>
                <h3> Our Partners</h3>
                <ul>
                    <li><a href="#">Partner 1</a></li>
                    <li><a href="#">Partner 2</a></li>
                    <li><a href="#">Partner 3</a></li>
                    <li><a href="#">Partner 4</a></li>


                </ul>
                <a class="linkTop" href="#top">Top</a>
            </div>--}}


        </div>


    </div>



@stop
