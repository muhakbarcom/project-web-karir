-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2022 at 03:44 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-web-karir`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `tanggal`, `kategori`, `isi`) VALUES
(20, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'PTN', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(21, 'Akuntansi Pengantar', '2022-11-20', 'PTN', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/0a09c8844ba8f0936c20bd791130d6b6.zoom\" xss=removed width=\"100%\" data-file-name=\"0a09c8844ba8f0936c20bd791130d6b6.zoom\"><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a3c65c2974270fd093ee8a9bf8ae7d0b.zoom\" xss=removed width=\"100%\" data-file-name=\"a3c65c2974270fd093ee8a9bf8ae7d0b.zoom\"><br></p>'),
(23, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(24, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(25, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(26, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(27, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(28, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(29, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(30, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(31, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(32, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(33, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(34, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(35, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(36, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(37, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(38, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(39, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(40, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(41, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(42, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(43, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(44, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(45, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(46, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>'),
(47, '4 PTN di Jawa Timur Siap Buka Jurusan Kedokteran Tahun 2023', '2022-11-20', 'ptn', '<p><img src=\"http://localhost/project-web-karir/assets/uploads/artikel/a2557a7b2e94197ff767970b67041697.png\" xss=removed width=\"100%\" data-file-name=\"a2557a7b2e94197ff767970b67041697.png\"></p><p>KOMPAS.com - Di Jawa Timur ada 4 Perguruan Tinggi Negeri (PTN) yang siap membuka jurusan Kedokteran pada tahun 2023. Tentu siswa SMA pasti suka mendapat kabar ini, karena pilihan kampus yang membuka jurusan kedokteran semakin banyak di Jawa Timur. Keempat PTN tersebut adalah Universitas Negeri Malang (UM), lalu Universitas Pembangunan Nasional (UPN) Veteran Jawa Timur, Institut Teknologi Sepuluh Nopember Surabaya (ITS) dan Universitas Negeri Surabaya (Unesa).</p><p>Sebelumya, untuk PTN di Jawa Timur yang memiliki jurusan kedokteran sudah cukup banyak. Contohnya Universitas Brawijaya, Universitas Airlangga, Universitas Jember dan lainnya. Seperti apa persiapan masing-masing jurusan kedokteran di 4 PTN ini? 1. Institut Teknologi Sepuluh Nopember (ITS) ITS kini sudah membuka lowongan dosen jurusan Pendidikan Dokter dan laboran.</p><p>Lowongan ini, bisa dilihat calon kandidat melalui laman https://rekrutmen-dosen.its.ac.id/ Keseriusan ITS ikut terjun ke bidang kesehatan, sebelumnya dibuktikan dengan pernyataan Rektor ITS Prof. Mochamad Ashari saat membuka prodi S1 Teknologi Kedokteran.  Lalu kini membuka jurusan kedokteran, yang diperkirakan siap pada tahun 2023. Pembukaan jurusan ini berdasarkan spirit rektor pertama ITS yang merupakan seorang dokter.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi`
--

INSERT INTO `konsultasi` (`id`, `from_id`, `created_at`) VALUES
(3, 5, '2022-11-22'),
(4, 6, '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi_detail`
--

CREATE TABLE `konsultasi_detail` (
  `id` int(11) NOT NULL,
  `konsultasi_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsultasi_detail`
--

INSERT INTO `konsultasi_detail` (`id`, `konsultasi_id`, `from_id`, `text`, `created_at`) VALUES
(2, 3, 5, 'ansdas', '2022-11-22 14:32:49'),
(3, 3, 5, 'abc', '2022-11-22 15:02:56'),
(4, 3, 5, 'abc', '2022-11-22 15:03:35'),
(5, 3, 5, 'w', '2022-11-22 15:03:44'),
(6, 3, 5, 'iyap', '2022-11-22 15:04:08'),
(7, 3, 5, 'asd', '2022-11-22 15:04:35'),
(8, 3, 5, 'asd', '2022-11-22 15:04:38'),
(9, 3, 5, 'asjdnkas', '2022-11-22 15:04:53'),
(10, 3, 5, 'kjasndkjasd', '2022-11-22 15:04:55'),
(11, 3, 5, 'kjasndkjasd', '2022-11-22 15:04:56'),
(12, 3, 5, 'akjsdnkjasd', '2022-11-22 15:04:57'),
(13, 4, 6, 'asdasd', '2022-11-22 15:23:22'),
(14, 3, 4, 'tes admin', '2022-11-22 15:41:14'),
(15, 3, 4, 'tes', '2022-11-22 15:41:39'),
(16, 4, 4, 'admin', '2022-11-22 15:41:45'),
(17, 3, 4, 'asdasd', '2022-11-22 15:42:46'),
(18, 4, 4, 'tes', '2022-11-22 15:42:51'),
(19, 3, 5, 'iya', '2022-11-22 15:43:04');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'members');

-- --------------------------------------------------------

--
-- Table structure for table `tmb`
--

CREATE TABLE `tmb` (
  `id` int(11) NOT NULL,
  `tmb_name` varchar(250) NOT NULL,
  `tmb_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tmb`
--

INSERT INTO `tmb` (`id`, `tmb_name`, `tmb_url`) VALUES
(1, 'Tes Minat Bakat ABC', 'https://forms.gle/cffDKTmivdpigsus7'),
(3, 'Tes Minat Bakat XYZ', 'https://forms.gle/cffDKTmivdpigsus7'),
(4, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(5, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(6, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(7, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(8, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(9, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(10, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(11, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(12, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(13, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(14, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(15, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(16, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(17, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(18, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(19, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(20, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(21, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(22, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(23, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(24, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(25, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(26, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(27, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(28, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(29, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(30, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(31, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(32, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(33, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(34, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(35, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(36, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(37, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(38, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(39, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(40, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(41, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(42, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(43, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(44, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7'),
(45, 'Tes Minat Bakat MNO', 'https://forms.gle/cffDKTmivdpigsus7');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `created_at`, `role_id`) VALUES
(4, 'admin', 'karir', 'admin@admin.com', '$2y$10$4zbyBZ54zDty4rmmkcwVh.ULRbMVolZP51RMbv5LkH98HNYqa6YaK', 1668667143, 1),
(5, 'coba', '1', 'coba1@gmail.com', '$2y$10$QmUG5WhvvOp7OcN0ppC1YeA9Nko0CLoapls.crpUp2ypSKMulQ5lu', 1668673354, 2),
(6, 'coba', '2', 'coba2@gmail.com', '$2y$10$WGtO8IqUiv8e95oR6ZbZIeSA5zRaDm/BwqZHxc6nq2l5N57Z/gJsm', 1668673441, 2);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_name`, `video_url`) VALUES
(4, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(5, 'Karier Apa yang Paling Cocok Untukmu? | Tes Kepribadian', 'https://www.youtube.com/watch?v=Deq8f4e_2p8'),
(6, 'REKOMENDASI KARIR UNTUK LULUSAN S1 Pendidikan Kimia!', 'https://www.youtube.com/watch?v=1MmLU8GOa9c'),
(7, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(8, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(9, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(10, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(11, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(12, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(13, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(14, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(15, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(16, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(17, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(18, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(19, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(20, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(21, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(22, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(23, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(24, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(25, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(26, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(27, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(28, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(29, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(30, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(31, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(32, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(33, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(34, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(35, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(36, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(37, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(38, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(39, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(40, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(41, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(42, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(43, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(44, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(45, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(46, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(47, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(48, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(49, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(50, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(51, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(52, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(53, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(54, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(55, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(56, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(57, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(58, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(59, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(60, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(61, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(62, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM'),
(63, 'Umur 20-an Mesti Tahu 5 Hal Ini : My 2.7M Views Bukatalks', 'https://www.youtube.com/watch?v=zrxA8BdaqkM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsultasi_detail`
--
ALTER TABLE `konsultasi_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tmb`
--
ALTER TABLE `tmb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konsultasi_detail`
--
ALTER TABLE `konsultasi_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tmb`
--
ALTER TABLE `tmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
