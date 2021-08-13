<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php 
		include "koneksi.php";
		$id = $_GET['id'];
		$query = "SELECT * FROM profil WHERE id='$id' ";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);
	?>
<div class="kotak">
	<center><h3>Ubah Profil</h3></center>
	<form method="post" action="proses_ubah_profil.php?id=<?= $id ?>;" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?=$data['nama']?>"></td>
			</tr>
			<tr>
				<td>Mapel</td>
				<td><input type="text" name="mapel" value="<?php echo $data['mapel']; ?>"></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon" value="<?php echo $data['telepon']; ?>"></td>
			</tr>
			<tr>
				<td valign="top">Alamat</td>
				<td><textarea name="alamat" class="form"><?= $data['alamat']; ?></textarea></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td>
					<input type="checkbox" name="ubah_foto" value="true">Ceklis jika ingin mengubah foto <br>
					<input type="file" name="gambar">
				</td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Ubah" class="tombol_simpan">
		<a href="index.php?menu=profil">
			<input type="button" value="Batal" class="tombol_batal">
		</a>
	</form>
</div>
</body>
</html>