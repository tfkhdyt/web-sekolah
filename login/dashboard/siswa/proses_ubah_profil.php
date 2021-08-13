<?php  
	include "koneksi.php";

	$id = $_GET['id'];
	$nama = $_POST['nama'];
	$mapel = $_POST['mapel'];
	$telepon = $_POST['telepon'];
	$alamat = $_POST['alamat'];
	if(isset($_POST['ubah_foto'])){
		$gambar = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];
		$fotobaru = date('dmYHis').$gambar;
		$path = "images/$fotobaru";

		if(move_uploaded_file($tmp, $path)){
			$query = "SELECT * FROM profil WHERE id = '".$id."' ";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("images/".$data['gambar']))
				unlink("images/".$data['gambar']);
			

			$query = "UPDATE profil SET nama = ' ".$nama." ', mapel = '".$mapel."' , telepon = '".$telepon."', alamat = '".$alamat."', gambar = '".$fotobaru."' WHERE id = '".$id."' ";
			$sql = mysqli_query($koneksi, $query);

			if($sql){
				header("location:index.php?menu=profil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a href='form_ubah_profil.php?id=$id'>Kembali ke Form</a>";
			}
		}else{
			echo "Maaf, gambar gagal untuk diupload";
			echo "<br><a href='form_ubah_profil.php?id=$id'>Kembali ke Form</a>";
		}
	}else{
		$query = "UPDATE profil SET nama = ' ".$nama." ', mapel = '".$mapel."' , telepon = '".$telepon."',  alamat = '".$alamat."' WHERE id = '".$id."' ";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
				header("location:index.php?menu=profil");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a href='form_ubah_info_sekolah.php?id=$id'>Kembali ke Form</a>";
			}

	}
?>