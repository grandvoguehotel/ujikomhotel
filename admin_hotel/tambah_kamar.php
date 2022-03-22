<?php

include'koneksi.php';

if(isset($_POST['Simpan'])) {
    $tipe_kamar = $_POST['type_kamar'];
    $jumlah_kamar = $_POST['jumlah_kamar'];

    $sql = "INSERT INTO tabel_kamar (type_kamar, jumlah) VALUES ('$tipe_kamar', '$jumlah_kamar')";
    $query = mysqli_query($koneksi,$sql);
// var_dump($query);
    if($query) {
        header('location: home.php');
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
    }
}
?>