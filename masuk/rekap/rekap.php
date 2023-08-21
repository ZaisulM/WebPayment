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
	<center><img src="../../img/rekap.png" width="300" title="PT. Global Electric"></br></br>
		<font size="10" color="white">REKAPITULASI TAGIHAN LISTRIK</font></br></br>
		<font size="+2" color="white">REKAPITULASI PER BULAN</font></br>
	<form action="cetak.php" method="POST">
		<select class="textbox" name="bln" required>
				<option value="01">JANUARI</option>
				<option value="02">FEBRUARI</option>
				<option value="03">MARET</option>
				<option value="04">APRIL</option>
				<option value="05">MEI</option>
				<option value="06">JUNI</option>
				<option value="07">JULI</option>
				<option value="08">AGUSTUS</option>
				<option value="09">SEPTEMBER</option>
				<option value="10">OKTOBER</option>
				<option value="11">NOVEMBER</option>
				<option value="12">DESEMBER</option>
		</select>
		<input type="submit" class="button" name="bulan" value="CETAK"><br>
	</br>
	<font size="+2" color="white">REKAPITULASI PER TAHUN</font></br>
		<select class="textbox" name="thn" required>
				<option value="2017">2017</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
		</select>
		<input type="submit" class="button" name="tahun" value="CETAK"><br>
	</form>
<br>
<h5> copyright &copy; PT. FIRST ELECTRIC</h5></br>
</font>
</center>
</body>
</html>