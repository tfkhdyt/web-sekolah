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
				<td valign="top"><?= $data['deskripsi'] ?></td>
				<td valign="top"><?= $data['tanggal'] ?></td>
				<td valign="top"><?= $data['status'] ?></td>
				<td valign="top"><?= $data['nama'] ?></td>
				<td valign="top" align="center" width="180px"><a href="ubah/form_ubah_selayang.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a></td>
			<?php endwhile; ?>
</table>

<p style="font-size: 15pt; margin: 10px 0 10px 480px;">Profil Sekolah</p>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM selayang");

			$data = mysqli_fetch_array($sql);
		?>
<center><table cellspacing="0" cellpadding="5" border="1" bordercolor="grey">
		<tr>
			<td width="180">Nama Sekolah</th>
			<td width="180"><?= $data['nama']?></td>
		</tr>
		<tr>
			<td>NPSN</th>
			<td><?= $data['npsn']?></td>
		</tr>
		<tr>
			<td>Alamat</th>
			<td>Jalan Siliwangi KM. 15</td>
		</tr>
		<tr>
			<td>Kelurahan</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Kecamatan</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Kabupaten/Kota</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Provinsi</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Kode Pos</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Status Sekolah</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Waktu Penyelenggaraan</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
		<tr>
			<td>Jenjang Pendidikan</th>
			<td>SMKN 7 Baleendah</td>
		</tr>
			
		
</table></center>