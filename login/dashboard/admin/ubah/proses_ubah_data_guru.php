<?php
include "../koneksi.php";

$kode = $_GET["kode"];
$nama = $_POST["nama"];
$level = "Guru";
$kelas = $_POST["kelas"];
$alamat = $_POST["alamat"];
if (isset($_POST["ubah_foto"])) {
  $gambar = $_FILES["gambar"]["name"];
  $tmp = $_FILES["gambar"]["tmp_name"];
  $fotobaru = date("dmYHis") . $gambar;
  $path = "../../images/$fotobaru";

  if (move_uploaded_file($tmp, $path)) {
    $query = "SELECT * FROM user WHERE kode = '" . $kode . "' ";
    $sql = mysqli_query($koneksi, $query);
    $data = mysqli_fetch_array($sql);

    if (is_file("../images/" . $data["gambar"])) {
      unlink("../images/" . $data["gambar"]);
    }

    $query =
      "UPDATE user SET nama = '" .
      $nama .
      "', kelas = '" .
      $kelas .
      "', alamat = '" .
      $alamat .
      "', gambar = '" .
      $fotobaru .
      "' WHERE kode = '" .
      $kode .
      "' ";
    $sql = mysqli_query($koneksi, $query);

    if ($sql) {
      header("location:../index.php?menu=data_guru");
    } else {
      echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
      echo "<br><a href='form_ubah_data_guru.php?kode=$kode'>Kembali ke Form</a>";
    }
  } else {
    echo "Maaf, gambar gagal untuk diupload";
    echo "<br><a href='form_ubah_data_guru.php?kode=$kode'>Kembali ke Form</a>";
  }
} else {
  $query =
    "UPDATE user SET nama = '" .
    $nama .
    "', kelas = '" .
    $kelas .
    "', alamat = '" .
    $alamat .
    "' WHERE kode = '" .
    $kode .
    "' ";
  $sql = mysqli_query($koneksi, $query);

  if ($sql) {
    header("location:../index.php?menu=data_guru");
  } else {
    echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
    echo "<br><a href='form_ubah_info_sekolah.php?kode=$kode'>Kembali ke Form</a>";
  }
}
?>
