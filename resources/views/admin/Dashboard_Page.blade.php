<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | dashboard</title>

<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{url('admin/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{url('admin/css/custom.css') }}">


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
<a href="{{url('Dashboard_Page.html')}}" class="brand-link">
    <img src="{{asset('img/fitWiseLogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8" height="30">
    <span class="brand-text font-weight-light">FitWise</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ url('img/yazan.jpg') }}" class="img-circle elevation-2" alt="User Image">
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
        <h1 class="m-0">Dashboard Page</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard Page</li>
        </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-gradient-success">
                <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                  <h3 class="card-title">
                    <i class="far fa-calendar-alt"></i>
                    Calendar
                  </h3>
                  <!-- tools card -->
                  <div class="card-tools">
                    <!-- button with a dropdown -->
                    <div class="btn-group">
                      <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52" control-id="ControlID-3">
                        <i class="fas fa-bars"></i>
                      </button>
                      <div class="dropdown-menu" role="menu">
                        <a href="#" class="dropdown-item">Add new event</a>
                        <a href="#" class="dropdown-item">Clear events</a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">View calendar</a>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse" control-id="ControlID-4">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-success btn-sm" data-card-widget="remove" control-id="ControlID-5">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                  <!-- /. tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body pt-0">
                  <!--The calendar -->
                  <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">October 2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="09/29/2024" class="day old weekend">29</td><td data-action="selectDay" data-day="09/30/2024" class="day old">30</td><td data-action="selectDay" data-day="10/01/2024" class="day">1</td><td data-action="selectDay" data-day="10/02/2024" class="day">2</td><td data-action="selectDay" data-day="10/03/2024" class="day">3</td><td data-action="selectDay" data-day="10/04/2024" class="day">4</td><td data-action="selectDay" data-day="10/05/2024" class="day weekend">5</td></tr><tr><td data-action="selectDay" data-day="10/06/2024" class="day weekend">6</td><td data-action="selectDay" data-day="10/07/2024" class="day">7</td><td data-action="selectDay" data-day="10/08/2024" class="day">8</td><td data-action="selectDay" data-day="10/09/2024" class="day">9</td><td data-action="selectDay" data-day="10/10/2024" class="day">10</td><td data-action="selectDay" data-day="10/11/2024" class="day">11</td><td data-action="selectDay" data-day="10/12/2024" class="day weekend">12</td></tr><tr><td data-action="selectDay" data-day="10/13/2024" class="day weekend">13</td><td data-action="selectDay" data-day="10/14/2024" class="day">14</td><td data-action="selectDay" data-day="10/15/2024" class="day">15</td><td data-action="selectDay" data-day="10/16/2024" class="day">16</td><td data-action="selectDay" data-day="10/17/2024" class="day">17</td><td data-action="selectDay" data-day="10/18/2024" class="day">18</td><td data-action="selectDay" data-day="10/19/2024" class="day weekend">19</td></tr><tr><td data-action="selectDay" data-day="10/20/2024" class="day weekend">20</td><td data-action="selectDay" data-day="10/21/2024" class="day">21</td><td data-action="selectDay" data-day="10/22/2024" class="day">22</td><td data-action="selectDay" data-day="10/23/2024" class="day">23</td><td data-action="selectDay" data-day="10/24/2024" class="day">24</td><td data-action="selectDay" data-day="10/25/2024" class="day">25</td><td data-action="selectDay" data-day="10/26/2024" class="day weekend">26</td></tr><tr><td data-action="selectDay" data-day="10/27/2024" class="day weekend">27</td><td data-action="selectDay" data-day="10/28/2024" class="day">28</td><td data-action="selectDay" data-day="10/29/2024" class="day">29</td><td data-action="selectDay" data-day="10/30/2024" class="day">30</td><td data-action="selectDay" data-day="10/31/2024" class="day active today">31</td><td data-action="selectDay" data-day="11/01/2024" class="day new">1</td><td data-action="selectDay" data-day="11/02/2024" class="day new weekend">2</td></tr><tr><td data-action="selectDay" data-day="11/03/2024" class="day new weekend">3</td><td data-action="selectDay" data-day="11/04/2024" class="day new">4</td><td data-action="selectDay" data-day="11/05/2024" class="day new">5</td><td data-action="selectDay" data-day="11/06/2024" class="day new">6</td><td data-action="selectDay" data-day="11/07/2024" class="day new">7</td><td data-action="selectDay" data-day="11/08/2024" class="day new">8</td><td data-action="selectDay" data-day="11/09/2024" class="day new weekend">9</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2024</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month active">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year">2023</span><span data-action="selectYear" class="year active">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Active Members</h3>
                  <div class="card-tools">
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-download"></i>
                    </a>
                    <a href="#" class="btn btn-tool btn-sm">
                      <i class="fas fa-bars"></i>
                    </a>
                  </div>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                    <tr>
                      <th>Members</th>
                      <th>Date paid</th>
                      <th>Date Expiry</th>
                      <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Some Product
                      </td>
                      <td>$13 USD</td>
                      <td>
                        <small class="text-success mr-1">
                          <i class="fas fa-arrow-up"></i>
                          12%
                        </small>
                        12,000 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Another Product
                      </td>
                      <td>$29 USD</td>
                      <td>
                        <small class="text-warning mr-1">
                          <i class="fas fa-arrow-down"></i>
                          0.5%
                        </small>
                        123,234 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Amazing Product
                      </td>
                      <td>$1,230 USD</td>
                      <td>
                        <small class="text-danger mr-1">
                          <i class="fas fa-arrow-down"></i>
                          3%
                        </small>
                        198 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <img src="dist/img/default-150x150.png" alt="Product 1" class="img-circle img-size-32 mr-2">
                        Perfect Item
                        <span class="badge bg-danger">NEW</span>
                      </td>
                      <td>$199 USD</td>
                      <td>
                        <small class="text-success mr-1">
                          <i class="fas fa-arrow-up"></i>
                          63%
                        </small>
                        87 Sold
                      </td>
                      <td>
                        <a href="#" class="text-muted">
                          <i class="fas fa-search"></i>
                        </a>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- /.card -->
        </div>
        <!-- /.col-md-6 -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                    <h3 class="card-title">Sales</h3>
                    <a href="javascript:void(0);">View Report</a>
                  </div>
                </div>
                <div class="card-body">
                  <div class="d-flex">
                    <p class="d-flex flex-column">
                      <span class="text-bold text-lg">$18,230.00</span>
                      <span>Sales Over Time</span>
                    </p>
                    <p class="ml-auto d-flex flex-column text-right">
                      <span class="text-success">
                        <i class="fas fa-arrow-up"></i> 33.1%
                      </span>
                      <span class="text-muted">Since last month</span>
                    </p>
                  </div>
                  <!-- /.d-flex -->
  
                  <div class="position-relative mb-4">
                    <canvas id="sales-chart" height="200"></canvas>
                  </div>
  
                  <div class="d-flex flex-row justify-content-end">
                    <span class="mr-2">
                      <i class="fas fa-square text-primary"></i> This year
                    </span>
  
                    <span>
                      <i class="fas fa-square text-gray"></i> Last year
                    </span>
                  </div>
                </div>
              </div>
              <!-- /.card -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Coaches</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Coaches</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1.</td>
                        <td>Update software</td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-danger">55%</span></td>
                      </tr>
                      <tr>
                        <td>2.</td>
                        <td>Clean database</td>
                        <td>
                          <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-warning">70%</span></td>
                      </tr>
                      <tr>
                        <td>3.</td>
                        <td>Cron job running</td>
                        <td>
                          <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-primary">30%</span></td>
                      </tr>
                      <tr>
                        <td>4.</td>
                        <td>Fix and squish bugs</td>
                        <td>
                          <div class="progress progress-xs progress-striped active">
                            <div class="progress-bar bg-success" style="width: 90%"></div>
                          </div>
                        </td>
                        <td><span class="badge bg-success">90%</span></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                  </ul>
                </div>
              </div>
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/dist/js/adminlte.min.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{url('admin/plugins/chart.js/Chart.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admin/dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('dist/js/pages/dashboard3.js')}}"></script>
</body>
</html>
