<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NGO App | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="index.php" class="nav-link">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="#" class="nav-link">Contact</a>
    </li>
  </ul>
  <!-- SEARCH FORM -->
  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index.php" class="brand-link">
    <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
    style="opacity: .8">
    <span class="brand-text font-weight-light">NGO App</span>
  </a>
  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Admin Name</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
<nav class="mt-2">
<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  <!-- Add icons to the links using the .nav-icon class
  with font-awesome or any other icon font library -->
  <li class="nav-item has-treeview menu-open">
    <a href="#" class="nav-link active">
      <i class="nav-icon fas fa-tachometer-alt"></i>
      <p>
        Dashboard
      </p>
    </a>
  </ul>
</nav>
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
      <a href="request.php" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Requests
          <!-- <i class="right fas fa-angle-left"></i> -->
        </p>
      </a>
    </ul>
  </nav>
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
      with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="user_list.php" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            Users List
            <!-- <i class="right fas fa-angle-left"></i> -->
          </p>
        </a>
      </ul>
    </nav>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
          <a href="ngo_list.php" class="nav-link active">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              NGO List
              <!-- <i class="right fas fa-angle-left"></i> -->
            </p>
          </a>
        </ul>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
<li class="nav-item has-treeview menu-open">
  <a href="donation.php" class="nav-link active">
    <i class="nav-icon fas fa-tachometer-alt"></i>
    <p>
      Donation
      <!-- <i class="right fas fa-angle-left"></i> -->
    </p>
  </a>
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="container">
  <div class="row">
    
        
        <div class="col-md-12">
        <h4>Bootstrap Snipp for Datatable</h4>
        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                   
                   <thead>
                   
      
                     <th> Donater_ID </th>
           
            <th> Name  </th>
          
            <th> donate_type </th>
            <th> Amount</th>
            
            <th>Update</th>                
            <th>Delete</th>
                   </thead>
    <tbody>
    
    <tr>
           <?php
          $con=mysqli_connect('localhost','root','','ngo');
          
          $q = "SELECT * FROM `donation` ";
          $query = mysqli_query($con,$q);
          while ($res = mysqli_fetch_array($query)) {
          ?>
          
          <tr>
            <td> <?php echo $res ['d_id'] ?> </td>
            <td> <?php echo $res ['name'] ?> </td>
            <td> <?php echo $res ['d_type'] ?> </td>
          
            <td> <?php echo $res ['amount'] ?> </td>
         

            <td> 
              <p data-placement="top" data-toggle="tooltip" title="Edit"> 
                <button  class="btn btn-primary btn-s" data-title="Edit" data-toggle="" data-target="#edit"> Update  
                  <a href="update.php?d_id=<?php echo $res['d_id']; ?>" class="glyphicon glyphicon-pencil">
                  </a> 
                </button> 
              </button> 
            </p>
          </td>

            <td> 
              <p data-placement="top" data-toggle="tooltip" title="Edit"> 
                <button  class="btn btn-danger btn-s" data-title="Edit" data-toggle="" data-target="#edit"> Delete   
                  <a href="delete.php?d_id=<?php echo $res['d_id']; ?>" class="glyphicon glyphicon-trash">
                  </a> 
                </button> 
              </button> 
            </p>
          </td>
          </tr>

          <?php
          }
          ?>

          </tr> 
    </tbody>     
</table>
</body>
</html>