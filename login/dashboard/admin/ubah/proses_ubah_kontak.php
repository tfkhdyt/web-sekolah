<?php  
	include "../koneksi.php";
 error_reporting(0);
	$id = $_GET['id'];
	$email = $_POST['email'];
	$telepon = $_POST['telepon'];
	$query = "SELECT * FROM kontak WHERE id = '".$id."' ";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
	$query = "UPDATE kontak SET email = '".$email."', telepon = '".$telepon."' WHERE id = '".$id."' ";
	$sql = mysqli_query($koneksi, $query);

	if($sql){
		header("location:../index.php?menu=info_sekolah");
	}else{
		echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
		echo "<br><a href='form_ubah_kontak.php?id=$id'>Kembali ke Form</a>";
	}
?>