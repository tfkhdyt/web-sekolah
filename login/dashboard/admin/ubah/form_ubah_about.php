<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
	<script src="../../../../js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      tinymce.init({selector: 'textarea'});
    </script>
</head>
<body>
	<?php 
		include "../koneksi.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM about WHERE id='$id' ";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);
	?>
<div class="kotak2">
	<center><h3>Ubah Berita</h3></center>
	<form method="post" action="proses_ubah_about.php?id=<?= $id ?>;" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>id</td>
				<td><input type="text" size="2" name="id" value="<?= $id?>" readonly></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" size="67" name="judul" value="<?php echo $data['judul']; ?>"></td>
			</tr>
			<tr>
				<td valign="top">Deskripsi</td>
				<td><textarea name="deskripsi" rows="20" style="resize: vertical; width: 500px;"><?= $data['deskripsi']; ?></textarea></td>
			</tr>
			<tr>
				<td>Gambar</td>
				<td>
					<input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto <br>
					<input type="file" name="gambar">
				</td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Ubah" class="tombol_simpan">
		<a href="../index.php?menu=info_sekolah">
			<input type="button" value="Batal" class="tombol_batal">
		</a>
	</form>
</div>
</body>
</html>