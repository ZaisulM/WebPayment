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
<img src="../../img/tagihan.PNG" width="300" title="PT. Global Electric"></a><br /><br />
<font size="10" color="white">Tambah Data Tagihan Listrik</font></br></br>
<b>
<a href="tagihan.php" title="BATAL" class="button">BATAL</a></br></br>
<form action="tambahaksi.php" method="post">
<table cellpading="5" cellspacing="0" color>
		<tr style="color: white">
				<td>ID TAGIHAN</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="id_tagihan" size="30" required></td>
		</tr>
		<tr style="color: white">
				<td>ID Pelanggan</td>
				<td>:</td>
				<td>
					<select name="id_pelanggan" required>
					<?php
					$query = mysql_query("SELECT * FROM pelanggan")or die(mysql_errror());
					while ($data = mysql_fetch_assoc($query))
					{echo "<option value='".$data['id_pelanggan']."' ";
					echo ">".$data['id_pelanggan']."</option>";}
        		?></select></td>
		</tr>
		<tr style="color: white">
				<td>Tahun Tagihan</td>
				<td>:</td>
				<td>
				<input class="textbox" type="text" name="tahunTagih" size="30" required>
				</td>
		</tr>
		<tr style="color: white">
				<td>Bulan Tagihan</td>
				<td>:</td>
				<td>
				<select name="bulanTagih" required>
				<option value="01">Januari</option>
				<option value="02">Februari</option>
				<option value="03">Maret</option>
				<option value="04">April</option>
				<option value="05">Mei</option>
				<option value="06">Juni</option>
				<option value="07">Juli</option>
				<option value="08">Agustus</option>
				<option value="09">September</option>
				<option value="10">Oktober</option>
				<option value="11">November</option>
				<option value="12">Desember</option>
				</select>
				</td>
		</tr>
		<tr style="color: white">
				<td>Pemakaian</td>
				<td>:</td>
				<td><input class="textbox" type="text" name="pemakaian" size="50" required> kWH</td>
		</tr>
		<tr style="color: white">
				<td>&nbsp;</td>
				<td></td>
				<td><input type="submit" class="button" name="tambah" value="Tambah">&nbsp;&nbsp;&nbsp;<input type="reset" class="button" value="Reset"></td>
		</tr>
</table>
</form>	
</center>
</font>
</body>
</html>