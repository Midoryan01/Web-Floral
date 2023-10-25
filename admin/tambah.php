<?php
include("../config/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="middle">

        <form action = "simpan.php" method="post" enctype="multipart/form-data">
            id produk <input type=text name=id_produk required><br>
            nama produk <input type=text name=nama_produk required></br>
            deskripsi produk <textarea name=deskripsi_produk rows=5></textarea><br>
            nama kategori 
            <select name="id_kategori">
                <?php
            $produk =mysqli_query($koneksi, "SELECT * FROM kategori");
            while($tampil=mysqli_fetch_assoc($produk)){
                ?>
            <option value = <?php echo"$tampil[id_kategori]"?>><?php echo"$tampil[nama_kategori]"?></option>
            <?php
                }
                ?>
            </select></br>
            harga <input type=number name=harga required><br>
            gambar <input type=file name=pict required><br>
        </br>
        <input type=submit values=simpan>
        <a href='tampil.php'><input type= button value=BACK></a>
    </div>
</form>

    </div>
</div>
</body>
</html>