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
<font size="10">Edit data tarif</font></br></br>

<b>
<a href="tarif.php" title="BATAL">BATAL</a></br></br>
<?php
	include('../../config/koneksi.php');
	$id = $_GET['id'];
	$show = mysql_query("SELECT * FROM tarif WHERE id_tarif ='$id'");
	
	if(mysql_num_rows($show) == 0){
		
		echo '<script>window.history.back()</script>';
		
	}else{
		$data = mysql_fetch_assoc($show);
	}
	?>
<form action="editaksi.php" method="post">
<table cellpading="5" cellspacing="0" color>
<input type="hidden" name="daya" value="<?php echo $data['daya']; ?>">
 
		<tr style="color: white">
				<td>ID TARIF</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="id_tarif" value="<?php echo $data['id_tarif']; ?>" size="30" required></td>
		</tr>
		<tr style="color: white">
				<td>kodeTarif</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="kodeTarif" value="<?php echo $data['kodeTarif']; ?>" size="30" required></td>
		</tr>
		<tr style="color: white">
				<td>Daya</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="daya" value="<?php echo $data['daya']; ?>" size="50" disabled></td>
				</td>
		</tr>
		<tr style="color: white">
				<td>Tarif perKWH</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="tarif_perKWH" value="<?php echo $data['tarif_perKWH']; ?>" size="50" required></td>
		</tr>
		<tr style="color: white">
				<td>Beban</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="beban" value="<?php echo $data['beban']; ?>" size="50" required></td>
		</tr>
		<tr style="color: white">
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" class="button" name="edit" value="Edit">
		</tr>
</table>
</form>	
</center>
</font>
</body>
</html>