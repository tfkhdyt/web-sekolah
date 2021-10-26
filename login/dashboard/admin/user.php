<a href="tambah/form_simpan_user.php"><button class="tombol_tambah">Tambah Data</button></a>
<table width="100%" cellspacing="0">
		<tr>
			<th width="30">Id</th>
			<th width="200">Username</th>
			<th>Nama</th>
			<th>Level</th>
			<th colspan="2">Aksi</th>
		</tr>
		<?php
  include "koneksi.php";
  $sql = mysqli_query($koneksi, "SELECT * FROM user");

  while ($data = mysqli_fetch_array($sql)): ?>
				<tr>
				<td align="center"><?= $data["kode"] ?></td>
				<td align="center"><?= $data["username"] ?></td>
				<td align="center"><?= $data["nama"] ?></td>
				<td align="center"><?= $data["level"] ?></td>
				<td align="center" width="180px"><a href="ubah/form_ubah_user.php?kode=<?= $data[
      "kode"
    ] ?> "><button class="tombol_ubah">Ubah</button></a>&nbsp;<a href="hapus/proses_hapus_user.php?kode=<?= $data[
   "kode"
 ] ?> "><button class="tombol_hapus">Hapus</button></a></td>
			<?php endwhile;
  ?>
	</table>