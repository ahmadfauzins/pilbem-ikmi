-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jan 2020 pada 20.11
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pilketos`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`username`, `password`) VALUES
('adan@bemstmikikmi.ac.id', '32f63c6aea52c8fe855b1d714622e2e8'),
('fauzi@bemstmikikmi.ac.id', '124648520d3220ce6f87d57f2b35a4b5'),
('feby@bemstmikikmi.ac.id', '725fc4676001dbcbec8a7aca2aa62301'),
('jefri@bemstmikikmi.ac.id', '10071712d1357f049f7d6932e07d0b93'),
('tomas@bemstmikikmi.ac.id', '5fe07f397ec318c8abd2347322c54125');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datapilketos`
--

CREATE TABLE `tb_datapilketos` (
  `id` int(1) NOT NULL DEFAULT '1',
  `tapel` varchar(10) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_datapilketos`
--

INSERT INTO `tb_datapilketos` (`id`, `tapel`, `tgl`) VALUES
(1, '2020', '2020-01-22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_identitassekolah`
--

CREATE TABLE `tb_identitassekolah` (
  `npsn` varchar(15) NOT NULL,
  `nm_sekolah` varchar(32) NOT NULL,
  `jln` varchar(32) DEFAULT NULL,
  `desa` varchar(32) DEFAULT NULL,
  `kec` varchar(32) DEFAULT NULL,
  `kab` varchar(32) DEFAULT NULL,
  `kpl_sekolah` varchar(32) DEFAULT NULL,
  `nip` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_identitassekolah`
--

INSERT INTO `tb_identitassekolah` (`npsn`, `nm_sekolah`, `jln`, `desa`, `kec`, `kab`, `kpl_sekolah`, `nip`) VALUES
('1234567', 'STMIK IKMI CIREBON', 'Jln. Perjuangan No.10B', 'Majasem', 'Kesambi', 'Kota Cirebon', 'Dr. Dadang Sudrajat,S.Si.,M.Kom', '342142');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `kd_kelas` int(3) NOT NULL,
  `nm_kelas` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`kd_kelas`, `nm_kelas`) VALUES
(1, 'MI 2017 P1'),
(2, 'MI 2017 S1'),
(3, 'KA 2017 P1'),
(4, 'KA 2017 S1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pilih`
--

CREATE TABLE `tb_pilih` (
  `id_pilih` int(11) NOT NULL,
  `nisn` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pilih`
--

INSERT INTO `tb_pilih` (`id_pilih`, `nisn`, `username`) VALUES
(1, '41170588', 'admin'),
(2, '41170588', '123456'),
(3, '41170588', '41170589'),
(4, '41170588', '41170500'),
(5, '41170588', 'admin'),
(6, '41170588', 'admin'),
(7, '41170588', 'admin'),
(8, '123', 'admin'),
(9, '123', 'admin'),
(10, '10', '1'),
(11, '20', '2'),
(12, '30', '3'),
(13, '10', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pilihan`
--

CREATE TABLE `tb_pilihan` (
  `nisn` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `photo` varchar(32) NOT NULL,
  `no` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`nisn`, `nama`, `photo`, `no`) VALUES
('10', 'M AMRI FAJRI SYAHRIAL & NURUL HI', '10.jpg', 1),
('20', 'INES SHOLEKHA & FAUZI', '20.jpg', 2),
('30', 'ABDULLAH AZZAM & M NURULLAH', '30.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nm_siswa` varchar(32) DEFAULT NULL,
  `jk` char(1) NOT NULL,
  `kd_kelas` int(3) DEFAULT NULL,
  `hadir` varchar(12) NOT NULL DEFAULT 'Tidak Hadir'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`username`, `password`, `nm_siswa`, `jk`, `kd_kelas`, `hadir`) VALUES
('31160044', '31160044', 'Suwandi', 'L', 2, 'Tidak Hadir'),
('31170087', '31170087', 'Nita Silfia ', 'P', 1, 'Tidak Hadir'),
('31170088', '31170088', 'Karyana', 'L', 2, 'Tidak Hadir'),
('31170089', '31170089', 'Abdallah Hussaeni', 'L', 1, 'Tidak Hadir'),
('31170090', '31170090', 'Faulina Hapsah', 'P', 2, 'Tidak Hadir'),
('31170091', '31170091', 'Saeful Bahri', 'L', 2, 'Tidak Hadir'),
('31170093', '31170093', 'Astri Arsih Yuri Utami', 'P', 1, 'Tidak Hadir'),
('31170097', '31170097', 'Monica Purdiany', 'P', 2, 'Tidak Hadir'),
('31170098', '31170098', 'Izza Nahriyah', 'P', 1, 'Tidak Hadir'),
('31170099', '31170099', 'Bayyanu Ghaliyah Suharta', 'L', 2, 'Tidak Hadir'),
('31170104', '31170104', 'Rianto Fadila Aditama', 'L', 1, 'Tidak Hadir'),
('31170105', '31170105', 'Samsupi', 'P', 1, 'Tidak Hadir'),
('31170108', '31170108', 'Yuza Nashif Waskita', 'L', 2, 'Tidak Hadir'),
('31170110', '31170110', 'Revi Dwiyanti', 'P', 2, 'Tidak Hadir'),
('31170112', '31170112', 'Muhammad Maftuh Anshori', 'L', 1, 'Tidak Hadir'),
('31170113', '31170113', 'Sofa Sofia Nurbaeti', 'P', 1, 'Tidak Hadir'),
('31170115', '31170115', 'Nur Aditia Putra', 'L', 1, 'Tidak Hadir'),
('31170118', '31170118', 'Okta Vindineta', 'P', 2, 'Tidak Hadir'),
('31170119', '31170119', 'Muhammad Firdaus Arifie', 'L', 1, 'Tidak Hadir'),
('31170122', '31170122', 'Heru Sutrisno', 'L', 2, 'Tidak Hadir'),
('31170123', '31170123', 'Rika Rosmayanti', 'P', 1, 'Tidak Hadir'),
('31170125', '31170125', 'Sri Piani', 'P', 2, 'Tidak Hadir'),
('31170126', '31170126', 'Andreyana', 'L', 2, 'Tidak Hadir'),
('31170128', '31170128', 'Enjang Shogi', 'L', 1, 'Tidak Hadir'),
('31170129', '31170129', 'Ayu Sapitri', 'P', 2, 'Tidak Hadir'),
('31170130', '31170130', 'Danis Alamsyah', 'L', 1, 'Tidak Hadir'),
('31170131', '31170131', 'Faqih Abdullah', 'L', 2, 'Tidak Hadir'),
('31170136', '31170136', 'Rifky Nur Rachman', 'L', 2, 'Tidak Hadir'),
('31170139', '31170139', 'Niko Prasetio', 'L', 1, 'Tidak Hadir'),
('31170141', '31170141', 'Retno Maryani', 'P', 1, 'Tidak Hadir'),
('31170143', '31170143', 'Maulana Abdul Azid', 'L', 1, 'Tidak Hadir'),
('31170144', '31170144', 'Irfan Rohmansyah', 'L', 1, 'Tidak Hadir'),
('31170145', '31170145', 'Lusi Anggraeni', 'P', 2, 'Tidak Hadir'),
('32170076', '32170076', 'Novi Rosana', 'P', 4, 'Tidak Hadir'),
('32170078', '32170078', 'Pradita Amalia', 'P', 3, 'Tidak Hadir'),
('32170079', '32170079', 'Mellyana Afynda', 'P', 4, 'Tidak Hadir'),
('32170082', '32170082', 'Syahranti', 'P', 4, 'Tidak Hadir'),
('32170083', '32170083', 'Diah Sukmawati', 'P', 4, 'Tidak Hadir'),
('32170085', '32170085', 'Dwi Ismayanti', 'P', 3, 'Tidak Hadir'),
('32170086', '32170086', 'Teguh Dwi Hartanto', 'L', 4, 'Tidak Hadir'),
('32170087', '32170087', 'Fadilah', 'P', 4, 'Tidak Hadir'),
('32170089', '32170089', 'Mega Intan Agustinie', 'P', 3, 'Tidak Hadir'),
('32170094', '32170094', 'Neni Junaeni', 'P', 4, 'Tidak Hadir'),
('32170097', '32170097', 'Ghamara Wahid', 'P', 4, 'Tidak Hadir'),
('32170098', '32170098', 'Erika Mulyani', 'P', 4, 'Tidak Hadir'),
('32170100', '32170100', 'Febriyanto', 'L', 4, 'Tidak Hadir'),
('32170104', '32170104', 'Meia Nurbaningsih', 'P', 4, 'Tidak Hadir'),
('32170106', '32170106', 'Susi Yulianti', 'P', 3, 'Tidak Hadir'),
('32170108', '32170108', 'Indah Ayu Nurmala', 'P', 4, 'Tidak Hadir'),
('32170110', '32170110', 'Cindi Aulia Rachmadieny', 'P', 3, 'Tidak Hadir'),
('32170111', '32170111', 'Wahyuni Fujarotin', 'P', 4, 'Tidak Hadir'),
('32170112', '32170112', 'Fatihah', 'P', 3, 'Tidak Hadir'),
('32170113', '32170113', 'Agi Mochamad Tri Ranggajati', 'L', 3, 'Tidak Hadir'),
('32170114', '32170114', 'Hidayah', 'L', 4, 'Tidak Hadir'),
('32170115', '32170115', 'Dwi Ramadhan', 'L', 3, 'Tidak Hadir'),
('32170116', '32170116', 'Faishal', 'L', 4, 'Tidak Hadir'),
('32170117', '32170117', 'Tri Wahyuni', 'P', 4, 'Tidak Hadir'),
('32170118', '32170118', 'Auliya Asri Novianty', 'P', 3, 'Tidak Hadir'),
('32170124', '32170124', 'Septi Wulandari', 'P', 3, 'Tidak Hadir'),
('32170125', '32170125', 'Siti Nur Jalisah', 'P', 3, 'Tidak Hadir'),
('32170126', '32170126', 'Agung Asmara ', 'L', 3, 'Tidak Hadir'),
('32170127', '32170127', 'Makhrus', 'L', 3, 'Tidak Hadir'),
('32170128', '32170128', 'Elly Nofianty', 'P', 4, 'Tidak Hadir'),
('32170129', '32170129', 'Novi Rizki', 'P', 3, 'Tidak Hadir'),
('32170130', '32170130', 'Devi Nuraeni', 'P', 4, 'Tidak Hadir'),
('32170132', '32170132', 'Dina Cynthia Augustine', 'P', 4, 'Tidak Hadir');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_daftarhadir`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_daftarhadir` (
`NISN` varchar(32)
,`nm_siswa` varchar(32)
,`nm_kelas` varchar(32)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `view_vote`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `view_vote` (
`nisn` varchar(32)
,`nama` varchar(32)
,`photo` varchar(32)
,`no` int(1)
,`username` varchar(32)
);

-- --------------------------------------------------------

--
-- Struktur untuk view `view_daftarhadir`
--
DROP TABLE IF EXISTS `view_daftarhadir`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_daftarhadir`  AS  select `tb_siswa`.`username` AS `NISN`,`tb_siswa`.`nm_siswa` AS `nm_siswa`,`tb_kelas`.`nm_kelas` AS `nm_kelas` from ((`tb_siswa` join `tb_kelas` on((`tb_kelas`.`kd_kelas` = `tb_siswa`.`kd_kelas`))) join `tb_pilih` on((`tb_siswa`.`username` = `tb_pilih`.`username`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `view_vote`
--
DROP TABLE IF EXISTS `view_vote`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_vote`  AS  select `tb_pilihan`.`nisn` AS `nisn`,`tb_pilihan`.`nama` AS `nama`,`tb_pilihan`.`photo` AS `photo`,`tb_pilihan`.`no` AS `no`,`tb_siswa`.`username` AS `username` from ((`tb_pilih` join `tb_pilihan` on((`tb_pilihan`.`nisn` = `tb_pilih`.`nisn`))) join `tb_siswa` on((`tb_siswa`.`username` = `tb_pilih`.`username`))) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `tb_datapilketos`
--
ALTER TABLE `tb_datapilketos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_identitassekolah`
--
ALTER TABLE `tb_identitassekolah`
  ADD PRIMARY KEY (`npsn`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indeks untuk tabel `tb_pilih`
--
ALTER TABLE `tb_pilih`
  ADD PRIMARY KEY (`id_pilih`);

--
-- Indeks untuk tabel `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  ADD PRIMARY KEY (`nisn`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `kd_kelas` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_pilih`
--
ALTER TABLE `tb_pilih`
  MODIFY `id_pilih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
