<?php
include("../config/koneksi.php");
    $id_produk = $_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi_produk=$_POST['deskripsi_produk'];
    $id_kategori=$_POST['id_kategori'];
    $harga=$_POST['harga'];
    $vfoto=$_FILES['pict']['name'];
    $tfoto=$_FILES['pict']['tmp_name'];
    $dirl="../img/";

    $upload=$dirl.$vfoto;
    move_uploaded_file($tfoto,$upload);
    $datas = mysqli_query($koneksi, "insert into produk(id_produk,nama_produk,deskripsi_produk,id_kategori,gambar_produk,harga)
                                                values('$id_produk','$nama_produk','$deskripsi_produk','$id_kategori','$vfoto','$harga')");
?>
    <script>alert('Data anda telah disimpan di database');</script>
    <script>document.location='tampil.php'</script>
