<?php
include("../config/koneksi.php");
$id_produk=$_GET['id_produk'];
$data=mysqli_query($koneksi, "SELECT * FROM produk,kategori WHERE produk.id_produk='$id_produk' AND produk.id_kategori=kategori.id_kategori");
$tampil=mysqli_fetch_assoc($data);

?>
<form action = "ubah.php" method="post" enctype="multipart/form-data">
    id produk <input type=text name=id_produk value='<?php echo"$id_produk"; ?>' readonly><br>
    nama produk <input type=text name=nama_produk value='<?php echo"$tampil[nama_produk]"; ?>' required></br>
    deskripsi produk <textarea name=deskripsi_produk rows=5><?php echo "$tampil[deskripsi_produk]" ?></textarea><br>
    nama kategori 
    <select name="id_kategori">
        <option value = <?php echo"$tampil[id_kategori]"?>><?php echo"$tampil[nama_kategori]"?></option>
        <?php
            $produk =mysqli_query($koneksi, "SELECT * FROM kategori");
            while($tampila=mysqli_fetch_assoc($produk)){
        ?>
        <option value = <?php echo"$tampila[id_kategori]"?>><?php echo"$tampila[nama_kategori]"?></option>
        <?php
            }
        ?>
    </select></br>
    harga <input type=number name=harga value ='<?php echo"$tampil[harga]"?>'required><br>
    gambar<br><img src="../img/<?php echo"$tampil[gambar_produk]"?>" height="100px" width="150px" alt="<?php echo"$tampil[nama_produk]"?>"> 
    <input type=file name=pict><br>
    </br>
    <input type=submit values=simpan>
</form>