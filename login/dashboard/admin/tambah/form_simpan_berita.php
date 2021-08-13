<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
	<script src="../../../../js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({selector: 'textarea'});
    </script>
</head>
<body>
	<br><br>
	<div class="kotak2">
	<center><h3>Tambah Berita</h3></center>
	<form method="post" action="proses_simpan_berita.php" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" size="67"></td>
			</tr>
			<tr>
				<td valign="top">Tanggal</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td valign="top">Deskripsi</td>
				<td><textarea name="deskripsi" rows="20" style="resize: vertical; width: 500px;"></textarea></td>
			</tr>
			<tr>
				<td valign="top">Gambar</td>
				<td><input type="file" name="gambar"></td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Simpan" class="tombol_simpan">
		<a href="../index.php?menu=berita"><input type="button" value="Batal" class="tombol_batal"></a>
	</form>
</div>
</body>
</html>