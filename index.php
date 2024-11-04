<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LATIHAN WEB PROGRAMMING</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container">
<center><h1>Data User</h1></center>
<div class="div1">
<?php 
	include "koneksi.php";
	if($_GET == "useradd"){
		include "useradd.php";
	}
	else if($_GET== "useredit"){
		include "useredit.php";
	}
	else if($_GET == "userdel"){
		include "userdel.php";
	}
	else{
		include "user.php";
	}
?>
</div>
</div>
</body>
</html>
