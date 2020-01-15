<nav>

    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>


        <li>
            <div id="menubtn1" class="menubtn dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="{{ url('/about') }}" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                    <a class="dropdown-item" href="/about#anchor1">What is EPTLM?</a>
                    <a class="dropdown-item" href="/about#anchor2">Our Team</a>
                    <a class="dropdown-item" href="/about#anchor3">Partners</a>

                </div>
            </div>
        </li>






        <li>
            <div id="menubtn2" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Programmes </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink2">
                    <a class="dropdown-item" href="{{ url('/classroom') }}">Classroom Teaching</a>
                    <a class="dropdown-item" href="{{ url('/tutor')}}">One-to-One Tutoring</a>
                </div>
            </div>
        </li>

        <li>
            <div id="menubtn3" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Get Involved
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink3">
                    <a class="dropdown-item" href="{{ url('/orientation') }}">Orientation</a>
                    <a class="dropdown-item" href="{{ url('/volunteer')}}">Volunteer</a>
                    <a class="dropdown-item" href="{{ url('/volunteer/login')}}">Volunteer Login</a>

                </div>
            </div>
        </li>


        <li>
            <div id="menubtn4" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="{{ url('/blog') }}" role="button" id="dropdownMenuLink4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Blog
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink4">

                    <a class="dropdown-item" href="{{ url('/blog') }}">Latest Posts</a>


                </div>
            </div>
        </li>

        <li><a href="{{ url('/contact') }}">Contact</a></li>





    </ul>
</nav>
