<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";

if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){
echo "<script>alert('Anda Bukan Admin!'); window.location = '../login.php'</script>";
}
else{
if(!isset($_SESSION['nama']));
?>
<html>
<head>
	<title>APLIKASI PEMBAYARAN LISTRIK</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="shortcut" href="../img/listrik.png">
</head>

<body background="../img/xxx.jpg">
	<nav>
    <ul>
       <li><a href="pelanggan/pelanggan.php" title="PELANGGAN">PELANGGAN</a></li>
    	<li><a href="tagihan/tagihan.php" title="TAGIHAN">TAGIHAN</a></li>
    	<li><a href="tarif/tarif.php" title="TARIF">TARIF</a></li>
    	<li><a href="pembayaran/pembayaran.php" title="PEMBAYARAN">PEMBAYARAN</a></li>
    	<li><a href="rekap/rekap.php" title="REKAPITULASI">REKAPITULASI</a></li>
    	<li style="float: right;"><a href="logout.php" title="LOGOUT">LOGOUT</a></li>
    </ul>
	</nav>
	<font face="Century Gothic" color="white">
	<center><img src="../img/listrik.png" width="300" title="PT. First Electric"></br>
		<font size="10">APLIKASI PEMBAYARAN LISTRIK</font>
	</b></br></br>
			<b>copyright &copy; PT. FIRST ELECTRIC</font></br></b>
	</center>
</body>
</html>
<?php 
}
 ?>