<?php
	include "koneksi.php";
	$sqlm =mysqli_query($kon, "delete from user where iduser='$_GET[iduser]'");
	
	if($sqlm){
		echo "Data User Berhasil Dihapus";
	}else{
		echo "Gagal menghapus";
	}
	echo "<meta HTTP-EQUIV='Refresh' Content='2; URL=?p=user'>";
?>