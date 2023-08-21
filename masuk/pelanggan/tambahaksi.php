<?php
if (isset($_POST['tambah'])) {
	include('../../config/koneksi.php');

	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kodeTarif = $_POST['kodeTarif'];

	$input = mysql_query("INSERT INTO pelanggan VALUES ('$id_pelanggan', '$nama', '$alamat', '$kodeTarif')") or die(mysql_error());

	if ($input) {

		echo "<script>alert('Data Berhasil di tambahkan !'); window.location = 'pelanggan.php' </script>";
	} else {
		echo "<script> alert('Gagal Menambahkan data !'); window.location = 'pelanggan.php' </script>";
	}
} else {
	echo '<script> window.history.back()</script>';
}
?>
