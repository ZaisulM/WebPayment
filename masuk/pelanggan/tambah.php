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
		<font color="white" face="century gothic">
			<img src="../../img/pelanggan.PNG" width="300" title="PT. Global Electric"></a><br /><br />
			<font size="10" color="white">Tambah data pelanggan</font></br></br>

			<b>
				<a href="pelanggan.php" title="BATAL" class="button">BATAL</a></br></br>
				<form action="tambahaksi.php" method="post">
					<table cellpading="5" cellspacing="0">
						<tr style="color: white">
							<td>ID Pelanggan</td>
							<td>:</td>
							<td><input class="textbox" type="text" name="id_pelanggan" size="30" required></td>
						</tr>
						<tr style="color: white">
							<td>Nama</td>
							<td>:</td>
							<td><input class="textbox" type="text" name="nama" size="30" required></td>
						</tr>
						<tr style="color: white">
							<td>Alamat</td>
							<td>:</td>
							<td><input class="textbox" type="text" name="alamat" size="50" required></td>
						</tr>
						<tr style="color: white">
							<td>Daya</td>
							<td>:</td>
							<td>
								<select name="kodeTarif" required>
									<option value="1">450 VA</option>
									<option value="2">900 VA</option>
									<option value="3">1300 VA</option>
									<option value="4">2200 VA</option>
									<option value="5">3500 VA</option>
								</select>
							</td>
						</tr>
						<tr style="color: white">
							<td>&nbsp;</td>
							<td></td>
							<td><input type="submit" class="button" name="tambah" value="Tambah">&nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"></br></br></td>
						</tr>
					</table>
				</form>
	</center>
	</font>
</body>

</html>