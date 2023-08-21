<?php
if (isset($_POST['tambah'])){
	include('../../config/koneksi.php');
	
	$id_tagihan = $_POST['id_tagihan'];
	$tahunTagih = $_POST['tahunTagih'];
	$bulanTagih = $_POST['bulanTagih'];
	$pemakaian = $_POST['pemakaian'];
	$id_pelanggan = $_POST['id_pelanggan'];
	
	$input = mysql_query("INSERT INTO tagihan VALUES ('$id_tagihan', '$tahunTagih', '$bulanTagih', '$pemakaian', 0, '$id_pelanggan')") or die (mysql_error());
	
	if($input){
	
	echo "<script>alert('Data Berhasil di tambahkan !'); window.location = 'tagihan.php' </script>";
	}
	
	else{
	echo "<script> alert('Gagal Menambahkan data !'); window.location = 'tambah.php' </script>";
	}
	}
	else{
	echo '<script> window.history.back()</script>';
	}
	?>
	