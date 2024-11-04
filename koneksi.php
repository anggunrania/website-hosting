<?php
	$host ="localhost"; //berisi ip address dari server atau bisa di isi 127.0.0.1
	$user ="root";		//username masuk MySQL dari web hosting
	$pass ="";			//password masuk MySQL dari web hosting
	$db ="latwebprog";		//nama database yang diakses
	
	$kon = mysqli_connect($host,$user,$pass,$db);
	
	// cuma buat ngetes doang
	/*
	if($kon){
		echo "terkoneksi dengan MySQL Server<br>";
		echo "Database $db bisa diakses";
	}else{
		echo "maaf,Gagal Koneksi";
	}
	*/
?>