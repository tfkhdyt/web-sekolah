<p style="font-size: 15pt; margin: 10px 0 10px 0;">Selayang Pandang</p>
<table width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<th width="50">Id</th>
			<th width="400">Deskripsi</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th width="150">Nama</th>
			<th colspan="2" width="100">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM selayang");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<td align="center" valign="top"><?= $data['id'] ?></td>
				<td valign="top"><font size=1><?= $data['deskripsi'] ?></font></td>
				<td valign="top"><?= $data['tanggal'] ?></td>
				<td valign="top"><?= $data['status'] ?></td>
				<td valign="top"><?= $data['nama'] ?></td>
				<td valign="top" align="center" width="180px"><a href="ubah/form_ubah_selayang.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a></td>
			<?php endwhile; ?>
</table>
<p style="font-size: 15pt; margin: 10px 0 10px 0;">About</p>
<a href="tambah/form_simpan_about.php"><button class="tombol_tambah">Tambah Data</button></a>
<table width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<th width="50">Id</th>
			<th width="200">Judul</th>
			<th width="500">Deskripsi</th>
			<th>Gambar</th>
			<th colspan="2" width="100">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM about");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<td align="center" valign="top"><?= $data['id'] ?></td>
				<td align="center" valign="top"><?= $data['judul'] ?></td>
				<td valign="top"><font size=3><?= $data['deskripsi'] ?></font></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" width="300"></td>
				<td valign="top" align="center" width="180px"><a href="ubah/form_ubah_about.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a>&nbsp;<a href="hapus/proses_hapus_about.php?id=<?= $data['id']; ?> "><button class="tombol_hapus">Hapus</button></a></td>
			<?php endwhile; ?>
</table>
<p style="font-size: 15pt; margin: 10px 0 5px 260px;">Profil Sekolah</p><br>
	<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM profil_sekolah");

			$data = mysqli_fetch_array($sql);
	?>
  	<a href="ubah/form_ubah_profil.php?id=<?= $data['id'] ?> "><button class="tombol_ubah" style="margin: -50px 0 10px 260px;">Ubah</button></a>
		
<center><table cellspacing="0" cellpadding="5" border="1" bordercolor="grey">
		<tr>
			<th width="400" align="center">Nama Sekolah</th>
			<td width="400" align="center"><?= $data['nama']?></td>
		</tr>
		<tr>
			<th align="center">NPSN</th>
			<td align="center"><?= $data['npsn']?></td>
		</tr>
		<tr>
			<th align="center">Alamat</th>
			<td align="center"><?= $data['alamat']?></td>
		</tr>
		<tr>
			<th align="center">Kelurahan</th>
			<td align="center"><?= $data['kelurahan']?></td>
		</tr>
		<tr>
			<th align="center">Kecamatan</th>
			<td align="center"><?= $data['kecamatan']?></td>
		</tr>
		<tr>
			<th align="center">Kabupaten/Kota</th>
			<td align="center"><?= $data['kabupaten']?></td>
		</tr>
		<tr>
			<th align="center">Provinsi</th>
			<td align="center"><?= $data['provinsi']?></td>
		</tr>
		<tr>
			<th align="center">Kode Pos</th>
			<td align="center"><?= $data['kodepos']?></td>
		</tr>
		<tr>
			<th align="center">Status Sekolah</th>
			<td align="center"><?= $data['status']?></td>
		</tr>
		<tr>
			<th align="center">Waktu Penyelenggaraan</th>
			<td align="center"><?= $data['waktu']?></td>
		</tr>
		<tr>
			<th align="center">Jenjang Pendidikan</th>
			<td align="center"><?= $data['jenjang']?></td>
		</tr>
</table></center>
<p style="font-size: 15pt; margin: 10px 0 10px 0;">Contact</p>
<table width="100%" cellspacing="0" cellpadding="5">
		<tr>
			<th width="50">Id</th>
			<th>Email</th>
			<th>Telepon</th>
			<th colspan="2" width="100">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM kontak");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<td align="center"><?= $data['id'] ?></td>
				<td><?= $data['email'] ?></td>
				<td><?= $data['telepon'] ?></td>
				<td align="center" width="180px"><a href="ubah/form_ubah_kontak.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a></td>
			<?php endwhile; ?>
</table>
