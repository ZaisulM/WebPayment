<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";
$id = $_GET['id'];
?>
<html>
<head>
<title>APLIKASI PEMBAYARAN LISTRIK</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body background="../../img/xxx.jpg">	<font face="century gothic" color="white">
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
	<center><img src="../../img/tagihan.png" width="300" title="PT. Global Electric"></br></br>
		<font size="10" color="white">DATA TAGIHAN LISTRIK</font></br></br>
		<b>
		<a href="tambah.php" title="TAMBAH DATA" class="button">Tambah Data</a><br><br>
		<font size="+2" color="white">FILTER DATA</font></br>
		<form action="filter.php" method="POST">
			<select class="textbox" name="bulan" required>
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
			<input type="submit" class="button" name="filter" value="FILTER">
		</form>
		
<table class="table1" cellpadding="2" cellspacing="0" width="800px" height="2" border="1" bgcolor="white"><br>
<tr style="color:#384d5b"><th colspan="10">
<center>TAGIHAN LISTRIK</center>
</th>
</tr>
<tr style="color:#384d5b"><center>
<th>Id Tagihan</th>
<th>Nama Pelanggan</th>
<th>Tahun Tagihan</th>
<th>Bulan Tagihan</th>
<th>Pemakaian</th>
<th>Status</th>
</center>
</tr>
<?php 
 			include"../../config/koneksi.php";
 			
 			$query = mysql_query("SELECT * FROM tagihan a, pelanggan b WHERE a.id_pelanggan = b.id_pelanggan order by bulanTagih")or die(mysql_errror());

		if(mysql_num_rows($query) == 0){

				echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
		}else{
 				$no= 1;
 				while ($data = mysql_fetch_assoc($query)) {
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