<section id="index-header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top-left">
                        <img src="{{ asset('frontend/img/telephone.png') }}">
                            Customer Support
                        </img>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="top-right">
                        <span class="total-price">
                            0.00
                        </span>
                        <a href="#">
                            <img src="{{ asset('frontend/img/cart-icon.png') }}">
                                <span class="badge">
                                    02
                                </span>
                            </img>
                        </a>
                        @if (Route::has('login'))
                            @auth
                        <li class="nav-item dropdown no-arrow">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="userDropdown" role="button">
                                <img class="img img-fluid img-custom" height="35" src="{{ asset('backend/img/admin.png') }}" width="25">
                                </img>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div aria-labelledby="userDropdown" class="dropdown-menu dropdown-menu-right shadow animated--grow-in">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider">
                                </div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400">
                                    </i>
                                    Logout
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @else
                        <a data-target="#staticBackdrop" data-toggle="modal" href="#">
                            <img src="{{ asset('frontend/img/login.png') }}">
                            </img>
                        </a>
                        @endauth
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
        <div class="container">
            <nav class="navbar navbar-expand-md">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('frontend/img/logo.png') }}">
                    </img>
                </a>
                <button class="navbar-toggler" data-target="#navbarNav" data-toggle="collapse" type="button">
                    <span class="navbar-toggler-icon">
                        Menu
                    </span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="contest.php" id="navbarDropdown" role="button">
                                Competitions
                            </a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('live.contest') }}">
                                    Live Competitions
                                </a>
                                <a class="dropdown-item" href="{{ route('upcoming.contest') }}">
                                    Upcoming Competitions
                                </a>
                                <a class="dropdown-item" href="{{ route('contest.winner') }}">
                                    Previous Winners
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.us') }}">
                                about us
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="navbarDropdown" role="button">
                                More
                            </a>
                            <div aria-labelledby="navbarDropdown" class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('how.work') }}">
                                    How Works
                                </a>
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    Profile
                                </a>
                                <a class="dropdown-item" href="/">
                                    404
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">
                                contact
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-sm-12">
                    <div class="home-content">
                        <h6>
                            try your luck!
                        </h6>
                        <h1>
                            Win Your Dream Car
                        </h1>
                        <p>
                            Don't miss your chance.Will you be our next lucky winner?
                        </p>
                        <a class="btn default-btn" href="contest.php">
                            participate now
                        </a>
                        <a class="video-btn" data-src="https://www.youtube.com/embed/Jfrjeg26Cwk" data-target="#promoVideoModal" data-toggle="modal" href="#">
                            <img src="{{ asset('frontend/img/video-btn.png') }}">
                            </img>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </hr>
</section>