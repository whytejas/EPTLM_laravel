@extends('master')
@section('title', 'EPTLM: Volunteer')
@section('content')
    @include('partials.logo')


    <div id="top2"  class="intro">
        <h1> Volunteer</h1>
        <div  class="menu">
            <nav>

                <ul>
                    <li><a href="#anchor5">Volunteering With EPTLM</a></li>
                    <li><a href="#anchor6">Join Us</a></li>
                    <li><a href="#anchor7">Support EPTLM</a></li>
                </ul>
            </nav>
        </div>

    </div>

    <div class="content">
        <div id="anchor5"></div>
        <div class="volunteerwithus">
            <h1>Volunteering with EPTLM</h1>
            <div>
                <h2> What do our volunteers do?</h2>

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
            </div>

            <div>
                <h2> Orientation Sessions: Info & Dates</h2>

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
            </div>

            <div>
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
            </div>
        </div>



        <div id="anchor6"></div>
        <div class="joinus">
            <div id="join"><br>
                <h1> Join Us </h1>
                <form  action=# method="post">
                    <h2>Sign Up</h2>


                    <input type="text" name="Name" placeholder=" Name" required> <br>
                    <input type="email" name="Email" placeholder="  Email" required><br>
                    <input type="text" name="Number" placeholder="  Telephone"> <br>
                    <input type="text" name="Program" placeholder="  Program of Choice" required><br>
                    <textarea id="message" name="Message" rows="10" cols="55"
                              placeholder="  Tell Us A Little About Yourself"></textarea><br>

                    <input type="submit" value="Submit">

                </form>
            </div>


            <a class="linkTop" href="#top2">Top</a>
        </div>

        <div id="anchor7"></div>
        <div class="support">
            <br>
            <h1> Support EPTLM </h1>

            <h3> How can you support us?</h3>
            <ul>
                <li><a href="#">Become an EPTLM Supporter</a></li>
                <li><a href="#">Sponsor</a></li>
                <li><a href="#">Donate</a></li>
            </ul>

            <a class="linkTop" href="#top2">Top</a>
        </div>

    </div>

@stop
