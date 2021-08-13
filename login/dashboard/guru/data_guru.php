<table width="100%" cellspacing="0">
		<tr>
			<th width="30">Id</th>
			<th width="200">Nama</th>
			<th width="150">Mata Pelajaran</th>
			<th>Alamat</th>
			<th>Foto</th>
		</tr>
		<?php 
			include "koneksi.php";
			$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE level = 'Guru'");

			while($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<!-- <td align="center"><img src="images/<?= $data['foto'] ?>" width=100></td> -->
				<td align="center"><?= $data['kode'] ?></td>
				<td align="center"><?= $data['nama'] ?></td>
				<td align="center"><?= $data['kelas'] ?></td>
				<td align="center"><?= $data['alamat'] ?></td>
				<td align="center"><img src="../images/<?= $data['gambar'] ?>" height=80></td>
			<?php endwhile; ?>
	</table>