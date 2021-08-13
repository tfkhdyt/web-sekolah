<?php  
	include "../koneksi.php";
 error_reporting(0);
	$id = $_GET['id'];
	$judul = $_POST['judul'];
	$deskripsi = $_POST['deskripsi'];
	if(isset($_POST['ubah_foto'])){
		$gambar = $_FILES['gambar']['name'];
		$tmp = $_FILES['gambar']['tmp_name'];
		$fotobaru = date('dmYHis').$gambar;
		$path = "../../images/$fotobaru";

		if(move_uploaded_file($tmp, $path)){
			$query = "SELECT * FROM about WHERE id = '".$id."' ";
			$sql = mysqli_query($koneksi, $query);
			$data = mysqli_fetch_array($sql);

			if(is_file("../images/".$data['gambar']))
				unlink("../images/".$data['gambar']);
			

			$query = "UPDATE about SET judul = '".$judul."', deskripsi = '".$deskripsi."', gambar = '".$fotobaru."' WHERE id = '".$id."'";
			$sql = mysqli_query($koneksi, $query);

			if($sql){
				header("location:../index.php?menu=info_sekolah");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a href='form_ubah_about.php?id=$id'>Kembali ke Form</a>";
			}
		}else{
			echo "Maaf, gambar gagal untuk diupload";
			echo "<br><a href='form_ubah_about.php?id=$id'>Kembali ke Form</a>";
		}
	}else{
		$query = "UPDATE about SET judul = '".$judul."', deskripsi = '".$deskripsi."' WHERE id = '".$id."'";
		$sql = mysqli_query($koneksi, $query);

		if($sql){
				header("location:../index.php?menu=info_sekolah");
			}else{
				echo "Maaf, terjadi kesalahan saat mencoba untuk menyimpan data ke database";
				echo "<br><a href='form_ubah_about.php?id=$id'>Kembali ke Form</a>";
			}

	}
?>