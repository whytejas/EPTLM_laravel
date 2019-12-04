

@extends('master')

@section('title', 'EPTLM: About')

@section('content')

    @include('partials.logo')

    <div id="top" class="intro">

        <h1>About</h1>
        <div class="menu">
            <nav>

                <ul>
                    <li><a href="#anchor1">EPTLM</a></li>
                    <li><a href="#anchor2">Programmes</a></li>
                    <li><a href="#anchor3">Team</a></li>
                    <li><a href="#anchor4">Partnerships</a></li>

                </ul>
            </nav>
        </div>

    </div>
    <img  class="header-img" src="{{ asset('/images/pages/about.jpg') }}" alt="about">
    <div class="content">
        <div id="anchor1"></div>
        <div class="whatIsEPTLM">
            <h1>What is EPTLM ?</h1>
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
                    Our EPTLM team truly believes that providing education to everyone (pour tout le monde) is essential to developing a more sustainable society. Combined with building compassion through relationships across all walks of life, together we can build a more kind and inclusive society.
                    <br><br>
                    As our team member <a href="#Tejas">Tejas </a>wrote:
                    <blockquote class="blockquote text-center">
                <p class="mb-0"><em> “I believe in the power of words. Words are portals — doors to the bridges that can lead us to each other.<br> And language is that bridge. We can meet each other half way if we try.”</em></p>
                </blockquote>
                <p>

                    Learning a new language is always an invaluable tool and it has been proven that having English language skills can aid individuals in the job and education spheres. Therefore, we hope through English exchange we can offer individuals access to more opportunities.
                    <br><br>
                    EPTLM work on a cooperative basis; we want all our participants to have a say in the way EPTLM programmes are run. We hold monthly meet-ups (open to all), to not only socialise but importantly to share and discuss how we can improve our work.

                </p>

                <a class="linkTop" href="#top">Top</a>
            </div>


        </div>


        <div id="anchor2"></div>
        <div class="whatWeDo">
            <h1>Programmes</h1>

            <div>
                <p>Currently we run 2 types of programmes: </p>
                <ul style="color:darkslateblue">
                    <li><a href="{{url('/classroom')}}">Regular weekly English sessions</a></li>
                    <li><a href="{{url('/tutor')}}">Tutoring (one to one basis)</a></li>
                </ul>
                <p>To find out more, please click on the above links.</p>
            </div>
            </div>




        <div id="anchor3"></div>
        <div class="teamMembers">
            <h1> Our Team </h1>
            <div class="team" class="row">

                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/katieOGILVIE.jpg') }}"  alt="Katie Ogilvie">
                        <div class="container"><a href="mailto:katie@eptlm.com">Katie OGILVIE</a><br>
                            Co-Founder & Lead Coordinator</div>
                    </div>

                    <br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo1">Read Bio</button><br><br>
                    <div id="demo1" class="collapse"> In 2016 Katie moved to Paris and has since tutored english and worked for an NGO running a volunteer food distribution programme. Whilst working in the NGO sector in Paris she continually met able and inspiring individuals on the streets who wanted to practice and improve their English language skills, but didn’t have the opportunity to do so. With this in mind, she along with the other co-founders decided to create EPTLM. She now together with her team, coordinates the growth and day to day activities of EPTLM.
                        <br>
                        Katie loves to read, hike and travel to learn about new cultures. She also co-created and runs a successful social action book club at Shakespeare and Co.
                        <br>
                        Katie believes that there is hope for a positive future for ALL, and intends that EPTLM will be part of that future.


                    </div>
                </div>

               {{-- <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/davidBURT.jpg') }}" alt="David Burt" >
                        <div class="container"><a href="mailto:david@eptlm.com">David BURT</a><br>
                            Secretary & Treasurer</div>
                    </div>

                    <br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo2">Read Bio</button><br><br>
                    <div id="demo2" class="collapse">With many years experience as an international business consultant
                        specialising in Human Resources and project management, David brings a
                        wealth of commercial acumen to EPTLM. Passionate about human rights, he
                        helped to co - found the Association in early 2019 and was appointed as
                        its secretary and treasurer at the time of its formal incorporation in
                        France.<br>With particular specialisms in learning & development, coaching and
                        mentoring, David is a key part of our development work both with those
                        we help to learn English and our volunteers. In his spare time, David is a road cyclist,
                        walker, cook and supporter of Tottenham Hotspur F.C., as well as being a keen student of
                        French and the ukulele.
                    </div></div>--}}

                <div class="col">
                    <div class="polaroid" id="Tejas"> <img src="{{ asset('/images/team/tejasYADAV.jpg') }}" alt="Tejas Yadav">
                        <div class="container"><a href="mailto:tejas@eptlm.com">Tejas YADAV</a><br>
                            Web Developer </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo3">Read Bio</button><br><br>


                    <div id="demo3" class="collapse">
                        Tejas grew up in India. He trained in the UK and obtained a PhD in the US before moving to Paris in 2017 to work as a molecular biologist. Currently starting a career in web development, Tejas also volunteers with EPTLM. Themes of belonging, race, immigration and identity are close to his heart. When he isn't writing or coding, Tejas enjoys a good coffee, reading, traveling to new places and learning new languages.


                    </div>

                </div>



                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/kathrynCHALMERS.jpg') }}" alt="Kathryn Chalmers">
                        <div class="container"><a href="mailto:tejas@eptlm.com">Kathryn CHALMERS</a><br>
                        </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo4">Read Bio</button><br><br>


                    <div id="demo4" class="collapse">



                    </div>

                </div>


                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/lindsayHYDE.jpg') }}" alt="Lindsay HYDE">
                        <div class="container"><a href="mailto:tejas@eptlm.com">Lindsay HYDE</a><br>
                             </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo5">Read Bio</button><br><br>


                    <div id="demo5" class="collapse">



                    </div>

                </div>



            </div>
            <a class="linkTop" href="#top">Top</a>
        </div>


        <div id="anchor4"></div>
        <div class="partnerships">
            <div><br>
                <h1> Partnerships </h1>
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
