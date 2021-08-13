<?php 
	include "../koneksi.php";
	$id = $_GET['id'];
	$query = "SELECT * FROM berita WHERE id = '".$id."' ";
	$sql = mysqli_query($koneksi, $query);
	$data = mysqli_fetch_array($sql);
	if(is_file("../../images/".$data['gambar']))
		unlink("../../images/".$data['gambar']);
	$query2 = "DELETE FROM berita WHERE id = '".$id."' ";
	$sql2 = mysqli_query($koneksi, $query2);
	if($sql2){
		header("location:../index.php?menu=berita");
	}else{
		echo "Data gagal dihapus. <a href='../index.php?menu=berita'>Kembali</a>";
	}
 ?>