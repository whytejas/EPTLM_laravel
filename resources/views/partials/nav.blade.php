<nav>

    <ul>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ url('/about') }}">About</a></li>
        {{--<li><a href="{{ url('/volunteer') }}">Programmes</a></li>
        <li><a href="{{ url('/getinvolved')}}">Get Involved</a></li>--}}

        <li>
            <div id="menubtn2" class="dropdown show">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Programmes </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{ url('/classroom') }}">Classroom Teaching</a>
                    <a class="dropdown-item" href="{{ url('/tutor')}}">One-to-One Tutoring</a>
                </div>
            </div>
        </li>

<li>
    <div id="menubtn1" class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Get Involved
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="{{ url('/orientation') }}">Orientation</a>
            <a class="dropdown-item" href="{{ url('/volunteer')}}">Volunteer</a>

        </div>
    </div>
</li>
        <li><a href="{{ url('/blog') }}">Blog</a></li>
        <li><a href="{{ url('/contact') }}">Contact</a></li>





    </ul>
</nav>
