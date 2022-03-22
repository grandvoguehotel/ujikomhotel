<?php

include'koneksi.php';

if(isset($_POST['Simpan'])) {
    $tipe_kamar = $_POST['type_kamar'];
    $fasilitas = $_POST['fasilitas'];

    $sql = "INSERT INTO tabel_fasilitas_kamar (type_kamar, fasilitas) VALUES ( '$tipe_kamar', '$fasilitas')";
    $query = mysqli_query($koneksi,$sql);

    if($query) {
        header('location: fasilitas_kamar.php');
    } else {
        echo "<script>alert('Data gagal disimpan');</script>";
    }
}
?>