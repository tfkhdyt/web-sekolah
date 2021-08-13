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
		$query = "SELECT * FROM profil_sekolah WHERE id='$id' ";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);
	?>
<div class="kotak">
	<center><h3>Ubah Data User</h3></center>
	<form method="post" action="proses_ubah_profil.php?id=<?= $id ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?=$data['nama']?>"></td>
			</tr>
			<tr>
				<td>NPSN</td>
				<td><input type="text" name="npsn" value="<?php echo $data['npsn']; ?>"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?=$data['alamat']?>"></td>
			</tr>
			<tr>
				<td>Kelurahan</td>
				<td><input type="text" name="kelurahan" value="<?=$data['kelurahan']?>"></td>
			</tr>
			<tr>
				<td>Kecamatan</td>
				<td><input type="text" name="kecamatan" value="<?=$data['kecamatan']?>"></td>
			</tr>
			<tr>
				<td>Kabupaten</td>
				<td><input type="text" name="kabupaten" value="<?=$data['kabupaten']?>"></td>
			</tr>
			<tr>
				<td>Provinsi</td>
				<td><input type="text" name="provinsi" value="<?=$data['provinsi']?>"></td>
			</tr>
			<tr>
				<td>Kode Pos</td>
				<td><input type="text" name="kodepos" value="<?=$data['kodepos']?>"></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?=$data['status']?>"></td>
			</tr>
			<tr>
				<td>Waktu</td>
				<td><input type="text" name="waktu" value="<?=$data['waktu']?>"></td>
			</tr>
			<tr>
				<td>Jenjang</td>
				<td><input type="text" name="jenjang" value="<?=$data['jenjang']?>"></td>
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