<?php
include "../koneksi.php";
$kode = $_GET["kode"];
$query = "SELECT * FROM user WHERE kode = '" . $kode . "' ";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
if (is_file("../../images/" . $data["gambar"])) {
  unlink("../../images/" . $data["gambar"]);
}
$query2 = "DELETE FROM user WHERE kode = '" . $kode . "' ";
$sql2 = mysqli_query($koneksi, $query2);
if ($sql2) {
  header("location:../index.php?menu=data_guru");
} else {
  echo "Data gagal dihapus. <a href='../index.php?menu=data_guru'>Kembali</a>";
}
?>
