<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";

if(isset($_POST['bulan'])){
	$bulan = $_POST['bln'];
	$moList = array(
		'01' => 'JANUARI',
		'02' => 'FEBRUARI',
		'03' => 'MARET',
		'04' => 'APRIL',
		'05' => 'MEI',
		'06' => 'JUNI',
		'07' => 'JULI',
		'08' => 'AGUSTUS',
		'09' => 'SEPTEMBER',
		'10' => 'OKTOBER',
		'11' => 'NOVEMBER',
		'12' => 'DESEMBER'
	);
?>
<!DOCTYPE html>
<html>
<head>
	<title>REKAPITULASI BULAN <?php echo $moList[$bulan];?></title>
</head>
<body>
<table class="table1" cellpadding="2" cellspacing="0" width="800px" height="2" border="1" bgcolor="white"><br>
<tr style="color:#384d5b"><th colspan="10">
<center>REKAPITULASI TAGIHAN LISTRIK BULAN <?php echo $moList[$bulan];?></center>
</th>
</tr>
<tr style="color:#384d5b"><center>
<th>ID TAGIHAN</th>
<th>NAMA PELANGGAN</th>
<th>TAHUN TAGIHAN</th>
<th>BULAN TAGIHAN</th>
<th>PEMAKAIAN</th>
<th>STATUS</th>
</center>
</tr>
<?php 
 			include"../../config/koneksi.php";
 			
 			$query = mysql_query("SELECT * FROM tagihan a, pelanggan b WHERE a.id_pelanggan = b.id_pelanggan AND bulanTagih = '$bulan' order by id_tagihan")or die(mysql_errror());

		if(mysql_num_rows($query) == 0){

				echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';
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
 			echo "<script>window.print(); window.location = 'rekap.php'</script>";
 			?>
</table>
</body>
</html>
<?php
}elseif (isset($_POST['tahun'])) {
	$tahun = $_POST['thn'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>REKAPITULASI TAHUN <?php echo $tahun;?></title>
</head>
<body>
	<table class="table1" cellpadding="2" cellspacing="0" width="800px" height="2" border="1" bgcolor="white"><br>
<tr style="color:#384d5b"><th colspan="10">
<center>REKAPITULASI TAGIHAN LISTRIK TAHUN <?php echo $tahun;?></center>
</th>
</tr>
<tr style="color:#384d5b"><center>
<th>ID TAGIHAN</th>
<th>NAMA PELANGGAN</th>
<th>TAHUN TAGIHAN</th>
<th>BULAN TAGIHAN</th>
<th>PEMAKAIAN</th>
<th>STATUS</th>
</center>
</tr>
<?php 
 			include"../../config/koneksi.php";
 			
 			$query = mysql_query("SELECT * FROM tagihan a, pelanggan b WHERE a.id_pelanggan = b.id_pelanggan AND tahunTagih = '$tahun' order by bulanTagih")or die(mysql_errror());

		if(mysql_num_rows($query) == 0){

				echo '<tr><td colspan="6" align="center">Tidak ada data!</td></tr>';
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
 			echo "<script>window.print(); window.location = 'rekap.php'</script>";
 			?>
</table>
</body>
</html>
<?php
}
?>