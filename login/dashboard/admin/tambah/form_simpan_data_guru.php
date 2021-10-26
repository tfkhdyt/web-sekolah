<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<br><br>
	<div class="kotak">
	<center><h3>Tambah Data Guru</h3></center>
	<form method="post" action="proses_simpan_data_guru.php" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td valign="top">Mapel</td>
				<td><input type="text" name="kelas"></td>
			</tr>
			<tr>
				<td valign="top">Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td valign="top">Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan" class="tombol_simpan">
		<a href="../index.php?menu=data_guru"><input type="button" value="Batal" class="tombol_batal"></a>
	</form>
</div>
</body>
</html>