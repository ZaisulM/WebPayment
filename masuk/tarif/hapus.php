<?php

if(isset($_GET['id'])){

	include('../../config/koneksi.php');

	$id = $_GET['id'];
	
	$cek = mysql_query("SELECT id_tarif FROM tarif WHERE id_tarif='$id'") or die(mysql_error());

	if(mysql_num_rows($cek) == 0){

		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM tarif WHERE id_tarif='$id'");
		
		if($del){
			
			echo "<script>alert('Data Berhasil di Hapus!'); window.location = 'tarif.php'</script> ";
			
		}else{
			
			echo "<script>alert('Gagal Menghapus Data!'); window.location = 'tarif.php'</script> ";
		
		}
		
	}
	
}else{
	echo '<script>window.history.back()</script>';
}
?>
