<ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('dashboard') }}">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->user_type }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Admin Activities</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            {{-- @can('role-list')
            <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
            @endcan
            @can('permission-list')
            <a class="collapse-item" href="{{ route('permissions.index') }}">Permisions</a>
            @endcan --}}
            @can('user-list')
            <a class="collapse-item" href="{{ route('users.index') }}">Users</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('members') }}">Active Customer</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('suspend-user') }}">Suspend Customer</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('banunban') }}">Banned Customer</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('winner-list') }}">Winner List</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('sitesetting') }}">Site Setting</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('brand.index') }}">Brand</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('prize.index') }}">Prize</a>
            @endcan
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('live-competition.index') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Live Competition</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('upcoming-competition') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Upcoming Competition</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('suscompetitionlist') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Suspend Competition</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('customer-testmonial') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Customer Testmonial</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('email-template') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Email Template</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('questions.index') }}">
          <i class="fab fa-blogger-b"></i>
          <span>Question List</span>
        </a>
        @endcan
      </li>

      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('competitionlist') }}">
          <i class="fab fa-blogger-b"></i>
          <span>Success Members</span>
        </a>
        @endcan
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo1" aria-expanded="true" aria-controls="collapseTwo1">
          <i class="fas fa-fw fa-cog"></i>
          <span>Competition</span>
        </a>
        <div id="collapseTwo1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('blog-list')
            <a class="nav-link collapsed collapse-item" href="{{ route('competitionlist') }}">
              <i class="fab fa-blogger-b"></i>
              <span>Active Competition</span>
            </a>
            @endcan
            @can('blog-list')
            <a class="nav-link collapsed collapse-item" href="{{ route('suscompetitionlist') }}">
              <i class="fab fa-blogger-b"></i>
              <span>Suspend Competition</span>
            </a>
            @endcan
          </div>
        </div>
      </li> --}}
    </ul>
    <!-- End of Sidebar