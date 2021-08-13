<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		session_start();
		if($_SESSION['level']==""){
			header("location:../../index.php?pesan=alert");
		}
	?>
	<center><h1>Selamat datang <b><?php echo $_SESSION['level'];?><br><?php echo $_SESSION['nama'];?></b></h1></center>
	<div id="navbar">
		<div class="nav">
			<a href="index.php?menu=data_siswa">Data Siswa</a>
			<a href="index.php?menu=data_guru">Data Guru</a>
			<a href="index.php?menu=berita">Berita</a>
			<a href="logout.php" style="background-color: #e37a39;width: 90px;height: 20px;margin-left: 815px;">Logout</a>
		</div>
	</div>
	<?php
		if (isset($_GET["menu"])) {
			if ($_GET["menu"] == "data_siswa") {
				include "data_siswa.php";
			}else if ($_GET["menu"] == "data_guru") {
				include "data_guru.php";
			}else if ($_GET["menu"] == "berita") {
				include "berita.php";
			}
		}
		
	?>

</body>
</html>