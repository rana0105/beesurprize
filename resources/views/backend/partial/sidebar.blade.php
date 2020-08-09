<!-- Sidebar -->
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
          <span>Super Admin Activities</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('role-list')
            <a class="collapse-item" href="{{ route('roles.index') }}">Roles</a>
            @endcan
            @can('permission-list')
            <a class="collapse-item" href="{{ route('permissions.index') }}">Permisions</a>
            @endcan
            {{-- @can('vendor-list')
            <a class="collapse-item" href="javascript:void(0);">Vendors</a>
            @endcan --}}
            @can('user-list')
            <a class="collapse-item" href="{{ route('users.index') }}">All Users</a>
            @endcan
            @can('user-list')
            <a class="collapse-item" href="{{ route('sitesetting') }}">Site Setting</a>
            @endcan
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
          <i class="fas fa-database"></i>
          <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('product-list')
            <a class="collapse-item" href="javascript:void(0);">Products</a>
            @endcan
            @can('category-list')
            <a class="collapse-item" href="javascript:void(0);">Category</a>
            @endcan
            @can('subcategory-list')
            <a class="collapse-item" href="javascript:void(0);">Subcategory</a>
            @endcan
            @can('childcategory-list')
            <a class="collapse-item" href="javascript:void(0);">Childcategory</a>
            @endcan
          </div>
        </div>
      </li> --}}

      <!-- Nav Item - Utilities Collapse Menu -->
      <!-- Divider -->
      {{-- <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSetting" aria-expanded="true" aria-controls="collapseSetting">
          <i class="fas fa-database"></i>
          <span>Site Setting</span>
        </a>
        <div id="collapseSetting" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('product-list')
            <a class="collapse-item" href="javascript:void(0);">Products</a>
            @endcan
            @can('category-list')
            <a class="collapse-item" href="javascript:void(0);">Category</a>
            @endcan
            @can('subcategory-list')
            <a class="collapse-item" href="javascript:void(0);">Subcategory</a>
            @endcan
            @can('childcategory-list')
            <a class="collapse-item" href="javascript:void(0);">Childcategory</a>
            @endcan
          </div>
        </div>
      </li> --}}

      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('tickets.index') }}">
          <i class="fas fa-ticket-alt"></i>
          <span>Ticket List</span>
        </a>
        @endcan
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">
      {{-- <li class="nav-item">
        @can('blog-list')
        <a class="nav-link collapsed" href="{{ route('blogs.index') }}">
          <i class="fab fa-blogger-b"></i>
          <span>Blog List</span>
        </a>
        @endcan
      </li> --}}
    </ul>
    <!-- End of Sidebar -->