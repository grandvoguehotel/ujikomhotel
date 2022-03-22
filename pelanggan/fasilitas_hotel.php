<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hotel Vogue</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index_hotel.php" class="navbar-brand">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Vogue</span>
      </a>

      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index_hotel.php" class="nav-link">Home</a>
          </li>
          <li class="nav-item">
            <a href="fasilitas_kamar.php" class="nav-link">Tipe Kamar</a>
          </li>
          <li class="nav-item">
            <a href="fasilitas_hotel.php" class="nav-link">Fasilitas Hotel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <h1>Fasilitas Hotel</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

        <!-- Fasilitas kamar -->
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card pt-3">
                <img src="img/k.jpeg" class="col" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kolam Renang</h5>
                  <hr>
                  <p class="card-text">Terdapat fasilitas kolam renang untuk para penginap, terdapat kolam renand indoor dan outdoor.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pt-3">
                <img src="img/bar.jpg" weight="100px" height="200px" class="col" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Bar</h5>
                  <hr>
                  <p class="card-text">Terdapat Bar khusus untuk penginap. disini juga terdapat fasilitas berupa bar untuk chill dan enjoy bagi para penginap.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card pt-3">
                <img src="img/rest.jfif" weight="100px" height="200px" class="col" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Restaurant</h5>
                  <hr>
                  <p class="card-text">Terdapat Restaurant untuk para penginap, dengan fasilitas breakfast, dinner, dan launch dengan hidangan yang mewah dan terjamin enaknya.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      
    </div>
    <!-- Default to the left -->
    
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="../dist/js/demo.js"></script> -->
</body>
</html>
