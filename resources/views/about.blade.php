

@extends('master')

@section('title', 'EPTLM: About Us')

@section('content')

    @include('partials.logo')

    <div id="top1" class="intro">

        <h1>About Us</h1>
        <div class="menu">
            <nav>

                <ul>
                    <li><a href="#anchor1">EPTLM</a></li>
                    <li><a href="#anchor2">Programs</a></li>
                    <li><a href="#anchor3">Team</a></li>
                    <li><a href="#anchor4">Partnerships</a></li>

                </ul>
            </nav>
        </div>

    </div>

    <div class="content">
        <div id="anchor1"></div>
        <div class="whatIsEPTLM">
            <h1>What is EPTLM ?</h1>
            <div>
                <h2> Our History </h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet elementum felis. Cras
                    tincidunt
                    elementum ante, ac dignissim mauris eleifend ac. Donec mollis massa a sagittis tempus. Nam luctus purus
                    a
                    ligula ornare laoreet. Quisque dictum leo at turpis molestie, sed tempor magna auctor. Suspendisse sed
                    tellus id erat ullamcorper dapibus. Nam porttitor imperdiet sapien vitae ultricies. Aliquam tincidunt
                    felis
                    quis lorem mollis, sit amet luctus nulla porta. Duis lobortis in magna a mattis. Proin consectetur
                    turpis eu
                    leo viverra, ut varius nulla suscipit. Cras ut scelerisque tortor, in rhoncus eros. Aliquam erat
                    volutpat.
                </p>
                <a class="linkTop" href="#top">Top</a>
            </div>

            <div>
                <h2> EPTLM Today </h2>

                <p>
                    Suspendisse sed tellus id erat ullamcorper dapibus. Nam porttitor imperdiet sapien vitae
                    ultricies.Aliquam
                    tincidunt felis quis lorem mollis, sit amet luctus nulla porta. Duis lobortis in magna a mattis. Proin
                    consectetur turpis eu leo viverra, ut varius nulla suscipit. Cras ut scelerisque tortor, in rhoncus
                    eros.
                    Aliquam erat volutpat.
                </p>

                <a class="linkTop" href="#top">Top</a>
            </div>

            <div>
                <h2> Our Mission Statement </h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sit amet elementum felis. Cras
                    tincidunt
                    elementum ante, ac dignissim mauris eleifend ac. Donec mollis massa a sagittis tempus.
                </p>

                <a class="linkTop" href="#top">Top</a>
            </div>
        </div>


        <div id="anchor2"></div>
        <div class="whatWeDo">
            <h1>What We Do</h1>

            <ul>
                <li><a href="#">English Language Exchange Program</a></li>
                <li><a href="#">Mentoring Program</a></li>
                <li><a href="#">Social Engagements</a></li>
                <li><a href="#">Volunteering Opportunities</a></li>

            </ul>
            <a class="linkTop" href="#top">Top</a>
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
                    <div id="demo1" class="collapse"> Katie previously worked in the UK as an Environmental Engagement
                        Officer, where she supported schools, community groups and county wide
                        campaigns to encourage positive environmental behaviour.
                        In 2016 Katie moved to Paris and has since tutored english and worked
                        for an NGO running a volunteer food distribution programme. Whilst
                        working in the NGO sector in Paris she continually met able and
                        inspiring individuals on the streets who wanted to practice and improve
                        their English language skills, but didn’t have the opportunity to do so.
                        With this in mind, she along with the other co-founders decided to
                        create EPTLM. She now together with her team, coordinates the growth and
                        day to day activities of EPTLM.<br>

                        Katie loves to read, hike and travel to learn about new cultures. She
                        also co-created and runs a successful social action book club at
                        Shakespeare and Co.<br>

                        Katie believes that there is hope for a positive future for ALL, and
                        intends that EPTLM will be part of that future.

                    </div>
                </div>

                <div class="col">
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
                    </div></div>

                <div class="col">
                    <div class="polaroid"> <img src="{{ asset('/images/team/tejasYADAV.jpg') }}" alt="Tejas Yadav">
                        <div class="container"><a href="mailto:tejas@eptlm.com">Tejas YADAV</a><br>
                            Web Developer </div>
                    </div><br><br>
                    <button class="btn btn-lg btn-light" data-toggle="collapse" data-target="#demo3">Read Bio</button><br><br>


                    <div id="demo3" class="collapse">
                        Tejas grew up in India. He trained in the UK and obtained a PhD in the US before moving to Paris in 2017 to work as a molecular biologist. Currently starting a career in web development, Tejas also volunteers with EPTLM. Themes of belonging, race, immigration and identity are close to his heart. When he isn't writing or coding, Tejas enjoys a good coffee, reading, traveling to new places and learning new languages.


                    </div>

                </div>
            </div>
            <a class="linkTop" href="#top">Top</a>
        </div>


        <div id="anchor4"></div>
        <div class="partnerships">
            <div><br>
                <h1> Partnerships </h1>
                <p>Suspendisse sed tellus id erat ullamcorper dapibus. Nam porttitor imperdiet sapien vitae
                    ultricies.Aliquam
                    tincidunt felis quis lorem mollis, sit amet luctus nulla porta. Duis lobortis in magna a mattis. Proin
                    consectetur turpis eu leo viverra, ut varius nulla suscipit. Cras ut scelerisque tortor, in rhoncus
                    eros.
                    Aliquam erat volutpat.</p>
            </div>

            <div>
                <h3> Our Partners</h3>
                <ul>
                    <li><a href="#">Partner 1</a></li>
                    <li><a href="#">Partner 2</a></li>
                    <li><a href="#">Partner 3</a></li>
                    <li><a href="#">Partner 4</a></li>


                </ul>
                <a class="linkTop" href="#top">Top</a>
            </div>

        </div>


    </div>



@stop
