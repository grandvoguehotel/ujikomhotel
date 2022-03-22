<?php

include 'koneksi.php';

if(isset($_POST['ubah'])) {
    $id = $_POST['id_pemesanan'];
    $nama_tamu = $_POST['nama_tamu'];
    $tanggal_checkin = $_POST['tgl_in'];
    $tanggal_checkout = $_POST['tgl_out'];

    $sql = "UPDATE tabel_pemesanan SET nama_tamu = '$nama_tamu', tgl_in = '$tanggal_checkin', tgl_out= '$tanggal_checkout' WHERE id_pemesanan = '$id'";
    $query = mysqli_query($koneksi, $sql);

    if(!$query) {
        echo "<script>alert('Data gagal diubah');</script>";
    }
    header('Location: resepsionis.php');

}

?>