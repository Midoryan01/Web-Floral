<?php
include("../config/koneksi.php");

$produk =mysqli_query($koneksi, "select * from produk");
?>
<table border=1 width="100%">
    <tr>
        <td>id produk</td>
        <td>nama produk</td>
        <td>deskripsi produk</td>
        <td>id kategori</td>
        <td>gambar produk</td>
        <td>harga</td>
        <td>aksi</td>
    </tr>
    <?php
             while($tampil=mysqli_fetch_assoc($produk)){
?>
    <tr>
        <td><?php echo"$tampil[id_produk]"?></td>
        <td><?php echo"$tampil[nama_produk]"?></td>
        <td><?php echo"$tampil[deskripsi_produk]"?></td>
        <td><?php echo"$tampil[id_kategori]"?></td>
        <td><img src="../img/<?php echo"$tampil[gambar_produk]"?>" height="100px" width="150px" alt="<?php echo"$tampil[nama_produk]"?>"></td>
        <td><?php echo"$tampil[harga]"?></td>
        <td></td>
    </tr>
<?php
             }
 ?>               
</table>