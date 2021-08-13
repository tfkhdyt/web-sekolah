<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<?php 
		include "../koneksi.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM info_sekolah WHERE id='$id' ";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);
	?>
<div class="kotak">
	<center><h3>Ubah Info Sekolah</h3></center>
	<form method="post" action="proses_ubah_info_sekolah.php?id=<?= $id ?>;" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>id</td>
				<td><input type="text" name="id" value="<?= $id?>" readonly></td>
			</tr>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="<?php echo $data['judul']; ?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td><input type="date" name="tanggal" value="<?php echo $data['tanggal']; ?>"></td>
			</tr>
			<tr>
				<td valign="top">Deskripsi</td>
				<td><textarea name="deskripsi" class="form"><?= $data['deskripsi']; ?></textarea></td>
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