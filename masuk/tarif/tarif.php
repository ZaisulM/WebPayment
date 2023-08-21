<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";
?>
<html>
<head>
<title>APLIKASI PEMBAYARAN LISTRIK</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">

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
	<center><img src="../../img/tarif.png" width="350" title="PT. Global Electric"></br></br>
		<font size="10" color="white">DATA TARIF LISTRIK</font><br><br>
		<a href="tambah.php" title="TAMBAH DATA" class="button">Tambah Data</a>
<table class="table1" cellpadding="2" cellspacing="0" width="800px" height="2" border="1" bgcolor="white"><br><br>
<tr><th colspan="10">
<center>TARIF</center>
</th>
</tr>
<tr><center>
<th>Kode Tarif</th>
<th>Daya</th>
<th>Tarif perKWH</th>
<th>Beban</th>
<th>Opsi</th>
</center>
</tr>
<?php 
 			include"../../config/koneksi.php";
 			$query = mysql_query("SELECT * FROM tarif")or die(mysql_errror());
		if(mysql_num_rows($query) == 0){

				echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{
 				$no= 1;
 				while ($data = mysql_fetch_assoc($query)) {
 					
 						echo '<tr>';
								echo '<td>'.$data['kodeTarif'].'</td>';
								echo '<td>'.$data['daya'].' VA</td>';
								echo '<td>Rp. '.$data['tarif_perKWH'].'</td>';
								echo '<td>'.$data['beban'].'</td>';
								echo '<td><a href="edit.php?id='.$data['id_tarif'].'" class="button">Edit</a> / <a href="hapus.php?id='.$data['id_tarif'].'" onclick = "return confrim (\'yakin?\')" class="button">Hapus</a></td>';
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