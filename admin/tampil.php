<?php
include("../config/koneksi.php");

$produk =mysqli_query($koneksi, "SELECT * FROM produk,kategori WHERE produk.id_kategori=kategori.id_kategori");
?>
<a href='tambah.php'><input type= button value=tambah></a>
<a href='../index.php'><input type= button value=HOME></a>
<table border=1 width="100%">
    <tr>
        <td><center><b>id produk</b></center></td>
        <td><center><b>nama produk</b></center></td>
        <td><center><b>deskripsi produk</b></center></td>
        <td><center><b>Nama kategori</b></center></td>
        <td><center><b>gambar produk</b></center></td>
        <td><center><b>harga</b></center></td>
        <td><center><b>aksi</b></center></td>
    </tr>
    <?php
    //buat mulai perulangan
             while($tampil=mysqli_fetch_assoc($produk)){
?>
    <tr>
        <td><?php echo"$tampil[id_produk]"?></td>
        <td><?php echo"$tampil[nama_produk]"?></td>
        <td><?php echo"$tampil[deskripsi_produk]"?></td>
        <td><?php echo"$tampil[nama_kategori]"?></td>
        <td><img src="../img/<?php echo"$tampil[gambar_produk]"?>" height="100px" width="150px" alt="<?php echo"$tampil[nama_produk]"?>"></td>
        <td><?php echo"$tampil[harga]"?></td>
        <td>
        <a href='edit.php?id_produk=<?php echo"$tampil[id_produk]"?>'><input type= button value=edit ></a>
        <a href='hapus.php?id_produk=<?php echo"$tampil[id_produk]"?>'><input type= button value=hapus></a>
        </td>
        
    </tr>
<?php
             }//penutup
 ?>               
</table>