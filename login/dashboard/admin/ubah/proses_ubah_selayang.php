<?php  
	include "../koneksi.php";
 error_reporting(0);
	$id = $_GET['id'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal = $_POST['tanggal'];
	$status = $_POST['status'];
	$nama = $_POST['nama'];
	$query = "SELECT * FROM selayang WHERE id = '".$id."' ";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
	$query = "UPDATE selayang SET deskripsi = '".$deskripsi."', tanggal = '".$tanggal."', status = '".$status."', nama = '".$nama."' WHERE id = '".$id."' ";
	$sql = mysqli_query($koneksi, $query);

	if($sql){
		header("location:../index.php?menu=info_sekolah");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
		echo "<br><a href='form_ubah_user.php?id=$id'>Kembali ke Form</a>";
	}
?>