<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";
?>
<html>
<head>
<title>APLIKASI PEMBAYARAN LISTRIK</title>
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body background="../../img/xxx.jpg">

	<font face="century gothic" color="white">
	<nav>
    <ul>
       <li><a href="../index.php">Home</a></li>
       <li><a href="../pelanggan/pelanggan.php">Pelanggan</a></li>
       <li><a href="../tagihan/tagihan.php">Tagihan</a></li>
		<li><a href="../tarif/tarif.php">Tarif</a></li>
		<li><a href="../pembayaran/pembayaran.php">Pembayaran</a></li>
		<li><a href="../rekap/rekap.php">Rekapitulasi</a></li>
    </ul>
	</nav>
	<center><img src="../../img/pembayaran.png" width="300" title="PT. Global Electric"></br></br>
		<font size="10" color="white">PEMBAYARAN TAGIHAN LISTRIK</font></br></br>
	<form action="muncul.php" method="POST">
		<input class="textbox" type="text" name="id_pelanggan" size="40" required>
		<input type="submit" class="button" name="cari" value="CARI"><br>
	</form>
<br>
<h5> copyright &copy; PT. FIRST ELECTRIC</h5></br>
</font>
</center>
</body>
</html>