<?php
	$sqlm = mysqli_query($kon, "select * from user where iduser=$_GET[iduser]");
	$rm = mysqli_fetch_array($sqlm);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="style.css">
<title>Untitled Document</title>
</head>

<body>
<div class="container">
<h2 class="judul">Merubah Data User Baru</h2>

<form id="form1" name="form1" method="post" action="" enctype="multipart/form-data">
<input name="iduser" type="hidden" id="iduser" value="<?php echo "$rm[iduser]";?>"  />
  <p>Username
    <input name="username" type="text" id="username" value="<?php echo "$rm[username]";?>"/>
  </p>
  <p>Password
    <input name="password" type="password" id="password" value="<?php echo "$rm[password]";?>" />
  </p>
  <p>
    <label>Nama
    <input type="text" name="nama" id="nama" value="<?php echo "$rm[nama]";?>" />
    </label>
  </p>
  <p>Tempat/Tanggal Lahir 
    <input name="tmplahir" type="text" id="tmplahir" value="<?php echo "$rm[tmplahir]";?>" />
  <input name="tgllahir" type="date" id="tgllahir" value="<?php echo "$rm[tgllahir]";?>"/>
  </p>
  <p>Jenis Kelamin 
  <?php
  	if($rm["jk"] == "L"){
		$l = "checked";
	}else if($rm["jk"] == "P"){
		$p = "checked";
	}
	?>
    <input name="jk" type="radio" value="P" value="L"<?php echo "$p" ?>/>

  laki-laki
  <input name="jk" type="radio" value="P" value="L"<?php echo "$p" ?>/>
  perempuan</p>
  <p>Email
    <label>
    <input name="email" type="text" id="email" value="<?php echo "$rm[email]";?>"/>
    </label>
  </p>
  Foto Lama <br />
  <?php 
  	echo "<img src='foto/$rm[foto]' width='200px'>";
  ?>
  <p>Foto
    <label>
    <input name="foto" type="file" id="foto" value="<?php echo "$rm[foto]";?>"/>
    </label>
  </p>
  <p>
    <label>
    <input name="simpan" type="submit" id="simpan" value="Simpan Data User" />
    </label>
  </p>
  <p>&nbsp; </p>
</form>

<?php
if($_POST["simpan"]){
	include "koneksi.php";
	$nmfoto =$_FILES["foto"]["name"];
	$lokfoto =$_FILES["foto"]["tmp_name"];
	if(!empty($lokfoto)){
		move_uploaded_file($lokfoto, "foto/$nmfoto");
    $foto = ", foto='$nmfoto'";
	}else{
		$foto ="";
	}
	
	$sqlm = mysqli_query($kon, "update user set username='$_POST[username]',nama='$_POST[nama]',password='$_POST[password]',tmplahir='$_POST[tmplahir]',
  tgllahir='$_POST[tgllahir]',jk='$_POST[jk]',email='$_POST[email]' $foto where username='$_POST[username]'");
	
	if($sqlm){
		echo "Data User Berhasil Disimpan";
	}else{
		echo "Gagal Menyimpan";
	}
	echo "<meta HTTP-EQUIV='Refresh' Content='2; URL=?p=user'>";
	}
?>
</div>
</body>
</html>
