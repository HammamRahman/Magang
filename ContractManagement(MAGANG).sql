-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2024 at 11:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reminder`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'bal@gmail.com', '12345'),
(2, 'admin@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `tabelpelanggan`
--

CREATE TABLE `tabelpelanggan` (
  `id` int(11) NOT NULL,
  `nama_cc` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nomor_akun` varchar(50) NOT NULL,
  `nomor_kontrak` varchar(50) NOT NULL,
  `layanan` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabelpelanggan`
--

INSERT INTO `tabelpelanggan` (`id`, `nama_cc`, `alamat`, `nomor_akun`, `nomor_kontrak`, `layanan`, `start_date`, `end_date`) VALUES
(1, 'LARISSA AESTHETIC CENTER', 'Jl. DN Kayen No.45 RT 05 RW 44 Sleman, DIY', '4998020', '_', 'Astinet Lite', '2023-03-02', '2025-03-01'),
(2, 'LARISSA AESTHETIC CENTER', 'Jl. DN Kayen No.45 RT 05 RW 44 Sleman, DIY', '4833623', '_', 'Astinet Lite', '2024-04-03', '2025-04-02'),
(3, 'LARISSA AESTHETIC CENTER', 'Jl. DN Kayen No.45 RT 05 RW 44 Sleman, DIY', '5005768', '_', 'Astinet Fit', '2024-04-03', '2025-04-02'),
(4, 'LARISSA AESTHETIC CENTER', 'Jl. Gajah No.16, Tahunan,Kec Umbulharjo, Kota Yogyakarta,DIY', '4996410', '_', 'Astinet Lite', '2024-04-03', '2025-04-02'),
(5, 'LARISSA AESTHETIC CENTER', 'SLAMET RIYADI, GUMPANG KERTASURA, SUKOHARJO,NO 149', '4833623', '_', 'Astinet Lite', '2022-12-12', '2024-12-11'),
(6, 'LARISSA AESTHETIC CENTER', 'Jl.DN.Kayen No.45 RT 05 RW 44 Sleman,DIY', '4833623', '_', 'Astinet Lite', '2022-12-12', '2024-12-11'),
(7, 'LARISSA AESTHETIC CENTER', 'DARMO PERMAI II, SURABAYA,NO 7', '4833623', '_', 'Astinet Lite', '2022-12-14', '2024-12-11'),
(8, 'LARISSA AESTHETIC CENTER', 'Jl. Panglima Sudirman No.73, Kepatihan, Kec. Tulungagung, Kabupaten Tulungagung, Jawa Timur 66212', '5003726', '_', 'Astinet Lite', '2023-12-03', '2024-12-02'),
(9, 'LARISSA AESTHETIC CENTER', 'Jl. Baharudin Yusuf (Jln. Telega biru), Tembilahan Hulu, Kecamatan Tembilahan Hulu, Kabupaten Indragiri Hilir, Riau 29214', '5003727', '_', 'Astinet Lite', '2023-12-03', '2024-12-02'),
(10, 'LARISSA AESTHETIC CENTER', 'Jl. Gatot Subroto No. 199 A-B RT 002 RW 003 Kebonsari Temanggung', '5006538', '_', 'Astinet Lite', '2023-12-12', '2025-04-17'),
(11, 'LARISSA AESTHETIC CENTER', 'Jl. Jendral Sudirman, Kertonegoran, Proyonanggan Tengah, Kec. Batang, Kabupaten Batang, Jawa Tengah 51216', '5006932', '_', 'Astinet Lite', '2024-05-14', '2025-05-13'),
(12, 'LARISSA AESTHETIC CENTER', 'Jl. C. Simanjuntak 78 Yogyakarta 55225', '4977323', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(13, 'LARISSA AESTHETIC CENTER', 'Jl. MagelangKm. 6 No. 26 Yogyakarta 55284', '4977310', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(14, 'LARISSA AESTHETIC CENTER', 'Jl. Gajah Mada 103 Solo 57131', '4977324', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(15, 'LARISSA AESTHETIC CENTER', 'Jl. S. Parman No. 6 Semarang 50231', '4977325', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(16, 'LARISSA AESTHETIC CENTER', 'Jl. Pramuka 45 Klaten 57411', '4977326', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(17, 'LARISSA AESTHETIC CENTER', 'Jl. Ringin Tirto No. 68 53121', '4977328', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(18, 'LARISSA AESTHETIC CENTER', 'MAYJEND SUTOYO, PEKAUMAN, TEGAL, PASIFIK MALL TEGAL', '4977329', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(19, 'LARISSA AESTHETIC CENTER', 'Jl. Jend. Sudirman No.327 Salatiga', '4977330', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(20, 'LARISSA AESTHETIC CENTER', 'JL. ARJUNO 17 MALANG', '4977331', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(21, 'LARISSA AESTHETIC CENTER', 'Galeria Mall Lt. 1 No. 5-8 Yogyakrta', '4977359', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(22, 'LARISSA AESTHETIC CENTER', 'Jl. Panglima Polim No. 15 Kediri 64125', '4977370', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(23, 'LARISSA AESTHETIC CENTER', 'Jl. Teuku Umar Komplek Graha Mahkota Blok B18-20 Denpasar', '4977360', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(24, 'LARISSA AESTHETIC CENTER', 'Jl. Dr. Rajiman 485 Solo 57140', '4977364', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(25, 'LARISSA AESTHETIC CENTER', 'Jl. Kolonel Sugiono No. 8 Magelang 56122', '4977338', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(26, 'LARISSA AESTHETIC CENTER', 'Jl. Perintis Kemerdekaan No. 12 Madiun 63117', '4977340', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(27, 'LARISSA AESTHETIC CENTER', 'Jl. Veteran No. 58 Sragen 57221', '4977341', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(28, 'LARISSA AESTHETIC CENTER', 'Jl. KH. Wachid Hasyim No. 37 Mojokerto', '4977342', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(29, 'LARISSA AESTHETIC CENTER', 'Jl. S.Parman no.42 Jember', '4977344', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(30, 'LARISSA AESTHETIC CENTER', 'Jl. Diponegoro 18 Kudus', '4977345', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(31, 'LARISSA AESTHETIC CENTER', 'Jl. Raden Saleh Ponorogo', '4977346', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(32, 'LARISSA AESTHETIC CENTER', 'JL. Mayjen Panjaitan no.94 53411', '4977347', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(33, 'LARISSA AESTHETIC CENTER', 'JL. Kapten Ismail no.102 52112', '4977349', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(34, 'LARISSA AESTHETIC CENTER', 'Jl. Residen Sudirman 26-27 Pacar keling tambaksari Surabaya', '4977350', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(35, 'LARISSA AESTHETIC CENTER', 'JL. Dr. Wahidin no.12 Pekalongan', '4977351', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(36, 'LARISSA AESTHETIC CENTER', 'Jl. Mayjend Sutoyo RT 01/07 Sindakaya, Cilacap Selatan', '4977372', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(37, 'LARISSA AESTHETIC CENTER', 'Jl. Janur Kuning 1 blok BA 6 No. 1 , Serpong', '4977374', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(38, 'LARISSA AESTHETIC CENTER', 'Jl. Raya Tenggilis No.87 , Tenggilis Mejoyo, Surabaya Timur', '4977380', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(39, 'LARISSA AESTHETIC CENTER', 'Desa Triyagen Kec. Mojolaban DK.Ngasemrejo RT 001 RW 004 Sukoharjo Indonesia 57554', '4977381', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(40, 'LARISSA AESTHETIC CENTER', 'Ngesrep Timur Kota Semarang Indonesia 50261 LARISSA AESTHETIC CENTER', '4977382', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(41, 'LARISSA AESTHETIC CENTER', 'Jl. Kampus Unud No.18 X Banjar Pararudan, Jimbaran, Bali', '4977383', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(42, 'LARISSA AESTHETIC CENTER', 'Jl. Godean KM 5 Patran Banyuraden Gamping Sleman DIY Indonesia 99999', '4977385', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(43, 'LARISSA AESTHETIC CENTER', 'Jl Raya Bantul Km 10 Melikan Bantul Yk,-,YOGYAKARTA', '4977391', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(44, 'LARISSA AESTHETIC CENTER', 'Jl Mgr.Sugiyopranoto rt 07 rw 01 Baleharjo Wonosari,GUNUNG KIDUL YOGYAKARTA,POST CODE : 99999,481', '4977386', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(45, 'LARISSA AESTHETIC CENTER', 'Jl Ronggowarsito Jobodan Rt 02 Rw 02 Tambakboyo Pedan Klaten,-,KLATEN', '4977388', '_', 'Astinet Lite', '2023-12-12', '2024-12-11'),
(46, 'LARISSA AESTHETIC CENTER', 'Jl.Mawar,Condongcatur,Depok,Sleman,DIY (PASTRY / PABRIK ROTI)', 'akun lama 4996521 / akun baru 5005594', '_', 'Astinet Lite', '2024-03-05', '2025-03-04'),
(47, 'LARISSA AESTHETIC CENTER', 'JL. BANYAK SUMBA NO.1 BTD KOTA BARU PARAHYANGAN (RUMAH BPK TOMY)', 'akun lama 4986813 / akun baru 5005596', '_', 'Astinet Lite', '2024-03-05', '2025-03-04'),
(48, 'LARISSA AESTHETIC CENTER', 'PUGERAN UTAMA, GG PUNTADEWA, SLEMAN,NO 61', 'akun lama 4975654 /akun baru 5005597', '_', 'Astinet Lite', '2024-03-05', '2025-03-04'),
(49, 'PT. GALANG MULYA ABADI (LARISSA AESTHETIC CENTER P', 'Jl.Penjawi No.2,Gg II Randukuning,Pati Lor,Pati Jawa Tengah', '4998862', '_', 'Astinet Lite', '2023-04-03', '2025-04-02'),
(50, 'LARISSA AESTHETIC CENTER KUPANG (CV TULIP KUPANG)', 'Jl. Frans Seda 85, Fatululi, Kec. Oebobo, Kota Kupang, Nusa Tenggara Timur', '4999545', '_', 'Astinet Lite', '2023-05-17', '2025-05-15'),
(51, 'PT. POEDJI ANUGERAH SEJAHTERA', 'Jl. Kayen Raya RT 005 RW 044 Condongcatur, Depok Sleman DIY', '4976359', '_', 'Astinet Lite', '2023-06-06', '2025-06-05'),
(52, 'PT. NURIA KARUNIA FARMA', 'Jl. Reksobayan No.8 , Ngupasan, Kec. Gondomanan, Kota Yogyakarta, DIY', '4998540', '_', 'Astinet Lite', '2023-03-24', '2025-03-23'),
(53, 'CV. RAGIL NURIA', 'JL MAGELANG KM 5,8, RT 06/014 PATRAN, SLEMAN,NO 26 (APOTEK LARISSA)', '4926233', '_', 'Astinet Lite', '2024-01-03', '2027-01-02'),
(54, 'LARISSA AESTHETIC CENTER', 'JL.KURUSETRA NO.821 NUSA DUA, KUTA,BALI', 'akun lama 5000921 / akun baru 5007774', '_', 'Astinet Lite', '2024-07-18', '2025-07-17'),
(67, 'LARISA NGANJUK', 'Jl. Gatot Subroto No. 199 A-B RT 002 RW 003 Kebonsari Temanggung', '0298373', '0976', 'Indihome', '2024-08-10', '2024-08-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabelpelanggan`
--
ALTER TABLE `tabelpelanggan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabelpelanggan`
--
ALTER TABLE `tabelpelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
