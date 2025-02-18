<div class="header">
    <div class="container-fluid"> <!-- Changed to container-fluid for full-width -->
        <div class="row">
            <!-- Logo Section -->
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 logo_section">
                <div class="full">
                    <div class="center-desk">
                        <div class="logo" style="margin-top: -15px;">
                            <a href="{{url('/')}}"><img src="images/hilton.jpg" alt="#" /></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Section (move left) -->
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7">
                <nav class="navigation navbar navbar-expand-md navbar-dark" style="padding-left: 0; padding-right: 0;">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarsExample04">
                        <ul class="navbar-nav mr-auto" style="margin-left: 0;">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('our_rooms')}}">Our room</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('hotel_gallery')}}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('hotel_blog')}}">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('contact_us')}}">Contact Us</a>
                            </li>

                            @if (Route::has('login'))
                                @auth
                                    <!-- User is authenticated -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ Auth::user()->name }} <!-- Display user's name -->
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a> <!-- Profile link -->
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">Logout</a> <!-- Logout link -->
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @else
                                    <!-- User is not authenticated -->
                                    <li class="nav-item" style="padding-right: 10px;">
                                        <a class="btn btn-success" href="{{ url('login') }}">Login</a>
                                    </li>

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="btn btn-primary" href="{{ url('register') }}">Register</a>
                                        </li>
                                    @endif
                                @endauth
                            @endif
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
