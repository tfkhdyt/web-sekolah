<?php
include "../koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama"];
$level = $_POST["level"];
$query = "INSERT INTO user VALUES ('', '$username', '$password', '$nama', '$level', '', '', '')";
$sql = mysqli_query($koneksi, $query);
if ($sql) {
  header("location:../index.php?menu=user");
} else {
  echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
  echo "<br><a href='form_simpan_user.php'>Kembali ke Form</a>";
}
?>
