<a href="tambah/form_simpan_berita.php"><button class="tombol_tambah">Tambah Data</button></a>
<table width="100%" cellspacing="0">
		<tr>
			<th width="30">Id</th>
			<th width="200">Judul</th>
			<th width="150">Tanggal</th>
			<th>Deskripsi</th>
			<th>Gambar</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<!-- <td align="center"><img src="images/<?= $data['foto'] ?>" width=100></td> -->
				<td align="center"><?= $data['id'] ?></td>
				<td align="center"><?= $data['judul'] ?></td>
				<td align="center"><?= $data['tanggal'] ?></td>
				<td align="center"><?= $data['deskripsi'] ?></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" height=80></td>
				<td align="center" width="180px"><a href="ubah/form_ubah_berita.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a>&nbsp;<a href="hapus/proses_hapus_berita.php?id=<?= $data['id']; ?> "><button class="tombol_hapus">Hapus</button></a></td>
			<?php endwhile; ?>
	</table>