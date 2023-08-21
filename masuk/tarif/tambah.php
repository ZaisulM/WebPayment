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
	<nav>
    <ul>
       <li><a href="../../index.php">Home</a></li>
       <li><a href="../pelanggan/pelanggan.php">Pelanggan</a></li>
       <li><a href="../tagihan/tagihan.php">Tagihan</a></li>
		<li><a href="../tarif/tarif.php">Tarif</a></li>
		<li><a href="../pembayaran/pembayaran.php">Pembayaran</a></li>
		<li><a href="../rekap/rekap.php">Rekapitulasi</a></li>
    </ul>
	</nav>
<center>
	<font face="century gothic" color="white">
<img src="../../img/tarif.PNG" width="300" title="PT. Global Electric"></a><br /><br />
<font size="10">Tambah data tarif</font></br></br>
<b>
<a href="tarif.php" title="BATAL">BATAL</a></br></br>
<form action="tambahaksi.php" method="post">
<table cellpading="5" cellspacing="0">

		<tr style="color: white">
				<td>ID TARIF</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="id_tarif" size="30" required></td>
		</tr>
		<tr style="color: white">

				<td>kodeTarif</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="kodeTarif" size="30" required></td>
		</tr>
		<tr style="color: white">
				<td>Daya</td>
				<td>:</td>
				<td>
				<select name="daya" required>
				<option value="450 VA">450 VA</option>
				<option value="900 VA">900 VA</option>
				<option value="1300 VA">1300 VA</option>
				<option value="2200 VA">2200 VA</option>
				<option value="3500 VA">3500 VA</option>
				</select>
				</td>
		</tr>
		<tr style="color: white">
				<td>Tarif perKWH</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="tarif_perKWH" size="50" required></td>
		</tr>
		<tr style="color: white">
				<td>Beban</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="beban" size="50" required></td>
		</tr>
		<tr style="color: white">
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" class="button" name="tambah" value="Tambah">|<input type="reset" class="button" value="Reset"></td>
		</tr>
</table>
</form>	
</center>
</font>
</body>
</html>