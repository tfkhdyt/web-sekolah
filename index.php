<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>SMKN 7 Baleendah</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" href="vendors/popup/magnific-popup.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body data-spy="scroll" data-target="#mainNav" data-offset="70">
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
                        <div class="collapse navbar-collapse offset" style="margin-left: -150px;" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
    						<!-- Brand and toggle get grouped for better mobile display -->
    						<li class="nav-item active nav-link float: right;"><a class="navbar-brand logo_h" href="#home"><div style="color: white;"><img src="img/logo.png" alt="" height="55">&nbsp;&nbsp;SMKN 7 BALEENDAH</div></a></li>
    						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    							<span class="icon-bar"></span>
    						</button>
                        </div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item"><a class="nav-link" href="#selayang">SELAYANG PANDANG</a></li> 
								<li class="nav-item"><a class="nav-link" href="#profil">PROFIL SEKOLAH</a>
								<li class="nav-item"><a class="nav-link" href="#berita">BERITA</a>
								<li class="nav-item"><a class="nav-link" href="#about">ABOUT US</a>
                                <li class="nav-item"><a class="nav-link" href="#contact">CONTACT</a></li>
								<li class="nav-item"><a class="nav-link" href="login/index.php">LOGIN</a></li>
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="home_banner_area" id="home">
            <div class="banner_inner">
				<div class="container">
					<div class="row banner_content">
						<div class="col-lg-9">
							<br><br><h2>Selamat Datang di Web<br />SMKN 7 Baleendah</h2>
							<h5 style="font-weight: 100">Sekolah Menengah Kejuruan yang telah berdiri pada tahun 2007<br>
                            Jurusan:
                            <ul>
                                <li>Teknik Kendaraan Ringan</li>
                                <li>Teknik Sepeda Motor</li>
                                <li>Teknik Audio Video</li>
                                <li>Teknik Gambar Bangunan</li>
                                <li>Rekayasa Perangkat Lunak</li>
                            </ul><br>
                            </p></h5>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================Feature Area =================-->
        <section class="feature_area p_120" id="selayang">
        	<div class="container">
        		<div class="main_title">
                    <?php 
                    include "koneksi.php";
                    $selayang = mysqli_query($koneksi, "SELECT * FROM selayang");
                    $data = mysqli_fetch_array($selayang)
                     ?>
        			<center><h2>Selayang Pandang</h2></center><br>
                    <p style="width: 1000px;">
                        <?= $data['deskripsi'] ?>
                    </p><br>
                    <p style="text-align: right;">
                        <?= $data['tanggal'] ?> <br>
                    </p>
                    <p style="text-align: right;"><?= $data['status'] ?>, <br><br><br></p>
                    <p style="text-align: right;"><u><?= $data['nama'] ?></u></p>
                    

                    
        		</div>
        	</div>
        </section>

        <section class="feature_area p_120" id="profil">
            <div class="container">
                <div class="main_title">
                    <center><h2>Profil Sekolah</h2><br>
                        <?php 
                            include "koneksi.php";
                            $sql = mysqli_query($koneksi, "SELECT * FROM profil_sekolah");

                            $data = mysqli_fetch_array($sql);
                        ?>
                    <table border="0" cellpadding="5">
                        <tr>
                            <td><b>Nama Sekolah</b></td>
                            <td>: <?= $data['nama']?></td>
                        </tr>
                        <tr>
                            <td><b>NPSN</b></td>
                            <td>: <?= $data['npsn']?></td>
                        </tr>
                        <tr>
                            <td><b>Alamat</b></td>
                            <td>: <?= $data['alamat']?></td>
                        </tr>
                        <tr>
                            <td><b>Kelurahan</b></td>
                            <td>: <?= $data['kelurahan']?></td>
                        </tr>
                        <tr>
                            <td><b>Kecamatan</b></td>
                            <td>: <?= $data['kecamatan']?></td>
                        </tr>
                        <tr>
                            <td><b>Kabupaten/Kota</b></td>
                            <td>: <?= $data['kabupaten']?></td>
                        </tr>
                        <tr>
                            <td><b>Provinsi</b></td>
                            <td>: <?= $data['provinsi']?></td>
                        </tr>
                        <tr>
                            <td><b>Kode Pos</b></td>
                            <td>: <?= $data['kodepos']?></td>
                        </tr>
                        <tr>
                            <td><b>Status Sekolah</b></td>
                            <td>: <?= $data['status']?></td>
                        </tr>
                        <tr>
                            <td><b>Waktu Penyelenggaraan</b></td>
                            <td>: <?= $data['waktu']?></td>
                        </tr>
                        <tr>
                            <td><b>Jenjang Pendidikan</b></td>
                            <td>: <?= $data['jenjang']?></td>
                        </tr>
                    </table></center>
                </div>
            </div>
        </section>
        <!--================End Feature Area =================-->
        
        <!--================Price Area =================-->
        <section class="latest_news_area p_120" id="berita">
            <div class="container">
                <div class="main_title2">
                    <center><h2>Berita</h2></center>
                </div>
                <div class="latest_news_inner row">
                    <?php 
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY tanggal DESC");

                        while($data = mysqli_fetch_array($sql)): 
                    ?>
                    <div class="col-lg-4">
                        <div class="l_news_item">
                            <a class="date" href="#"><?= $data['tanggal'] ?></a>
                            <a href="#"><img src="login/dashboard/images/<?= $data['gambar'] ?>" width="320" height="231">
                            <h4><?= $data['judul'] ?></h4></a><p><?= $data['deskripsi'] ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            
            </div>
        </section>
        <!--================End Price Area =================-->
        <section class="feature_area p_120" id="about">
            <div class="container">
                <div class="main_title">
                    <center><h2>About Us</h2></center><br>
                    <?php 
                        include "koneksi.php";
                        $sql = mysqli_query($koneksi, "SELECT * FROM about");
                        $i = 1;
                        while($data = mysqli_fetch_array($sql)): 
                    ?>
                    <div class="row mb-5 align-items-center">
                        <div class="col-lg-7 mb-5 <?php if($i % 2 == 0){echo "order-1 order-lg-2";} ?>" data-aos="fade-up" data-aos-delays="100">
                            <img src="login/dashboard/images/<?= $data['gambar'] ?>" class="img-fluid">
                        </div>
                        <div class="col-lg-4 mr-auto" data-aos="fade-up" data-aos-delays="200">
                            <h2 class="text-black mb-4"><?= $data['judul'] ?></h2>
                            <p class="mb-4"><?= $data['deskripsi'] ?></p>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
                </div>
            </div>
        </section>

        <section class="download_app_area p_120" id="contact">
            <div class="container">
                <div class="app_inner">
                    <h2>Contact</h2>
                    <p>Saran dan masukan Anda sangat berarti untuk Kami<br>Hubungi kami untuk info lebih lanjut!</p>

                    <div class="app_btn_area">
                        <a href="#">
                        <div class="app_btn">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                </div>
                                <?php 
                                    include "koneksi.php";
                                    $sql = mysqli_query($koneksi, "SELECT * FROM kontak");
                                    $data = mysqli_fetch_array($sql);
                                ?>
                                <div class="media-body">
                                    <h4>Email</h4>
                                    <p><?= $data['email'] ?></p>
                                </div>
                            </div>
                        </div></a>
                        <div class="app_btn">
                            <div class="media">
                                <div class="d-flex">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Telepon</h4>
                                    <p><?= $data['telepon']?></p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        <footer class="footer-area p_0">
            <div class="container">
                <div class="row footer-bottom d-flex justify-content-between align-items-center">
                    <p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | SMKN 7 Baleendah
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-4 col-md-4 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
		<!--================ End footer Area  =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="vendors/popup/jquery.magnific-popup.min.js"></script>
        <script src="js/theme.js"></script>
        
    </body>
</html>