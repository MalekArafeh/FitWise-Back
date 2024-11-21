<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{url('admin\plugins\fontawesome-free\css\all.min.css')}}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{url('admin\dist\css\adminlte.min.css')}}>
  <link rel="stylesheet" href={{url('admin\dist\css\custom.css')}}>

</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Dashboard_Page.html" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
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
                <a href="Members_Page.html" class="nav-link">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Members
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Coaches_Page.html" class="nav-link">
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
              <a href="Plans_Page.html" class="nav-link">
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

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('titlePage')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">@yield('titlePage')</li>
            </ol>
         
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
   @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

</div>

<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src={{url('admin\plugins\jquery\jquery.min.js')}}></script>
<!-- Bootstrap 4 -->
<script src={{url('admin\plugins\bootstrap\js\bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{url('admin\dist\js\adminlte.min.js')}}></script>
@yield('scripts')

</body>
</html>