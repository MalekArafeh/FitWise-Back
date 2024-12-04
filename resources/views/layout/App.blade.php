<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('layout.header')
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('layout.nav')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.sidebar')
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