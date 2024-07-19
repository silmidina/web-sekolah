-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 19 Jul 2024 pada 23.22
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(11) NOT NULL,
  `judul_berita` varchar(255) DEFAULT NULL,
  `slug_berita` varchar(255) DEFAULT NULL,
  `isi_berita` text DEFAULT NULL,
  `gambar_berita` varchar(30) DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `judul_berita`, `slug_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `id_user`) VALUES
(4, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(7, 'semangat coding', 'semangat-coding', '<p style=\"text-align:justify\">Setiap masalah yang kamu pecahkan membawa kamu selangkah lebih maju.</p>\r\n\r\n<p style=\"text-align:justify\">Teruslah eksplorasi dan temukan kebahagiaan dalam setiap baris kode yang kamu buat.<img alt=\"heart\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /><img alt=\"smiley\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 'coding.jpg', '2024-07-16', 1),
(8, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(9, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(10, 'semangat coding', 'semangat-coding', '<p style=\"text-align:justify\">Setiap masalah yang kamu pecahkan membawa kamu selangkah lebih maju.</p>\r\n\r\n<p style=\"text-align:justify\">Teruslah eksplorasi dan temukan kebahagiaan dalam setiap baris kode yang kamu buat.<img alt=\"heart\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /><img alt=\"smiley\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 'coding.jpg', '2024-07-16', 1),
(11, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(12, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(13, 'semangat coding', 'semangat-coding', '<p style=\"text-align:justify\">Setiap masalah yang kamu pecahkan membawa kamu selangkah lebih maju.</p>\r\n\r\n<p style=\"text-align:justify\">Teruslah eksplorasi dan temukan kebahagiaan dalam setiap baris kode yang kamu buat.<img alt=\"heart\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /><img alt=\"smiley\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 'coding.jpg', '2024-07-16', 1),
(14, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(15, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p>gchgchh</p>\r\n', '123.jpg', '2024-07-15', 1),
(16, 'semangat coding', 'semangat-coding', '<p style=\"text-align:justify\">Setiap masalah yang kamu pecahkan membawa kamu selangkah lebih maju.</p>\r\n\r\n<p style=\"text-align:justify\">Teruslah eksplorasi dan temukan kebahagiaan dalam setiap baris kode yang kamu buat.<img alt=\"heart\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /><img alt=\"smiley\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /></p>\r\n', 'coding.jpg', '2024-07-16', 1),
(17, 'fjdivhdfisv 12345', 'fjdivhdfisv-12345', '<p><strong>Latihan dasar kepemipinan siswa</strong>&nbsp;atau LDKS merupakan bentuk kegiatan yang bertolak ukur kepada peningkatan sumber daya siswa/siswi peserta untuk mendalami dan memahami tentang konsep-konsep atau dasar &ndash; dasar sebuah organisasi.</p>\r\n', '123.jpg', '2024-07-19', 1),
(18, 'coba-coba memasukkan berita', 'coba-coba-memasukkan-berita', '<p>Pendidikan karakter adalah bentuk kegiatan manusia yang di dalamnya terdapat suatu tindakan yang mendidik dan diperuntukkan bagi generasi selanjutnya. Tujuan pendidikan karakter adalah untuk membentuk penyempurnaan diri individu secara terus-menerus dan melatih kemampuan diri demi menuju ke arah hidup yang lebih baik.&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pendidikan_karakter\">Wikipedia</a></p>\r\n', 'cuci.jpg', '2024-07-17', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_file`
--

CREATE TABLE `tbl_file` (
  `id_file` int(11) NOT NULL,
  `ket_file` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_file`
--

INSERT INTO `tbl_file` (`id_file`, `ket_file`, `file`) VALUES
(1, 'materi ipa', 'FRONTEND.pdf'),
(3, 'ips', 'BAB_II.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_foto`
--

CREATE TABLE `tbl_foto` (
  `id_foto` int(15) NOT NULL,
  `id_gallery` int(15) NOT NULL,
  `ket_foto` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_foto`
--

INSERT INTO `tbl_foto` (`id_foto`, `id_gallery`, `ket_foto`, `foto`) VALUES
(6, 1, 'pramuka', 'pramuka.jpg'),
(8, 1, 'Outbound', 'outbound.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_gallery` int(15) NOT NULL,
  `nama_gallery` text NOT NULL,
  `sampul` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_gallery`, `nama_gallery`, `sampul`) VALUES
(1, 'kegiatan ldks', 'ldks.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(11) NOT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(25) DEFAULT NULL,
  `tempat_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `foto_guru` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nip`, `nama_guru`, `tempat_lahir`, `tgl_lahir`, `id_mapel`, `pendidikan`, `foto_guru`) VALUES
(1, '15220277', 'Silmi', 'Bekasi', '2024-07-14', 5, 'S1', 'srd1.jpg'),
(3, '1522027', 'Fina', 'Bekasi', '2024-07-15', 2, 'S1', 'fina.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'Agama'),
(2, 'Bahasa Indonesia'),
(3, 'Matematika'),
(4, 'Bahasa Inggris'),
(5, 'IPA'),
(6, 'IPS'),
(7, 'Bahasa Sunda'),
(8, 'Bahasa Arab'),
(9, 'Informatika'),
(10, 'PPKN'),
(11, 'PJOK'),
(16, 'Seni Budaya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) DEFAULT NULL,
  `isi_pengumuman` text DEFAULT NULL,
  `tgl` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`id_pengumuman`, `judul_pengumuman`, `isi_pengumuman`, `tgl`) VALUES
(2, 'UTS', 'Diberitahukan kepada seluruh siswa SMAN 1 Bekasi bahwa ujian mulai dilaksanakan pada tanggal 1 Agustus 2024', '2024-07-15'),
(3, 'Libur Semester', 'Libur semester dimulai pada tanggal sekian dan terima kasih', '2024-07-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_setting`
--

CREATE TABLE `tbl_setting` (
  `id` int(5) NOT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_telpon` varchar(20) DEFAULT NULL,
  `kepala_sekolah` varchar(255) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `foto_kepsek` varchar(255) DEFAULT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `sejarah` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `nama_sekolah`, `alamat`, `no_telpon`, `kepala_sekolah`, `nip`, `foto_kepsek`, `visi`, `misi`, `sejarah`, `email`) VALUES
(1, 'SMAN 1 Bekasi', 'Bekasi Barat', '933949', 'Nadia', '12345', 'komen2.jpg', 'uhsfiushifigfiguf', 'hsdfhihfiref', '<p>ckskcfiifchihia<img alt=\"heart\" src=\"http://localhost/web-sekolah/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /></p>\r\n', 'SMAN1@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(15) NOT NULL,
  `nis` varchar(15) DEFAULT NULL,
  `nama_siswa` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(25) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `kelas` varchar(25) DEFAULT NULL,
  `foto_siswa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nis`, `nama_siswa`, `tempat_lahir`, `tgl_lahir`, `kelas`, `foto_siswa`) VALUES
(1, '79614767', 'Kiko', 'Bekasi', '2024-07-08', 'XII', '895831882.jpg'),
(2, '23655656', 'Mimo', 'Bekasi', '2024-07-02', 'XII', 'cuci.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(2) NOT NULL,
  `nama_user` varchar(25) DEFAULT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `level` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '12345', 1),
(2, 'lili', 'user', '12345', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_file`
--
ALTER TABLE `tbl_file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indeks untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  ADD PRIMARY KEY (`id_foto`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_file`
--
ALTER TABLE `tbl_file`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_foto`
--
ALTER TABLE `tbl_foto`
  MODIFY `id_foto` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id_gallery` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_setting`
--
ALTER TABLE `tbl_setting`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
