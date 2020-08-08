<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle">
            <i aria-hidden="true" class="fa fa-bars">
            </i>
        </button>
    </div>
    <!-- Sidebar Toggle (Topbar) -->
    <button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop">
        <i class="fa fa-bars">
        </i>
    </button>
    <!-- Topbar Search -->
    {{-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input aria-describedby="basic-addon2" aria-label="Search" class="form-control bg-light border-0 small" placeholder="Search for..." type="text">
                <div class="input-group-append">
                    <button class="btn btn-success" type="button">
                        <i class="fas fa-search fa-sm">
                        </i>
                    </button>
                </div>
            </input>
        </div>
    </form> --}}
    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
        <li class="nav-item dropdown no-arrow d-sm-none">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="searchDropdown" role="button">
                <i class="fas fa-search fa-fw">
                </i>
            </a>
            <!-- Dropdown - Messages -->
            <div aria-labelledby="searchDropdown" class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in">
                <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                        <input aria-describedby="basic-addon2" aria-label="Search" class="form-control bg-light border-0 small" placeholder="Search for..." type="text">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm">
                                    </i>
                                </button>
                            </div>
                        </input>
                    </div>
                </form>
            </div>
        </li>
        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="alertsDropdown" role="button">
                <i class="fas fa-bell fa-fw">
                </i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">
                    3+
                </span>
            </a>
            <!-- Dropdown - Alerts -->
            <div aria-labelledby="alertsDropdown" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white">
                            </i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">
                            December 12, 2019
                        </div>
                        <span class="font-weight-bold">
                            A new monthly report is ready to download!
                        </span>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white">
                            </i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">
                            December 7, 2019
                        </div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white">
                            </i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">
                            December 2, 2019
                        </div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">
                    Show All Alerts
                </a>
            </div>
        </li>
        <!-- Nav Item - Messages -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="messagesDropdown" role="button">
                <i class="fas fa-envelope fa-fw">
                </i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">
                    7
                </span>
            </a>
            <!-- Dropdown - Messages -->
            <div aria-labelledby="messagesDropdown" class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
                <h6 class="dropdown-header">
                    Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img alt="" class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60">
                            <div class="status-indicator bg-success">
                            </div>
                        </img>
                    </div>
                    <div class="font-weight-bold">
                        <div class="text-truncate">
                            Hi there! I am wondering if you can help me with a problem I've been having.
                        </div>
                        <div class="small text-gray-500">
                            Emily Fowler · 58m
                        </div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img alt="" class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60">
                            <div class="status-indicator">
                            </div>
                        </img>
                    </div>
                    <div>
                        <div class="text-truncate">
                            I have the photos that you ordered last month, how would you like them sent to you?
                        </div>
                        <div class="small text-gray-500">
                            Jae Chun · 1d
                        </div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img alt="" class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60">
                            <div class="status-indicator bg-warning">
                            </div>
                        </img>
                    </div>
                    <div>
                        <div class="text-truncate">
                            Last month's report looks great, I am very happy with the progress so far, keep up the good work!
                        </div>
                        <div class="small text-gray-500">
                            Morgan Alvarez · 2d
                        </div>
                    </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="dropdown-list-image mr-3">
                        <img alt="" class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60">
                            <div class="status-indicator bg-success">
                            </div>
                        </img>
                    </div>
                    <div>
                        <div class="text-truncate">
                            Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...
                        </div>
                        <div class="small text-gray-500">
                            Chicken the Dog · 2w
                        </div>
                    </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">
                    Read More Messages
                </a>
            </div>
        </li>
        <div class="topbar-divider d-none d-sm-block">
        </div>
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="userDropdown" role="button">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{ Auth::user()->name }}
                </span>
                <img class="img-profile rounded-circle" src="{{ asset('backend/img/admin.png') }}">
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
    </ul>
</nav>