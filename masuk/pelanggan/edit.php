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
			<img src="../../img/pelanggan.png" width="300" title="Logo"></a>
			<br /><br />
			<font size="10" color="white">EDIT DATA PELANGGAN</font></br></br>
			<a href="pelanggan.php" title="BATAL" class="button">BATAL</a></br></br>
			<b>Isi ID Ulang, Sebelum Menyimpan !</b></br></br>
			<?php
			include('../../config/koneksi.php');
			$id = $_GET['id'];
			$show = mysql_query("SELECT * FROM pelanggan WHERE id_pelanggan ='$id'");

			if (mysql_num_rows($show) == 0) {

				echo '<script>window.history.back()</script>';
			} else {
				$data = mysql_fetch_assoc($show);
			}
			?>
			<form action="editaksi.php" method="POST">
				<input type="hidden" name="id_pelanggan" value="<?php echo $id; ?>">
				<table cellpadding="3" cellspacing="0">
					<tr style="color: white">
						<td>ID</td>
						<td>:</td>
						<td><input class="textbox" type="text" name="id" value="<?php echo $data['id']; ?>" size="30" required></td>
					</tr>
					<tr style="color: white">

						<td>Nama</td>
						<td>:</td>
						<td><input class="textbox" type="text" name="nama" value="<?php echo $data['nama']; ?>" size="30" required></td>
					</tr>
					<tr style="color: white">
						<td>Alamat</td>
						<td>:</td>
						<td><input class="textbox" type="text" name="alamat" value="<?php echo $data['alamat']; ?>" size="50" required></td>
					</tr>
					<tr style="color: white">
						<td>Kode Tarif</td>
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
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td><input type="submit" class="button" name="edit" value="Edit">&nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"></br></br></td>
					</tr>
				</table>
			</form>
		</font>
	</center>
</body>

</html>