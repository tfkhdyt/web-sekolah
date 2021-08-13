-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2019 at 09:28 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'SMKN 7 Baleendah', '<p><span style=\"color: #4a4a4a; font-family: Roboto, sans-serif; font-size: 14px; line-height: 24px; text-align: justify; background-color: #ffffff;\">SMKN 7 Baleendah adalah sekolah yang unggul dalam prestasi dan mampu bersaing di era globalisasi ini. Menurut Bapak Agus Priyatmono selaku Kepala Sekolah SMKN 7 Baleendah \"Sekolah ini mempunyai misi diantaranya menghasilkan lulusan yang terdidik, terlatih, dan memiliki sikap yang berorientasi pada perkembangan industri dengan strategi pembelajaran yang disiplin, berlatih, berkarya, kreatif, inovatif, dan berakhlakul karimah\". Beliau juga mengemukakan bahwa persaingan dunia kerja bagi lulusan SMK semakin ketat untuk menyiasati SMKN 7 Baleendah benar-benar memiliki program unggulan adapun program yang diminati siswa-siswi diantaranya Jurusan Otomotif, Elektronika, Gambar Bangunan, dan Rekayasa Perangkat Lunak.</span></p>', '171020190416521.jpg'),
(2, 'Jurusan Otomotif', '<p><span style=\"color: #4a4a4a; font-family: Roboto, sans-serif; font-size: 14px; line-height: 24px; text-align: justify; background-color: #ffffff;\">Siap membekali pengetahuan teknik otomotif (Menguasai sejarah dan perkembangan teknik otomotif, dasar otomotif, dan gambaran umum dunia otomotif), perawatan otomotif, dll.</span></p>', '17102019041923otomotif.jpg'),
(3, 'Jurusan Elektronika', '<p><span style=\"color: #4a4a4a; font-family: Roboto, sans-serif; font-size: 14px; line-height: 24px; text-align: justify; background-color: #ffffff;\">Siap membekali pengetahuan teknik elektro seperti teknik tenaga listrik semester, teknik pengolahan isyarat, elektronika dan biomedika dll.</span></p>', '17102019042015elektronika.jpg'),
(4, 'Rekayasa Perangkat Lunak', '<p><span style=\"color: #4a4a4a; font-family: Roboto, sans-serif; font-size: 14px; line-height: 24px; text-align: justify; background-color: #ffffff;\">Siap membekali pengetahuan teknik rekayasa perangkat lunak seperti pembuatan web, merancang komputer dll.</span></p>', '17102019042740rpl.jpg'),
(6, 'Teknik Gambar Bangunan', '<p><span style=\"color: #4a4a4a; font-family: Roboto, sans-serif; font-size: 14px; line-height: 24px; text-align: justify; background-color: #ffffff;\">Siap membekali pengetahuan teknik gambar bangunan seperti merancang rumah, mendesain rumah dll.</span></p>', '171020190433533.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `deskripsi`, `gambar`) VALUES
(4, 'Akmal tercyduck jumatan online', '2019-10-04', 'Pada hari jumat 4/10/2019, seorang siswa bernama Akmal Abdussyukur tercyduck sedang Jumatan Online di suatu warnet', '10102019035645causes-1.jpg'),
(5, 'Pemrov Jabar Sediakan Pendidikan Layanan Khusus di LPKA Kelas II Bandung', '2019-10-18', '<p>Pemerintah Provinsi Jawa Barat melalui Dinas Pendidikan Provinsi Jabar menggelar Pendidikan formal bagi anak usia sekolah yang bermasalah dengan hukum.</p>', '171020190345163.jpg'),
(6, 'Mahad Aly, Mengembalikan Pendidikan Asli Indonesia', '2019-10-14', '<p>Sejak tahun 2016, setelah Menteri Agama RI meresmikan penyelenggaraan sejumlah satuan pendidikan Mahad Aly di beberapa pesantren</p>', '171020190401401571271936.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_guru`
--

CREATE TABLE `data_guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_guru`
--

INSERT INTO `data_guru` (`id`, `nama`, `mapel`, `alamat`, `gambar`) VALUES
(3, 'Kujo Jotaro', 'Baku Hantam', 'Di mana saja', '10102019035635causes-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kelas` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `kelas`, `alamat`, `gambar`) VALUES
(4, 'Yogas', 'XII RPL 2', 'Munjul', '10102019034602pic01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `info_sekolah`
--

CREATE TABLE `info_sekolah` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info_sekolah`
--

INSERT INTO `info_sekolah` (`id`, `judul`, `tanggal`, `deskripsi`, `gambar`) VALUES
(7, 'SMKN 7 Baleendah', '2019-10-10', 'SMKN 7 Baleendah adalah sekolah menengah kejuruan yang berada di Baleendah', '101020190344031.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `email`, `telepon`) VALUES
(1, 'smkn7.baleendah@yahoo.co.id', '022-87799654');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `nama`, `mapel`, `telepon`, `alamat`, `gambar`) VALUES
(1, 'Awaludin Naufal', 'Matematika', '0895338865375', 'Bandung', '10102019043919post-img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `npsn` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `jenjang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`id`, `nama`, `npsn`, `alamat`, `kelurahan`, `kecamatan`, `kabupaten`, `provinsi`, `kodepos`, `status`, `waktu`, `jenjang`) VALUES
(1, 'SMKN 7 Baleendah', '20229784', 'Jalan Siliwangi KM. 15', 'Manggahang', 'Baleendah', 'Bandung', 'Jawa Barat', '40375', 'Negeri', 'Sehari Penuh/5 Hari', 'SMK');

-- --------------------------------------------------------

--
-- Table structure for table `selayang`
--

CREATE TABLE `selayang` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selayang`
--

INSERT INTO `selayang` (`id`, `deskripsi`, `tanggal`, `status`, `nama`) VALUES
(1, '<p><strong>Assalamualaikum, Wr. Wb.</strong><br />Puji dan syukur kami panjatkan kehadirat Allah SWT yang masih melimpahkan berbagai Rahmat dan Nikmat-Nya, terutama nikmat umur, kesehatan serta nikmat kesempatan sehingga kita dapat menjalankan aktifitas kita sehari-hari, khususnya bagi SMK Negeri 7 Baleendah masih dapat beraktifitas memajukan peserta didik untuk mencapai tujuan yang diinginkan.<br />SMK Negeri 7 Baleendah terus berupaya untuk meningkatkan pelayanan informasi terhadap seluruh komponen sekolah baik itu pendidik, siswa, maupun masyarakat. Salah satu upaya yang dilakukan sekolah yaitu memilikinya jaringan internet dan website dengan tujuan:<br />1. Adanya interaktif internal sekolah (Kepala sekolah, pendidik, peserta didik, dan orang tua siswa serta komite sekolah).<br />2. Terjadinya interaktif eksternal sekolah dengan dunia luar.<br />3. Pemanfaatan teknologi dan informasi yang semakin cepat untuk peningkatan pembelajaran.<br />4. Penyampaian informasi dari sekolah ke orang tua siswa dan komite ataupun dengan pihak lain yang terkait.<br />5. Mempercepat penyampaian informasi, saran, masukan tanpa harus bertatap muka diantara warga sekolah dan dunia luar.<br />Akhirnya kami berharap dengan adanya website ini diharapkan agar warga sekolah dapat mengambil manfaat sebesar-besarnya demi memajukan sekolah dan peningkatan mutu pendidikan. Selamat bergabung di website SMK Negeri 7 Baleendah, kritik dan saran yang membangun sangat kami harapkan.</p>', 'Bandung, 5 September 2019 ', 'Kepala Sekolah', 'Taufik Hidayat, S.Pd.,M.Si.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `kode` int(5) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `kelas` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`kode`, `username`, `password`, `nama`, `level`, `kelas`, `alamat`, `gambar`) VALUES
(1, 'Taufik ', '123 ', 'Taufik Hidayat', 'Admin', '', '', ''),
(2, 'Awal', '124', 'Awaludin Naufal', 'Guru', 'Produktif', 'Banjaran', '17102019090508Image-06.jpg'),
(3, 'Yogas ', '125 ', 'Yogas Destariansyah ', 'Siswa', 'XII RPL 2', 'Andir', '17102019081606Image-08.jpg'),
(4, 'akmal', 'akmalun', 'Akmal Abdussyukur', 'Guru', 'Matematika', 'Sindangsari', '17102019083448Image-04.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_guru`
--
ALTER TABLE `data_guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `selayang`
--
ALTER TABLE `selayang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `data_guru`
--
ALTER TABLE `data_guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `info_sekolah`
--
ALTER TABLE `info_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `selayang`
--
ALTER TABLE `selayang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `kode` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
