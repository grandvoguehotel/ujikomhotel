<?php 
include_once("koneksi.php");

if(isset($_POST['submit'])) {
  $checkin = $_POST['tgl_in'];
  $checkout = $_POST['tgl_out'];
  $jumlah_kamar = $_POST['jumlah'];
  $nama_pemesan = $_POST['nama_pemesanan'];
  $email = $_POST['email'];
  $no_hp = $_POST['no_hp'];
  $nama_tamu = $_POST['nama_tamu'];
  $tipe_kamar = $_POST['type_kamar'];

  $sql = "INSERT INTO tabel_pemesanan (nama_pemesanan, email, no_hp, nama_tamu, type_kamar, tgl_in, tgl_out, jumlah, status) VALUES ( '$nama_pemesan', '$email', '$no_hp',  '$nama_tamu', '$tipe_kamar', '$checkin', '$checkout', '$jumlah_kamar', '0')";
  $query = mysqli_query($koneksi,$sql);


  if($query) {
    echo "<script>alert('Berhasil tambah data');window.location.href='index_hotel.php';</script>";
  } else {
    echo "<script>alert('Coba lagi');window.location.href='index_hotel.php';</script>";
  
}
}
?>