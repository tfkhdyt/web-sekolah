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
 $query = "SELECT * FROM kontak WHERE id='$id' ";
 $sql = mysqli_query($koneksi, $query);
 $data = mysqli_fetch_array($sql);
 ?>
<div class="kotak">
	<center><h3>Ubah Kontak</h3></center>
	<form method="post" action="proses_ubah_kontak.php?id=<?= $id ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Id</td>
				<td><input type="text" name="id" value="<?= $id ?>" readonly></td>
			</tr>
            <tr>
				<td>Email</td>
				<td><input type="email" name="email" value="<?= $data["email"] ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon" value="<?= $data["telepon"] ?>"></td>
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