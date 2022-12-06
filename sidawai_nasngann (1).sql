-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2022 pada 03.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidawai_nasngann`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_lahir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pangkat_golongan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `tmt_masuk` int(11) DEFAULT NULL,
  `tgl_pensiun` date DEFAULT NULL,
  `diklat_akhir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama_pegawai`, `nip`, `tmp_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `pendidikan`, `pangkat_golongan`, `jabatan_id`, `users_id`, `tmt_masuk`, `tgl_pensiun`, `diklat_akhir`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Ir. Siti Farisyah Yana, M.Si.', '196905161993012001', 'Samarinda', '1969-05-16', 'Perempuan', 'Jl. DI. Panjaitan Citraland City Blok A4 No. 08 Gunung Lingai Sungai Pinang Samarinda Kalimantan Timur', 'S2', 'IV/c', 7, 17, 0, '2029-06-01', 'DIKLAT PIM II / SESPA / SEPAMEN (06 November 2021)', '2022-10-15 01:08:44', '2022-11-28 04:42:31', NULL),
(5, 'Ir. Rini Susilawati, M.Si', '196810071994032009', 'Berau', '1968-10-07', 'Perempuan', 'Jl. Dr. Soetomo Gg. 8 No. 2 RT. 37 Samarinda', 'S2', 'IV/b', 8, 20, 0, '2026-11-01', 'DIKLAT PIM II / SESPA / SEPAMEN (22 November 2019)', '2022-10-15 01:20:09', '2022-11-28 04:43:12', NULL),
(6, 'Rika Nuzli Furkanti, S.P., M.P', '196911261997032005', 'Samarinda', '1969-11-26', 'Perempuan', 'Jl. Panglima Muhammad Noor , Perum Griya Mukti Sejahtera Blok R No. 26 Samarinda.', 'S2', 'IV/b', 9, 21, 0, '2027-12-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (31 Agustus 2000)', '2022-10-15 08:40:36', '2022-11-28 04:43:47', NULL),
(7, 'Ir. Diah Adiaty Yahya, MMT.', '196905141994032009', 'Jakarta', '1969-05-14', 'Perempuan', 'Jl. Cipto Mangunkusumo Perum Bukit Pinang Bahari C1 No 13 RT.030 SMD', 'S2', 'IV/b', 12, 22, 0, '2027-06-01', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA / (15 November 2006)', '2022-10-15 08:52:58', '2022-11-28 04:44:22', NULL),
(8, 'Tanti Subandiyah, S.Sos.', '196909061990022001', 'Yogyakarta', '1969-09-06', 'Perempuan', 'PERUM BUKIT PINANG BAHARI BLOK B-3 NO.15 SAMARINDA SEBERANG', 'S1', 'III/d', 29, 23, 0, '2027-10-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (24 Februari 2007)', '2022-10-15 09:05:26', '2022-11-28 04:44:50', NULL),
(9, 'Hj. Sumini HS., S.E.', '196603281986012001', 'Samarinda', '1966-03-28', 'Perempuan', 'Jln. KS. Tubun Gang H. Soemadji No. 3 Samarinda', 'S1', 'III/d', 14, 24, 0, '2024-04-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (24 Februari 2007)', '2022-10-15 09:13:17', '2022-11-28 04:45:39', NULL),
(10, 'Zulfi Silviastuti, S.E.', '197611202000032001', 'Yogyakarta', '1976-11-20', 'Perempuan', 'Jl Juanda 4 No 220 Samarinda', 'S1', 'III/d', 29, 25, 0, '2034-12-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (25 September 2010)', '2022-10-15 09:19:47', '2022-11-28 04:46:15', NULL),
(11, 'Budi Harsono, S.P.', '196601151991031010', 'Barong Tongkok / Kubar', '1966-01-15', 'Laki-laki', 'Jalan PM. Noor Perum Griya Mukti Sejahtera Blok J.4 RT 8, Samarinda', 'S1', 'III/d', 16, 26, 0, '2024-01-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (23 Agustus 2021)', '2022-10-15 09:29:26', '2022-11-28 04:46:56', NULL),
(12, 'Samsuriaty, S.P.', '196610172006042003', 'Pinrang', '1966-10-17', 'Perempuan', 'Perum. Sambutan Permai Blok CB.25 RT.23 Kel. Sambutan Samarinda Ilir', 'S1', 'III/d', 17, 27, 0, '2024-11-01', '-', '2022-10-15 09:35:54', '2022-11-28 04:47:32', NULL),
(13, 'Ir. Elyna Tri Yanuati', '196501191992122001', 'Samarinda', '1965-01-19', 'Perempuan', 'Jl. Pelita II - 26 SND', 'S1', 'III/d', 18, 28, 0, '2023-02-01', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA / (15 November 2006)', '2022-10-15 09:48:49', '2022-11-28 04:48:59', NULL),
(14, 'Siti Mayasari, S.Si., M.Si.', '197205282001122001', 'Samarinda', '1972-05-28', 'Perempuan', 'Jalan Kulintang No 37 Samarinda', 'S2', 'IV/a', 19, 29, 0, '2030-06-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (25 September 2010)', '2022-10-15 10:01:53', '2022-11-28 04:49:59', NULL),
(15, 'Irma Masrurah , M.Si.', '197704302008012012', 'Samarinda', '1977-04-30', 'Perempuan', 'Jl. Bukit Barisan Gang 1a No. 42 RT. 38 Samarinda Kaltim', 'S2', 'III/d', 20, 30, 0, '2035-05-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (13 November 2020)', '2022-10-15 10:09:30', '2022-11-28 04:50:48', NULL),
(16, 'Amaylia Dina Widyastuti, SIP., M.Si.', '197205041998032005', 'Salatiga', '1972-05-04', 'Perempuan', 'Perum Bumi Sempaja Block CA No. 70 RT. 47 Sempaja', 'S2', 'IV/a', 21, 32, 0, '2030-06-01', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA / (21 Februari 2007)', '2022-10-15 10:16:06', '2022-11-28 04:51:32', NULL),
(17, 'Nurul Fitriani, S.P.,M.Si.', '197310142002122002', 'Samarinda', '1973-10-14', 'Perempuan', 'Jl. MT. Haryono Komp. PEMDA RT.02 No. 37 Samarinda', 'S2', 'IV/a', 22, 33, 0, '2031-11-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (23 Agustus 2021)', '2022-10-15 10:23:02', '2022-11-28 04:52:12', NULL),
(18, 'Ir. Mirono', '196606261989021002', 'Loa Kulu', '1966-06-26', 'Laki-laki', 'Jl. Ir. H. Juanda Komplek Wijaya Kusuma 14 RT. 19 Kelurahan Air Putih Kecamatan Samarinda Ulu', 'S1', 'III/d', 23, 34, 0, '2024-07-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (24 Juli 1999)', '2022-10-15 10:31:32', '2022-11-28 05:07:02', NULL),
(19, 'Alfian, S.P.', '197112251997031005', 'Samarinda', '1971-12-25', 'Laki-laki', 'Jl. PU. No.66, Kelurahan Baqa, Kec. Samarinda Seberang Kota Samarinda - Kaltim', 'S1', 'III/d', 24, 35, 0, '2030-01-01', '-', '2022-10-15 10:37:26', '2022-11-28 05:07:39', NULL),
(20, 'Ir. Suprianto', '196507092000031003', 'Loa Kulu', '1965-07-09', 'Laki-laki', 'Komplek SPP-SPMA No. 2 - B, RT. 008, Kel. Sempaja Selatan, Kec. Samarinda Utara, Kota Samarinda, Kode Pos 75119', 'S1', 'III/d', 25, 36, 0, '2023-08-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (03 Februari 2006)', '2022-10-15 10:40:49', '2022-11-28 05:08:09', NULL),
(21, 'Sri Wahyuni , S.P.', '197504232007012020', 'Samarinda, 23 April 1975', '1975-04-23', 'Perempuan', 'Jl. Ramania No. 80', 'S1', 'III/d', 26, 37, 0, '2033-05-01', '-', '2022-10-15 10:50:10', '2022-11-28 05:09:58', NULL),
(22, 'Ir. Hj. Sri Arida Bahmi, M.P.', '196501171993032005', 'M. Pudak Tabalong, 17 Januari 1965', '1965-01-17', 'Perempuan', 'Perum Bukit Solong Durian D I - 13 SMD', 'S2', 'IV/a', 27, 38, 0, '2023-02-01', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA / (07 Desember 2009)', '2022-10-15 10:54:49', '2022-11-28 05:26:04', NULL),
(23, 'Yulius Mangaku Sande, S.Pi.', '196603061989031021', 'Balikpapan', '1966-03-06', 'Laki-laki', 'Jln Thoyeb Hadiwijaya Sempaja', 'S1', 'III/d', 36, 39, 0, '2024-04-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (28 November 1998)', '2022-10-15 23:29:17', '2022-11-28 05:26:49', NULL),
(24, 'Lina Ariani , S.P.', '197003242007012016', 'Samarinda', '1970-03-24', 'Perempuan', 'Jl. Pemuda 3 Blok D No. 111 E Rt. 06 Komplek H. Thaha Bakrie Samarinda', 'S1', 'III/b', 36, 40, 0, '2028-04-01', '-', '2022-10-15 23:46:05', '2022-11-28 05:27:27', NULL),
(25, 'Juraidah, AM.d', '197003122007012033', 'Kota Samarinda', '1970-03-12', 'Perempuan', 'Jl. P. Suryanata Perum Graha Indah Blok Q No. 3 Rt.50 Kel.Air Putih', 'D3', 'II/d', 36, 41, 0, '2028-04-01', '-', '2022-10-16 00:06:01', '2022-11-28 05:27:58', NULL),
(26, 'Nur Suanti', '197612102007012013', 'Kota Samarinda', '1976-12-10', 'Perempuan', 'Jalan Gurami No. 15 Samarinda', 'SMA', 'II/d', 36, 42, 0, '2035-01-01', '-', '2022-10-16 00:12:31', '2022-11-28 05:28:39', NULL),
(27, 'Rini Indriati', '198108032009012001', 'Samarinda', '1981-08-03', 'Perempuan', 'Jl. Jakarta Gg. Tugu Monas IX RT. 081 Kel. Loa Bakung Kec. Sei Kunjang Samarinda', 'SMA', 'II/d', 36, 43, 0, '2039-09-01', '-', '2022-10-16 00:47:50', '2022-11-28 05:29:18', NULL),
(28, 'Vita Nur Fatimah, A.Md.', '199103102019032014', 'KULON PROGO', '1991-03-10', 'Perempuan', 'PEDUKUHAN 10 CERME PANJATAN', 'D3', 'II/c', 32, 44, 0, '2049-04-01', '-', '2022-10-16 00:55:19', '2022-11-28 05:29:44', NULL),
(29, 'Fitriansyah', '197211012007011011', 'Samarinda', '1972-11-01', 'Laki-laki', '-', 'SMP', 'II/b', 36, 45, 0, '2030-12-01', '-', '2022-10-16 01:06:19', '2022-11-28 16:18:50', NULL),
(30, 'Rusmanaji', '198105142009011002', 'Malang', '1981-05-14', 'Laki-laki', 'Jl. Wahid Hasyim No 25 RT 52 Sempaja Selatan', 'SMA', 'II/b', 36, 46, 0, '2039-06-01', '-', '2022-10-16 01:18:04', '2022-11-28 16:19:25', NULL),
(31, 'Supini', '196804171994032016', 'Sanga-Sanga', '1968-04-17', 'Perempuan', '-', 'SMA', 'III/b', 36, 47, 0, '2026-05-01', '-', '2022-10-16 01:34:20', '2022-11-28 16:20:08', NULL),
(32, 'Netty Rosidah, S.Si.', '198612042011012001', 'Madiun', '1986-12-04', 'Perempuan', 'Jl. Trisari Gg. An Noor Rt. 22 No. 61 Kel. Sidodadi Kec. Samarinda Ulu Kota Samarinda', 'S1', 'III/b', 28, 48, 0, '2045-01-01', '-', '2022-10-16 01:45:18', '2022-11-28 16:21:29', NULL),
(33, 'Dedi Gunawan, S.P.', '197303272007011020', 'Samarinda', '1973-03-27', 'Laki-laki', 'Jl. Jakarta Blok, Q No. 27 Rt. 39 Kel. Loa Bakung Kec. Sungai Kunjang Kota Samarinda', 'S1', 'III/b', 36, 49, 0, '2031-04-01', '-', '2022-10-16 01:58:57', '2022-11-28 16:22:22', NULL),
(34, 'Eka Ratna Amelia, S.STP', '199504202018082001', 'Kota Samarinda', '1995-04-20', 'Perempuan', 'Jl. Jakarta Blok. P No.8. Perumahan Korpri, Kel. Loa Bakung, Kec. Sungai Kunjang, Kota Samarinda, Provinsi Kalimantan Timur', 'S1', 'III/a', 36, 50, 0, '0001-01-01', '-', '2022-10-16 02:19:23', '2022-11-28 16:23:26', NULL),
(35, 'Susy Purwantie, S.E.', '197402242007012007', 'Samarinda', '1974-02-24', 'Perempuan', 'Jln. Thoyib Hadiwijaya No. A-9 RT. 08 Kel. Sempaja Timur Kec. Samarinda Utara', 'S1', 'III/b', 36, 51, 0, '2032-03-01', '-', '2022-10-16 04:17:31', '2022-11-28 16:24:08', NULL),
(36, 'Hernita, SE', '197712162009012001', 'Samarinda', '1977-12-16', 'Perempuan', 'Jl. Untung Surapati Gg. Bhakti Karya No. 30 Rt. 25 Sei Kunjang, Samarinda Ulu', 'S1', 'III/b', 36, 52, 0, '2036-01-01', '-', '2022-10-16 04:35:12', '2022-11-28 16:24:44', NULL),
(37, 'Jamiatul Adawiyah , A.Md.', '197504032007012018', 'Samarinda', '1975-04-03', 'Perempuan', 'Jl, Damanhuri 2 Perum Borneo Mukti 2 Blok. B No. 3 RT. 41 Kel. Mugirejo Kec. Sungai Pinang Samarinda', 'D3', 'II/d', 36, 53, 0, '2033-05-01', '-', '2022-10-16 04:42:04', '2022-11-28 16:26:55', NULL),
(38, 'Ridho Tantawi', '197102132007011009', 'Samarinda', '1971-02-13', 'Laki-laki', 'JL. Perum Puspita Bengkuring Blok AR-19 RT.67 Samarinda', 'SMA', 'II/d', 36, 54, 0, '2029-03-01', '-', '2022-10-16 04:47:08', '2022-11-28 16:27:33', NULL),
(39, 'Hefni Rahman, S.P.', '197907051998031001', 'Samarinda', '1979-07-05', 'Laki-laki', 'Jalan Slamet Riyadi Gang 5 No. 24, RT. 16, RW. 06, Kel. Teluk Lerong Ulu, Kec. Sungai Kunjang, Kota Samarinda', 'S1', 'III/d', 36, 55, 0, '2037-08-01', '-', '2022-10-16 05:25:37', '2022-11-28 16:28:14', NULL),
(40, 'Widya Kusuma Dewi, S.P.', '198104282010012015', 'Samarinda', '1981-04-28', 'Perempuan', 'Jl. Wahid Hasyim I No.14 RT 7 Sempaja Selatan Samarinda Utara Samarinda Kaltim', 'S1', 'III/d', 36, 56, 0, '2039-05-01', '-', '2022-10-16 05:32:44', '2022-11-28 16:30:38', NULL),
(41, 'Reni Rosita, A.Md.', '197305252001122003', 'Samarinda', '1973-05-25', 'Perempuan', 'Jl. P. Surapati RT.025 Kel. Karang Asam Ulu Sungai Kunjang Samarinda', 'D3', 'III/c', 36, 57, 0, '2031-06-01', '-', '2022-10-16 05:40:13', '2022-11-28 16:32:22', NULL),
(42, 'Iwan Setiawan, S.Sos.', '197501292007011003', 'Samarinda', '1975-01-29', 'Laki-laki', 'Jalan Jakarta Blok AE No. 1 RT. 49', 'S1', 'III/b', 36, 58, 0, '2033-03-01', '-', '2022-10-16 05:44:15', '2022-11-28 16:32:49', NULL),
(43, 'Surya Junaidi, S.Hut.', '197212042007011017', 'Sanga-Sanga', '1972-12-04', 'Laki-laki', 'Jalan Kartini Gang Melati Nomor 2 Samarinda', 'S1', 'III/b', 36, 59, 0, '2031-01-01', '-', '2022-10-16 05:49:12', '2022-11-28 16:33:13', NULL),
(44, 'Hj. Dian Fatriana', '196607261994032004', 'Samarinda', '1966-07-26', 'Perempuan', 'Jalan Arif Rahman Hakim No, 9 RT 03, Samarinda', 'SMA', 'III/b', 36, 60, 0, '2024-08-01', '-', '2022-10-16 17:37:24', '2022-11-28 16:34:34', NULL),
(45, 'Eka Badarriyani', '196912181992032006', 'Tarakan', '1969-12-18', 'Perempuan', 'Perum Bukit Pinang B.2 No 11 Kel. Air Putih Samarinda Ulu', 'SMA', 'III/b', 36, 61, 0, '2028-01-01', '-', '2022-10-16 17:42:47', '2022-11-28 16:35:02', NULL),
(46, 'Iskamto', '196606042000031006', 'Nganjuk', '1966-06-04', 'Laki-laki', 'Jl. P. Antasari GG. Gudang Garam RT.009 Kel. Teluk Lerong Ulu Kec. Sungai Kunjang', 'SMA', 'III/b', 36, 62, 0, '2024-07-01', '-', '2022-10-16 17:47:34', '2022-11-28 16:35:38', NULL),
(47, 'Mohadi', '197510012000031003', 'Tenggarong', '1975-10-01', 'Laki-laki', 'JALAN KARANG MULYA I RT.18 KEL. LOK BAHU KEC. SUNGAI KUNJANG SAMARINDA', 'SMA', 'III/b', 36, 63, 0, '2023-11-01', '-', '2022-10-16 17:56:28', '2022-11-28 16:36:08', NULL),
(48, 'Nor Aida', '196610182001122001', 'Loa Kulu', '1966-10-18', 'Perempuan', 'Jl. P. Hidayatullah gang Alhuda No. 87 Samarinda Kota', 'SMA', 'III/b', 36, 64, 0, '2024-11-01', '-', '2022-10-16 18:01:07', '2022-11-28 16:36:39', NULL),
(49, 'Arbanie', '196603092001121004', 'Samarinda', '1966-03-09', 'Laki-laki', 'Jl. Lempake Tepian Rt.01 No.28 Kel. Gunung Lingai Kec.Sungai Pinang Samarinda Utara', 'SMA', 'III/b', 36, 65, 0, '2024-04-01', '-', '2022-10-16 18:07:01', '2022-11-28 16:37:05', NULL),
(50, 'Mecky Azhar', '197504012007011014', 'Samarinda', '1975-04-01', 'Laki-laki', 'Perum Permata Mugirejo Permai Lubuk Sawah Blok. D7 No. 4 Rt. 17 Kel. Mugirejo Kec. Sungai Pinang Kota Samarinda', 'SMA', 'II/d', 36, 66, 0, '2033-05-01', '-', '2022-10-16 18:12:12', '2022-11-28 16:37:32', NULL),
(51, 'Rahmaddiansyah', '197504172007011012', 'Samarinda', '1975-04-17', 'Laki-laki', 'Jl. Nusantara V No. 48 Samarinda', 'SMA', 'II/d', 36, 67, 0, '2033-05-01', '-', '2022-10-16 18:17:33', '2022-11-28 16:38:15', NULL),
(52, 'Sujatmiko Siswanto', '197210142007011009', 'Samarinda', '1972-10-14', 'Laki-laki', 'Jalan Gerilya Gang.Sepakat III No.78 Rt.101', 'SMA', 'II/d', 36, 68, 0, '2030-11-01', '-', '2022-10-16 18:23:40', '2022-11-28 16:38:39', NULL),
(53, 'Suriansyah', '196708082007011028', 'Anggana', '1967-08-08', 'Laki-laki', 'Jln. Lambung Mangkurat Gang 5 RT 22 No. 184 Kel. Pelita, Kec. Samarinda Ilir', 'SMP', 'II/b', 36, 69, 0, '2025-09-01', '-', '2022-10-16 18:30:54', '2022-11-28 16:39:05', NULL),
(54, 'Ina Prihatina, S.Pi.', '198301072009032011', 'Long Iram', '1983-01-07', 'Perempuan', 'Jl. Rapak Indah Gang 6 RT. 35 Kelurahan Sungai Kunjang Ilir Kecamatan Sungai Kunjang Kota Samarinda', 'S1', 'III/d', 36, 70, 0, '2041-02-01', '-', '2022-10-16 23:21:57', '2022-11-28 16:40:31', NULL),
(55, 'Enggy Gumilang, S.T.', '198406182009032008', 'Samarinda', '1984-06-18', 'Perempuan', 'Jl. Jelawat Gg.8 No.22 Sidodamai Samarinda Ilir', 'S1', 'III/b', 28, 71, 0, '2042-07-01', '-', '2022-10-16 23:27:34', '2022-11-28 16:41:10', NULL),
(56, 'Sugiyanto, S.P.', '197202121999031005', 'Sragen', '1972-02-12', 'Laki-laki', 'Perum Korpri Lok Bahu Jl.Jakarta 1 Blok.C.8 No.13 RT.40 Kelurahan Lok Bahu, Kecamatan Sungai Kunjang, Kota Samarinda', 'S1', 'III/b', 36, 72, 0, '2030-03-01', '-', '2022-10-16 23:32:27', '2022-11-28 16:41:47', NULL),
(57, 'Muhammad Noor Eka Dita', '197404062001121005', 'Samarinda', '1974-04-06', 'Laki-laki', 'Jalan Sawi 6 No.143 RT.070 Perum Bengkuring, Kel. Sempaja Timur, Kecamatan Samarinda Utara, Kota Samarinda', 'SMA', 'III/b', 36, 73, 0, '2035-05-01', '-', '2022-10-16 23:36:10', '2022-11-28 16:42:42', NULL),
(58, 'Ismayadi', '196905102007011045', 'Kota Baru', '1969-05-10', 'Laki-laki', 'Jl. K.H. Mas Mansyur RT. 027', 'SMA', 'II/d', 36, 74, 0, '2027-06-01', '-', '2022-10-16 23:41:14', '2022-11-28 16:43:17', NULL),
(59, 'Heru Sumantri', '197304032007011024', 'Samarinda', '1973-04-03', 'Laki-laki', 'Jalan Cendana Gang 11 No 49 RT 10 Kelurahan Karang Anyar, Kecamatan Sungai Kunjang, Kota Samarinda, Provinsi Kalimantan Timur', 'SMA', 'II/d', 36, 75, 0, '2023-05-01', '-', '2022-10-16 23:51:48', '2022-11-28 16:44:44', NULL),
(60, 'Sudirman', '197705262008011015', 'Samarinda', '1977-05-26', 'Laki-laki', 'Jl. Bayur RT. 016 Kel. Sempaja Utara Kec. Samarinda Utara', 'SMA', 'II/d', 36, 76, 0, '2035-06-01', '-', '2022-10-16 23:55:55', '2022-11-28 16:45:49', NULL),
(61, 'Arief Rachman', '197912142008011015', 'Samarinda', '1979-12-14', 'Laki-laki', 'Jl. M. Said Gg. 10 N0 6B Kel Lok Bahu Kec Sungai Kunjang', 'SMA', 'II/d', 36, 77, 0, '2038-01-01', '-', '2022-10-17 00:00:05', '2022-11-28 16:46:23', NULL),
(62, 'Yudha Karsa', '197303112009011002', 'Samarinda', '1973-03-11', 'Laki-laki', 'jalan. Biawan. gg 2 B. No. 05 Rt.24. Rw. 8. Samarinda', 'SMA', 'II/d', 36, 78, 0, '2031-04-01', '-', '2022-10-17 00:03:59', '2022-11-28 16:47:09', NULL),
(63, 'Maria B Syamnur', '197109202010012001', 'Kab. Ende', '1971-09-20', 'Perempuan', 'Perum Bukit Pinang Puspita Blok R. No. 09 RT.08 Jl. Pangeran Suryanata Kelurahan Bukit Pinang Samarinda', 'SMA', 'II/d', 36, 79, 0, '2029-01-01', '-', '2022-10-17 00:07:35', '2022-11-28 16:47:43', NULL),
(64, 'Setio Purwanto', '197810232014011001', 'Malang', '1978-10-23', 'Laki-laki', 'Perum Graha Indah Blok C No. 04 RT. 013 Kel. Air Putih Kec. Samarinda Ulu Kota Samarinda', 'SMA', 'II/c', 36, 80, 0, '2036-11-01', '-', '2022-10-17 00:11:28', '2022-11-28 16:51:36', NULL),
(65, 'Samsudin', '196906302007011016', 'Samarinda', '1969-06-30', 'Laki-laki', 'GIRIREJO RT.024 NO.62 KELURAHAN LEMPAKE KECAMATAN SAMARINDA UTARA', 'SMP', 'II/b', 36, 81, 0, '2027-07-01', '-', '2022-10-17 00:15:22', '2022-11-28 16:52:16', NULL),
(66, 'Mariatul Qibtiah, S.P.', '196710221989032003', 'Bawahan', '1967-10-22', 'Perempuan', 'Jl RE Martadinata GG Melati No 28 RT 08 Samarinda', 'S1', 'III/d', 36, 82, 0, '2025-11-01', '-', '2022-10-17 00:23:51', '2022-11-28 16:52:58', NULL),
(67, 'Susy Afianti, S.P.', '197502112007012012', 'Samarinda', '1975-02-11', 'Perempuan', 'Jalan KS. Tubun Gang 3 No. 8 Rt 6 Samarinda', 'S1', 'III/d', 36, 83, 0, '2033-02-01', '-', '2022-10-17 00:28:16', '2022-11-28 16:53:33', NULL),
(68, 'Desi Setianingrum, S.P.', '198212162011012001', 'Tegal', '1982-12-16', 'Perempuan', 'Jl.Jl. M. Said Gg. 6 Blok H2, Kelurahan Lok Bahu, Kecamatan Sungai Kunjang, Samarinda', 'S1', 'III/c', 29, 84, 0, '2041-01-01', '-', '2022-10-17 00:32:31', '2022-11-28 16:54:02', NULL),
(69, 'Nurul Yuniarti, S.P.', '198406232011012001', 'Samarinda', '1984-06-23', 'Perempuan', 'Jl. Markisa No. 52 Rt. 08 Samarinda', 'S1', 'III/b', 28, 85, 0, '2042-07-01', '-', '2022-10-17 00:48:37', '2022-11-28 16:54:24', NULL),
(70, 'Rosiani S , S.E', '196901152007012025', 'Samarinda', '1969-01-15', 'Perempuan', 'Jl. Kedondong Dalam 1 No 23 voorfo segiri samarinda', 'S1', 'III/b', 36, 86, 0, '2027-02-01', '-', '2022-10-17 00:54:20', '2022-11-28 16:54:50', NULL),
(71, 'Andi Siti Arniwati , S. P', '197610212010012007', 'Samarinda', '1976-10-21', 'Perempuan', 'Jln. Gatot Subroto Gg. I RT. 44 No. 79 Samarinda', 'S1', 'III/b', 36, 87, 0, '2034-11-01', '-', '2022-10-17 00:58:13', '2022-11-28 16:55:45', NULL),
(72, 'Suwarjo , S.P.', '197207222008011007', 'Banjarmasin', '1972-07-22', 'Laki-laki', 'Pondok Sambutan Permai Blok. BD No.05 Rt.22 Samarinda', 'S1', 'III/b', 28, 88, 0, '2030-08-01', '-', '2022-10-17 01:03:22', '2022-11-28 16:56:09', NULL),
(73, 'Danny Rahmadi', '197312282001121002', 'Samarinda', '1973-12-28', 'Laki-laki', 'Jl. SIti Aisyah No. 16 RT. 15 Teluk Lerong Ilir Kec. Samarinda Ulu', 'SMA', 'III/b', 36, 89, 0, '2032-01-01', '-', '2022-10-17 01:08:57', '2022-11-28 16:56:48', NULL),
(74, 'Sofyan Hamdani', '197306172007011017', 'Samarinda', '1973-06-17', 'Laki-laki', 'Sirad Salman Perum Permata Hijau Blok B No. 13, Samarinda Kalimantan Timur', 'SMA', 'II/b', 36, 90, 0, '2031-07-01', '-', '2022-10-17 01:12:49', '2022-11-28 16:57:21', NULL),
(76, 'Carlos Perreira Da Silva, S.Hut.', '197210151993011002', 'Malabe', '1972-10-15', 'Laki-laki', 'Jalan P. Suryanata, Perum Graha Indah Blok AC No. 16, Air Putih - Samarinda', 'S1', 'III/d', 36, 91, 0, '2030-11-01', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA (31 Oktober 2014)', '2022-10-17 21:04:32', '2022-11-28 16:57:53', NULL),
(77, 'A. Dewi Kartika, SP.', '197911282009022004', 'Kab. Kutai Kartanegara', '1979-11-28', 'Perempuan', 'JL. PUYU NO. 22 RT. XIV KEL. TIMBAU TENGGARONG', 'S1', 'III/d', 36, 92, 0, '0001-01-01', '-', '2022-10-17 21:10:16', '2022-11-28 16:58:24', NULL),
(78, 'Reza Fahd Adrian, S.E.', '198210202010011019', 'Samarinda', '1982-10-20', 'Laki-laki', 'JL.M.T.Haryono Perum. Bukit Mediterania Cluster Spain Blok B5-23 Samarinda', 'S1', 'III/d', 36, 93, 0, '2040-11-10', '-', '2022-10-17 21:14:21', '2022-11-28 16:58:53', NULL),
(79, 'Mulyadi Agus', '197208202007011027', 'Samarinda', '1972-08-20', 'Laki-laki', 'Jl. Basuki Rahmat Gg.4 no.38 RT.15 Samarinda', 'SMA', 'II/d', 36, 94, 0, '2030-09-01', '-', '2022-10-17 21:19:21', '2022-11-28 16:59:30', NULL),
(80, 'Rustiyanti', '196802052007012022', 'Samarinda', '1968-02-05', 'Perempuan', 'Jl. Kelapa Gading 7 Gang Al Hoesni No. 6 RT. 15 Kelurahan Karang Anyar Kecamatan Sungai Kunjang Samarinda', 'SMA', 'II/d', 36, 95, 0, '2026-03-01', 'LEMHANAS (26 Agustus 2008)', '2022-10-17 21:23:33', '2022-11-28 17:00:02', NULL),
(81, 'Yani Muharlie', '197501182007011015', 'Samarinda', '1975-01-18', 'Laki-laki', 'Jl. Jakarta Perumahan Kopri Semanggi Blok J1 No 11 Sei Kunjang Samarinda', 'SMA', 'II/d', 36, 96, 0, '2033-02-01', '-', '2022-10-17 21:32:01', '2022-11-28 17:01:19', NULL),
(84, 'Rusdiansyah, S.Kom', '-', 'Samarinda', '1986-03-16', 'Laki-laki', '-', 'S1', '-', 38, 97, 2013, '0001-01-01', '-', '2022-10-19 17:23:59', '2022-11-28 17:03:02', NULL),
(86, 'Dimas Aprianur', '-', 'Samarinda', '1982-04-30', 'Laki-laki', '-', 'SMA', '-', 38, 98, 2014, '0001-01-01', '-', '2022-10-19 17:29:25', '2022-11-28 17:03:34', NULL),
(87, 'Ernawati', '-', 'Samarinda', '1994-09-23', 'Perempuan', '-', 'SMA', '-', 38, 99, 2016, '0001-01-01', '-', '2022-10-19 17:34:02', '2022-11-28 17:05:18', NULL),
(88, 'Kukuh Rizqi Liyadi', '-', 'Balikpapan', '1997-06-09', 'Laki-laki', '-', 'S1', '-', 38, 100, 2017, '0001-01-01', '-', '2022-10-19 17:36:11', '2022-11-28 17:04:44', NULL),
(89, 'Anisyahdina, SP', '-', 'Samarinda', '1995-07-18', 'Perempuan', '-', 'S1', '-', 38, 101, 2019, '0001-01-01', '-', '2022-10-19 17:37:47', '2022-11-28 17:06:56', NULL),
(90, 'Aulia Rizqi Pratama, S.Kom', '-', 'Samarinda', '1995-09-09', 'Laki-laki', '-', 'S1', '-', 38, 102, 2020, '0001-01-01', '-', '2022-10-19 17:41:50', '2022-11-28 17:07:23', NULL),
(91, 'M. Audi Yordana, S.Kom', '-', 'Samarinda', '1996-02-28', 'Laki-laki', '-', 'S1', '-', 38, 103, 2021, '0001-01-01', '-', '2022-10-19 17:44:24', '2022-11-28 17:08:05', NULL),
(92, 'Ilmi Jaini', '-', 'Samarinda', '1986-08-24', 'Laki-laki', '-', 'SMA', '-', 38, 104, 2015, '0001-01-01', '-', '2022-10-19 17:46:51', '2022-11-28 17:08:37', NULL),
(93, 'Muhammad Rafii Nur Fauzan, S.Hut', '-', 'Tarakan', '1997-01-28', 'Laki-laki', '-', 'S1', '-', 38, 105, 2019, '0001-01-01', '-', '2022-10-19 17:48:34', '2022-11-28 17:09:17', NULL),
(94, 'Deny Kurniawan', '-', 'Samarinda', '1993-07-20', 'Laki-laki', '-', 'S1', '-', 38, 106, 0, '0001-01-01', '-', '2022-10-19 17:53:41', '2022-11-28 17:09:52', NULL),
(95, 'Rizqi', '-', 'Samarinda', '1999-06-25', 'Laki-laki', '-', 'S1', '-', 38, 107, 0, '0001-01-01', '-', '2022-10-19 17:55:03', '2022-11-28 17:10:18', NULL),
(96, 'Liana Wulandari', '-', 'Banyuwangi', '1983-01-05', 'Perempuan', '-', 'SMA', '-', 38, 108, 2014, '0001-01-01', '-', '2022-10-19 17:57:03', '2022-11-28 17:10:45', NULL),
(97, 'Zepriadi Saputra, SE', '-', 'Padang Tae', '1990-09-04', 'Laki-laki', '-', 'S1', '-', 38, 109, 2009, '0001-01-01', '-', '2022-10-19 18:00:39', '2022-11-28 17:11:14', NULL),
(98, 'M. Ridi Pradana, S.IP', '-', 'Samarinda', '1993-07-22', 'Laki-laki', '-', 'S1', '-', 38, 110, 2021, '0001-01-01', '-', '2022-10-19 18:02:06', '2022-11-28 17:26:46', NULL),
(99, 'Rudi Sanjaya, S.Sos', '-', 'Samarinda', '1985-11-13', 'Laki-laki', '-', 'S1', '-', 38, 111, 2009, '0001-01-01', '-', '2022-10-19 18:03:37', '2022-11-28 17:27:33', NULL),
(100, 'Siti Rusiana, SP', '-', 'Muara Badak', '1986-12-07', 'Perempuan', '-', 'S1', '-', 38, 112, 2014, '0001-01-01', '-', '2022-10-19 18:08:54', '2022-11-28 17:28:02', NULL),
(101, 'Fatimatul Zahrah, SP', '-', 'Nunukan', '1992-07-07', 'Perempuan', '-', 'S1', '-', 38, 113, 2019, '0001-01-01', '-', '2022-10-19 18:11:04', '2022-11-28 17:28:31', NULL),
(102, 'Sri Novita, SP', '-', 'Tarakan', '1989-02-06', 'Perempuan', '-', 'S1', '-', 38, 114, 2013, '0001-01-01', '-', '2022-10-19 18:12:18', '2022-11-28 17:28:55', NULL),
(103, 'Aprilia Bella Rahmita Rifaini, SP', '-', 'Samarinda', '1996-04-13', 'Perempuan', '-', 'S1', '-', 38, 115, 2021, '0001-01-01', '-', '2022-10-19 18:21:37', '2022-11-28 17:29:21', NULL),
(104, 'Muhammad Maradona Dalis', '-', 'Samarinda', '1985-10-08', 'Laki-laki', '-', 'SMA', '-', 38, 116, 2015, '0001-01-01', '-', '2022-10-19 18:23:35', '2022-11-28 17:29:46', NULL),
(105, 'Amalia Zahirah Wardina, S.TP', '-', 'Samarinda', '1996-04-24', 'Perempuan', '-', 'S1', '-', 38, 117, 2019, '0001-01-01', '-', '2022-10-19 18:24:57', '2022-11-28 17:30:15', NULL),
(106, 'M. Adhytama Pahlevi,S.TP', '-', 'Samarinda', '1991-12-24', 'Laki-laki', '-', 'S1', '-', 38, 118, 2019, '0001-01-01', '-', '2022-10-19 18:27:05', '2022-11-28 17:33:00', NULL),
(107, 'Abdul Muthalib, SP', '-', 'Balikpapan', '1989-02-12', 'Laki-laki', '-', 'S1', '-', 38, 119, 2015, '0001-01-01', '-', '2022-10-19 18:28:55', '2022-11-28 17:34:13', NULL),
(108, 'Surya Windi Pratiwi, S.Sos', '-', 'Samarinda', '1996-04-04', 'Perempuan', '-', 'S1', '-', 38, 120, 2021, '0001-01-01', '-', '2022-10-19 18:30:38', '2022-11-28 17:34:53', NULL),
(109, 'HUSNUL KHOTIMAH, SP', '-', 'Samarinda', '1997-04-22', 'Perempuan', '-', 'S1', '-', 38, 121, 0, '0001-01-01', '-', '2022-10-19 18:32:39', '2022-11-28 17:35:26', NULL),
(110, 'FENNY RIA VERA  DEWI,SP', '-', 'Samarinda', '1990-09-02', 'Perempuan', '-', 'S1', '-', 38, 122, 0, '0001-01-01', '-', '2022-10-19 18:41:00', '2022-11-28 17:35:49', NULL),
(111, 'SYAHDIANNOR', '-', 'Banjarmasin', '1987-05-18', 'Laki-laki', '-', 'SMA', '-', 38, 123, 0, '0001-01-01', '-', '2022-10-19 18:43:41', '2022-11-28 17:36:28', NULL),
(112, 'M. FAJAR SATRIA', '-', 'Samarinda', '2002-08-11', 'Laki-laki', '-', 'SMA', '-', 38, 124, 0, '0001-01-01', '-', '2022-10-19 18:44:56', '2022-11-28 17:37:04', NULL),
(113, 'M. ANAS SOLIHIN,SP', '-', 'Sidomulyo', '1992-04-12', 'Laki-laki', '-', 'S1', '-', 38, 125, 0, '0001-01-01', '-', '2022-10-19 18:46:19', '2022-11-28 17:37:32', NULL),
(114, 'GITA MASLIANTY,SP', '-', 'Balikpapan', '1981-01-11', 'Perempuan', '-', 'S1', '-', 38, 126, 0, '0001-01-01', '-', '2022-10-19 18:47:52', '2022-11-28 17:40:08', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_cuti` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `lama_cuti` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`id`, `nama_pegawai_id`, `nip`, `jenis_cuti`, `tgl_mulai`, `tgl_akhir`, `lama_cuti`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 5, '196810071994032009', 'Cuti Tahunan', '2022-03-04', '2022-03-22', '13 Hari', '2022-10-15 01:27:35', '2022-10-15 08:08:01', NULL),
(3, 6, '196911261997032005', 'Cuti Besar', '2022-06-28', '2022-07-29', '32 Hari', '2022-10-15 08:46:58', '2022-10-15 08:46:58', NULL),
(4, 7, '196905141994032009', 'Cuti Tahunan', '2022-07-11', '2022-07-19', '7 Hari', '2022-10-15 09:02:08', '2022-10-15 09:02:08', NULL),
(5, 9, '196603281986012001', 'Cuti Tahunan', '2022-08-29', '2022-09-09', '10 Hari', '2022-10-15 09:16:45', '2022-10-15 09:16:45', NULL),
(6, 13, '196501191992122001', 'Cuti Tahunan', '2022-08-22', '2022-09-06', '12 Hari', '2022-10-15 09:58:16', '2022-10-15 09:58:16', NULL),
(7, 17, '197310142002122002', 'Cuti Tahunan', '2022-07-11', '2022-07-15', '5 Hari', '2022-10-15 10:28:47', '2022-10-15 10:28:47', NULL),
(8, 24, '197003242007012016', 'Cuti Tahunan', '2022-03-21', '2022-04-06', '13 Hari', '2022-10-15 23:53:44', '2022-10-15 23:53:44', NULL),
(9, 26, '197612102007012013', 'Cuti Tahunan', '2022-02-02', '2022-02-17', '12 Hari', '2022-10-16 00:41:28', '2022-10-16 00:41:28', NULL),
(10, 27, '198108032009012001', 'Cuti Tahunan', '2022-05-20', '2022-06-08', '12 Hari', '2022-10-16 00:51:15', '2022-10-16 00:51:15', NULL),
(11, 28, '199103102019032014', 'Cuti Tahunan', '2022-05-09', '2022-05-30', '14 Hari', '2022-10-16 01:00:08', '2022-10-16 01:00:08', NULL),
(12, 33, '197303272007011020', 'Cuti Tahunan', '2022-06-23', '2022-07-08', '12 Hari', '2022-10-16 02:05:29', '2022-10-16 02:05:29', NULL),
(13, 39, '197907051998031001', 'Cuti Tahunan', '2022-01-10', '2022-01-21', '10 Hari', '2022-10-16 05:29:21', '2022-10-16 05:29:21', NULL),
(14, 46, '196606042000031006', 'Cuti Tahunan', '2022-03-25', '2022-04-20', '18 Hari', '2022-10-16 17:50:04', '2022-10-16 17:50:04', NULL),
(15, 46, '196606042000031006', 'Cuti Alasan Penting', '2022-08-11', '2022-08-19', '9 Hari', '2022-10-16 17:51:04', '2022-10-16 17:51:04', NULL),
(16, 50, '197504012007011014', 'Cuti Tahunan', '2022-06-22', '2022-07-07', '13 Hari', '2022-10-16 18:14:59', '2022-10-16 18:14:59', NULL),
(17, 66, '196710221989032003', 'Cuti Tahunan', '2022-09-22', '2022-10-07', '12 Hari', '2022-10-17 00:25:47', '2022-10-17 00:25:47', NULL),
(18, 69, '198406232011012001', 'Cuti Tahunan', '2022-06-22', '2022-07-08', '13 Hari', '2022-10-17 00:51:16', '2022-10-17 00:51:16', NULL),
(19, 71, '197610212010012007', 'Cuti Tahunan', '2022-06-20', '2022-07-14', '18 Hari', '2022-10-17 01:00:47', '2022-10-17 01:00:47', NULL),
(20, 78, '198210202010011019', 'Cuti Tahunan', '2022-01-17', '2022-02-02', '12 Hari', '2022-10-17 21:17:02', '2022-10-17 21:17:02', NULL),
(21, 80, '196802052007012022', 'Cuti Tahunan', '2022-08-09', '2022-08-25', '12 Hari', '2022-10-17 21:26:58', '2022-10-17 21:26:58', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diklat`
--

CREATE TABLE `diklat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_diklat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `juklak_diklat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tempat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyelenggara` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_terlaksana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_sertifikat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `diklat`
--

INSERT INTO `diklat` (`id`, `nama_pegawai_id`, `nip`, `jenis_diklat`, `juklak_diklat`, `tempat`, `penyelenggara`, `jam_terlaksana`, `no_sertifikat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 4, '196905161993012001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BIRO PUSAT STATISTIK', 'BIRO PUSAT STATISTIK', '13 Juli 1997 - 16 Agustus 1997 (266 Jam)', '17263/ADUM/LAN/1997 (Tgl. 16 Agustus 1997)', '2022-10-15 01:10:52', '2022-11-21 01:25:35', NULL),
(6, 4, '196905161993012001', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'BADAN PUSAT STATISTIK', 'BADAN PUSAT STATISTIK', '02 Juli 2007 - 16 Agustus 2007 (360 Jam)', '2.807/II.23/DIKLATPIM TK. III/LAN/2007 (Tgl. 16 Agustus 2007)', '2022-10-15 01:12:13', '2022-11-21 01:25:54', NULL),
(7, 4, '196905161993012001', 'Diklat Struktural', 'DIKLAT PIM II / SESPA / SEPAMEN', 'Samarinda', 'Pusat Pelatihan dan Pengembangan dan Kajian Desentralisasi dan Otonomi Daerah', '22 Juli 2021 - 06 November 2021 (887 Jam)', '00001224/PKN/Tk. II/4012/016/LAN-LAN/2021 (Tgl. 08 November 2021)', '2022-10-15 01:13:22', '2022-11-21 01:26:28', NULL),
(8, 5, '196810071994032009', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'Bandiklat Prov. Kaltim', '22 Juni 1999 - 24 Juli 1999 (250 Jam)', '20114/ADUM/LAN/1999 (Tgl. 24 Juli 1999)', '2022-10-15 01:21:23', '2022-11-21 01:26:55', NULL),
(9, 5, '196810071994032009', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'Samarinda', 'Badan Pendidikan Dan Pelatihan Provinsi Kalimantan Timur', '20 September 2006 - 15 November 2006 (360 Jam)', '4.143/Diklatpim Tk. III/LAN/2006 (Tgl. 15 November 2006)', '2022-10-15 01:24:06', '2022-11-21 01:27:36', NULL),
(10, 5, '196810071994032009', 'Diklat Struktural', 'DIKLAT PIM II / SESPA / SEPAMEN', 'LAN RI JAKARTA', 'LAN RI JAKARTA', '17 September 2019 - 22 November 2019 (62 Jam)', '00000056/DIKLATPIM TK. II/P/4012/054/LAN-LAN/2019 (Tgl. 22 November 2019)', '2022-10-15 01:25:42', '2022-11-21 01:24:50', NULL),
(11, 6, '196911261997032005', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'Bandiklat Prov. Kaltim', '25 Juli 2000 - 31 Agustus 2000 (250 Jam)', '28432/ADUM/LAN/2000 (Tgl. 31 Agustus 2000)', '2022-10-15 08:42:34', '2022-11-21 01:25:13', NULL),
(12, 7, '196905141994032009', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BADAN DIKLAT PROVINSI KALTIM', 'DEPDAGRI', '22 Juni 1999 - 24 Juli 1999 (0 Jam)', '20160/ADUM/LAN/99 (Tgl. 24 Juli 1999)', '2022-10-15 08:55:46', '2022-10-15 08:55:46', NULL),
(13, 7, '196905141994032009', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'Samarinda', 'BADAN DIKLAT PROV. KALTIM', '20 September 2006 - 15 November 2006 (360 Jam)', '4.130/DIKLATPIM TK.III/LAN/200 (Tgl. 15 November 2006)', '2022-10-15 08:57:52', '2022-10-15 08:57:52', NULL),
(14, 8, '196909061990022001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarida, Kalimantan Timur', 'Badan Pendidikan dan Pelatihan Provinsi Kalimantan Timur', '15 Januari 2007 - 24 Februari 2007 (285 Jam)', '13.830/Diklatpim Tk.IV/LAN/2006 (Tgl. 26 Februari 2007)', '2022-10-15 09:07:30', '2022-10-15 09:07:30', NULL),
(15, 8, '196909061990022001', 'Diklat Fungsional', 'Bendaharawan', 'Samarinda', 'Pendidikan dan Latihan Propinsi Daerah Tingkat I K', '14 Desember 1993 - 31 Januari 1994 (205 Jam)', '2341201994 (Tgl. 31 Januari 1994)', '2022-10-15 09:09:00', '2022-10-15 09:09:00', NULL),
(16, 8, '196909061990022001', 'Diklat Fungsional', 'Pemegang Kas', 'Samarinda', 'Disperta bekerjasama dengan Bandiklat Prop. Kaltim', '25 November 2004 - 14 Desember 2004 (144 Jam Jam)', '006I202004 (Tgl. 14 Desember 2004)', '2022-10-15 09:10:09', '2022-10-15 09:10:09', NULL),
(17, 9, '196603281986012001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'BADAN DIKLAT PROV. KALTIM', '15 Januari 2007 - 24 Februari 2007 (285 Jam)', '13.823/DIKLATPIM TK IV/LAN/200 (Tgl. 26 Februari 2007)', '2022-10-15 09:14:38', '2022-10-15 09:14:38', NULL),
(18, 10, '197611202000032001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BADAN PENDIDIKAN dan PELATIHAN', 'Badan Diklat Provinsi Kaltim', '09 Agustus 2010 - 25 September 2010 (285 Jam)', '7.882/I.17/Diklatpim.Tk.IV/LAN/2010 (Tgl. 25 September 2010)', '2022-10-15 09:21:24', '2022-10-15 09:21:24', NULL),
(19, 11, '196601151991031010', 'Jenis Diklat', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'Badan Pengembangan Sumber Daya Manusia Provinsi Kalimantan Timur', '26 April 2021 - 23 Agustus 2021 (830 Jam)', '00003654/PKP/6900/012/LAN-PEMPROV KALTIM/2021 (Tgl. 06 September 2021)', '2022-10-15 09:31:04', '2022-10-15 09:31:04', NULL),
(20, 13, '196501191992122001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BADAN DIKLAT PROVINSI KALTIM', 'DEPDAGRI', '18 November 1998 - 19 Desember 1998 (0 Jam)', '878/ADUM/LAN/98 (Tgl. 19 Desember 1998)', '2022-10-15 09:54:32', '2022-10-15 09:54:32', NULL),
(21, 13, '196501191992122001', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'Badan Pendidikan dan Pelatihan', 'DEPDAGRI', '20 September 2006 - 15 November 2006 (360 Jam)', '4.131/Diklatpim Tk. III/LAN/2006 (Tgl. 15 November 2006)', '2022-10-15 09:55:55', '2022-10-15 09:55:55', NULL),
(22, 14, '197205282001122001', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Badan Diklat Samarinda', 'Angkatan III', '09 Agustus 2010 - 25 September 2010 (285 Jam)', '7903/1.17/DiklatpimtkIV/Lan/20 (Tgl. 25 September 2010)', '2022-10-15 10:03:21', '2022-10-15 10:03:21', NULL),
(23, 15, '197704302008012012', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'BPSDM Prov. Kaltim', '04 Agustus 2020 - 13 November 2020 (0 Jam)', 'x (Tgl. 13 November 2020)', '2022-10-15 10:11:08', '2022-10-15 10:11:08', NULL),
(24, 16, '197205041998032005', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'BANDIKLAT PROV KALTIM', '08 Juli 2003 - 18 Agustus 2003 (285 Jam)', '18891/DIKLATPIM TK.I (Tgl. 18 Agustus 2003)', '2022-10-15 10:17:19', '2022-10-15 10:17:19', NULL),
(25, 16, '197205041998032005', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'Samarinda', 'BANDIKLAT PROV KALTIM', '29 Desember 2006 - 21 Februari 2007 (0 Jam)', '7.194/1.19/DIKLATPIM TK.III/LA (Tgl. 21 Februari 2007)', '2022-10-15 10:18:26', '2022-10-15 10:18:26', NULL),
(26, 17, '197310142002122002', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Samarinda', 'Badan Pengembangan Sumber Daya Manusia Provinsi Kalimantan Timur', '26 April 2021 - 23 Agustus 2021 (830 Jam)', '00003674/PKP/6900/012/LAN-PEMPROV KALTIM/2021 (Tgl. 06 September 2021)', '2022-10-15 10:24:42', '2022-10-15 10:24:42', NULL),
(27, 17, '197310142002122002', 'Diklat Fungsional', 'Prajabatan Golongan III (Diklat Prajab III)', 'Kota Samarinda', 'Badan Diklat Provinsi Kaltim', '07 April 2003 - 26 April 2003 (135 Jam)', '11327?DIKLAT PRAJAB III/17/LAN/2003 (Tgl. 26 April 2003)', '2022-10-15 10:25:46', '2022-10-15 10:25:46', NULL),
(28, 17, '197310142002122002', 'Diklat Fungsional', 'Pemegang Kas', 'Kota Samarinda', 'Pemerintah Kota Samarinda bekerjasama dengan Badan', '15 Desember 2003 - 06 Januari 2004 (109 Jam)', '0001920200 (Tgl. 06 Januari 2004)', '2022-10-15 10:26:42', '2022-10-15 10:26:42', NULL),
(29, 18, '196606261989021002', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BADAN DIKLAT', 'BADAN DIKLAT', '22 Juli 1999 - 24 Juli 1999 (250 Jam)', '20120/ADUM/LAN/199 (Tgl. 17 Agustus 1999)', '2022-10-15 10:32:48', '2022-10-15 10:32:48', NULL),
(30, 20, '196507092000031003', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Badan Diklat Prov. Kaltim', 'Badan Diklat Prov. Kaltim', '20 Desember 2005 - 03 Februari 2006 (285 Jam)', '9.080/Diklatpim Tk. IV/LAN/2005 (Tgl. 07 Februari 2006)', '2022-10-15 10:42:03', '2022-10-15 10:42:03', NULL),
(31, 20, '196507092000031003', 'Diklat Fungsional', 'Manajemen Proyek', 'Dinas Pertanian Tanaman Pangan UPTD Balai Pelatiha', 'Dinas Pertanian Tanaman Pangan UPTD Balai Pelatiha', '01 September 2003 - 16 September 2003 (130 Jam)', '2833202003 (Tgl. 16 September 2003)', '2022-10-15 10:43:45', '2022-10-15 10:43:45', NULL),
(32, 20, '196507092000031003', 'Diklat Fungsional', 'Agribisnis Tanaman Kelapa Sawit', 'Balai Pelatihan Teknis Pertanian', 'Balai Pelatihan Teknis Pertanian', '26 September 2004 - 02 Oktober 2004 (56 Jam)', 'DT.10415/Pet/24/2004 (Tgl. 02 Oktober 2004)', '2022-10-15 10:44:36', '2022-10-15 10:44:36', NULL),
(33, 20, '196507092000031003', 'Diklat Fungsional', 'Pedoman Pengadaan Barang dan Jasa', 'Golden Boutique Hotel, Jakarta', 'Lembaga Pengembangan', '26 September 2005 - 28 September 2005 (- Jam)', '- (Tgl. 28 September 2005)', '2022-10-15 10:45:39', '2022-10-15 10:45:39', NULL),
(34, 20, '196507092000031003', 'Diklat Fungsional', 'Perhitungan Harga Perkiraan Sendiri (HPS)', 'Badan Diklat Prov. Kaltim', 'Badan Diklat Prov. Kaltim', '03 Juli 2012 - 09 Juli 2012 (40 Jam)', '275072012 (Tgl. 09 Juli 2012)', '2022-10-15 10:46:50', '2022-10-15 10:46:50', NULL),
(35, 22, '196501171993032005', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'BLPP SEMPAJA', 'DEPARTEMEN PERTANIAN', '07 November 1999 - 11 Desember 1999 (250 Jam)', '47677 (Tgl. 11 Desember 1991)', '2022-10-15 10:56:11', '2022-10-15 10:56:11', NULL),
(36, 22, '196501171993032005', 'Diklat Struktural', 'PKA / DIKLAT PIM III / SEPADYA / SEPAMA /', 'Samarinda', 'BANDIKLAT PROV. KALTIM', '19 Oktober 2009 - 07 Desember 2009 (360 Jam)', '4.625/DIKLATPIM TK.III/LAN/2009 (Tgl. 15 Desember 2009)', '2022-10-15 10:57:12', '2022-10-15 10:57:12', NULL),
(37, 23, '196603061989031021', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Bapeltan Sempaja', 'LXXVIII', '25 Oktober 1998 - 28 November 1998 (256 Jam)', '36948/ADUM/LAN/1998 (Tgl. 28 November 1998)', '2022-10-15 23:31:45', '2022-10-15 23:31:45', NULL),
(38, 26, '197612102007012013', 'Diklat Fungsional', 'BIMTEK PENERAPAN TEKNOLOGI PRODUK OLAHAN', 'Samarinda', 'DEPARTEMEN PERTANIAN RI', '30 September 2005 - 01 Oktober 2005 ( Jam)', '0000 (Tgl. 01 Oktober 2005)', '2022-10-16 00:14:33', '2022-10-16 00:14:33', NULL),
(39, 26, '197612102007012013', 'Diklat Fungsional', 'PENDIDIKAN DAN PELATIHAN PENGELOLAAN KEUANGAN NEGARA PADA PROGRAM PERCEPATAN AKUNTANBILITAS KEUANGAN', 'Jakarta', 'DEPARTEMEN KEUANGAN', '24 November 2008 - 14 Desember 2008 (146 Jam)', '508/PPA.01/DIKLAT/VI/II/2009 (Tgl. 11 Februari 2009)', '2022-10-16 00:16:12', '2022-10-16 00:16:12', NULL),
(40, 26, '197612102007012013', 'Diklat Fungsional', 'DIKLAT PRAJABATAN GOLONGAN I DAN II', 'Samarinda', 'BANDIKLAT PROV KALTIM', '21 April 2009 - 12 Mei 2009 (174 Jam)', '36.373/I.17/DIKLATPRAJAB/II/LAN/2009 (Tgl. 14 Mei 2009)', '2022-10-16 00:22:58', '2022-10-16 00:22:58', NULL),
(41, 26, '197612102007012013', 'Diklat Fungsional', 'PELATIHAN APLIKASI SISTEM AKUNTANSI INSTANSI(SAI) DAN PELAPORAN KEUANGAN/BARANG', 'BALIKPAPAN', 'UNIT AKUNTANSI PEMBANTU PENGGUNA ANGGARAN BARANG W', '13 Oktober 2010 - 15 Oktober 2010 ( Jam)', '0000 (Tgl. 15 Oktober 2010)', '2022-10-16 00:28:32', '2022-10-16 00:28:32', NULL),
(42, 26, '197612102007012013', 'Diklat Fungsional', 'BIMTEK PENERAPAN STANDAR AKUNTANSI PEMERINTAH (SAP PP NO.71 TAHUN 2010) YANG BERBASIS AKRUAL SECARA', 'ALL SEASON HOTEL JOGJAKARTA', 'EAGLE NUSA GLOBAL JOGJAKARTA', '05 September 2012 - 07 September 2012 ( Jam)', '132/I/ENG/IX/2012 (Tgl. 07 September 2012)', '2022-10-16 00:31:16', '2022-10-16 00:31:16', NULL),
(43, 26, '197612102007012013', 'Diklat Fungsional', 'BIMTEK PELAKSANAAN PERMENDAGRI NOMOR 64 TAHUN 2013 TENTANG PENERAPAN STANDAR AKUNTANSI PEMERINTAHAN', 'HOTEL OASIS AMIR JAKARTA', 'LKI DITJEN KESBANGPOL - KEMENDAGRI', '25 Juni 2014 - 26 Juni 2014 ( Jam)', 'S.18/LKI-DIKLAT/VI/2014 (Tgl. 26 Juni 2014)', '2022-10-16 00:32:46', '2022-10-16 00:32:46', NULL),
(44, 26, '197612102007012013', 'Diklat Fungsional', 'DIKLAT AKUNTANSI DAN PELAPORAN KEUANGAN BERBASIS AKRUAL DI LINGKUNGAN PEMPROV KALTIM', 'SAMARINDA', 'BANDIKLAT PROV KALTIM', '17 Mei 2016 - 23 Mei 2016 (50 Jam)', '059052016 (Tgl. 24 Mei 2016)', '2022-10-16 00:34:13', '2022-10-16 00:34:13', NULL),
(45, 26, '197612102007012013', 'Diklat Fungsional', 'WORKSHOP OTOMASI PERPUSTAKAAN DAN JARINGAN PERPUSTAKAAN DIGITAL KALIMANTAN TIMUR', 'BALIKPAPAN', 'DINAS PERPUSTAKAAN DAN KEARSIPAN DAERAH PROVINSI K', '02 Mei 2018 - 03 Mei 2018 ( Jam)', '58/DPKD/BLOK/2018 (Tgl. 03 Mei 2018)', '2022-10-16 00:37:10', '2022-10-16 00:37:10', NULL),
(46, 42, '197501292007011003', 'Diklat Fungsional', 'Diklat Prajabatan Gol I dan II', 'Badan Diklat Prov. Kaltim', 'Badan Diklat Prov. Kaltim', '08 Oktober 2008 - 28 Oktober 2008 (174 jam Jam)', '136.493/I.17/DIKLAT PRAJAB II/2017 (Tgl. 31 Oktober 2008)', '2022-10-16 05:45:51', '2022-10-16 05:45:51', NULL),
(47, 57, '197404062001121005', 'Diklat Fungsional', 'Apresiasi Manajemen SABMN Tingkat Propinsi dan Pusat', 'Pusat Manajemen Pengembangan SDM Pertanian, Ciawi', 'Badan Pengembangan SDM Pertanian, Kementerian Pert', '25 Maret 2007 - 29 Maret 2007 (50 Jam)', 'no. 24/SABMN/Ket/02/2007 - 0213666 (Tgl. 29 Maret 2007)', '2022-10-16 23:37:35', '2022-10-16 23:37:35', NULL),
(48, 68, '198212162011012001', 'Diklat Fungsional', 'Diklat Dasar Pengawas Mutu Hasil Pertanian', 'BBPP Lembang', 'BPPSDMP', '28 November 2012 - 14 Desember 2012 (168 Jam)', '810/SM.530/J.3/12/2012-19 (Tgl. 14 Desember 2012)', '2022-10-17 00:33:44', '2022-10-17 00:33:44', NULL),
(49, 72, '197207222008011007', 'Diklat Fungsional', 'Bimbingan Teknis Petugas Pengambil Contoh', 'Yogyakarta', 'Direktorat Jenderal Pengolahan dan Pemasaran Hasil', '03 Mei 2015 - 08 Mei 2015 (20 Jam)', 'No : 412/PP.210/G.4.3/5/2015 (Tgl. 08 Mei 2015)', '2022-10-17 01:04:49', '2022-10-17 01:04:49', NULL),
(50, 76, '197210151993011002', 'Diklat Struktural', 'PKP / DIKLAT PIM IV / SEPADA / SEPALA/ ADUM / ADUMLA', 'Badan Diklat Prov.Kaltim', 'BKD Prov. Kaltim', '11 Juli 2014 - 31 Oktober 2014 (881 Jam)', '00004569/DIKLATPIM TK.IV/64/6472/LAN/2014 (Tgl. 31 Oktober 2014)', '2022-10-17 21:05:59', '2022-10-17 21:05:59', NULL),
(51, 80, '196802052007012022', 'Diklat Struktural', 'LEMHANAS', 'Badan Diklat', 'Badan Kepegawaian Daerah', '05 Agustus 2008 - 26 Agustus 2008 (174 Jam)', '110,769/1.17?DIKLAT PRAJAB II/LAN/2008 (Tgl. 29 Agustus 2008)', '2022-10-17 21:25:09', '2022-10-17 21:25:09', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai_id` bigint(20) UNSIGNED NOT NULL,
  `nip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bulan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id`, `nama_pegawai_id`, `nip`, `tmt`, `bulan`, `tahun`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 4, '196905161993012001', 'Genap', '12', 2022, '2022-10-15 01:15:29', '2022-10-15 01:15:29', NULL),
(3, 5, '196810071994032009', 'Genap', '4', 2022, '2022-10-15 01:26:24', '2022-10-16 05:51:36', NULL),
(4, 6, '196911261997032005', 'Ganjil', '3', 2022, '2022-10-15 08:43:47', '2022-10-15 08:43:47', NULL),
(5, 7, '196905141994032009', 'Genap', '3', 2022, '2022-10-15 08:59:25', '2022-10-15 08:59:25', NULL),
(6, 9, '196603281986012001', 'Ganjil', '1', 2023, '2022-10-15 09:15:24', '2022-10-15 09:15:24', NULL),
(7, 10, '197611202000032001', 'Genap', '3', 2022, '2022-10-15 09:22:21', '2022-10-15 09:22:21', NULL),
(8, 11, '196601151991031010', 'Ganjil', '9', 2023, '2022-10-15 09:32:27', '2022-10-15 09:32:27', NULL),
(9, 12, '196610172006042003', 'Genap', '5', 2022, '2022-10-15 09:37:22', '2022-10-15 09:37:22', NULL),
(10, 14, '197205282001122001', 'Ganjil', '8', 2023, '2022-10-15 10:04:23', '2022-10-15 10:04:23', NULL),
(11, 15, '197704302008012012', 'Ganjil', '3', 2023, '2022-10-15 10:12:25', '2022-10-15 10:12:25', NULL),
(12, 16, '197205041998032005', 'Genap', '3', 2022, '2022-10-15 10:19:23', '2022-10-15 10:19:23', NULL),
(13, 17, '197310142002122002', 'Ganjil', '8', 2023, '2022-10-15 10:27:36', '2022-10-15 10:27:36', NULL),
(14, 18, '196606261989021002', 'Genap', '2', 2022, '2022-10-15 10:33:34', '2022-10-15 10:33:34', NULL),
(15, 19, '197112251997031005', 'Ganjil', '3', 2023, '2022-10-15 10:38:06', '2022-10-15 10:38:06', NULL),
(16, 21, '197504232007012020', 'Genap', '1', 2022, '2022-10-15 10:51:04', '2022-10-15 10:51:04', NULL),
(17, 23, '196603061989031021', 'Ganjil', '3', 2023, '2022-10-15 23:35:08', '2022-10-15 23:35:08', NULL),
(18, 24, '197003242007012016', 'Genap', '7', 2022, '2022-10-15 23:51:10', '2022-10-15 23:51:10', NULL),
(19, 25, '197003122007012033', 'Genap', '7', 2022, '2022-10-16 00:07:16', '2022-10-16 00:07:16', NULL),
(20, 26, '197612102007012013', 'Ganjil', '6', 2023, '2022-10-16 00:39:39', '2022-10-16 00:39:39', NULL),
(21, 27, '198108032009012001', 'Ganjil', '5', 2023, '2022-10-16 00:48:42', '2022-10-16 00:48:42', NULL),
(22, 28, '199103102019032014', 'Ganjil', '3', 2023, '2022-10-16 00:57:33', '2022-10-16 00:57:33', NULL),
(23, 29, '197211012007011011', 'Genap', '7', 2022, '2022-10-16 01:08:30', '2022-10-16 01:08:30', NULL),
(24, 30, '198105142009011002', 'Ganjil', '5', 2023, '2022-10-16 01:22:42', '2022-10-16 01:22:42', NULL),
(25, 31, '196804171994032016', 'Genap', '4', 2022, '2022-10-16 01:36:22', '2022-10-16 01:36:22', NULL),
(26, 32, '198612042011012001', 'Ganjil', '1', 2023, '2022-10-16 01:50:53', '2022-10-16 01:50:53', NULL),
(27, 33, '197303272007011020', 'Genap', '4', 2022, '2022-10-16 02:01:10', '2022-10-16 02:01:10', NULL),
(28, 34, '199504202018082001', 'Genap', '8', 2022, '2022-10-16 02:20:52', '2022-10-16 02:20:52', NULL),
(29, 35, '197402242007012007', 'Genap', '10', 2022, '2022-10-16 04:27:35', '2022-10-16 04:27:35', NULL),
(30, 35, '197402242007012007', 'Genap', '10', 2022, '2022-10-16 04:27:38', '2022-10-16 04:27:38', NULL),
(31, 36, '197712162009012001', 'Genap', '10', 2022, '2022-10-16 04:36:19', '2022-10-16 04:36:19', NULL),
(32, 37, '197504032007012018', 'Genap', '-', 2022, '2022-10-16 04:42:57', '2022-10-16 04:42:57', NULL),
(33, 38, '197102132007011009', 'Ganjil', '6', 2023, '2022-10-16 04:48:08', '2022-10-16 04:48:08', NULL),
(34, 39, '197907051998031001', 'Ganjil', '3', 2023, '2022-10-16 05:26:37', '2022-10-16 05:26:37', NULL),
(35, 40, '198104282010012015', 'Ganjil', '1', 2023, '2022-10-16 05:36:07', '2022-10-16 05:36:07', NULL),
(36, 41, '197305252001122003', 'Ganjil', '12', 2023, '2022-10-16 05:41:12', '2022-10-16 05:41:12', NULL),
(37, 42, '197501292007011003', 'Genap', '4', 2022, '2022-10-16 05:46:50', '2022-10-16 05:46:50', NULL),
(38, 43, '197212042007011017', 'Genap', '5', 2022, '2022-10-16 05:50:26', '2022-10-16 05:50:26', NULL),
(39, 44, '196607261994032004', 'Ganjil', '3', 2023, '2022-10-16 17:38:59', '2022-10-16 17:38:59', NULL),
(40, 45, '196912181992032006', 'Ganjil', '4', 2023, '2022-10-16 17:44:16', '2022-10-16 17:44:16', NULL),
(41, 46, '196606042000031006', 'Genap', '4', 2022, '2022-10-16 17:48:31', '2022-10-16 17:48:31', NULL),
(42, 47, '197510012000031003', 'Ganjil', '5', 2023, '2022-10-16 17:57:19', '2022-10-16 17:57:19', NULL),
(43, 48, '196610182001122001', 'Genap', '4', 2022, '2022-10-16 18:01:51', '2022-10-16 18:01:51', NULL),
(44, 49, '196603092001121004', 'Genap', '10', 2022, '2022-10-16 18:08:30', '2022-10-16 18:08:30', NULL),
(45, 50, '197504012007011014', 'Ganjil', '4', 2023, '2022-10-16 18:13:11', '2022-10-16 18:13:11', NULL),
(46, 51, '197504172007011012', 'Ganjil', '4', 2023, '2022-10-16 18:18:15', '2022-10-16 18:18:15', NULL),
(47, 52, '197210142007011009', 'Ganjil', '5', 2023, '2022-10-16 18:24:29', '2022-10-16 18:24:29', NULL),
(48, 53, '196708082007011028', 'Genap', '11', 2022, '2022-10-16 18:31:39', '2022-10-16 18:31:39', NULL),
(49, 54, '198301072009032011', 'Ganjil', '4', 2023, '2022-10-16 23:23:39', '2022-10-16 23:23:39', NULL),
(50, 55, '198406182009032008', 'Ganjil', '3', 2023, '2022-10-16 23:28:28', '2022-10-16 23:28:28', NULL),
(51, 56, '197202121999031005', 'Ganjil', '4', 2023, '2022-10-16 23:33:09', '2022-10-16 23:33:09', NULL),
(52, 57, '197404062001121005', 'Genap', '12', 2022, '2022-10-16 23:38:17', '2022-10-16 23:38:17', NULL),
(53, 58, '196905102007011045', 'Genap', '5', 2022, '2022-10-16 23:42:01', '2022-10-16 23:42:01', NULL),
(54, 59, '197304032007011024', 'Ganjil', '5', 2023, '2022-10-16 23:52:45', '2022-10-16 23:52:45', NULL),
(55, 60, '197705262008011015', 'Genap', '1', 2022, '2022-10-16 23:57:12', '2022-10-16 23:57:12', NULL),
(56, 61, '197912142008011015', 'Ganjil', '11', 2022, '2022-10-17 00:00:44', '2022-10-17 00:00:44', NULL),
(57, 62, '197303112009011002', 'Ganjil', '3', 2023, '2022-10-17 00:04:52', '2022-10-17 00:04:52', NULL),
(58, 63, '197109202010012001', 'Ganjil', '7', 2023, '2022-10-17 00:08:15', '2022-10-17 00:08:15', NULL),
(59, 64, '197810232014011001', 'Ganjil', '5', 2023, '2022-10-17 00:12:16', '2022-10-17 00:12:16', NULL),
(60, 65, '196906302007011016', 'Genap', '2', 2022, '2022-10-17 00:16:23', '2022-10-17 00:16:23', NULL),
(61, 66, '196710221989032003', 'Genap', '3', 2022, '2022-10-17 00:24:38', '2022-10-17 00:24:38', NULL),
(62, 68, '198212162011012001', 'Ganjil', '1', 2023, '2022-10-17 00:34:21', '2022-10-17 00:34:21', NULL),
(63, 69, '198406232011012001', 'Ganjil', '1', 2023, '2022-10-17 00:49:38', '2022-10-17 00:49:38', NULL),
(64, 70, '196901152007012025', 'Genap', '4', 2022, '2022-10-17 00:55:03', '2022-10-17 00:55:03', NULL),
(65, 71, '197610212010012007', 'Genap', '1', 2022, '2022-10-17 00:59:01', '2022-10-17 00:59:01', NULL),
(66, 72, '197207222008011007', 'Ganjil', '2', 2023, '2022-10-17 01:05:32', '2022-10-17 01:05:32', NULL),
(67, 73, '197312282001121002', 'Ganjil', '12', 2022, '2022-10-17 01:10:08', '2022-10-17 01:10:08', NULL),
(68, 74, '197306172007011017', 'Ganjil', '9', 2023, '2022-10-17 01:13:35', '2022-10-17 01:13:35', NULL),
(69, 76, '197210151993011002', 'Ganjil', '8', 2023, '2022-10-17 21:06:59', '2022-10-17 21:06:59', NULL),
(70, 78, '198210202010011019', 'Genap', '1', 2024, '2022-10-17 21:15:45', '2022-10-17 21:15:45', NULL),
(71, 79, '197208202007011027', 'Genap', '2', 2022, '2022-10-17 21:20:07', '2022-10-17 21:20:07', NULL),
(72, 80, '196802052007012022', 'Ganjil', '4', 2023, '2022-10-17 21:25:48', '2022-10-17 21:25:48', NULL),
(73, 81, '197501182007011015', 'Genap', '5', 2022, '2022-10-17 21:32:35', '2022-10-17 21:32:35', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jabatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_jabatan_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama_jabatan`, `jenis_jabatan_id`, `created_at`, `updated_at`) VALUES
(7, 'Kepala Dinas', 1, '2022-10-14 19:26:41', '2022-10-14 19:26:41'),
(8, 'Sekretaris', 1, '2022-10-14 19:27:32', '2022-10-14 19:27:32'),
(9, 'Kabid. Produksi Tanaman Pangan', 1, '2022-10-14 19:28:06', '2022-10-14 19:28:06'),
(10, 'Kabid. Produksi Hortikultura', 1, '2022-10-14 19:28:30', '2022-10-14 19:28:30'),
(11, 'Kabid. Ketersediaan dan Distribusi Pangan', 1, '2022-10-14 19:28:57', '2022-10-14 19:28:57'),
(12, 'Kabid. Konsumsi dan Keamanan Pangan', 1, '2022-10-14 19:29:34', '2022-10-14 19:29:34'),
(13, 'Kasubbag. Perencanaan Program', 1, '2022-10-14 19:29:59', '2022-10-14 19:29:59'),
(14, 'Kasubbag. Umum', 1, '2022-10-14 19:30:18', '2022-10-14 19:30:18'),
(15, 'Kasubbag. Keuangan', 1, '2022-10-14 19:30:38', '2022-10-14 19:30:38'),
(16, 'Kasi. Sarana dan Prasarana Tanmanan Pangan', 1, '2022-10-14 19:30:59', '2022-10-14 19:30:59'),
(17, 'Kasi. Sarana dan Prasarana Hortikultura', 1, '2022-10-14 19:31:22', '2022-10-14 19:31:22'),
(18, 'Kasi. Harga Pangan', 1, '2022-10-14 19:31:42', '2022-10-14 19:31:42'),
(19, 'Kasi. Penganekaragaman Pangan', 1, '2022-10-14 19:32:01', '2022-10-14 19:32:01'),
(20, 'Kasi. Pengembangan Produksi Tanaman Pangan', 1, '2022-10-14 19:32:20', '2022-10-14 19:32:20'),
(21, 'Kasi. Pengembangan Produksi Hortikultura', 1, '2022-10-14 19:32:38', '2022-10-14 19:32:38'),
(22, 'Kasi. Ketersediaan dan Kerawanan Pangan', 1, '2022-10-14 19:32:55', '2022-10-14 19:32:55'),
(23, 'Kasi. Konsumsi Pangan', 1, '2022-10-14 19:33:14', '2022-10-14 19:33:14'),
(24, 'Kasi. Pasca Panen, Pengolahan Hasil dan Pemasaran Tanaman Pangan', 1, '2022-10-14 19:33:40', '2022-10-14 19:33:40'),
(25, 'Kasi. Pasca Panen, Pengolahan Hasil dan Pemasaran Tanaman Hortikultura', 1, '2022-10-14 19:34:06', '2022-10-14 19:34:06'),
(26, 'Kasi. Distribusi dan Cadangan Pangan', 1, '2022-10-14 19:34:23', '2022-10-14 19:34:23'),
(27, 'Kasi. Keamanan dan Kelembagaan Pangan', 1, '2022-10-14 19:34:45', '2022-10-14 19:34:45'),
(28, 'Ahli Pertama', 3, '2022-10-14 19:35:27', '2022-10-14 19:35:27'),
(29, 'Ahli Muda', 3, '2022-10-14 19:35:44', '2022-10-14 19:35:44'),
(30, 'Ahli Madya', 3, '2022-10-14 19:36:10', '2022-10-14 19:36:10'),
(31, 'Ahli Utama', 3, '2022-10-14 19:36:31', '2022-10-14 19:36:31'),
(32, 'Terampil', 3, '2022-10-14 19:37:37', '2022-10-14 19:37:37'),
(33, 'Penyelia', 3, '2022-10-14 19:37:51', '2022-10-14 19:37:51'),
(34, 'Pemula', 3, '2022-10-14 19:38:14', '2022-10-14 19:38:14'),
(35, 'Mahir', 3, '2022-10-14 19:38:34', '2022-10-14 19:38:34'),
(36, '-', 4, '2022-10-15 23:27:02', '2022-10-15 23:27:02'),
(38, '-', 6, '2022-10-19 07:50:01', '2022-10-19 07:50:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisjabatan`
--

CREATE TABLE `jenisjabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_jabatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenisjabatan`
--

INSERT INTO `jenisjabatan` (`id`, `jenis_jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Struktural', '2022-10-13 23:54:00', '2022-10-13 23:54:00'),
(3, 'Fungsional', '2022-10-14 00:00:19', '2022-10-14 00:00:19'),
(4, 'Pelaksana', '2022-10-14 00:00:27', '2022-10-14 00:00:27'),
(6, 'Non ASN', '2022-10-19 07:49:10', '2022-10-19 07:49:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_13_050005_create_jenisjabatan', 1),
(6, '2022_10_13_051902_create_jabatan', 1),
(7, '2022_10_14_023328_create_biodata', 1),
(8, '2022_10_14_023445_create_cuti', 1),
(9, '2022_10_14_023554_create_gaji', 1),
(10, '2022_10_14_023653_create_diklat', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Aplikasi', 'admin', 'admin@gmail.com', NULL, '$2y$10$1WUpxvOrW6Tce9pGcRtm6eG23JJoIsFWazpPu9OzYYRxuNTntcFlS', 'EXF7ruJs6qzYL73qCwRWhZ5quQBD0NLWLj8dH3ITS7GxHV5ntS6VQNyxaeUX', '2022-10-13 23:22:30', '2022-10-13 23:22:30'),
(17, 'Siti Farisyah Yana', 'user', 'yana@gmail.com', NULL, '$2y$10$i7Nor9F/yy6Zy/X7VamgQu8lH05in2Gg6XHEgQSCrvXP3eL3I/tMm', NULL, '2022-10-27 19:55:36', '2022-10-27 19:55:36'),
(20, 'Rini Susilawati', 'user', 'susilawati@gmail.com', NULL, '$2y$10$.OF1WEv0MMg9c0xEcVgtx.p6qb7635Y6rA6jUKqL4Z.joAkydGXn6', NULL, '2022-10-28 06:31:04', '2022-10-28 06:31:04'),
(21, 'Rika Nuzli Furkanti', 'user', 'furkanti@gmail.com', NULL, '$2y$10$CKyBpzocIkD/obp6yGfOhuSPMylQDMiOufTTcXbpy29IiKzHHwurK', NULL, '2022-10-28 06:34:12', '2022-10-28 06:34:12'),
(22, 'Diah Adiaty Yahya', 'user', 'adiaty@gmail.com', NULL, '$2y$10$ldgxRU.m5duxob6ftMRHPOh1lIy7zbMYHaE.0NDkDZlR9v/yUNwFa', NULL, '2022-10-28 06:35:51', '2022-10-28 06:35:51'),
(23, 'Tanti Subandiyah', 'user', 'subandiyah@gmail.com', NULL, '$2y$10$uuCboAraBWkCfN9qp9T/aO7a6PVtB1LbE/Scyd0xVj7EoH9YWvwra', NULL, '2022-10-28 06:37:49', '2022-10-28 06:37:49'),
(24, 'Hj. Sumini', 'user', 'sumini@gmail.com', NULL, '$2y$10$Mi.iDjUKz4xE/i./1JxInumBwLFMpFPOFJmNO8R5ulaY9ITp/tL/W', NULL, '2022-10-28 06:40:42', '2022-10-28 06:40:42'),
(25, 'Zulfi Silviastuti', 'user', 'silviastuti@gmail.com', NULL, '$2y$10$PGiSPqP11E50mS4pOkp2gO7SC/aujU68s.MAL4ncrsw0CnubfkBOu', NULL, '2022-10-28 06:42:21', '2022-10-28 06:42:21'),
(26, 'Budi Harsono', 'user', 'harsono@gmail.com', NULL, '$2y$10$L6GVGpUKCK.GfCf.vop6P.yasaVVxVG8YsPHLs8RqNIuaqfmH.4nK', NULL, '2022-10-28 06:43:55', '2022-10-28 06:43:55'),
(27, 'Samsuriaty', 'user', 'suriaty@gmail.com', NULL, '$2y$10$6y6f2X0tRvzeKSM662oLVebJNYl0j8KiNctTx83V/2Ds6nJf09cJO', NULL, '2022-10-28 06:45:29', '2022-10-28 06:45:29'),
(28, 'Elyna Tri Yanuati', 'user', 'yanuati@gmail.com', NULL, '$2y$10$bXxBPRKJgbXJ/Kdc7OVtWO4HH2hKGNIwy8Im8klec16gFeDBaO08K', NULL, '2022-10-28 06:47:16', '2022-10-28 06:47:16'),
(29, 'Siti Mayasari', 'user', 'mayasari@gmail.com', NULL, '$2y$10$CbTR42YDgIT5z8KRyGsHJ.nDCuq2KYF8PUPn66RZ.IsYTF6R5mz6W', NULL, '2022-10-28 06:49:11', '2022-10-28 06:49:11'),
(30, 'Irma Masrurah', 'user', 'masrurah@gmail.com', NULL, '$2y$10$XIFVsXwDWfqnyF5/qnZ6tu/MCl2BhJ6jo.nn1MdbkJiz7KLzB0JFK', NULL, '2022-10-28 06:51:15', '2022-10-28 06:51:15'),
(32, 'Amaylia Dina Widyastuti', 'user', 'widyastuti@gmail.com', NULL, '$2y$10$zcStHgMoVUAMZK1TCn8mEeRii.hciQ4gxT7LicTEEq3eiarq90wfm', NULL, '2022-10-28 07:36:09', '2022-10-28 07:36:09'),
(33, 'Nurul Fitriani', 'user', 'fitriani@gmail.com', NULL, '$2y$10$.vJikF1qNIkjhVI/mYvIdOeA/d3P.k67WTpLNYaRBJVy3y.ZCpYjS', NULL, '2022-10-28 19:29:19', '2022-10-28 19:29:19'),
(34, 'Mirono', 'user', 'mirono@gmail.com', NULL, '$2y$10$n3eHatHOHwGyXgqhHU.dQuf53M.y6maHchroTn/Hcg4JiosQa2Qy2', NULL, '2022-10-28 19:33:55', '2022-10-28 19:33:55'),
(35, 'Alfian', 'user', 'alfian@gmail.com', NULL, '$2y$10$9.hhzdez1mmAT9oowDa3WOQ6zbwg7bvcfXMUwJQGQtU3s377GmIw.', NULL, '2022-10-28 19:36:01', '2022-10-28 19:36:01'),
(36, 'Suprianto', 'user', 'suprianto@gmail.com', NULL, '$2y$10$TGZ31diDb7.7gwBg2Ttj6.munEWpMn3uTOb/8kD2zLW9Fhqb72/ES', NULL, '2022-10-28 19:42:02', '2022-10-28 19:42:02'),
(37, 'Sri Wahyuni', 'user', 'wahyuni@gmail.com', NULL, '$2y$10$3DJrXzjAo0DqUkL/61/1Y.f7IPLAe6eVpM2NZ2raiRhjGKSYYRZ0m', NULL, '2022-10-28 19:43:37', '2022-10-28 19:43:37'),
(38, 'Sri Arida Bahmi', 'user', 'bahmi@gmail.com', NULL, '$2y$10$HF23ORghECoNNM/Te586GO9EZK1pznOxP4XgOjRULTApH.KcwplhS', NULL, '2022-10-28 23:23:02', '2022-10-28 23:23:02'),
(39, 'Yulius Mangaku Sande', 'user', 'sande@gmail.com', NULL, '$2y$10$afEAHXtR6Z11gDxjz8QVY.OSv/C1h.ZYX4W9SpcxyA.OER3VZZZGi', NULL, '2022-10-28 23:25:09', '2022-10-28 23:25:09'),
(40, 'Lina Ariani', 'user', 'ariani@gmail.com', NULL, '$2y$10$NolP5Vd6VdJjE/Me.25XDuHQHjz/zhHxzgbXBbdSO/YMautccGfc.', NULL, '2022-10-28 23:26:15', '2022-10-28 23:26:15'),
(41, 'Juraidah', 'user', 'jurai@gmail.com', NULL, '$2y$10$g3Riaryco8apdUbL7TezhOUmvlJcKC4SS/XpLONDXvkTaWM5tcnA2', NULL, '2022-10-28 23:27:05', '2022-10-28 23:27:05'),
(42, 'Nur Suanti', 'user', 'suanti@gmail.com', NULL, '$2y$10$3XBzrS4nL4W01.EHHBTePucF4Hki4UgvfE2pGsod87GyyDkcTwkTm', NULL, '2022-10-28 23:28:11', '2022-10-28 23:28:11'),
(43, 'Rini Indriati', 'user', 'indriati@gmail.com', NULL, '$2y$10$rVNmJC0TJ/B4pvr6clzJgeubuHuAY8CifTCKx.Fi/5pc5GKHQY2fm', NULL, '2022-10-28 23:29:37', '2022-10-28 23:29:37'),
(44, 'Vita Nur Fatimah', 'user', 'fatimah@gmail.com', NULL, '$2y$10$rb/kVj098VFeBiXHEuYPmu3HagecmAIr2Tmo4QDp8XwaRq4jwQXzy', NULL, '2022-10-28 23:31:18', '2022-10-28 23:31:18'),
(45, 'Fitriansyah', 'user', 'syah@gmail.com', NULL, '$2y$10$F3ljTgXdc7ANPFNw4/3sAesbNNATQQYynnppwrSHCZQX9BwB3Enp6', NULL, '2022-10-28 23:38:22', '2022-10-28 23:38:22'),
(46, 'Rusmanaji', 'user', 'aji@gmail.com', NULL, '$2y$10$lkZQUGl00GjNNG08nzbH9O5U3DqctrxlhOHwVTZkENN8eLJY/5jYK', NULL, '2022-10-28 23:39:58', '2022-10-28 23:39:58'),
(47, 'Supini', 'user', 'supini@gmail.com', NULL, '$2y$10$LRdQVyEIzpkh5IosuWak3.zjiv00BKvKZOSjo1OX1cZVmCJhP6Fz.', NULL, '2022-10-28 23:41:20', '2022-10-28 23:41:20'),
(48, 'Netty Rosidah', 'user', 'rosidah@gmail.com', NULL, '$2y$10$mADv4jvDJluMTRgcSpAaCO2I9zFIXMLZjzhHUduAe/91W0yGtNDyi', NULL, '2022-10-28 23:42:56', '2022-10-28 23:42:56'),
(49, 'Dedi Gunawan', 'user', 'gunawan@gmail.com', NULL, '$2y$10$yft5Zl5evf3NJx91vbPCDe5uJRHuc0zShCyEEZb8rNUKzItEgqLjG', NULL, '2022-10-28 23:44:36', '2022-10-28 23:44:36'),
(50, 'Eka Ratna Amelia', 'user', 'ratna@gmail.com', NULL, '$2y$10$7aTOsCO1XUVBAxj.aeGEWOLl4vL34uSN3OKi2.bdMLo1LmiqdT3nK', NULL, '2022-10-28 23:46:42', '2022-10-28 23:46:42'),
(51, 'Susy Purwantie', 'user', 'purwantie@gmail.com', NULL, '$2y$10$iQHPY5Cb3vcfGsYJcHCSgOKmxRyKmlMBX0m/M7mZhXwJ1yIGqI.ei', NULL, '2022-10-28 23:48:11', '2022-10-28 23:48:11'),
(52, 'Hernita', 'user', 'nita@gmail.com', NULL, '$2y$10$hExJ5f2aviwbzZd05TTrHenqon7tzqBP00X12dfn418JqViqWYDj6', NULL, '2022-10-28 23:50:20', '2022-10-28 23:50:20'),
(53, 'Jamiatul Adawiyah', 'user', 'adawiyah@gmail.com', NULL, '$2y$10$Zg7wLi4JxykI6MmQoBcjdes9pDnSo4wWBURpjZc16rmlRyNm3K7Xq', NULL, '2022-10-28 23:51:32', '2022-10-28 23:51:32'),
(54, 'Ridho Tantawi', 'user', 'tantawi@gmail.com', NULL, '$2y$10$cSFg1fNawpfyUO2DJAKbs.MRrrT8biQGeVSXPsC5FE6yV3vUDsHd.', NULL, '2022-10-28 23:53:13', '2022-10-28 23:53:13'),
(55, 'Hefni Rahman', 'user', 'rahman@gmail.com', NULL, '$2y$10$YHfcm9yMKK1WoEcWhfUqw.ginsolwTTIOImpx0B9xpgMm7cTiNdui', NULL, '2022-10-29 00:00:09', '2022-10-29 00:00:09'),
(56, 'Widya Kusuma Dewi', 'user', 'kusuma@gmail.com', NULL, '$2y$10$q5Yfz30111VjMKFOAdFZPOI8fEw0WwMNP4pekLi97iJAWZDIiNQmm', NULL, '2022-10-29 00:01:36', '2022-10-29 00:01:36'),
(57, 'Reni Rosita', 'user', 'rosita@gmail.com', NULL, '$2y$10$h2yXmZ/OsVnkop8Un0nmhu5dRQ0S628wpJ6n2.Ehn1aPHxnULsKTe', NULL, '2022-10-29 00:03:13', '2022-10-29 00:03:13'),
(58, 'Iwan Setiawan', 'user', 'setiawan@gmail.com', NULL, '$2y$10$AHa2Hg6QpHnm7HW0dXdGDuHifl2EGYBg07Bojn9a5tKyi.OE7VYH.', NULL, '2022-10-29 00:04:45', '2022-10-29 00:04:45'),
(59, 'Surya Junaidi', 'user', 'junaidi@gmail.com', NULL, '$2y$10$0AEFBqq4vab/ErYfD22PXudq8BMBRoqA8oVAkEwBHP/xvq2TyeToC', NULL, '2022-10-29 00:06:08', '2022-10-29 00:06:08'),
(60, 'Dian Fatriana', 'user', 'fatriana@gmail.com', NULL, '$2y$10$Luhx1ko2aRRcgNKwb.SNauk/aS4gIPhIveof4lqWNEarzjT0i8WiS', NULL, '2022-10-29 00:07:20', '2022-10-29 00:07:20'),
(61, 'Eka Badarriyani', 'user', 'badariyani@gmail.com', NULL, '$2y$10$8FRATJ.mD.Ur0RMRPcLcZ.RsZifKKbTcnIErbH7yair3kC/6vUCH6', NULL, '2022-10-29 00:08:33', '2022-10-29 00:08:33'),
(62, 'Iskamto', 'user', 'kamto@gmail.com', NULL, '$2y$10$Z0cLHY9uh.D9KoXlhszNjO7JweBAoKwimgjhd/IOoMgOP0pS7ZffO', NULL, '2022-10-29 00:09:49', '2022-10-29 00:09:49'),
(63, 'Mohadi', 'user', 'hadi@gmail.com', NULL, '$2y$10$Wa9HvXzNqrH9qnI08m8LqOIG7SkEatpR8knV/vySyR1voFe/L3oYS', NULL, '2022-10-29 00:11:00', '2022-10-29 00:11:00'),
(64, 'Nor Aida', 'user', 'aida@gmail.com', NULL, '$2y$10$pAIfMF1s.rL9xbNElqve0OeKXdTdroaZt86vr4szCr47.gXgpoO1S', NULL, '2022-10-29 00:12:24', '2022-10-29 00:12:24'),
(65, 'Arbanie', 'user', 'banie@gmail.com', NULL, '$2y$10$jBiuNS.BMzq6Lf/fAEGXfe9PESTt6Ms13CQLtABCQzusk9Ft.f/N6', NULL, '2022-10-29 00:13:56', '2022-10-29 00:13:56'),
(66, 'Mecky Azhar', 'user', 'azhar@gmail.com', NULL, '$2y$10$fQECVkhPsvbH9aYKW41aROlBvCBvMBcbskt4nkU147nsTsMKgPMda', NULL, '2022-10-29 00:15:27', '2022-10-29 00:15:27'),
(67, 'Rahmaddiansyah', 'user', 'dian@gmail.com', NULL, '$2y$10$AOORbWE.BTKKhMuw2sWVi.c7JBcGqzjWQI4vZmPOPwS7qURPF7Cmq', NULL, '2022-10-29 00:16:53', '2022-10-29 00:16:53'),
(68, 'Sujatmiko Siswanto', 'user', 'siswanto@gmail.com', NULL, '$2y$10$92OKYewKLeGvcMbB9lIH5uRz6w0tUD9XXEDZEzZOAs7J16e20dAHm', NULL, '2022-10-29 00:18:16', '2022-10-29 00:18:16'),
(69, 'Suriansyah', 'user', 'ansyah@gmail.com', NULL, '$2y$10$nsq4IGZrUGVsjQGdvIuSvuc555fVd64BJXTU/jZIpkIRkHBKP2uqi', NULL, '2022-10-29 00:25:50', '2022-10-29 00:25:50'),
(70, 'Ina Prihatina', 'user', 'prihatina@gmail.com', NULL, '$2y$10$EUia6fejeEnJlNYluysW/OW0DlQop.g3AysjFCzscy.lvfM6TLNxS', NULL, '2022-10-29 00:27:17', '2022-10-29 00:27:17'),
(71, 'Enggy Gumilang', 'user', 'gumilang@gmail.com', NULL, '$2y$10$yJdTn03jcC8TSQOidTg9OerqjSV5f1/ohnPEhUrLO2pDhrTVVjjdy', NULL, '2022-10-29 00:28:36', '2022-10-29 00:28:36'),
(72, 'Sugiyanto', 'user', 'yanto@gmail.com', NULL, '$2y$10$5JBscllHDFvo/wGDu8aHsuRtgkUr10haAtQd1OKNU6KxIstt9V9/2', NULL, '2022-10-29 00:29:50', '2022-10-29 00:29:50'),
(73, 'Muhammad Noor Eka Dita', 'user', 'ekadita@gmail.com', NULL, '$2y$10$uZaizTO66nTFQRiS2INJresGa3uYbhPaCaZGoXGAQ.i7THzivegNq', NULL, '2022-10-29 00:31:16', '2022-10-29 00:31:16'),
(74, 'Ismayadi', 'user', 'yadi@gmail.com', NULL, '$2y$10$UT3uLAbVvp8pBafkIBDtKOVUfk8dwvLImpXYfQ3xh7nqvYYXrPDwu', NULL, '2022-10-29 00:32:50', '2022-10-29 00:32:50'),
(75, 'Heru Sumantri', 'user', 'sumantri@gmail.com', NULL, '$2y$10$qw83TiqJEOxRNPjG8IQNjeiQkjpXZxKeekppX2HamU7u3pDYf6Byy', NULL, '2022-10-29 00:34:05', '2022-10-29 00:34:05'),
(76, 'Sudirman', 'user', 'dirman@gmail.com', NULL, '$2y$10$ao0XNkRFiZaNPUxG7f09wOJnTxPkNCcq8i.L/rbLicGL/kRAih30G', NULL, '2022-10-29 00:35:15', '2022-10-29 00:35:15'),
(77, 'Arief Rachman', 'user', 'rachman@gmail.com', NULL, '$2y$10$T0VWHN7eb7FdCcdwU7syY.QVVH9gzBDXl8bSoWmzj4cYGrU1ZCfcC', NULL, '2022-10-29 00:37:18', '2022-10-29 00:37:18'),
(78, 'Yudha Karsa', 'user', 'karsa@gmail.com', NULL, '$2y$10$aI1QF0dxKd4BmBDZy2b6kuMMsgT6RhYGINFIhGuNktMeP.45cpCie', NULL, '2022-10-29 00:38:42', '2022-10-29 00:38:42'),
(79, 'Maria B Syamnur', 'user', 'syamnur@gmail.com', NULL, '$2y$10$FLLpoJ1vJQTn9l9G9PJj1.fUXBN4JUf8agCXqrCXQR58WZ9KNvaRy', NULL, '2022-10-29 00:39:54', '2022-10-29 00:39:54'),
(80, 'Setio Purwanto', 'user', 'purwanto@gmail.com', NULL, '$2y$10$wk8KHUNKoewZKlyT8g62KuX5ArK8ImmSo38Ee5YeSEuUAnkeHSo3y', NULL, '2022-10-29 00:41:30', '2022-10-29 00:41:30'),
(81, 'Samsudin', 'user', 'udin@gmail.com', NULL, '$2y$10$ibOiT0eV8BarenwK62MIceJ/8UodF8zdkFPig3PALUkSd1SZPYlti', NULL, '2022-10-29 00:42:33', '2022-10-29 00:42:33'),
(82, 'Mariatul Qibtiah', 'user', 'qibtiah@gmail.com', NULL, '$2y$10$M9TGOC7ywQBEFz3556ciY.nMLvi90FlhkoO2vbzGwPj0pj2DK4WVW', NULL, '2022-10-29 00:43:49', '2022-10-29 00:43:49'),
(83, 'Susy Afianti', 'user', 'afianti@gmail.com', NULL, '$2y$10$pgG7zpBAHe4iOk5BFv9zkeMZChc7EU6fTOCPtsjktRZLLHX5KzeT.', NULL, '2022-10-29 00:44:58', '2022-10-29 00:44:58'),
(84, 'Desi Setianingrum', 'user', 'setianingrum@gmail.com', NULL, '$2y$10$DBjlaC15uBxE531cm8MqtO3ks3lLHL.hdR0diLP7mhxJYy6eN/4hS', NULL, '2022-10-29 00:46:25', '2022-10-29 00:46:25'),
(85, 'Nurul Yuniarti', 'user', 'yuniarti@gmail.com', NULL, '$2y$10$wco9ht51AArIpNB5uqfbL.QgY590DsVKFL4c5KRPLo6ga/ZiYy.ky', NULL, '2022-10-29 00:48:23', '2022-10-29 00:48:23'),
(86, 'Rosiani S', 'user', 'rosi@gmail.com', NULL, '$2y$10$4Euc3dvKWBZA5KD9MALx9O5T4EdyXT.WKM.6fMJXx7MFZ1LkcjAwS', NULL, '2022-10-29 00:50:17', '2022-10-29 00:50:17'),
(87, 'Andi Siti Arniwati', 'user', 'arniawati@gmail.com', NULL, '$2y$10$PhsWUG/XB3O/JDwBi.M3tux7D6T.knfVnHi//9n17k8gh/onNGBOi', NULL, '2022-10-29 00:51:33', '2022-10-29 00:51:33'),
(88, 'Suwarjo', 'user', 'warjo@gmail.com', NULL, '$2y$10$eejgJW.SGYpZzN76hprVO.odYGCeeTtvd8M4ZaN9oLrKMU1BmTft.', NULL, '2022-10-29 00:52:56', '2022-10-29 00:52:56'),
(89, 'Danny Rahmadi', 'user', 'rahmadi@gmail.com', NULL, '$2y$10$3otz5QfFSfGaOiVsv0UP7Oz.EoUMyjfLHj/fhLWYBuqX0ahPIPybq', NULL, '2022-10-29 00:54:10', '2022-10-29 00:54:10'),
(90, 'Sofyan Hamdani', 'user', 'hamdani@gmail.com', NULL, '$2y$10$kiAAfURpVBjZkTqSNnbx2eh9hwMdk52URMlVuY92v3g1Tyt6g3nFG', NULL, '2022-10-29 00:55:52', '2022-10-29 00:55:52'),
(91, 'Carlos Perreira Da Silva', 'user', 'dasilva@gmail.com', NULL, '$2y$10$81fde1lHTLeT50.YhR3nbOJIlacaQZUCdL4NH3DH/vB5OnGfXXtHS', NULL, '2022-10-29 00:56:54', '2022-10-29 00:56:54'),
(92, 'A. Dewi Kartika', 'user', 'kartika@gmail.com', NULL, '$2y$10$qLC4Bh8Zb.Y5me4VSN08JeOtwDRCExLIYiiBJXuKvhM9U6E07mKXC', NULL, '2022-10-29 00:58:03', '2022-10-29 00:58:03'),
(93, 'Reza Fahd Adrian', 'user', 'adrian@gmail.com', NULL, '$2y$10$.GfupJW6Tbx0ejl9t.5SieCuih8tnqK8Wgr.zbsEwQLDX3MeTJt5q', NULL, '2022-10-29 00:59:35', '2022-10-29 00:59:35'),
(94, 'Mulyadi Agus', 'user', 'agus@gmail.com', NULL, '$2y$10$3//WNBmzuGqtWJAgHRuLeO4Qm0CuPGNgd2ywO0s1NDGuCBiaPJEMO', NULL, '2022-10-29 01:00:51', '2022-10-29 01:00:51'),
(95, 'Rustiyanti', 'user', 'yanti@gmail.com', NULL, '$2y$10$wNJcWAOeiJOxR5PN.DEoVex2RrU0JQtAnHYTGe478VehNCw8ZWfRS', NULL, '2022-10-29 01:03:22', '2022-10-29 01:03:22'),
(96, 'Yani Muharlie', 'user', 'muharlie@gmail.com', NULL, '$2y$10$8Gr7zFIOmCjTP7GPj904IepqFyxp0Te6IgiPAhpr9p3Ep.eEEbakG', NULL, '2022-10-29 01:04:30', '2022-10-29 01:04:30'),
(97, 'Rusdiansyah', 'user', 'rusdi@gmail.com', NULL, '$2y$10$vK/3tqMuThNeionY75Q9AugcnF2xRl36dt3TvqcaqPNTRuTcrJ5ja', NULL, '2022-10-29 05:00:13', '2022-10-29 05:00:13'),
(98, 'Dimas Aprianur', 'user', 'aprianur@gmail.com', NULL, '$2y$10$mQ3rTHTxKDHfH8/p4IKNv.jPhmrrqkaJrb9TmO/fqSGNXXUZ9ag3e', NULL, '2022-10-29 05:03:29', '2022-10-29 05:03:29'),
(99, 'Ernawati', 'user', 'erna@gmail.com', NULL, '$2y$10$MVc/LpqBKF78UM5uQKgqPO7.pX71FxafuuS/zw9fqWh23sWGa.Y.i', NULL, '2022-10-29 05:05:19', '2022-10-29 05:05:19'),
(100, 'Kukuh Rizqi Liyadi', 'user', 'liyadi@gmail.com', NULL, '$2y$10$CY5Wivj2hLLuwWFpDk7EYuo1Em.iNgidv4mrYaXMzhrFkLm51900m', NULL, '2022-10-29 05:06:43', '2022-10-29 05:06:43'),
(101, 'Anisyahdina', 'user', 'dina@gmail.com', NULL, '$2y$10$twClAdnnO7vggUkh.vLAVeN4eMUMkAMIR/02FaYAhOFtbK5xQIAUy', NULL, '2022-10-29 05:08:36', '2022-10-29 05:08:36'),
(102, 'Aulia Rizqi Pratama', 'user', 'pratama@gmail.com', NULL, '$2y$10$FE5L9AjD9DyC4iCWMWIz8ut8wt11cQdKPYRUq2Hoeug4f4qLIYohO', NULL, '2022-10-29 05:09:59', '2022-10-29 05:09:59'),
(103, 'M. Audi Yordana', 'user', 'yordana@gmail.com', NULL, '$2y$10$Cw2Bm/fBDWcnp.wEQl5CRuY1EzRSO/NcDDgUtj1FaV31.YMiNd6DS', NULL, '2022-10-29 05:11:25', '2022-10-29 05:11:25'),
(104, 'Ilmi Jaini', 'user', 'jaini@gmail.com', NULL, '$2y$10$1SzU29dMHYf63neOiEAwjeRO6I65O/0hK42obraDAe7k6JNPzKIqO', NULL, '2022-10-29 05:12:53', '2022-10-29 05:12:53'),
(105, 'Muhammad Rafii Nur Fauzan', 'user', 'fauzan@gmail.com', NULL, '$2y$10$C0gkpnSBnwb5oLq/s4nXmOyPJ4fk7Ojx2RitN.ACNor9jv71znIji', NULL, '2022-10-29 05:14:38', '2022-10-29 05:14:38'),
(106, 'Deny Kurniawan', 'user', 'kurniawan@gmail.com', NULL, '$2y$10$bgHz2uXPA5ANQsugvvYZsuT9.JyeYKE6Q8/g7E.f85puaG6PgUFPa', NULL, '2022-10-29 05:16:20', '2022-10-29 05:16:20'),
(107, 'Rizqi', 'user', 'rizqi@gmail.com', NULL, '$2y$10$s/GsdGXjS8ZcK/nv3q0AsuZVPo4hGKlCbUo1pxWbur4iWpx8NDbiG', NULL, '2022-10-29 05:19:00', '2022-10-29 05:19:00'),
(108, 'Liana Wulandari', 'user', 'wulandari@gmail.com', NULL, '$2y$10$Xf/1KCi.rNkiMuiXDcw3MeDRXNJjpf5fRHSebxTHsfbXZDHOEpKKq', NULL, '2022-10-29 05:26:14', '2022-10-29 05:26:14'),
(109, 'Zepriadi Saputra', 'user', 'saputra@gmail.com', NULL, '$2y$10$lztxhrXXZLkLkMjWrwov8OK8gcgJ5ufqHtyZ75MHYkXQ7QnA5Wiy.', NULL, '2022-10-29 05:27:41', '2022-10-29 05:27:41'),
(110, 'M. Ridi Pradana', 'user', 'pradana@gmail.com', NULL, '$2y$10$Aum6fS5Qk3FWcSOliFvH6OeDC6KTnnyyFQK3XhHf47tCYdeZpXEse', NULL, '2022-10-29 05:29:29', '2022-10-29 05:29:29'),
(111, 'Rudi Sanjaya', 'user', 'sanjaya@gmail.com', NULL, '$2y$10$zqU4V4aSd/TdqGARjqmbaue2N9wUFairaezYkeef9Va1h4UAERZdm', NULL, '2022-10-29 05:31:08', '2022-10-29 05:31:08'),
(112, 'Siti Rusiana', 'user', 'rusiana@gmail.com', NULL, '$2y$10$sgtx6KB/dOkSwLVY9bkvDu4zi/.1lpy4mQndePtibITNL5eiHYpre', NULL, '2022-10-29 05:33:32', '2022-10-29 05:33:32'),
(113, 'Fatimatul Zahrah', 'user', 'zahrah@gmail.com', NULL, '$2y$10$EF1yh9nG4pP1utlr3EF/ROcDJxXT6rTOK2c9QlXe97ZCPs54zFKj2', NULL, '2022-10-29 05:35:44', '2022-10-29 05:35:44'),
(114, 'Sri Novita', 'user', 'novita@gmail.com', NULL, '$2y$10$VMOcuIUyEkRvnlVUdOIOL.IMeNg22iNrtZ7y5uvoz4NalfX./LvHa', NULL, '2022-10-29 05:37:12', '2022-10-29 05:37:12'),
(115, 'Aprilia Bella Rahmita Rifaini', 'user', 'bella@gmail.com', NULL, '$2y$10$jfokwOjA2IXLVdFp1yugc.Z.u3.nxDAZQcQYLrkN3rzP0iLJg3nWy', NULL, '2022-10-29 05:38:42', '2022-10-29 05:38:42'),
(116, 'Muhammad Maradona Dalis', 'user', 'dalis@gmail.com', NULL, '$2y$10$0Kv7hxrALj/LmrGQI3skJO1ziizzJ.kWjl4aQXLlnvc9pTmvSEPXS', NULL, '2022-10-29 05:40:00', '2022-10-29 05:40:00'),
(117, 'Amalia Zahirah Wardina', 'user', 'zahirah@gmail.com', NULL, '$2y$10$7WVBJDqa5na1s0fqux5JH.8L99BftZf.RNH4m6k8vXj7MygvFbhHe', NULL, '2022-10-29 05:41:20', '2022-10-29 05:41:20'),
(118, 'M. Adhytama Pahlevi', 'user', 'pahlevi@gmail.com', NULL, '$2y$10$jnnAxGX6Dnf6sixjMSxGfu4nKZSfcz2TxdxMZ39ICqWP/n88v/sBq', NULL, '2022-10-29 05:42:37', '2022-10-29 05:42:37'),
(119, 'Abdul Muthalib', 'user', 'muthalib@gmail.com', NULL, '$2y$10$Rw9VEKbnar8.ksfJ4pruIO6jCD1kE5rRhDvbg2n1V6u0INZwBGIyu', NULL, '2022-10-29 05:44:01', '2022-10-29 05:44:01'),
(120, 'Surya Windi Pratiwi', 'user', 'windi@gmail.com', NULL, '$2y$10$Qbjt53EnLBy2ehxb1aKmqe.J6NPMnad.0zW.aMsxQTCtGsMxHhsom', NULL, '2022-10-29 05:45:15', '2022-10-29 05:45:15'),
(121, 'HUSNUL KHOTIMAH', 'user', 'khotimah@gmail.com', NULL, '$2y$10$d6rtt8NXrmaP1rZJOVNCge/ey5a0EgjVs355mGN1g8AnF4aEEpTAG', NULL, '2022-10-29 05:46:37', '2022-10-29 05:46:37'),
(122, 'FENNY RIA VERA DEWI', 'user', 'vera@gmail.com', NULL, '$2y$10$V1ejmqPiyjhVYdcoki5rsezgAH69gy2HsPjqj2Cv.b8WavTsoF0Ti', NULL, '2022-10-29 06:01:56', '2022-10-29 06:01:56'),
(123, 'SYAHDIANNOR', 'user', 'diannor@gmail.com', NULL, '$2y$10$IRvBw2DLZixZ.6in9PYRb.Vv0u5bEsTaxjg1tqXcrmTsA6wLnZbvC', NULL, '2022-10-29 06:03:25', '2022-10-29 06:03:25'),
(124, 'M. FAJAR SATRIA', 'user', 'satria@gmail.com', NULL, '$2y$10$Birk1oyvr5/cf07QlboIWuiTlKqO2mPlEwpZV6A6ZpX5N0a3FSvgS', NULL, '2022-10-29 06:04:46', '2022-10-29 06:04:46'),
(125, 'M. ANAS SOLIHIN', 'user', 'solihin@gmail.com', NULL, '$2y$10$f7BkIfTNBLf9M3CGSmKnhed81KORxaRirc/BfGh6VQVgVMnvTFvHi', NULL, '2022-10-29 06:06:04', '2022-10-29 06:06:04'),
(126, 'GITA MASLIANTY', 'user', 'maslianty@gmail.com', NULL, '$2y$10$r.1RJnzsZBtuNrVE74ZgzeHBSWr/jUAqhlr/0vg0h.G8s2MNNNy1i', NULL, '2022-10-29 06:07:30', '2022-10-29 06:07:30'),
(127, 'Hana Zahra Afifah', 'user', 'afifah@gmail.com', NULL, '$2y$10$OPnMlH/JA3ExxrDgLla5Cuuafol5nNMvAJrOa9nMXtH6I0p2aL/kq', NULL, '2022-10-30 23:09:55', '2022-10-30 23:09:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodata_jabatan_id_foreign` (`jabatan_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indeks untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuti_nama_pegawai_id_foreign` (`nama_pegawai_id`);

--
-- Indeks untuk tabel `diklat`
--
ALTER TABLE `diklat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diklat_nama_pegawai_id_foreign` (`nama_pegawai_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_pegawai_id` (`nama_pegawai_id`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jabatan_jenis_jabatan_id_foreign` (`jenis_jabatan_id`);

--
-- Indeks untuk tabel `jenisjabatan`
--
ALTER TABLE `jenisjabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT untuk tabel `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `diklat`
--
ALTER TABLE `diklat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `jenisjabatan`
--
ALTER TABLE `jenisjabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `biodata`
--
ALTER TABLE `biodata`
  ADD CONSTRAINT `biodata_jabatan_id_foreign` FOREIGN KEY (`jabatan_id`) REFERENCES `jabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cuti`
--
ALTER TABLE `cuti`
  ADD CONSTRAINT `cuti_nama_pegawai_id_foreign` FOREIGN KEY (`nama_pegawai_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `diklat`
--
ALTER TABLE `diklat`
  ADD CONSTRAINT `diklat_nama_pegawai_id_foreign` FOREIGN KEY (`nama_pegawai_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `gaji_nama_pegawai_id_foreign` FOREIGN KEY (`nama_pegawai_id`) REFERENCES `biodata` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD CONSTRAINT `jabatan_jenis_jabatan_id_foreign` FOREIGN KEY (`jenis_jabatan_id`) REFERENCES `jenisjabatan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
