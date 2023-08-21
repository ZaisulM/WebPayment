<?php

if (isset($_GET['id'])) {

	include('../../config/koneksi.php');

	$id = $_GET['id'];

	$cek = mysql_query("SELECT id_pelanggan FROM pelanggan WHERE id_pelanggan='$id'") or die(mysql_error());

	if (mysql_num_rows($cek) == 0) {

		echo '<script>window.history.back()</script>';
	} else {

		$del = mysql_query("DELETE FROM pelanggan WHERE id_pelanggan='$id'");

		if ($del) {

			echo "<script>alert('Data Berhasil di Hapus!'); window.location = 'pelanggan.php'</script> ";
		} else {

			echo "<script>alert('Gagal Menghapus Data!'); window.location = 'pelanggan.php'</script> ";
		}
	}
} else {
	echo '<script>window.history.back()</script>';
}
