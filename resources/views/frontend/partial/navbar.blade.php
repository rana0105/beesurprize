<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-gray fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            Lara Seven ACL
        </a>
        <button aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button">
            <span class="navbar-toggler-icon">
            </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#services">
                        Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#contact">
                        Contact
                    </a>
                </li>
                @if (Route::has('login'))
              @auth
                <li class="nav-item dropdown no-arrow">
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="userDropdown" role="button">
                        <img class="img img-fluid img-custom" src="{{ asset('backend/img/admin.png') }}" height="35" width="25">
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
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">
                        Login
                    </a>
                </li>
                {{-- @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ route('register') }}">
                        Register
                    </a>
                </li>
                @endif --}}
              @endauth
            @endif
            </ul>
        </div>
    </div>
</nav>