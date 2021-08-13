<a href="tambah/form_simpan_data_siswa.php"><button class="tombol_tambah">Tambah Data</button></a>
<table width="100%" cellspacing="0">
		<tr>
			<th width="30">Id</th>
			<th width="200">Nama</th>
			<th width="150">Kelas</th>
			<th width="480">Alamat</th>
			<th>Foto</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE level = 'Siswa'");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<!-- <td align="center"><img src="images/<?= $data['foto'] ?>" width=100></td> -->
				<td align="center"><?= $data['kode'] ?></td>
				<td align="center"><?= $data['nama'] ?></td>
				<td align="center"><?= $data['kelas'] ?></td>
				<td align="center"><?= $data['alamat'] ?></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" height=80></td>
				<td align="center" width="180px"><a href="ubah/form_ubah_data_siswa.php?kode=<?= $data['kode']; ?> "><button class="tombol_ubah">Ubah</button></a>&nbsp;<a href="hapus/proses_hapus_data_siswa.php?kode=<?= $data['kode']; ?> "><button class="tombol_hapus">Hapus</button></a></td>
			<?php endwhile; ?>
	</table>