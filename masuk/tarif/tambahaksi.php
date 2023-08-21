<?php
if (isset($_POST['tambah'])){
	include('../../config/koneksi.php');
	
	$id_tarif = $_POST['id_tarif'];
	$kodeTarif = $_POST['kodeTarif'];
	$daya = $_POST['daya'];
	$tarif_perKWH = $_POST['tarif_perKWH'];
	$beban = $_POST['beban'];
	
	$input = mysql_query("INSERT INTO tarif VALUES ('$id_tarif', '$kodeTarif', '$daya', '$tarif_perKWH', '$beban')") or die (mysql_error());
	
	if($input){
	
	echo "<script>alert('Data Berhasil di tambahkan !'); window.location = 'tarif.php' </script>";
	}
	
	else{
	echo "<script> alert('Gagal Menambahkan data !'); window.location = 'tambah.php' </script>";
	}
	}
	else{
	echo '<script> window.history.back()</script>';
	}
	?>
	