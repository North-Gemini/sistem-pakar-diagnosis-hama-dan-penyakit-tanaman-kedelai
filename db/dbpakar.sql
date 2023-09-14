-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 05:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpakar`
--

-- --------------------------------------------------------

--
-- Table structure for table `basispengetahuan`
--

CREATE TABLE `basispengetahuan` (
  `namapenyakit` varchar(100) NOT NULL,
  `gejala` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `basispengetahuan`
--

INSERT INTO `basispengetahuan` (`namapenyakit`, `gejala`) VALUES
('Penyakit Hati', 'Gejala Hati'),
('Penyakit Rungkad', 'Gejala Rungkad'),
('Lalat Bibit Kacang (Ophiomyia Phaseoli)', 'Batang layu'),
('Lalat Bibit Kacang (Ophiomyia Phaseoli)', 'Bintik putih pada daun pertama atau kedua'),
('Lalat Batang (Melanagromyza Sojae)', 'Terdapat lubang gerekan larva'),
('Lalat Batang (Melanagromyza Sojae)', 'Bintik-bintik pada daun muda'),
('Lalat Pucuk (Melanagromyza dolicostigma)', 'Seluruh helai layu'),
('Kutu Daun Aphis (Aphis glycines)', 'Berwarna kekuningan'),
('Kutu Daun Aphis (Aphis glycines)', 'Mengalami keriput'),
('Kutu Bemisia (Bemisia tabaci Gennadius)', 'Tampak hitam'),
('Kutu Bemisia (Bemisia tabaci Gennadius)', 'Mengalami penguningan pada urat daun'),
('Kutu Bemisia (Bemisia tabaci Gennadius)', 'Urat daun cekung'),
('Kutu Bemisia (Bemisia tabaci Gennadius)', 'Urat daun mengkerut'),
('Kutu Bemisia (Bemisia tabaci Gennadius)', 'Kerdil/tidak keluar polong'),
('Tungau Merah (Tetranychus cinnabarius Boisduval)', 'Berwarna keputih-putihan'),
('Tungau Merah (Tetranychus cinnabarius Boisduval)', 'Berwarna keperak-perakan'),
('Tungau Merah (Tetranychus cinnabarius Boisduval)', 'Mengalami Pengeringan'),
('Kumbang kedelai (Phaedonia inclusa Stall)', 'Dua potongan melingkar'),
('Kumbang kedelai (Phaedonia inclusa Stall)', 'Layu dan kering'),
('Ulat Grayak', 'Berwarna keputih-putihan'),
('Ulat Grayak', 'Daun habis tersisa tulang daun'),
('Ulat Grayak', 'Kerusakan pada polong muda'),
('Ulat Jengkal (Chrysodeixis chalcites)', 'Kerusakan batang'),
('Ulat Jengkal (Chrysodeixis chalcites)', 'Mengalami pembusukan'),
('Ulat Jengkal (Chrysodeixis chalcites)', 'Berwarna kekuningan'),
('Ulat Jengkal (Chrysodeixis chalcites)', 'Daun berlubang'),
('Ulat Jengkal (Chrysodeixis chalcites)', 'Kerusakan pada dinding polong'),
('Ulat Penggulung daun (Lamprosema Indicata)', 'Kerusakan batang'),
('Ulat Penggulung daun (Lamprosema Indicata)', 'Daun menggulung'),
('Ulat Penggulung daun (Lamprosema Indicata)', 'Daun berlubang'),
('Ulat Pemakan Polong (Helicoverpa Haliotis)', 'Daun berlubang'),
('Ulat Pemakan Polong (Helicoverpa Haliotis)', 'Berlubang tak beraturan'),
('Penghisap Polong (Riptortus linearis fabricius)', 'Berwarna kekuningan'),
('Penghisap Polong (Riptortus linearis fabricius)', 'Daun keriting'),
('Penghisap Polong (Riptortus linearis fabricius)', 'Mengalami keriput'),
('Penghisap Polong (Riptortus linearis fabricius)', 'Mengalami keriput'),
('Penghisap Polong (Riptortus linearis fabricius)', 'Berwarna kecoklatan'),
('Kepik Hijau (Nezara viridula linnaeus)', 'Mengalami keriput'),
('Kepik Hijau (Nezara viridula linnaeus)', 'Bercak-bercak kuning'),
('Kepik Hijau (Nezara viridula linnaeus)', 'Terdapat cekungan'),
('Kepik Hijau (Nezara viridula linnaeus)', 'Biji Berlubang'),
('Kepik Hijau (Nezara viridula linnaeus)', 'Bintik-bintik pada biji'),
('Penggerek polong kedelai (Etiella Zinckanella treit)', 'Batang layu'),
('Penggerek polong kedelai (Etiella Zinckanella treit)', 'Daun berlubang'),
('Penggerek polong kedelai (Etiella Zinckanella treit)', 'Terdapat gesekan bekas larva'),
('Penggerek polong kedelai (Etiella Zinckanella treit)', 'Biji rusak bekas gesekan larva'),
('Karat (Phakopsora pachyrhizi)', 'Berwarna kekuningan'),
('Karat (Phakopsora pachyrhizi)', 'Bercak-bercak kuning'),
('Karat (Phakopsora pachyrhizi)', 'Terdapat spora di belakang daun'),
('Penyakit Pustul bakteri (Xanthomonas axonopodis pv glycines)', 'Bercak warna coklat'),
('Penyakit Pustul bakteri (Xanthomonas axonopodis pv glycines)', 'Jaringan tepi bercak di bawah permukaan daun'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Bercak warna coklat atau hitam'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Mengalami Pengeringan'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Bercak warna coklat'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Bercak warna coklat'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Bercak warna hitam'),
('Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Polong mengering'),
('Penyakit Downy Mildey (Peronospora Manshurica)', 'Bercak-bercak kuning'),
('Penyakit Downy Mildey (Peronospora Manshurica)', 'Berwarna kuning kecoklatan'),
('Penyakit Downy Mildey (Peronospora Manshurica)', 'Terdapat tepung daun'),
('Target Spot (Corynespora)', 'Berwarna keputih-putihan'),
('Target Spot (Corynespora)', 'Bercak warna coklat'),
('Target Spot (Corynespora)', 'Berwarna abu-abu'),
('Target Spot (Corynespora)', 'Bercak warna coklat'),
('Target Spot (Corynespora)', 'Hitam pada permukaan polong'),
('Rebah Kecambah, Busuk Daun dan Polong (Rhizoctonia solan)', 'Pembusukan di dekat akar'),
('Rebah Kecambah, Busuk Daun dan Polong (Rhizoctonia solan)', 'Mengalami pembusukan'),
('Rebah Kecambah, Busuk Daun dan Polong (Rhizoctonia solan)', 'Mengalami pembusukan'),
('Rebah Kecambah, Busuk Daun dan Polong (Rhizoctonia solan)', 'Mengalami pembusukan'),
('Penyakit Hawar batang (Scleroctium rolfsi)', 'Bercak warna merah'),
('Penyakit Hawar batang (Scleroctium rolfsi)', 'Mengalami kerapuhan'),
('Penyakit Hawar batang (Scleroctium rolfsi)', 'Mengalami penyusutan'),
('Penyakit Hawar, Bercak daun dan Bercak biji ungu (cercospora kikuchii)', 'Berwarna ungu'),
('Penyakit Hawar, Bercak daun dan Bercak biji ungu (cercospora kikuchii)', 'Biji kasar'),
('Penyakit Hawar, Bercak daun dan Bercak biji ungu (cercospora kikuchii)', 'Biji kaku'),
('Penyakit Virus Mosaik', 'Bercak-bercak kuning'),
('Penyakit Virus Mosaik', 'Bercak warna kuning'),
('Penyakit Virus Mosaik', 'Berwarna kemerah-merahan'),
('Hama Baru', 'Gejala Barru');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `idgejala` varchar(10) NOT NULL,
  `gejala` varchar(1000) NOT NULL,
  `daerah` varchar(10) NOT NULL,
  `jenistanaman` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`idgejala`, `gejala`, `daerah`, `jenistanaman`) VALUES
('G001', 'Pembusukan di dekat akar', 'Akar', 'Kedelai'),
('G002', 'Batang layu', 'Batang', 'Kedelai'),
('G003', 'Terdapat lubang gerekan larva', 'Batang', 'Kedelai'),
('G004', 'Dua potongan melingkar', 'Batang', 'Kedelai'),
('G005', 'Kerusakan batang', 'Batang', 'Kedelai'),
('G006', 'Mengalami pembusukan', 'Batang', 'Kedelai'),
('G007', 'Bercak warna coklat atau hitam', 'Batang', 'Kedelai'),
('G008', 'Bercak warna merah', 'Batang', 'Kedelai'),
('G009', 'Mengalami kerapuhan', 'Batang', 'Kedelai'),
('G010', 'Mengalami penyusutan', 'Batang', 'Kedelai'),
('G011', 'Bintik putih pada daun pertama atau kedua', 'Daun', 'Kedelai'),
('G012', 'Bintik-bintik pada daun muda', 'Daun', 'Kedelai'),
('G013', 'Seluruh helai layu', 'Daun', 'Kedelai'),
('G014', 'Berwarna kekuningan', 'Daun', 'Kedelai'),
('G015', 'Mengalami keriput', 'Daun', 'Kedelai'),
('G016', 'Tampak hitam', 'Daun', 'Kedelai'),
('G017', 'Mengalami penguningan pada urat daun', 'Daun', 'Kedelai'),
('G018', 'Urat daun cekung', 'Daun', 'Kedelai'),
('G019', 'Urat daun mengkerut', 'Daun', 'Kedelai'),
('G020', 'Berwarna keputih-putihan', 'Daun', 'Kedelai'),
('G021', 'Berwarna keperak-perakan', 'Daun', 'Kedelai'),
('G022', 'Mengalami Pengeringan', 'Daun', 'Kedelai'),
('G023', 'Layu dan kering', 'Daun', 'Kedelai'),
('G024', 'Daun habis tersisa tulang daun', 'Daun', 'Kedelai'),
('G025', 'Daun menggulung', 'Daun', 'Kedelai'),
('G026', 'Daun berlubang', 'Daun', 'Kedelai'),
('G027', 'Daun keriting', 'Daun', 'Kedelai'),
('G028', 'Bercak-bercak kuning', 'Daun', 'Kedelai'),
('G029', 'Berwarna kuning kecoklatan', 'Daun', 'Kedelai'),
('G030', 'Terdapat spora di belakang daun', 'Daun', 'Kedelai'),
('G031', 'Bercak warna coklat', 'Daun', 'Kedelai'),
('G032', 'Jaringan tepi bercak di bawah permukaan daun', 'Daun', 'Kedelai'),
('G033', 'Terdapat tepung daun', 'Daun', 'Kedelai'),
('G034', 'Berwarna abu-abu', 'Daun', 'Kedelai'),
('G035', 'Mengalami pembusukan', 'Daun', 'Kedelai'),
('G036', 'Mengalami keriput', 'Biji', 'Kedelai'),
('G037', 'Berwarna kecoklatan', 'Biji', 'Kedelai'),
('G038', 'Biji Berlubang', 'Biji', 'Kedelai'),
('G039', 'Bintik-bintik pada biji', 'Biji', 'Kedelai'),
('G040', 'Biji rusak bekas gesekan larva', 'Biji', 'Kedelai'),
('G041', 'Berwarna ungu', 'Biji', 'Kedelai'),
('G042', 'Biji kasar', 'Biji', 'Kedelai'),
('G043', 'Biji kaku', 'Biji', 'Kedelai'),
('G044', 'Berwarna kemerah-merahan', 'Biji', 'Kedelai'),
('G045', 'Kerdil/tidak keluar polong', 'Polong', 'Kedelai'),
('G046', 'Kerusakan pada polong muda', 'Polong', 'Kedelai'),
('G047', 'Kerusakan pada dinding polong', 'Polong', 'Kedelai'),
('G048', 'Berlubang tak beraturan', 'Polong', 'Kedelai'),
('G049', 'Mengalami keriput', 'Polong', 'Kedelai'),
('G050', 'Terdapat cekungan', 'Polong', 'Kedelai'),
('G051', 'Terdapat gesekan bekas larva', 'Polong', 'Kedelai'),
('G052', 'Bercak warna coklat', 'Polong', 'Kedelai'),
('G053', 'Bercak warna hitam', 'Polong', 'Kedelai'),
('G054', 'Polong mengering', 'Polong', 'Kedelai'),
('G055', 'Hitam pada permukaan polong', 'Polong', 'Kedelai'),
('G056', 'Mengalami pembusukan', 'Polong', 'Kedelai'),
('G057', 'Bercak warna kuning', 'Polong', 'Kedelai');

-- --------------------------------------------------------

--
-- Table structure for table `insektisida`
--

CREATE TABLE `insektisida` (
  `idinsektisida` varchar(10) NOT NULL,
  `hamasasaran` varchar(1000) NOT NULL,
  `namainsektisida` varchar(50) NOT NULL,
  `bahanaktif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `insektisida`
--

INSERT INTO `insektisida` (`idinsektisida`, `hamasasaran`, `namainsektisida`, `bahanaktif`) VALUES
('IN001', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Alphadine 6 GR', 'Dimehipo 6%'),
('IN002', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Basban 200 EC', 'Klorpirifos 200 g/l'),
('IN003', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Bassa 500 EC', 'BPMC 480 g/l'),
('IN004', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Cobra 15 EC', 'Alfametrin 15 g/l'),
('IN005', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Confidor 70 WS', 'Imidakloporid'),
('IN006', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Cruiser 350 FS', 'Tiametoksam 350 g/l'),
('IN007', 'Lalat Kacang, Lalat Batang, Lalat Pucuk (Agromyza Phaseoli/Ophiomyia Phaseoli)', 'Curaterr 3 GR', 'Klorpirifos 3%');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `idkontak` int(20) NOT NULL,
  `namakontak` varchar(50) NOT NULL,
  `emailkontak` varchar(320) NOT NULL,
  `teleponkontak` varchar(20) NOT NULL,
  `pesan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`idkontak`, `namakontak`, `emailkontak`, `teleponkontak`, `pesan`) VALUES
(4, 'pradhipta', 'pra@gmail.com', '085895442276', 'Saya tidak bisa daftar di sistem ini'),
(5, 'Fikri Alfadani', 'fikrialfadani2@gmail.com', '6285895442276', 'Mohon untuk ditingkatkan tampilannya');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idmember` int(20) NOT NULL,
  `namamember` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idmember`, `namamember`, `username`, `password`) VALUES
(10, 'Kurnia Paramita', 'mita', '$2y$10$AJ2XRCHnc6SA9Ca3lhdjEuROtqxbMsv4gPTReYilMx0DBPJCz7Rpm'),
(11, 'Fikri Alfadani', 'fikri', '$2y$10$QJT6XafMCj.syHJurVDlIuQzyciDVbLSSxMTJ30qzSFoTsTJLEDYG'),
(12, 'Fikri Alfadani', 'user', '$2y$10$R5Xo64EafTff4ufZsdqnFOYASFKYeypDzDg30r8ceLbNAt5yf0JVS');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `jumlahpengunjung` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`jumlahpengunjung`) VALUES
(85);

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `idpenyakit` varchar(20) NOT NULL,
  `namapenyakit` varchar(1000) NOT NULL,
  `jenistanaman` varchar(20) NOT NULL,
  `terjangkit` varchar(20) NOT NULL,
  `kulturteknis` varchar(1000) NOT NULL,
  `fisikmekanis` varchar(1000) NOT NULL,
  `kimiawi` varchar(1000) NOT NULL,
  `hayati` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`idpenyakit`, `namapenyakit`, `jenistanaman`, `terjangkit`, `kulturteknis`, `fisikmekanis`, `kimiawi`, `hayati`) VALUES
('PH001', 'Lalat Bibit Kacang (Ophiomyia Phaseoli)', 'Kedelai', 'Hama', 'Mulsa Jerami (Memberikan Material Penutup pada sebagian atau seluruh permukaan tanah dengan memanfaatkan jerami', 'Perlakuan Benih (Pada Daerah Endemik)', 'Semprot dengan insektisida saat tanaman berumur 7 hari, bila populasi mencapai ambang kendali (1 imago/50 rumpun)', ''),
('PH002', 'Lalat Batang (Melanagromyza Sojae)', 'Kedelai', 'Hama', 'Mulsa Jerami (Memberikan Material Penutup pada sebagian atau seluruh permukaan tanah dengan memanfaatkan jerami', 'Perlakuan Benih (Pada Daerah Endemik)', 'Semprot dengan insektisida saat tanaman berumur 12 hari, bila populasi mencapai ambang kendali (1 imago/50 rumpun)', ''),
('PH003', 'Lalat Pucuk (Melanagromyza dolicostigma)', 'Kedelai', 'Hama', 'Mulsa Jerami (Memberikan Material Penutup pada sebagian atau seluruh permukaan tanah dengan memanfaatkan jerami', 'Perlakuan Benih (Pada Daerah Endemik)', 'Semprot dengan insektisida saat tanaman berumur 12 hari, bila populasi mencapai ambang kendali (1 imago/50 rumpun)', ''),
('PH004', 'Kutu Daun Aphis (Aphis glycines)', 'Kedelai', 'Hama', 'Tanam serempak', 'Pemantauan secara rutin', 'Apabila populasi tinggi semprot dengan insektisida', ''),
('PH005', 'Kutu Bemisia (Bemisia tabaci Gennadius)', 'Kedelai', 'Hama', 'Tanam serempak', 'Pemantauan secara rutin', 'Apabila populasi tinggi semprot dengan insektisida', ''),
('PH006', 'Tungau Merah (Tetranychus cinnabarius Boisduval)', 'Kedelai', 'Hama', 'Tanam serempak', 'Pemantauan secara rutin', 'Apabila populasi tinggi semprot dengan insektisida', ''),
('PH007', 'Kumbang kedelai (Phaedonia inclusa Stall)', 'Kedelai', 'Hama', 'Tanam serempak', 'Pemantauan secara rutin', 'Semprot dengan insektisida apabila telah mencapai ambang kendali', ''),
('PH008', 'Ulat Grayak', 'Kedelai', 'Hama', '1) Pengelolaan gulma \r\n2) Rotasi tanam', '1) Pengumpulan hama secara manual\r\n2) Penyiangan telur dan larva', 'Semprot dengan insektisida bila telah mencapai ambang kendali (kerusakan daun 12,5%)', ''),
('PH009', 'Ulat Jengkal (Chrysodeixis chalcites)', 'Kedelai', 'Hama', '1) Penanaman awal\r\n2) Pemupukan yang tepat\r\n3) Irigasi yang tepat\r\n4) Penjarangan tanaman\r\n5) Penggunaan varietas tahan\r\n6) Perbaikan drainase untuk menghindari genangan ', '1) Penyisiran tanaman secara manual\r\n2) Penggunaan jaring penghalang\r\n3) Menggulung daun yang terinfestasi\r\n4) Membuang ulat dan pupa yang terlihat', 'Semprot dengan insektisida bila telah mencapai ambang kendali (kerusakan daun 12,5%)', ''),
('PH010', 'Ulat Penggulung daun (Lamprosema Indicata)', 'Kedelai', 'Hama', '1) Penjarangan tanaman\r\n2) Pengelolaan gulma\r\n3) Rotasi tanaman\r\n4) pengatur waktu tanaman\r\n6) Praktik sanitasi', '1)Pembukaan gulungan daun\r\n2) Penyisiran tanaman\r\n3) Pemangkasan daun\r\n4) Penjarangan tanaman', 'Semprot Insektisida bila telah mencapai ambang kendali (Kerusakan 12,5%)', ''),
('PH011', 'Ulat Pemakan Polong (Helicoverpa Haliotis)', 'Kedelai', 'Hama', '1) Melakukan penyiangan gulma secara teratur\r\n2)  menggunakan perangkap feromon atau perangkap kuning yang dapat menarik ulat Helicoverpa\r\n3) penggunaan mulsa', '1) Pengumpulan hama secara manual\r\n2) Pemangkasan bagian tanaman yang terinfestasi oleh ulat Helicoverpa\r\n3) Penyiangan telur', 'Semprot Insektisida bila telah mencapai ambang kendali', '1) Penggunaan predator alami semacam serangga atau hewan seperti burung pemangsa, kecoa, dan laba-laba adalah predator alami bagi ulat Helicoverpa.\r\n2) Semprot HaNPV'),
('PH012', 'Penghisap Polong (Riptortus linearis fabricius)', 'Kedelai', 'Hama', '1) Pengendalian gulma\r\n2) Rotasi tanam\r\n3) Pemilihan varietas tahan hama', '1) Penyemprotan air bertekanan tinggi pada tanaman kedelai dapat membantu menghilangkan hama secara fisik dari tanaman.\r\n2) Pengumpulan hama secara manual\r\n3) Penggunaan perangkap serangga (sesbania rostrata)', '1) Semprot insektisida bila telah mencapai ambang kendali (1 pasang imago/20 rumpun)\r\n2) Biopestisida menggagalkan penetasan telur', '1) Mengenalkan dan mendorong populasi musuh alami ulat penghisap polong, seperti predator atau parasit, dapat membantu mengendalikan hama secara alami\r\n2) Penggunaan mikroba patogen seperti nematoda entomopatogen atau bakteri Bacillus thuringiensis (Bt)'),
('PH013', 'Kepik Hijau (Nezara viridula linnaeus)', 'Kedelai', 'Hama', '1) Pengelolaan gulma\r\n2) Rotasi tanam\r\n3) mengatur jarak tanam', '1) Penggunaan perangkap serangga (sesbania rostrata)\r\n2) Penyemprotan air bertekanan tinggi', 'Semprot Insektisida', ''),
('PH014', 'Penggerek polong kedelai (Etiella Zinckanella treit)', 'Kedelai', 'Hama', '1) Mengatur jarak tanam\r\n2) Rotasi Tanam', '1) Penggunaan perangkap (Trichogramma bactrae)\r\n2) Pengumpulan ulat manual', 'Semprot Insektisida', ''),
('PH015', 'Karat (Phakopsora pachyrhizi)', 'Kedelai', 'Penyakit', '1) Varietas Tahan\r\n2) Rotasi Tanaman\r\n3) Pengelolaan sisa tanaman\r\n4) Mengatur jarak tanam', '1) Penyapuan daun\r\n2) Penyiangan Gulma', 'Aplikasi Fungisida mankoseb, triadimefon, bitertanol, difenokonazol', 'Penggunaan mikroba antagonis seperti mikroba antagonis, seperti jamur Trichoderma spp. atau bakteri Pseudomonas spp. dapat digunakan sebagai agensia hayati untuk mengendalikan jamur penyebab antraknose pada kedelai.'),
('PH016', 'Penyakit Pustul bakteri (Xanthomonas axonopodis pv glycines)', 'Kedelai', 'Penyakit', 'Hindari rotasi tanam dengan buncis dan kacang tunggak ', '1) Penggunaan benih bebas patogen (benih bersih)\r\n2) Penyiangan dan pembuangan tanaman yang terinfeksi', 'Penggunaan fungisida bakteri', '1) Penggunaan mikroba antagonis seperti mikroba antagonis, seperti bakteri Pseudomonas spp. atau Xanthomonas spp, dapat digunakan sebagai agensia hayati untuk mengendalikan jamur penyebab antraknose pada kedelai.\r\n2) Aplikasi Bakterisida'),
('PH017', 'Penyakit Antraknose (Collectrium dematium var truncatum dan C. Destrucvitum)', 'Kedelai', 'Penyakit', '1) Pastikan untuk menghilangkan dan menghancurkan sisa-sisa tanaman yang terinfeksi setelah panen selesai untuk mengurangi reservoir jamur penyebab antraknose.\r\n2) Pengaturan Jarak tanam\r\n3) Rotasi Tanam dengan selain kacang-kacangan', '1) Perawatan benih terutama benih terinfeksi\r\n2) Membenamkan sisa tanaman terinfeksi', 'Aplikasi Fungisida benomil, klorotalonil, captan pada fase berbunga sampai pengisian polong', 'Penggunaan mikroba antagonis: Beberapa mikroba antagonis, seperti jamur Trichoderma spp. atau bakteri Pseudomonas spp., dapat digunakan sebagai agensia hayati untuk mengendalikan jamur penyebab antraknose pada kedelai.'),
('PH018', 'Penyakit Downy Mildey (Peronospora Manshurica)', 'Kedelai', 'Penyakit', 'Penggunaan benih yang bebas penyakit, pemantauan lahan secara rutin, sanitasi, dan rotasi tanaman.', 'Membenamkan tanaman terinfeksi', 'Penggunaan fungisida dengan kandungan yang tepat dapat menjadi pilihan untuk mengendalikan penyakit ini, terutama jika serangan terjadi secara parah.', ''),
('PH019', 'Target Spot (Corynespora)', 'Kedelai', 'Penyakit', 'Penggunaan benih yang bebas penyakit, pemantauan lahan, sanitasi, dan rotasi tanaman.', '1) Membenamkan tanaman terinfeksi\r\n2) Perawatan benih terutama pada biji terinfeksi', 'Penggunaan fungisida benomil, klorotalonil, kaptan', ''),
('PH020', 'Rebah Kecambah, Busuk Daun dan Polong (Rhizoctonia solan)', 'Kedelai', 'Penyakit', 'Mempertahankan drainase tetap baik', '', 'Perawatan benih dengan cendawan antagonis', 'Perawatan benih dengan fungisida dan fungisida sistemik'),
('PH021', 'Penyakit Hawar batang (Scleroctium rolfsi)', 'Kedelai', 'Penyakit', 'Memperbaiki pengolahan tanah dan drainase', '', 'Perawatan benih dengan fungisida', 'Perawatan benih dengan cendawan antagonis'),
('PH022', 'Penyakit Hawar, Bercak daun dan Bercak biji ungu (cercospora kikuchii)', 'Kedelai', 'Penyakit', '', 'Menanam benih yang sehat dan bersih', '1) Perawatan benih dengan fungisida\r\n2) Aplikasi Fungisida sistemik', ''),
('PH023', 'Penyakit Virus Mosaik', 'Kedelai', 'Penyakit', '1) Penggunaan benih yang bebas penyakit, sanitasi lahan, dan pengendalian vektor serangga seperti kutu daun\r\n2) mengurangi sumber penularan virus', '', '', 'Menekankan populasi serangga vektor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `nama`) VALUES
('ADM001', 'fikri', 'fikri', 'Fikri Alfadani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`idgejala`);

--
-- Indexes for table `insektisida`
--
ALTER TABLE `insektisida`
  ADD PRIMARY KEY (`idinsektisida`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`idkontak`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idmember`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`idpenyakit`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `idkontak` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `idmember` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
