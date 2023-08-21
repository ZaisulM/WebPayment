<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";

		include('../../config/koneksi.php');
		$id_tagihan = $_GET['id_tagihan'];
		$show = mysql_query("SELECT * FROM tagihan a, tarif b, pelanggan c WHERE a.id_tagihan ='$id_tagihan' AND a.id_pelanggan = c.id_pelanggan AND c.kodeTarif = b.kodeTarif");
		
		if(mysql_num_rows($show) == 0){
			
			// echo '<script>window.history.back()</script>';
			
		}else{
			$data = mysql_fetch_assoc($show);
			$harga = ($data['pemakaian']*$data['tarif_perKWH'])+$data['beban'];
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
			$h = date('d');
			$b = month('b')
			if($h>=20, $b>=12){
				$denda = 25000;
			}else{
				$denda = 0;
			}
			$biaya_admin = 2500;
			$total = $harga + $denda + $biaya_admin;
		}
		?>
		<center>
		<h1>STRUK PEMBAYARAN LISTRIK</h1>
		<table border="0">
			<tr>
				<td>TANGGAL BAYAR</td>
				<td>:</td>
				<td><?php echo date('d-m-Y'); ?></td>
			</tr>
			<tr>
				<td>ID PELANGGAN</td>
				<td>:</td>
				<td><?php echo $data['id_pelanggan']; ?></td>
			</tr>
			<tr>
				<td>NAMA PELANGGAN</td>
				<td>:</td>
				<td><?php echo $data['nama']; ?></td>
			</tr>
			<tr>
				<td>TAHUN TAGIH</td>
				<td>:</td>
				<td><?php echo $data['tahunTagih']; ?></td>
			</tr>
			<tr>
				<td>BULAN TAGIH</td>
				<td>:</td>
				<td><?php echo $moList[$mo]; ?></td>
			</tr>
			<tr>
				<td>DAYA</td>
				<td>:</td>
				<td><?php echo $data['daya']; ?>VA</td>
			</tr>
			<tr>
				<td>Pemakaian</td>
				<td>:</td>
				<td><?php echo $data['pemakaian']; ?> kWh </td>
			</tr>
			<tr>
				<td>HARGA</td>
				<td>:</td>
				<td>Rp. <?php echo $harga; ?></td>
			</tr>
			<tr>
				<td>DENDA</td>
				<td>:</td>
				<td>Rp. <?php echo $denda; ?></td>
			</tr>
			<tr>
				<td>BIAYA ADMIN</td>
				<td>:</td>
				<td>Rp. <?php echo $biaya_admin; ?></td>
			</tr>
			<tr>
				<td>TOTAL YANG HARUS DIBAYAR</td>
				<td>:</td>
				<td>Rp. <?php echo $total; ?></td>
			</tr>
		</table>
		<h4>Cap Petugas</h4>
		<br><br>ttd.<br><br>
		<h4><?php echo $_SESSION['nama']; ?></h4>
		</center>
<?php
echo "<script>window.print(); window.location = 'pembayaran.php'</script>";
?>