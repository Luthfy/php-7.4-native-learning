<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Web Project Inventaris</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="asset/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">News</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">News</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?page=contact" class="nav-link">Contact</a>
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

      
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p>Setting</p>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <i class="fas  mr-2"></i> Change Password
            </a>
            <div class="dropdown-divider"></div>
            <a href="index.php?page=logout" class="dropdown-item">
                <i class="fas fa-exit mr-2"></i> Logout
            </a>
          
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="asset/index3.html" class="brand-link">
      <img src="" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SI INVENTARIS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="asset/img/user1-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Minarti</a>
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
            <li class="nav-item">
                <a href="index.php" class="nav-link">
                    <i class="nav-icon fas fa-th"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=barang" class="nav-link">
                    <i class="nav-icon fas fa-boxes"></i>
                    <p>
                        Barang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=ruang" class="nav-link">
                    <i class="nav-icon fas fa-school"></i>
                    <p>
                        Ruang
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php?page=user" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Users
                    </p>
                </a>
            </li>
            <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Setting
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="index.php?page=changepassword" class="nav-link">
                            <p>Change Password</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php?page=logout" class="nav-link">
                            <p>Logout</p>
                        </a>
                    </li>
                </ul>
            </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <?php 

    switch (@$_GET['page']) {
        case 'barang':
            switch (@$_GET['task']) {
              case 'insert':
                include 'content/barang/add.php';
                break;

              case 'insertproses':
                include 'content/barang/proses/insert.php';
                break;

              case 'update':
                include 'content/barang/edit.php';
                break;

              case 'updateproses':
                include 'content/barang/proses/update.php';
                break;

              case 'delete':
                include 'content/barang/proses/delete.php';
                break;
              
              default:
                include 'content/barang/index.php';
                break;
            }

            break;

        case 'ruang':
            switch (@$_GET['task']) {
              case 'insert':
                include 'content/ruang/add.php';
                break;

              case 'insertproses':
                include 'content/ruang/proses/insert.php';
                break;

              case 'update':
                include 'content/ruang/edit.php';
                break;

              case 'updateproses':
                include 'content/ruang/proses/update.php';
                break;

              case 'delete':
                include 'content/ruang/proses/delete.php';
                break;
              
              default:
                include 'content/ruang/index.php';
                break;
            }

            break;

        case 'user':
            switch (@$_GET['task']) {
              case 'insert':
                include 'content/user/add.php';
                break;

              case 'insertproses':
                include 'content/user/proses/insert.php';
                break;

              case 'update':
                include 'content/user/edit.php';
                break;

              case 'updateproses':
                include 'content/user/proses/update.php';
                break;

              case 'delete':
                include 'content/user/proses/delete.php';
                break;
              
              default:
                include 'content/user/index.php';
                break;
            }

            break;
        
        default:
            include 'content/dashboard.php';
            break;
    }
    ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    
    <strong>Copyright &copy; 2021 <a href="#">Minarti, S.Pd.</a></strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="asset/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="asset/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="asset/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="asset/js/demo.js"></script> -->
</body>
</html>