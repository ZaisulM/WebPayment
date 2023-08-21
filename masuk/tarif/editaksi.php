<?php
if(isset($_POST['edit'])){
	
	include('../../config/koneksi.php');

	$id_tarif = $_POST['id_tarif'];
	$kodeTarif = $_POST['kodeTarif'];
	$daya = $_POST['daya'];
	$tarif_perKWH = $_POST['tarif_perKWH'];
	$beban = $_POST['beban'];

	$update = mysql_query("UPDATE tarif SET kodeTarif='$kodeTarif', daya='$daya', tarif_perKWH= '$tarif_perKWH', beban='$beban' WHERE id_tarif='$id_tarif'") or die(mysql_error());

	if($update){
		
		echo "<script>alert('Data Berhasil di Perbarui!'); window.location = 'tarif.php'</script> ";
		
	}else{
		echo "<script>alert('Data Gagal di Perbarui!'); window.location = 'edit.php?id='.$id.''</script> ";
	}

}else{
	echo '<script>window.history.back()</script>';

}
?>
