<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<br><br>
	<div class="kotak">
	<center><h3>Tambah Info Sekolah</h3></center>
	<form method="post" action="proses_simpan_info_sekolah.php" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td valign="top">Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td valign="top">Deskripsi</td>
				<td><textarea name="deskripsi"></textarea></td>
			</tr>
			<tr>
				<td valign="top">Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan" class="tombol_simpan">
		<a href="../index.php?menu=info_sekolah"><input type="button" value="Batal" class="tombol_batal"></a>
	</form>
</div>
</body>
</html>