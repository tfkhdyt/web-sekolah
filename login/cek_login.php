<?php
session_start();
include 'koneksi.php';
$username= $_POST['username'];
$password= $_POST['password'];

$login= mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	if($data["level"]=="Admin"){
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['level'] = "Admin";
		header("location:dashboard/admin/index.php?menu=info_sekolah");
	}else if($data["level"]=="Guru"){
		$_SESSION['kode'] = $data["kode"];
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['kelas'] = $data["kelas"];
		$_SESSION['gambar'] = $data["gambar"];
		$_SESSION['level'] = "Guru";
		header("location:dashboard/guru/index.php?menu=berita");
	}else if($data['level']=="Siswa"){
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['level'] = "Siswa";
		header("location:dashboard/siswa/index.php?menu=berita");
	}else{
		header("location:index.php?pesan=gagal");
	}
}else{
	header("location:index.php?pesan=gagal");
}
?>