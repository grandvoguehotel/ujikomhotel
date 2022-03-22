<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tabel_pemesanan WHERE id_pemesanan='$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: resepsionis.php');
    } else {
        echo "<script>alert('gagal hapus data')";
        header('Location: resepsionis.php');
    }
}
?>