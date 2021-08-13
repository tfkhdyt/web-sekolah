<!DOCTYPE html>
<html>
<head>
	<title>Form Ubah</title>
	<link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>
	<?php 
		include "../koneksi.php";
		$kode = $_GET['kode'];
		$query = "SELECT * FROM user WHERE kode='$kode' ";
		$sql = mysqli_query($koneksi, $query);
		$data = mysqli_fetch_array($sql);
	?>
<div class="kotak">
	<center><h3>Ubah Data User</h3></center>
	<form method="post" action="proses_ubah_user.php?kode=<?= $kode ?>" enctype="multipart/form-data">
		<table cellpadding="8">
			<tr>
				<td>Id</td>
				<td><input type="text" name="kode" value="<?= $kode?>" readonly></td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?=$data['username']?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="<?php echo $data['password']; ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?=$data['nama']?>"></td>
			</tr>
			<tr>
				<td>Level</td>
				<td>
					<?php 
					if ($data['level'] == "Admin") {
						echo"
							<select name=level>
								<option selected value=Admin>Admin</option>
								<option value=Guru>Guru</option>
								<option value=Siswa>Siswa</option>
							</select>
						";
					}else if ($data['level'] == "Guru") {
						echo"
							<select name=level>
								<option value=Admin>Admin</option>
								<option selected value=Guru>Guru</option>
								<option value=Siswa>Siswa</option>
							</select>
						";
					}else if ($data['level'] == "Siswa") {
						echo"
							<select name=level>
								<option value=Admin>Admin</option>
								<option value=Guru>Guru</option>
								<option selected value=Siswa>Siswa</option>
							</select>
						";
					}
					 ?>
					</td>
			</tr>
		</table>
		<hr>
		<input type="submit" value="Ubah" class="tombol_simpan">
		<a href="../index.php?menu=user">
			<input type="button" value="Batal" class="tombol_batal">
		</a>
	</form>
</div>
</body>
</html>