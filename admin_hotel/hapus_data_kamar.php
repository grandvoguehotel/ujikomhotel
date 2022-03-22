<?php 
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM tabel_kamar WHERE id_kamar='$id'";
    $query = mysqli_query($koneksi, $sql);

    if ($query) {
        header('Location: home.php');
    } else {
        echo "<script>alert('gagal hapus data')";
        header('Location: home.php');
    }
}
?>