<?php
error_reporting(0);
session_start();
include "../../config/koneksi.php";
$id_tagihan = $_GET['id_tagihan'];
$s = mysql_fetch_assoc(mysql_query("SELECT * FROM tagihan WHERE id_tagihan='$id_tagihan'")) or die(mysql_error());
if($s['status'] == 0){
?>
<html>
<head>
<title>APLIKASI PEMBAYARAN LISTRIK</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body background="../../img/xxx.jpg">
	<font face="Century Gothic" size="4" color="white">
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
	<center><img src="../../img/pembayaran.png" width="300" title="PT. Global Electric"></br></br>
		<font size="10" color="white">FORM PEMBAYARAN TAGIHAN LISTRIK</font></br></br>
		<?php
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
			$m = $data['bulanTagih'];
			$h = date('d');
			$b = date("m");
			if($h >=20){
				$denda = 25000;
			}else {
				$denda = 0;
			}
			$biaya_admin = 2500;
			$total = $harga + $denda + $biaya_admin;
		}
		?>
		<table border="0">
			<tr style="color:white">
				<td>ID PELANGGAN</td>
				<td>:</td>
				<td><?php echo $data['id_pelanggan']; ?></td>
			</tr>
			<tr style="color:white">
				<td>NAMA PELANGGAN</td>
				<td>:</td>
				<td><?php echo $data['nama']; ?></td>
			</tr>
			<tr style="color:white">
				<td>TAHUN TAGIH</td>
				<td>:</td>
				<td><?php echo $data['tahunTagih']; ?></td>
			</tr>
			<tr style="color:white">
				<td>BULAN TAGIH</td>
				<td>:</td>
				<td><?php echo $moList[$mo]; ?></td>
			</tr>
			<tr style="color:white">
				<td>DAYA</td>
				<td>:</td>
				<td><?php echo $data['daya']; ?> VA</td>
			</tr>
			<tr style="color:white">
				<td>PEMAKAIAN</td>
				<td>:</td>
				<td><?php echo $data['pemakaian']; ?> kWH</td>
			</tr>
			<tr style="color:white">
				<td>HARGA</td>
				<td>:</td>
				<td>Rp. <?php echo $harga; ?></td>
			</tr>
			<tr style="color:white">
				<td>DENDA</td>
				<td>:</td>
				<td>Rp. <?php echo $denda; ?></td>
			</tr>
			<tr style="color:white">
				<td>BIAYA ADMIN</td>
				<td>:</td>
				<td>Rp. <?php echo $biaya_admin; ?></td>
			</tr>
			<tr style="color:white">
				<td>TOTAL YANG HARUS DIBAYAR</td>
				<td>:</td>
				<td>Rp. <?php echo $total; ?></td></br>
			</tr>
		</table>
		<form action="bayaraksi.php" method="POST">
			<input type="hidden" name="tanggal_bayar" value="<?php echo date('Y-m-d'); ?>">
			<input type="hidden" name="id_tagihan" value="<?php echo $data['id_tagihan']; ?>">
			<input type="hidden" name="jumlah_tagihan" value="<?php echo $total; ?>">
			<input type="hidden" name="biaya_denda" value="<?php echo $denda; ?>">
			<input type="hidden" name="biaya_admin" value="<?php echo $biaya_admin; ?>">
			</br><input type="submit" class="button" name="bayar" value="BAYAR">
		</form>
<br>
<h5> copyright &copy; PT. FIRST ELECTRIC</h5></br>
</font>
</center>
</body>
</html>
<?php
	}else{
		echo "<script>alert('TAGIHAN SUDAH LUNAS!'); window.location = 'pembayaran.php'</script> ";
	}
?>