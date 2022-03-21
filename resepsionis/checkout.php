<?php

include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "UPDATE tabel_pemesanan SET status= 2 WHERE id_pemesanan = '$id'";
    $query = mysqli_query($koneksi,$sql);

    if ($query) {
        header('location: resepsionis.php');
    }

    echo "Gagal update data, cek query";
}
?>