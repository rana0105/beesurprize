<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('vendor') }}">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">{{ Auth::user()->user_type }}</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProducts" aria-expanded="true" aria-controls="collapseProducts">
          <i class="fas fa-database"></i>
          <span>Products</span>
        </a>
        <div id="collapseProducts" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            @can('product-list')
            <a class="collapse-item" href="javascript:void(0);">Products</a>
            @endcan
            @can('order-list')
            <a class="collapse-item" href="javascript:void(0);">Order List</a>
            @endcan
            @can('staff-list')
            <a class="collapse-item" href="javascript:void(0);">Staff List</a>
            @endcan
            @can('product-list')
            <a class="collapse-item" href="javascript:void(0);">Stock Prouct</a>
            @endcan
          </div>
        </div>
      </li>
      <!-- Divider -->
      <hr class="sidebar-divider">
    </ul>
    <!-- End of Sidebar -->