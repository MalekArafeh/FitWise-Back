<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Dashboard_Page.html" class="brand-link">
      <img src={{url('admin\dist\img\logo_fitwise.jpg')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="30">
      <span class="brand-text font-weight-light">FitWise</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src={{url('admin\dist\img\yazan.jpg')}} class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="Admin_Profile_Page.html" class="d-block">Yazan Masafeh</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
              
              <li class="nav-item">
                <a href="Dashboard_Page.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    dashboard 
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Admin_Profile_Page.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Admin Profile
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.members.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Members
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin.coaches.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Coaches
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Classes_Page.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Classes
                  </p>
                </a>
              </li>
            <li class="nav-item">
              <a href="{{route('admin.plan.index')}}" class="nav-link">
                <i class="nav-icon fas fa-th"></i>
                <p>
                  Plans
                </p>
              </a>
            </li>
            <button type="button" class="btn btn-block btn-danger" control-id="ControlID-33">Log out</button>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>