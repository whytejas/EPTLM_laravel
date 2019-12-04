@extends('master')
@section('title', 'EPTLM: Programmes')
@section('content')
    @include('partials.logo')


    <div id="top2"  class="intro">
        <h1> Programmes</h1>
        <div  class="menu">
            <nav>

                <ul>
                    <li><a href="#anchor5">Classroom Sessions</a></li>
                    <li><a href="#prog2">Tutoring 1-to-1</a></li>

                </ul>
            </nav>
        </div>

    </div>

    <div class="content">
        <div id="anchor5"></div>
        <div class="volunteerwithus orientation">
            <h1>Our Volunteer Programmes</h1>

            <div>

                <div id="prog1"></div>
                <h2 >Regular weekly English sessions:</h2>
                <p>
                    Every Tuesday and Thursday morning we meet with our volunteers at Jardin d’Éole and help serve breakfast with the association P’tit Dej (this is fun and good for practising french, but it is optional for EPTLM volunteers). Then at 9:30am we meet in the park with our students and walk together to our indoor space close by. We then teach English using worksheets, games and conversation until 11:30am.</p>

                <a class="linkTop" href="#top">Top</a>
                <br><br>
            </div>


            <div id="prog2" >
                <br><br>
                <h2>Tutoring (one to one basis):</h2>
                <p>We offer one to one tutoring for disadvantaged individuals who cannot come to our regular group sessions. We pair our volunteers with students and help with guidance and planning for tutoring sessions, in addition to providing worksheets and materials if needed.
                    <br>
                    This is a brilliant volunteering opportunity because you can form personal relationships and really make a direct difference in someone’s life.
                    <br>
                    As all of our students are in vulnerable situations, we do ask for a commitment of 3 months from volunteers.

                </p>

            </div>
            <p><strong>
                    If you would like to get involved with any of the programmes listed above, in any capacity, however big or small, we would love to hear from you! Please drop us an email at
                    <a href="mailto:info@eptlm.com">info@eptlm.com</a> or <a href="{{url('/contact')}}" target="_blank">Contact Us</a>.</strong></p>

            <a class="linkTop" href="#top2">Top</a>


            <div>


                {{--   <div>
                       <h2> Long & Short Term Volunteers</h2>

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
                       <a class="linkTop" href="#top2">Top</a>
                   </div>--}}
            </div>

        </div>
    </div>







@stop
