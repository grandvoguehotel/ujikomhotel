<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Hotel Vogue </title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <div class="content-header">
      <div class="container">
      <h1 class="m-0 text-dark"> <b>Grand Vogue</b> <small>Hotel</small></h1>
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index_hotel.php" class="navbar-brand">
        <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
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
            <a href="fasilitas_kamar.php" class="nav-link">Fasilitas Kamar</a>
          </li>
          <li class="nav-item">
            <a href="fasilitas_hotel.php" class="nav-link">Fasilitas Hotel</a>
          </li>
        </ul>

        <!-- SEARCH FORM -->
        
      </div>
</div>
</div>

      <!-- Right navbar links -->
      
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <img src="img/r.jpeg" class="img-fluid" alt="...">
      
        
            
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <form action="pemesanan.php" method="POST">
    <div class="content">
      <div class="container">   
      <div class="row">
  <div class="col-4">
    <label for="" class="form-label">Tanggal Check-in</label>
    <input type="date" class="form-control" name="tgl_in" placeholder=" Tanggal Check-in" aria-label="Tanggal Check-in">
  </div>
  <div class="col-4">
  <label for="" class="form-label">Tanggal Check-out</label>
    <input type="date" class="form-control" name="tgl_out" placeholder="Tanggal Check-out" aria-label="Tanggal Check-out">
  </div>
  <div class="col-2">
  <label for="" class="form-label">Jumlah Kamar</label>
    <input type="number" class="form-control" name="jumlah" placeholder="Jumlah Kamar" aria-label="Jumlah Kamar">
  </div>
  <div class="col-md-2"></br>
  <button type="button" name="pesan" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
    Pesan
</button>
</div>   
</div>
</div>


</div>
<!--modal-->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Pemesanan</h5>
        
      </div>
        <div class="form-group">
        <div class="col-md-12">
        <label for="">Nama Pemesan</label>
        <input type="text" name="nama_pemesanan" class="form-control" placeholder="Masukan Nama Pemesan">
      </div>
      </div>
        <div class="form-group">
        <div class="col-md-12">
        <label for="">E-mail</label>
        <input type="email" name="email" class="form-control" placeholder="Masukan E-mail">
      </div>
      </div>
        <div class="form-group">
        <div class="col-md-12">
        <label for="">No. Handphone</label>
        <input type="text" name="no_hp" class="form-control" placeholder="Masukan Nomor Handphone">
      </div>
      </div>
        <div class="form-group">
        <div class="col-md-12">
        <label for="">Nama Tamu</label>
        <input type="text" name="nama_tamu" class="form-control" placeholder="Masukan Nama Tamu">
      </div>
      </div>
      <div class="form-group">
      <div class="col-md-6">
        <label for="">Tipe Kamar</label>
          <select class="form-control" name="type_kamar" aria-label="Default select example">
                  <?php
                    include "koneksi.php";
            
                    $sql = "SELECT * FROM tabel_kamar";
                    $query = mysqli_query($koneksi,$sql);
                    
                    while ($row = mysqli_fetch_assoc($query)) :
                    ?>
            
                    <option value="<?= $row['type_kamar'] ?>"><?= $row['type_kamar'] ?></option>
            
                    <?php endwhile; ?>
            </select>
      </div>
      </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" name="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
  </div>
    </div>
    
</div>
              </div>
            </div>
        </form>
        <!--pesan-->

        <!--About me-->
        <div class="text-center mt-5">
          <div class="card pb-3 mb-0">
            <div class="card-body">
              <h1>About Me</h1>
              <p class="card-text mt-3">Pelayanan yang terbaik, membuat penginap jadi like</p>

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

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
   
    <!-- Default to the left -->
    
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
</body>
</html>
