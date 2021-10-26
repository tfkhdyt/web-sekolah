<?php
include "../koneksi.php";
error_reporting(0);
$id = $_GET["id"];
$nama = $_POST["nama"];
$npsn = $_POST["npsn"];
$alamat = $_POST["alamat"];
$kelurahan = $_POST["kelurahan"];
$kecamatan = $_POST["kecamatan"];
$kabupaten = $_POST["kabupaten"];
$provinsi = $_POST["provinsi"];
$kodepos = $_POST["kodepos"];
$status = $_POST["status"];
$waktu = $_POST["waktu"];
$jenjang = $_POST["jenjang"];
$query = "SELECT * FROM profil_sekolah WHERE id = '" . $id . "' ";
$sql = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($sql);
$query =
  "UPDATE profil_sekolah SET nama = '" .
  $nama .
  "', npsn = '" .
  $npsn .
  "', alamat = '" .
  $alamat .
  "', kelurahan = '" .
  $kelurahan .
  "', kecamatan = '" .
  $kecamatan .
  "', kabupaten = '" .
  $kabupaten .
  "', provinsi = '" .
  $provinsi .
  "', kodepos = '" .
  $kodepos .
  "', status = '" .
  $status .
  "', waktu = '" .
  $waktu .
  "', jenjang = '" .
  $jenjang .
  "' WHERE id = '" .
  $id .
  "' ";
$sql = mysqli_query($koneksi, $query);

if ($sql) {
  header("location:../index.php?menu=info_sekolah");
} else {
  echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
  echo "<br><a href='form_ubah_profil.php?id=$id'>Kembali ke Form</a>";
}
?>
