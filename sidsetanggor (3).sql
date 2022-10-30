-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 30 Okt 2022 pada 03.02
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidsetanggor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'Islam', 10),
(2, 'Kristen', 1),
(3, 'Katolik', 1),
(4, 'Hindu', 12),
(5, 'Budha', 0),
(6, 'Khonghucu', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `gambar`, `judul`, `deskripsi`) VALUES
(2, 'kantor_desa.JPG', 'Perbaikan Kantor Desa', 'Perbaikan Kantor Desa Setanggor Selatan'),
(3, '35336932551.jpg', 'Penjualan Cabi', 'sdadasdad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `waktu`, `deskripsi`) VALUES
(6, 'maxresdefault.jpg', 'Informasi Setanggor Selatan', '2022-10-23 14:52:50', 'Setanggor adalah salah satu desa yang terletak di Kecamatan Sukamulia, Kabupaten Lombok Timur, Provinsi Nusa Tenggara Barat, Indonesia. Desa ini memiliki kodepos 83652.\r\n\r\nSetanggor memiliki 4 dusun yaitu dusun Genter, Makam, Setanggor, Ketangga.Hasil utama pertanian di desa ini seperti tembakau dan padi.\r\n\r\n');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `detail_rt`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `detail_rt` (
`id` int(11)
,`nama_dusun` varchar(125)
,`RT` varchar(125)
,`jumlah_KK` int(125)
,`jumlah_L` int(125)
,`jumlah_P` int(125)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dusun`
--

CREATE TABLE `dusun` (
  `id` int(11) NOT NULL,
  `nama_dusun` varchar(125) NOT NULL,
  `jumlah_KK` int(125) NOT NULL,
  `jumlah_L` int(125) NOT NULL,
  `jumlah_P` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dusun`
--

INSERT INTO `dusun` (`id`, `nama_dusun`, `jumlah_KK`, `jumlah_L`, `jumlah_P`) VALUES
(2, 'Ketangga', 100, 300, '500'),
(3, 'Presak', 20, 31, '32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'LAKI-LAKI', 60),
(2, 'PEREMPUAN', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email` varchar(125) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `nama_lengkap`, `waktu`, `email`, `komentar`) VALUES
(1, 'antoni saputra', '2022-10-23 09:06:54', 'antonisaputra@gmail.com', 'Desa Ini Sangat Menarik'),
(2, 'emha', '2022-10-26 13:17:36', 'emha@gmail.com', 'Website ini sangat bagus dan juga memberikan kita informasi tentang desa'),
(3, 'jamal', '2022-10-26 14:11:24', 'jamal@gmail.com', 'Wow'),
(4, 'abdusyakur', '2022-10-27 01:46:09', 'abdussyakur@gmial.com', 'Web Yang Sangat Menarik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerja`
--

CREATE TABLE `pekerja` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pekerja`
--

INSERT INTO `pekerja` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'BELUM/TIDAK BEKERJA', 12),
(2, 'MENGURUS RUMAH TANGGA', 0),
(3, 'PELAJAR/MAHASISWA', 12),
(4, 'PENSIUNAN', 0),
(5, 'PEGAWAI NEGERI SIPIL (PNS)', 0),
(6, 'TENTARA NASIONAL INDONESIA (TNI)', 0),
(7, 'KEPOLISIAN RI (POLRI)', 0),
(8, 'PERDAGANGAN', 0),
(9, 'PETANI/PEKEBUN', 0),
(10, 'PETERNAK', 0),
(11, 'NELAYAN/PERIKANAN', 0),
(12, 'INDUSTRI', 0),
(13, 'KONSTRUKSI', 0),
(14, 'TRANSPORTASI', 0),
(15, 'KARYAWAN SWASTA', 0),
(16, 'KARYAWAN BUMN', 0),
(17, 'KARYAWAN BUMD', 0),
(18, 'KARYAWAN HONORER', 0),
(19, 'BURUH HARIAN LEPAS', 0),
(20, 'BURUH TANI/PERKEBUNAN', 0),
(21, 'BURUH NELAYAN/PERIKANAN', 0),
(22, 'BURUH PETERNAKAN', 0),
(23, 'PEMBANTU RUMAH TANGGA', 0),
(24, 'TUKANG CUKUR', 0),
(25, 'TUKANG LISTRIK', 0),
(26, 'TUKANG BATU', 0),
(27, 'TUKANG KAYU', 0),
(28, 'TUKANG SOL SEPATU', 0),
(29, 'TUKANG LAS/PANDAI BESI', 0),
(30, 'TUKANG JAHIT', 0),
(31, 'TUKANG GIGI', 0),
(32, 'PENATA RIAS', 0),
(33, 'PENATA BUSANA', 0),
(34, 'PENATA RAMBUT', 0),
(35, 'MEKANIK', 0),
(36, 'SENIMAN', 0),
(37, 'TABIB', 0),
(38, 'PARAJI', 0),
(39, 'PERANCANG BUSANA', 0),
(40, 'PENTERJEMAH', 0),
(41, 'IMAM MASJID', 0),
(42, 'PENDETA', 0),
(43, 'PASTOR', 0),
(44, 'WARTAWAN', 0),
(45, 'USTADZ/MUBALIGH', 0),
(46, 'JURU MASAK', 0),
(47, 'PROMOTOR ACARA', 0),
(48, 'ANGGOTA DPR-RI', 0),
(49, 'ANGGOTA DPD', 0),
(50, 'ANGGOTA BPK', 0),
(51, 'PRESIDEN', 0),
(52, 'WAKIL PRESIDEN', 0),
(53, 'ANGGOTA MAHKAMAH KONSTITUSI', 0),
(54, 'ANGGOTA KABINET KEMENTERIAN', 0),
(55, 'DUTA BESAR', 0),
(56, 'GUBERNUR', 0),
(59, 'WAKIL GUBERNUR', 0),
(60, 'BUPATI', 0),
(61, 'WAKIL BUPATI', 0),
(62, 'WALIKOTA', 0),
(63, 'WAKIL WALIKOTA', 0),
(64, 'ANGGOTA DPRD PROVINSI', 0),
(65, 'ANGGOTA DPRD KABUPATEN/KOTA', 0),
(66, 'DOSEN', 0),
(67, 'GURU', 0),
(68, 'PILOT', 0),
(69, 'PENGACARA', 0),
(70, 'NOTARIS', 0),
(71, 'ARSITEK', 0),
(72, 'AKUNTAN', 0),
(73, 'KONSULTAN', 0),
(74, 'DOKTER', 0),
(75, 'BIDAN', 0),
(76, 'PERAWAT', 0),
(77, 'APOTEKER', 0),
(78, 'PSIKIATER/PSIKOLOG', 0),
(79, 'PENYIAR TELEVISI', 0),
(80, 'PENYIAR RADIO', 0),
(81, 'PELAUT', 0),
(82, 'PENELITI', 0),
(83, 'SOPIR', 0),
(84, 'PIALANG', 0),
(85, 'PARANORMAL', 0),
(86, 'PEDAGANG', 0),
(87, 'PERANGKAT DESA', 0),
(88, 'KEPALA DESA', 0),
(89, 'BIARAWATI', 0),
(90, 'WIRASWASTA', 0),
(91, 'LAINNYA', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_ditempuh`
--

CREATE TABLE `pendidikan_ditempuh` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan_ditempuh`
--

INSERT INTO `pendidikan_ditempuh` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'BELUM MASUK TK/KELOMPOK BERMAIN', 0),
(2, 'SEDANG TK/KELOMPOK BERMAIN', 10),
(3, 'TIDAK PERNAH SEKOLAH', 2),
(4, 'SEDANG SD/SEDERAJAT', 0),
(5, 'TIDAK TAMAT SD/SEDERAJAT', 0),
(6, 'SEDANG SLTP/SEDERAJAT', 0),
(7, 'SEDANG SLTA/SEDERAJAT', 0),
(8, 'SEDANG D-1/SEDERAJAT', 0),
(9, 'SEDANG D-2/SEDERAJAT', 0),
(10, 'SEDANG D-3/SEDERAJAT', 0),
(11, 'SEDANG S-1/SEDERAJAT', 0),
(12, 'SEDANG S-2/SEDERAJAT', 0),
(13, 'SEDANG S-3/SEDERAJAT', 0),
(14, 'SEDANG SLB A/SEDERAJAT', 0),
(15, 'SEDANG SLB B/SEDERAJAT', 0),
(16, 'SEDANG SLB C/SEDERAJAT', 0),
(17, 'TIDAK DAPAT MEMBACA DAN MENULIS HURUF LATIN/ARAB', 0),
(18, 'TIDAK SEDANG SEKOLAH', 19);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan_kk`
--

CREATE TABLE `pendidikan_kk` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendidikan_kk`
--

INSERT INTO `pendidikan_kk` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'TIDAK / BELUM SEKOLAH', 21),
(2, 'BELUM TAMAT SD/SEDERAJAT', 10),
(3, 'SLTP/SEDERAJAT', 26),
(4, 'TAMAT SD / SEDERAJAT', 16),
(5, 'SLTA / SEDERAJAT', 28),
(6, 'DIPLOMA I / II', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `RT`
--

CREATE TABLE `RT` (
  `id` int(11) NOT NULL,
  `id_dusun` int(11) NOT NULL,
  `RT` varchar(125) NOT NULL,
  `jumlah_KK` int(125) NOT NULL,
  `jumlah_L` int(125) NOT NULL,
  `jumlah_P` int(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `RT`
--

INSERT INTO `RT` (`id`, `id_dusun`, `RT`, `jumlah_KK`, `jumlah_L`, `jumlah_P`) VALUES
(2, 2, '04', 30, 20, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'setanggorselatan', '$2y$10$RqPzw7ZoZdgo9SdIc803EuORECrUTKGjgI2iaqezGNjBhdFZJ2uXa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_negara`
--

CREATE TABLE `warga_negara` (
  `id` int(11) NOT NULL,
  `kelompok` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `warga_negara`
--

INSERT INTO `warga_negara` (`id`, `kelompok`, `jumlah`) VALUES
(1, 'Di bawah 1 Tahun', 10),
(2, '2 s/d 4 Tahun', 5),
(3, '5 s/d 9 Tahun', 0),
(4, '10 s/d 14 Tahun', 0),
(5, '15 s/d 19 Tahun', 0),
(6, '20 s/d 24 Tahun', 0),
(7, '25 s/d 29 Tahun', 0),
(8, '30 s/d 34 Tahun', 0),
(9, '35 s/d 39 Tahun', 0),
(10, '40 s/d 44 Tahun', 0),
(11, '45 s/d 49 Tahun', 0),
(12, '50 s/d 54 Tahun', 0),
(13, '55 s/d 59 Tahun', 0),
(14, '60 s/d 64 Tahun', 0),
(15, '65 s/d 69 Tahun', 0),
(16, '70 s/d 74 Tahun', 0),
(17, 'Di atas 75 Tahun', 0);

-- --------------------------------------------------------

--
-- Struktur untuk view `detail_rt`
--
DROP TABLE IF EXISTS `detail_rt`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_rt`  AS   (select `RT`.`id` AS `id`,`dusun`.`nama_dusun` AS `nama_dusun`,`RT`.`RT` AS `RT`,`RT`.`jumlah_KK` AS `jumlah_KK`,`RT`.`jumlah_L` AS `jumlah_L`,`RT`.`jumlah_P` AS `jumlah_P` from (`RT` join `dusun`) where `RT`.`id_dusun` = `dusun`.`id`)  ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dusun`
--
ALTER TABLE `dusun`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan_ditempuh`
--
ALTER TABLE `pendidikan_ditempuh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pendidikan_kk`
--
ALTER TABLE `pendidikan_kk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `RT`
--
ALTER TABLE `RT`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dusun` (`id_dusun`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warga_negara`
--
ALTER TABLE `warga_negara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `dusun`
--
ALTER TABLE `dusun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pekerja`
--
ALTER TABLE `pekerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_ditempuh`
--
ALTER TABLE `pendidikan_ditempuh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pendidikan_kk`
--
ALTER TABLE `pendidikan_kk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `RT`
--
ALTER TABLE `RT`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `warga_negara`
--
ALTER TABLE `warga_negara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `RT`
--
ALTER TABLE `RT`
  ADD CONSTRAINT `RT_ibfk_1` FOREIGN KEY (`id_dusun`) REFERENCES `dusun` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
