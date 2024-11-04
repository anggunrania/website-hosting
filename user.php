<?php
	echo "<a href='?p=useradd' class='btn'><button class='add_new'><i class='fa-solid fa-user-plus'></i>Tambah Data User</button></a>";
	echo "<table width='100%' border='1' cellspacing='10' cellpadding='10'>";
	echo "<tr>
		<th>No</th>
		<th>Foto</th>
		<th>Data User</th>
		<th>Data Personal user</th>
		<th>Kontak</th>
		<th>Aksi</th>
	</tr>";
	
	$sqlm = mysqli_query($kon, "select * from user order by tgldaftar desc");
	$no = 1;
	while ($rm =mysqli_fetch_array($sqlm)){
	echo "<tr>
		<td>$no</td>
		<td><img src='foto/$rm[foto]' width='100px'></td>
		<td>
			id User:<b>$rm[iduser]</b><br>
			Username:<b>$rm[username]</b><br>
			Nama:<b>$rm[nama]</b><br>
			Password:<b>$rm[password]</b><br>
			Data disimpan pada : <b>$rm[tgldaftar] Wib</b>
			
		</td>
		<td>
			tempat / Tanggal Lahir : <br>
			<b>$rm[tmplahir] / $rm[tgllahir]</b><br>
			Jenis Kelamin : <b>$rm[jk]</b>
		</td>
		<td>
			Email: <b>$rm[email]</b>
		</td>
		<td><button class='btn2'><i class='fa-solid fa-pen-to-square'></i><a href='?p=useredit&iduser=$rm[iduser]'>Ubah </a></button>|
		<button><i class='fa-solid fa-trash-can'></i><a href='?p=userdel&iduser=$rm[iduser]'>Hapus</a></button></td>
	</tr>";
	$no++;
	}
	echo "</table>";
?>