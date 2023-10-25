<?php
include("config/koneksi.php");

$produk =mysqli_query($koneksi, "select * from produk");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>My Website</title>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>F</span>LO<span>RA</span>L</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#projects" data-after="Projects">Product</a></li>
                        <li><a href="/Book-Finder-master/index.html" data-after="Finder">Finder</a></li>
                        <li><a href="#services" data-after="Services">Services</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                        <li><a href="./login.php" data-after="login">login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->


    <!-- Hero Section  -->
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Hello, <span></span></h1>
                <h1>WELCOME TO <span></span></h1>
                <h1>FLORAL SHOP <span></span></h1>
                <a href="#projects" type="button" class="cta">Product</a>
            </div>
        </div>
    </section>
    <!-- End Hero Section  -->

    <!-- Projects Section -->
    <section id="projects">
        <div class="projects container">
            <div class="projects-header">
                <h1 class="section-title">Pro<span>duct</span></h1>
            </div>
            <div class="all-projects">
             <?php
             while($tampil=mysqli_fetch_assoc($produk)){
                
                
             ?>   
                <div class="project-item">
                    <div class="project-info">
                        <h1><?php echo"$tampil[nama_produk]"?></h1>
                        <p><?php echo"$tampil[deskripsi_produk]"?></p>
                        <p><?php echo"$tampil[harga]"?></p>
                    </div>
                    <div class="project-img">
                        <img src="./img/<?php echo"$tampil[gambar_produk]"?>" alt="<?php echo"$tampil[nama_produk]"?>">
                    </div>
                </div>
                <?php
             }
             
             ?>
            </div>
        </div>
    </section>
    <!-- End Projects Section -->

    <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Serv<span>i</span>ces</h1>
                <h2>Kami akan juga membagikan tips dan cara merawat bunga </h2>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon"><img src="./img/mawar.jpg" /></div>
                    <h2>Mawar</h2>
                    <p>Cara Perawatan bunga mawar:<br>
                        1. Hari pertama saat menanam, berikan pupuk tanaman B1 atau jika tidak ada bisa diganti dg
                        air cucian beras (sama baiknya).<br>
                        2. Hindari kontak dengan sinar matahari langsung di 7 hari pertama setelah penanaman.<br>
                        3. Berikan pupuk 1-2 bulan sekali (1 bulan pertama hindari pemberian pupuk karena tanaman
                        masih proses recovery, kecuali pupuk B1 yg diberikan dihari pertama).<br>
                    </p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="./img/anggrek.jpg" /></div>
                    <h2>Anggrek</h2>
                    <p>Cara Merawat Bunga anggrek:<br>
                        1. Letakan anggrek di tempat yang lembab<br>
                        2. Bersihkan anggrek secara berkala<br>
                        3. Hindari suhu panas berlebihan<br>
                        4. Siram anggrek secara rutin<br>
                        5. Berikan pupuk secara berkala<br>
                        6. Semprot bunga anggrek dengan semprotan anti hama<br></p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="./img/melati.jpg" /></div>
                    <h2>Melati</h2>
                    <p>Cara merawat bunga melati:<br>
                        1. Perhatikan media tanam yang digunakan<br>
                        2. Melakukan pembibitan yang baik<br>
                        3. Memperhatikan sinar matahari yang cukup<br>
                        4. Melakukan pemangkasan secara rutin<br>
                        5. Memberikan pupuk yang tepat<br>
                        6. Melakukan penyiraman<br></p>
                </div>
                <div class="service-item">
                    <div class="icon"><img src="./img/Bougenville.jpg" /></div>
                    <h2>Bougenville</h2>
                    <p>Cara Perawatan bunga Bungenvil:<br>
                        1. Perhatikan Media tanam bunga Bungenvil<br>
                        Media tanam yang cocok adalah campuran tanah dan humus yang memiliki tingkat kesuburan cukup
                        tinggi dan sirkulasi udara yang baik.
                        Jika bunga bougenville ditanam di suhu yang dingin, maka tidak disarankan untuk
                        meletakkannya di luar ruangan. Di iklim yang lembab, bunga bougenville ini tidak akan
                        berbunga.<br>
                        2. Penyinaran Bunga Bungenvil<br>
                        Tanam dan letakkan bunga bougenville di tempat yang terkena sinar matahari sepanjang hari.
                        Alasannya karena bunga bougenville termasuk jenis tanaman yang membutuhkan sinar matahari
                        sepanjang hari minimal 6-7 jam dalam sehari.<br>
                        3. Penyiraman Bunga Bungenvil<br>
                        Tanam dan letakkan bunga bougenville di tempat yang terkena sinar matahari sepanjang hari.
                        Alasannya karena bunga bougenville termasuk jenis tanaman yang membutuhkan sinar matahari
                        sepanjang hari minimal 6-7 jam dalam sehari.
                        Namun jika Bunga bungenvil sudah besar kurangi pemberian air karena jika terlalu banyak maka
                        bunganya susah merekah. Fase kering ini tidak berlangsung lama hanya 3-4 hari saja hingga
                        bunganya mekar seluruhnya. Penyiraman kembali bisa dilakukan saat sudah mekar.<br>
                        4. Pemupukan Bunga Bungenvil<br>
                        Gunakan pupuk NPK mutiara dengan cara ditaburkan di sekeliling tanaman atau dicampur dengan
                        air dan disiram pada media tanam</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->

    <!-- About Section -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="./img/toko.jpg" alt="img">
                </div>
            </div>
            <div class="col-right">
                <h1 class="section-title">About <span>US</span></h1>
                <h2>FLORAL SHOP</h2>
                <p>Berdiri sejak tahun 2022, Floral dikenal sebagai toko bunga florist yang menyediakan berbagai
                    rangkaian bunga berkualitas untuk pajangan juga buket bunga untuk momen momen special, Banyak bunga
                    yang dapat dibeli di toko bunga Floral Kami juga mempunyai jasa mengirimkan bunga khususnya untuk
                    anda yang bertempat di Bekasi.
                    Sebagai Spesialis florist toko bunga kami melayani mulai dari perawatan bunga, dekorasi bunga hingga
                    mengirimkan karangan bunga di daerah bekasi</p>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <!-- Contact Section -->
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="section-title">Contact <span>info</span></h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><a href="https://wa.me/6285884100437"><img
                                src="https://img.icons8.com/ios/50/undefined/whatsapp--v1.png" /></a></div>
                    <div class="contact-info">
                        <h1>WA</h1>
                        <h2>+62 800-9000-1000</h2>
                        <h2>+62 888-9999-1111</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><a href=""><img
                                src="https://img.icons8.com/ios-filled/50/undefined/gmail-new.png" /></a></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>floral@gmail.com</h2>
                        <h2>floral@yahoo.com</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><a href=""><img
                                src="https://img.icons8.com/ios-filled/50/undefined/address--v1.png" /></a></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>JL.Melati no.169</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Section -->

    <!-- Footer -->
    <section id="footer">
        <div class="footer container">
            <div class="brand">
                <h1><span>F</span>LO <span>RA</span>L</h1>
            </div>
            <h2>Your Complete Web Solution</h2>
            <div class="social-icon">
                <div class="social-item">
                    <a href="https://youtu.be/dQw4w9WgXcQ"><img
                            src="https://img.icons8.com/ios/50/undefined/facebook-new.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://youtu.be/dQw4w9WgXcQ"><img
                            src="https://img.icons8.com/ios/50/undefined/instagram-new--v1.png" /></a>
                </div>
                <div class="social-item">
                    <a href="https://youtu.be/dQw4w9WgXcQ"><img
                            src="https://img.icons8.com/ios/50/undefined/youtube-play--v1.png" /></a>
                </div>
            </div>
            <p>Copyright © 2022 FLORAL All rights reserved</p>
        </div>
    </section>
    <!-- End Footer -->
    <script src="./app.js"></script>
</body>

</html>