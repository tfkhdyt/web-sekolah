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
 $id = $_GET["id"];
 $query = "SELECT * FROM selayang WHERE id='$id' ";
 $sql = mysqli_query($koneksi, $query);
 $data = mysqli_fetch_array($sql);
 ?>
<div class="kotak2">
	<center><h3>Ubah Selayang Pandang</h3></center>
	<form method="post" action="proses_ubah_selayang.php?id=<?= $id ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?= $id ?>" readonly></td>
			</tr>
            <tr>
				<td valign="top">Deskripsi</td>
				<td><textarea name="deskripsi" rows="20" style="resize: vertical; width: 500px;"><?= $data[
      "deskripsi"
    ] ?></textarea></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="text" name="tanggal" value="<?= $data["tanggal"] ?>"></td>
			</tr><tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?= $data["status"] ?>"></td>
			</tr><tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?= $data["nama"] ?>"></td>
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