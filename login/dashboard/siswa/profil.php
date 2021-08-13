<a href="logout.php" align="right"><div class="logout"><button class="tombol_logout">Logout</button></div></a><br><br>
	<table width="100%" cellspacing="0">
		<tr>
			<th>Nama</th>
			<th>Mata Pelajaran</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Foto</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM profil");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<td align="center"><?= $data['nama'] ?></td>
				<td align="center"><?= $data['mapel'] ?></td>
				<td align="center"><?= $data['telepon'] ?></td>
				<td align="center"><?= $data['alamat'] ?></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" height=80></td>
				<td align="center" width="180px"><a href="form_ubah_profil.php?id=<?= $data['id']; ?> "><button class="tombol_ubah">Ubah</button></a>
			<?php endwhile; ?>
	</table>