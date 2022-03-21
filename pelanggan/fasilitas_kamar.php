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
        <h1>Tipe Kamar</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">

        <!-- Fasilitas kamar -->
        <div class="card">
          <div class="card-body">
            <img src="img/x.jpg" class="img-fluid w-100 " alt="...">
            <h3>Standard</h3>
            <h5>Fasilitas: televisi, meja, kamar mandi, lemari es, hingga balkon.</h5>

            <ul>

            <?php
            include "koneksi.php";

            // ambil data dengan tipe kamar Standard
            $sql = "SELECT nama_fasilitas FROM tb_fasilitas_kamar WHERE tipe_kamar = 'Standard'";
            $query = mysqli_query($koneksi, $sql);

            if($query) {
              while($row = mysqli_fetch_assoc($query)) :
            ?>

              <li><?= $row['nama_fasilitas'] ?></li>
            
            <?php 
              endwhile;
            } 
            ?>

            </ul>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/r.jpeg" class="img-fluid mb-3" alt="...">
            <h3>Superior Room</h3>
            <h5>Fasilitas:</h5>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/b.jpg" class="img-fluid mb-3" alt="...">
            <h3>Deluxe Room</h3>
            <h5>Fasilitas:</h5>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/j.jpg" class="img-fluid mb-3" alt="...">
            <h3>Junior Suite Room</h3>
            <h5>Fasilitas:</h5>
          </div>
        </div>
        <div class="card">
          <div class="card-body">
            <img src="img/d.jpeg" class="img-fluid w-100" alt="...">
            <h3>Suite Room</h3>
            <h5>Fasilitas:</h5>
          </div>
          </div>
          <div class="card">
          <div class="card-body">
            <img src="img/a.jpg" class="img-fluid w-100" alt="...">
            <h3>Presidential Room</h3>
            <h5>Fasilitas:</h5>
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
