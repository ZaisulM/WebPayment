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

	<font color="white" face="Century gothic">
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
		<center><img src="../../img/pelanggan.png" width="300" title="PT. Global Electric"></br></br>
			<font size="10">DATA PELANGGAN</font></br></br>
			<b>
				<a href="tambah.php" title="TAMBAH DATA" class="button">Tambah Data</a><br><br>
				<form action="cari.php" method="POST">
					<input class="textbox" type="text" placeholder="CARI MENGGUNAKAN ID PELANGGAN" name="id_pelanggan" size="40" required>
					<input type="submit" class="button" name="cari" value="CARI">
				</form>
				<table class="table1" cellspacing="0" width="800px" border="1" bgcolor="white"><br>
					<tr>
						<th colspan="10">
							<center>PELANGGAN</center>
						</th>
					</tr>
					<tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Alamat</th>
						<th>Daya</th>
						<th>Opsi</th>
					</tr>
					<?php
					include "../../config/koneksi.php";
					$query = mysql_query("SELECT * FROM pelanggan") or die(mysql_error());
					if (mysql_num_rows($query) == 0) {

						echo '<tr><td colspan="5">Tidak ada data!</td></tr>';
					} else {
						$no = 1;
						while ($data = mysql_fetch_assoc($query)) {
							$daya = $data['kodeTarif'];
							$dayaList = array(
								'1' => '450 VA',
								'2' => '900 VA',
								'3' => '1300 VA',
								'4' => '2200 VA',
								'5' => '3500 VA'
							);

							echo '<tr>';
							echo '<td>' . $data['id_pelanggan'] . '</td>';
							echo '<td>' . $data['nama'] . '</td>';
							echo '<td>' . $data['alamat'] . '</td>';
							echo '<td>' . $dayaList[$daya] . '</td>';
							echo '<td><a href="edit.php?id=' . $data['id_pelanggan'] . '" class="button">Edit</a> | <a href="hapus.php?id=' . $data['id_pelanggan'] . '" class="button">Hapus</a></td>';
							echo '</tr>';
							$no++;
						}
					}
					?>
				</table>
				<br>
				<h5> copyright &copy; PT. FIRST ELECTRIC</h5></br>
	</font>
	</center>
</body>

</html>