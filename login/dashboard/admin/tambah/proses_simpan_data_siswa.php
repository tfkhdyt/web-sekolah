<?php
include "../koneksi.php";
error_reporting(0);
$nama = $_POST["nama"];
$level = "Siswa";
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];
$gambar = $_FILES["gambar"]["name"];
$tmp = $_FILES["gambar"]["tmp_name"];
$fotobaru = date("dmYHis") . $gambar;
$path = "../../images/$fotobaru";
if (move_uploaded_file($tmp, $path)) {
  $query = "INSERT INTO user VALUES('', '$nama', '$nama', '$nama', '$level', '$kelas','$alamat', '$fotobaru')";
  $sql = mysqli_query($koneksi, $query);
  if ($sql) {
    header("location:../index.php?menu=data_siswa");
  } else {
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='form_simpan_data_siswa.php'>Kembali ke Form</a>";
  }
} else {
  echo "Maaf, gambar gagal untuk diupload";
  echo "<br><a href='form_simpan_data_siswa.php'>Kembali ke Form</a>";
}
?>
