<?php
include "config/koneksi.php";

$username= $_POST['username'];
$password= md5($_POST['password']);

$login=mysql_query("SELECT* FROM akun WHERE username='$username' AND password='$password'");
$ketemu=mysql_num_rows($login);
$r=mysql_fetch_array($login);

if($ketemu > 0){
    $_SESSION['username'] = $r['username'];
    $_SESSION['password'] = $r['password'];
    $_SESSION['nama'] = $r['nama'];
    $_SESSION['tipeuser'] = $r['tipeuser'];
    echo "<script>alert('SELAMAT DATANG ADMIN');
    window.location='masuk/index.php'</script>";
} else {
    echo"<script>alert('ANDA BUKAN ADMIN !!!');
    window.location='index.php'</script>";
}
?>