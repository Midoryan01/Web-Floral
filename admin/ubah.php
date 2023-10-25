<?php
include("../config/koneksi.php");
$id_produk = $_POST['id_produk'];
$nama_produk=$_POST['nama_produk'];
$deskripsi_produk=$_POST['deskripsi_produk'];
$id_kategori=$_POST['id_kategori'];
$harga=$_POST['harga'];
$vfoto=$_FILES['pict']['name'];
$tfoto=$_FILES['pict']['tmp_name'];
$dir="../img/";

if(!empty($tfoto)){
    move_uploaded_file($tfoto,"$dir");
    mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk',
    deskripsi_produk='$deskripsi_produk',
    id_produk='$id_produk',
    vfoto='$vfoto',
    harga='$harga' 
    WHERE id_produk ='$id_produk'
    ");
}
else{
    mysqli_query($koneksi, "UPDATE produk SET nama_produk='$nama_produk',deskripsi_produk='$deskripsi_produk',id_produk='$id_produk',harga='$harga' WHERE id_produk ='$id_produk'");
}
?>
      <script>alert('Data anda telah diupdate di database');</script>
    <script>document.location='tampil.php'</script>