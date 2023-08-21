<?php
if (isset($_POST['edit'])) {

	include('../../config/koneksi.php');

	$id_pelanggan = $_POST['id_pelanggan'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$kodeTarif = $_POST['kodeTarif'];

	$update = mysql_query("UPDATE pelanggan SET nama='$nama', alamat='$alamat', kodeTarif= '$kodeTarif' WHERE id_pelanggan='$id_pelanggan'") or die(mysql_error());

	if ($update) {

		echo "<script>alert('Data Berhasil di Perbarui!'); window.location = 'pelanggan.php'</script> ";
	} else {
		echo "<script>alert('Data Gagal di Perbarui!'); window.location = 'edit.php?id='.$id.''</script> ";
	}
} else {
	echo '<script>window.history.back()</script>';
}
