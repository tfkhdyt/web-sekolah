<?php
include "../koneksi.php";
error_reporting(0);
$kode = $_GET["kode"];
$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$level = $_POST["level"];
$query = "SELECT * FROM user WHERE kode = '" . $kode . "' ";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$query =
  "UPDATE user SET username = '" .
  $username .
  "', password = '" .
  $password .
  "', nama = '" .
  $nama .
  "', level = '" .
  $level .
  "' WHERE kode = '" .
  $kode .
  "' ";
$sql = mysqli_query($koneksi, $query);

if ($sql) {
  header("location:../index.php?menu=user");
} else {
  echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
  echo "<br><a href='form_ubah_user.php?kode=$kode'>Kembali ke Form</a>";
}
?>
