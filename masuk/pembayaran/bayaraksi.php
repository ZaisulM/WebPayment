<?php
include('../../config/koneksi.php');

$tanggal_bayar = $_POST['tanggal_bayar'];
$id_tagihan = $_POST['id_tagihan'];
$jumlah_tagihan = $_POST['jumlah_tagihan'];
$biaya_denda = $_POST['biaya_denda'];
$biaya_admin = $_POST['biaya_admin'];
$status = 1;

$query = mysql_query("INSERT INTO pembayaran VALUES(NULL, '$tanggal_bayar', '$id_tagihan', '$jumlah_tagihan', '$biaya_denda', '$biaya_admin', '$status')") or die(mysql_error());
$update = mysql_query("UPDATE tagihan SET status='$status' WHERE id_tagihan='$id_tagihan'") or die(mysql_error());
if ($query && $update) {
	echo "<script>alert('Tagihan Berhasil di Bayar !'); window.location = 'cetak.php?id_tagihan=$id_tagihan' </script>";
} else {
	echo "<script> alert('Gagal Membayar Tagihan !'); window.location = 'pembayaran.php' </script>";
}
