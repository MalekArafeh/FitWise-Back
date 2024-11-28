<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Starter</title>

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
            <h1 class="m-0">plans</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">plans</li>
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
          <div class="col-lg-12">
            <div class="row">
              <div class="col-12">
                <div class="button-importplus">
                  <button class="edit-btn">Import</button>
                  <button class="edit-btn"  id="popupmembers">+</button>
                </div>
               
                <div class="card" style="background-color: 46554F">
                  <div class="card-header">
                    <h3 class="card-title">Manage Plans</h3>
    
                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                      <thead>
                        <tr>
                          <th>ID plan</th>
                          <th>Name</th>
                          <th>time</th>
                          <th>price</th>
                          <th>Description</th>                       
                          <th>Actions</th>                   
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>183</td>
                          <td>hulk</td>
                          <td>3 months</td>
                          <td>$200</td>
                          <td>Swimming and PT will be included</td>
                         <td><button class="edit-btn" id="4" onclick="edit(4) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button></td> 

                          
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>hulk</td>
                          <td>3 months</td>
                          <td>$200</td>
                          <td>Swimming and PT will be included</td>
                         <td><button class="edit-btn" id="3" onclick="edit(3) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button></td> 
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>hulk</td>
                          <td>3 months</td>
                          <td>$200</td>
                          <td>Swimming and PT will be included</td>
                         <td><button class="edit-btn" id="1" onclick="edit(1) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button></td> 
                        </tr>
                        <tr>
                          <td>183</td>
                          <td>hulk</td>
                          <td>3 months</td>
                          <td>$200</td>
                          <td>Swimming and PT will be included</td>
                         <td><button class="edit-btn" id="2" onclick="edit(2) ">Edit</button> <button class="edit-btn1"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                          <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                        </svg></button></td> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <div class="popupmm">
                <div class="popup-cuntentmm">
                  <h4>Add plan</h4>
                  <form action="">
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input type="text" class="inputpopup" placeholder=" name ">
                        <label for="">time</label>
                        <input type="text" class="inputpopup" placeholder="  time">

                    </div>
                    <div>
                        <label for="">price</label>
                        <input type="number" class="inputpopup" placeholder="  0.jod ">
                        <label for="">Description</label>
                        <input type="text" class="inputpopup" placeholder="  Description">

                    </div>
                </div>
                <div class="popupform">
                    <!-- <div>
                        <label for="">Plan</label>
                        <input type="text" class="inputpopup">
        
                    </div> -->
                    <div>
                        <br>
                        <button class="edit-btn">Add plan</button>
                        <button class="butformcancel" id="close">cancel</button>
                    </div>
                </div>
             

                  

                  </form>
                  

                  
                </div>
              </div>
              

              <div class="popupmmEdit">
                <div class="popup-cuntentmm">
                  <h4>Edit plan</h4>
                  <form action="">
                    <div class="popupform">
                    <div>
                        <label for="">Name</label>
                        <input type="text" class="inputpopup" placeholder=" name ">
                        <label for="">time</label>
                        <input type="text" class="inputpopup" placeholder="  time">

                    </div>
                    <div>
                        <label for="">price</label>
                        <input type="number" class="inputpopup" placeholder="  0.jod ">
                        <label for="">Description</label>
                        <input type="text" class="inputpopup" placeholder="  Description">

                    </div>
                </div>
                <div class="popupform">
                    <!-- <div>
                        <label for="">Plan</label>
                        <input type="text" class="inputpopup">
        
                    </div> -->
                    <div>
                        <br>
                        <button class="edit-btn">Edit plan</button>
                        <button class="butformcancel" id="close">cancel</button>
                    </div>
                </div>
             

                  

                  </form>
                  

                  
                </div>
              </div>
              
            </div>

            
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            
          
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
<script src={{url('admin\plugins\jquery\jquery.min.js')}}></script>
<!-- Bootstrap 4 -->
<script src={{url('admin\plugins\bootstrap\js\bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{url('admin\dist\js\adminlte.min.js')}}></script>
<script src={{url('admin\members.js')}}></script>
</body>
</html>