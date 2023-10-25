<?php
error_reporting(0);
include "konfigurasi/koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];

$login  = mysql_query("SELECT * FROM admin WHERE username=$username' AND password='$password' ");
$ketemu = mysql_num_rows($login);
$r      = mysql_fetch_array($login);
if ($ketemu > 0) {
    session_start();
    $_SESSION[username] = $r[username];
    $_SESSION[password] = $r[password];
    
   

echo "<script>alert('Hai, $_SESSION[Username] anda berhasil login');
window.location = 'admin.php</script>"; //link (admin.php) disesuaikan sama yang di buat link halaman yang dituju kalo berhasil login apa
}
else {
    echo "<script> alert('Login Gagal, username atau password anda salah');
    window location=login.php</script>"; //link (login.php) disesuaikan sama yang di buat link halaman login apa
}
    ?>