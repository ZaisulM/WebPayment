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
	<center><img src="../../img/logo.png" width="300" title="PT. Global Electric"></br></br>
		<font size="10" color="white">PEMBAYARAN TAGIHAN LISTRIK</font></br></br>
		<table class="table1" cellpadding="2" cellspacing="0" width="1200px" height="2" border="1" bgcolor="white"><br><br>
		<tr><th colspan="10">
		<center>TAGIHAN LISTRIK</center>
		</th>
		</tr>
		<tr><center>
		<th>Id Tagihan</th>
		<th>Nama Pelanggan</th>
		<th>Tahun Tagihan</th>
		<th>Bulan Tagihan</th>
		<th>Pemakaian</th>
		<th>Status</th>
		<th>Opsi</th>
		</center>
		</tr>
		<?php

		include('../../config/koneksi.php');
		$id_pelanggan = $_POST['id_pelanggan'];
		$show = mysql_query("SELECT * FROM tagihan a, pelanggan b WHERE a.id_pelanggan ='$id_pelanggan' AND a.id_pelanggan = b.id_pelanggan order by bulanTagih");
		
		if(mysql_num_rows($show) == 0){
			
			echo '<script>alert("ID PELANGGAN TIDAK ADA !"); window.location = "pembayaran.php"</script>';
			
		}else{
			while ($data = mysql_fetch_assoc($show)){
			$status = $data['status'];
					$statusList = array(
				    '0' => 'Belum Lunas',
				    '1' => 'Sudah Lunas'
					);
					$mo = $data['bulanTagih'];
					$moList = array(
					    '01' => 'Januari',
					    '02' => 'Februari',
					    '03' => 'Maret',
					    '04' => 'April',
					    '05' => 'Mei',
					    '06' => 'Juni',
					    '07' => 'Juli',
					    '08' => 'Agustus',
					    '09' => 'September',
					    '10' => 'Oktober',
					    '11' => 'November',
					    '12' => 'Desember'
					);
 					
 						echo '<tr>';
								echo '<td>'.$data['id_tagihan'].'</td>';
								echo '<td>'.$data['nama'].'</td>';
								echo '<td>'.$data['tahunTagih'].'</td>';
								echo '<td>'.$moList[$mo].'</td>';
								echo '<td>'.$data['pemakaian'].' kWH</td>';
								echo '<td>'.$statusList[$status].'</td>';
								echo '<td><a href="bayar.php?id_tagihan='.$data['id_tagihan'].'" class="button">BAYAR</a></td>';
								echo '</tr>';
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