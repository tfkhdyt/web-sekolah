<?php
include "../koneksi.php";
error_reporting(0);
$judul = $_POST["judul"];
$deskripsi = $_POST["deskripsi"];
$gambar = $_FILES["gambar"]["name"];
$tmp = $_FILES["gambar"]["tmp_name"];
$fotobaru = date("dmYHis") . $gambar;
$path = "../../images/$fotobaru";
if (move_uploaded_file($tmp, $path)) {
  $query = "INSERT INTO about VALUES('', '$judul', '$deskripsi', '$fotobaru')";
  $sql = mysqli_query($koneksi, $query);
  if ($sql) {
    header("location:../index.php?menu=info_sekolah");
  } else {
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='form_simpan_about.php'>Kembali ke Form</a>";
  }
} else {
  echo "Maaf, gambar gagal untuk diupload";
  echo "<br><a href='form_simpan_about.php'>Kembali ke Form</a>";
}
?>
