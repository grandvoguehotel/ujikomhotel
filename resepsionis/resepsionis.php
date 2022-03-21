<?php

include'koneksi.php';

if(isset($_POST['simpan'])) {
    $nama_tamu = $_POST['nama_tamu'];
    $tanggal_checkin = $_POST['tgl_in'];
    $tanggal_checkout = $_POST['tgl_out'];
    $sql = "INSERT INTO tabel_pemesanan VALUES ('', '$nama_tamu', 'tanggal_checkin' '$tanggal_checkout')";
    $query = mysqli_query($koneksi,$sql);

    if($query) {
        header('location PHP_SELF');
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
    }
}
?>
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
            <a href="resepsionis.php" class="nav-link">Kamar</a>
          </li>
          <li class="nav-item">
            <a href="../logout.php" onclick="return confirm('Anda yakin akan melakukan Logout?')" class="nav-link">Logout</a>
          </li>
      </div>
    </div>
  </nav>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <h1>Kamar Hotel</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- main content -->
    <div class="content">
        <div class="container">
            <!-- tabel kamar -->
            <div class="card">
                <div class="card-header">
                  <div class="row">
                <div class="col-md-3">
                  <!--filter -->
    <form action="" method="POST" class="form-inline">
      <input type="date" name="date" class="form-control">&nbsp;
      <input type="submit" name="filter" class="btn btn-primary btn-sm" value="Filter">
</form> 
</div>
<div class="col-md-6"></div>
<div class="col-md-3">
  <!--search -->
  <form action="" method="POST" class="form-inline">
    <input type="text" name="cari_nama_tamu" class="form-control" placeholder="Cari Nama Tamu">&nbsp;
    <input type="submit" name="cari" class="btn btn-primary btn-sm" value="Cari">
      </form>
    </div>
  </div>
</div>
                <div class="card-body">
                                <table class="table table-striped table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Tamu</th>
                                        <th scope="col">Tanggal Check In</th>
                                        <th scope="col">Tanggal Check Out</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                            <tbody>
</div>
                    </div>
                    <!--form tambah data-->
                    

                                <!--form tambah kamar-->
                                

                                    </div>
                                </div>
                            </div>

<?php 
include 'koneksi.php';

$no = 1;

if(isset($_POST['filter'])) {
  $date = $_POST['date'];
  $sql = "SELECT * FROM tabel_pemesanan WHERE tgl_in = '$date'";
}

if(isset($_POST['cari'])) {
  $nama = $_POST['cari_nama_tamu'];
  $sql = "SELECT * FROM tabel_pemesanan WHERE nama_tamu LIKE'%$nama%'";
}
if(empty($_POST['date'])&& empty($_POST['cari_nama_tamu'])) {
  $sql = "SELECT * FROM tabel_pemesanan";
}

$query = mysqli_query($koneksi, $sql);

if($query) {
  while($row = mysqli_fetch_assoc($query)) {
    if($row['status'] ==1) {
      $status = "Confirmed";
    } elseif($row['status'] ==2){
      $status = "Checkout";
    } else{
      $status = "waiting";
    }
    ?>

        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_tamu'] ?></td>
            <td><?= $row['tgl_in'] ?></td>
            <td><?= $row['tgl_out'] ?></td>
            <td><?= $status ?></td>
            <td>
  

            
                
                <a href="checkin.php?id=<?= $row['id_pemesanan'] ?>">
                        <button class="btn btn-success btn-sm" onclick="return confirm('Konfirmasi Pemesanan?')">Check in
                      </button>
                  </a>
                  <a href="checkout.php?id=<?= $row['id_pemesanan'] ?>">
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Konfirmasi Checkout?')">Check out
                      </button>
                  </a>
            <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#ubahData<?= $row['id_pemesanan'] ?>" href="#">
                Ubah</a>
                <a class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#viewData<?= $row['id_pemesanan'] ?>" href="#">
                Lihat</a>
                
                <a href="hapus.php?id=<?= $row['id_pemesanan'] ?>">
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus data ini?')">delete
                      </button>
                </a>
                

    </td>
    </tr>
    
<!--form ubah data-->
<div class="modal fade" id="ubahData<?= $row['id_pemesanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ubah Data Pemesanan</h1>
                                    <button type="button" classs="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>

                                <!--form ubah kamar-->
                                <form action="update_kamar.php" method="POST">
                                  <input type ="hidden" name="id_pemesanan" value="<?= $row['id_pemesanan'] ?>">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="">Nama Tamu</label>
                                            <input type="text" name="nama_tamu" class="form-control" placeholder="Masukkan Tipe Kamar" required value="<?= $row['nama_tamu'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Check In</label>
                                            <input type="date" name="tgl_in" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required value="<?= $row['tgl_in'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Tanggal Check Out</label>
                                            <input type="date" name="tgl_out" min="0" class="form-control" placeholder="Masukkan Jumlah Kamar" required value="<?= $row['tgl_out'] ?>">
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="ubah" name="ubah" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="viewData<?= $row['id_pemesanan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Lihat Data Pemesanan</h1>
                                    <button type="button" classs="btn-close" data-dismiss="modal" aria-label="close"></button>
                                </div>

                                <div class="modal-body">
                                  <p>Nama Pemesan : <?= $row['nama_pemesanan'] ?></p>
                                  <p>E-mail : <?= $row['email'] ?></p>
                                  <p>No Handphone : <?= $row['no_hp'] ?></p>
                                  <p>Nama Tamu : <?= $row['nama_tamu'] ?></p>
                                  <p>Tipe Kamar : <?= $row['type_kamar'] ?></p>
                                  <p>Tanggal Check In : <?= $row['tgl_in'] ?></p>
                                  <p>Tanggal Check Out : <?= $row['tgl_out'] ?></p>
                                  <p>Jumlah : <?= $row['jumlah'] ?></p>
                                  <p><?= $status ?></p>
                                </div>
    
                              </div>
                            </div>
                          </div>
                            
</div>

    <?php
    }
}
?>
</tbody>
</table>
</div>
</div>

        <!-- /.row -->
</div>
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