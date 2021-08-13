<table width="100%" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Mata Pelajaran</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$kode = $_SESSION['kode'];
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE kode = $kode");

			$data = mysqli_fetch_array($sql);
			?>
				<tr>
				<td align="center"><?= $data['nama'] ?></td>
				<td align="center"><?= $data['kelas'] ?></td>
				<td align="center"><?= $data['alamat'] ?></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" height=80></td>
				<td align="center" width="180px"><a href="form_ubah_profil.php?kode=<?= $data['kode']; ?> "><button class="tombol_ubah">Ubah</button></a>
	</table>