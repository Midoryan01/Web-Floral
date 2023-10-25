<?php
include("../config/koneksi.php");
$id_produk=$_GET['id_produk'];
$datas = mysqli_query($koneksi, "DELETE FROM produk WHERE id_produk='$id_produk'");


?>
<script>alert('Data anda telah dihapus di database');</script>
    <script>document.location='tampil.php'</script>