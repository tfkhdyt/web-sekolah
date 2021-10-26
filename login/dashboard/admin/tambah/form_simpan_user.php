<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<br><br>
	<div class="kotak">
	<center><h3>Tambah User</h3></center>
	<form method="post" action="proses_simpan_user.php" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td><select name="level">
					<option value="Admin">Admin</option>
					<option value="Guru">Guru</option>
					<option value="Siswa">Siswa</option>
				</select></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan" class="tombol_simpan">
		<a href="../index.php?menu=user"><input type="button" value="Batal" class="tombol_batal"></a>
	</form>
</div>
</body>
</html>