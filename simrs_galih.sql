-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2019 pada 18.36
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simrs_galih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `no_rm` tinytext NOT NULL,
  `nama` tinytext NOT NULL,
  `tanggal` tinytext NOT NULL,
  `alamat` tinytext NOT NULL,
  `umur` tinytext NOT NULL,
  `diagnosa` tinytext NOT NULL,
  `dpjp` tinytext NOT NULL,
  `dr_ugd` tinytext NOT NULL,
  `pr_ugd` tinytext NOT NULL,
  `pr_poli` tinytext NOT NULL,
  `pr_ruangan` tinytext NOT NULL,
  `bidan_vk` tinytext NOT NULL,
  `rm_mulai` tinytext NOT NULL,
  `rm_selesai` tinytext NOT NULL,
  `rm_penyiapan` tinytext NOT NULL,
  `rm_form` tinytext NOT NULL,
  `rm_Jamkomplain` tinytext NOT NULL,
  `rm_ket` tinytext NOT NULL,
  `rm_responkomplain` tinytext NOT NULL,
  `ugd_pakaigelang` tinytext NOT NULL,
  `ugd_warnagelang` tinytext NOT NULL,
  `ugd_infogelang` tinytext NOT NULL,
  `ugd_verbaliden` tinytext NOT NULL,
  `ugd_verbalread` tinytext NOT NULL,
  `ugd_emergency` tinytext NOT NULL,
  `ugd_jamkomplain` tinytext NOT NULL,
  `ugd_ket` tinytext NOT NULL,
  `ugd_respon` tinytext NOT NULL,
  `rajal_pakaigelang` tinytext NOT NULL,
  `rajal_warnagelang` tinytext NOT NULL,
  `rajal_infogelang` tinytext NOT NULL,
  `rajal_jambuka` tinytext NOT NULL,
  `rajal_masuk` tinytext NOT NULL,
  `rajal_selesai` tinytext NOT NULL,
  `rajal_waktutunggu` tinytext NOT NULL,
  `rajal_jamkomplain` tinytext NOT NULL,
  `rajal_ket` tinytext NOT NULL,
  `rajal_responkomplain` tinytext NOT NULL,
  `ranap_gelang` tinytext NOT NULL,
  `ranap_labelobat` tinytext NOT NULL,
  `ranap_labeldarah` tinytext NOT NULL,
  `ranap_labelmakanan` tinytext NOT NULL,
  `ranap_cp` tinytext NOT NULL,
  `ranap_produk` tinytext NOT NULL,
  `ranap_reaksi` tinytext NOT NULL,
  `ranap_terapi` tinytext NOT NULL,
  `ranap_kolf` tinytext NOT NULL,
  `ranap_masuk` tinytext NOT NULL,
  `ranap_alergi` tinytext NOT NULL,
  `ranap_alasan` tinytext NOT NULL,
  `ranap_riwayat` tinytext NOT NULL,
  `ranap_gizi` tinytext NOT NULL,
  `ranap_resiko` tinytext NOT NULL,
  `ranap_fungsi` tinytext NOT NULL,
  `ranap_nyeri` tinytext NOT NULL,
  `ranap_edukasi` tinytext NOT NULL,
  `ranap_planing` tinytext NOT NULL,
  `ranap_masalah` tinytext NOT NULL,
  `ranap_rencana` tinytext NOT NULL,
  `ranap_anamnesa` tinytext NOT NULL,
  `ranap_fisik` tinytext NOT NULL,
  `ranap_general` tinytext NOT NULL,
  `ranap_diagnosa` tinytext NOT NULL,
  `ranap_penunjang` tinytext NOT NULL,
  `ranap_intruksi` tinytext NOT NULL,
  `ranap_rekon` tinytext NOT NULL,
  `ranap_tglass` tinytext NOT NULL,
  `ranap_namapr` tinytext NOT NULL,
  `ranap_tglpr` tinytext NOT NULL,
  `ranap_assmedis` tinytext NOT NULL,
  `ranap_dpjp` tinytext NOT NULL,
  `ranap_terisi` tinytext NOT NULL,
  `ranap_verbaliden` tinytext NOT NULL,
  `ranap_verbalread` tinytext NOT NULL,
  `ranap_assawal` tinytext NOT NULL,
  `ranap_asslanj` tinytext NOT NULL,
  `ranap_pasanggelang` tinytext NOT NULL,
  `ranap_kie` tinytext NOT NULL,
  `ranap_upaya` tinytext NOT NULL,
  `ranap_visitspe` tinytext NOT NULL,
  `ranap_aps` tinytext NOT NULL,
  `ranap_jamkomplain` tinytext NOT NULL,
  `ranap_ket` tinytext NOT NULL,
  `ranap_respon` tinytext NOT NULL,
  `peri_bblahir` tinytext NOT NULL,
  `peri_bbpulang` tinytext NOT NULL,
  `peri_kondisi` tinytext NOT NULL,
  `peri_visitspe` tinytext NOT NULL,
  `peri_verbaliden` tinytext NOT NULL,
  `peri_verbalread` tinytext NOT NULL,
  `peri_jamkomplain` tinytext NOT NULL,
  `peri_ket` tinytext NOT NULL,
  `peri_respon` tinytext NOT NULL,
  `lab_jenis` tinytext NOT NULL,
  `lab_waktu` tinytext NOT NULL,
  `lab_salah` tinytext NOT NULL,
  `lab_cito` tinytext NOT NULL,
  `lab_rutin` tinytext NOT NULL,
  `lab_jamkomplain` tinytext NOT NULL,
  `lab_ket` tinytext NOT NULL,
  `lab_respon` tinytext NOT NULL,
  `vk_eklampsi` tinytext NOT NULL,
  `vk_mgso4` tinytext NOT NULL,
  `vk_matipersalinan` tinytext NOT NULL,
  `vk_primi` tinytext NOT NULL,
  `vk_verbaliden` tinytext NOT NULL,
  `vk_verbalread` tinytext NOT NULL,
  `vk_imd` tinytext NOT NULL,
  `vk_jamkomplain` tinytext NOT NULL,
  `vk_ket` tinytext NOT NULL,
  `vk_respon` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `no_rm`, `nama`, `tanggal`, `alamat`, `umur`, `diagnosa`, `dpjp`, `dr_ugd`, `pr_ugd`, `pr_poli`, `pr_ruangan`, `bidan_vk`, `rm_mulai`, `rm_selesai`, `rm_penyiapan`, `rm_form`, `rm_Jamkomplain`, `rm_ket`, `rm_responkomplain`, `ugd_pakaigelang`, `ugd_warnagelang`, `ugd_infogelang`, `ugd_verbaliden`, `ugd_verbalread`, `ugd_emergency`, `ugd_jamkomplain`, `ugd_ket`, `ugd_respon`, `rajal_pakaigelang`, `rajal_warnagelang`, `rajal_infogelang`, `rajal_jambuka`, `rajal_masuk`, `rajal_selesai`, `rajal_waktutunggu`, `rajal_jamkomplain`, `rajal_ket`, `rajal_responkomplain`, `ranap_gelang`, `ranap_labelobat`, `ranap_labeldarah`, `ranap_labelmakanan`, `ranap_cp`, `ranap_produk`, `ranap_reaksi`, `ranap_terapi`, `ranap_kolf`, `ranap_masuk`, `ranap_alergi`, `ranap_alasan`, `ranap_riwayat`, `ranap_gizi`, `ranap_resiko`, `ranap_fungsi`, `ranap_nyeri`, `ranap_edukasi`, `ranap_planing`, `ranap_masalah`, `ranap_rencana`, `ranap_anamnesa`, `ranap_fisik`, `ranap_general`, `ranap_diagnosa`, `ranap_penunjang`, `ranap_intruksi`, `ranap_rekon`, `ranap_tglass`, `ranap_namapr`, `ranap_tglpr`, `ranap_assmedis`, `ranap_dpjp`, `ranap_terisi`, `ranap_verbaliden`, `ranap_verbalread`, `ranap_assawal`, `ranap_asslanj`, `ranap_pasanggelang`, `ranap_kie`, `ranap_upaya`, `ranap_visitspe`, `ranap_aps`, `ranap_jamkomplain`, `ranap_ket`, `ranap_respon`, `peri_bblahir`, `peri_bbpulang`, `peri_kondisi`, `peri_visitspe`, `peri_verbaliden`, `peri_verbalread`, `peri_jamkomplain`, `peri_ket`, `peri_respon`, `lab_jenis`, `lab_waktu`, `lab_salah`, `lab_cito`, `lab_rutin`, `lab_jamkomplain`, `lab_ket`, `lab_respon`, `vk_eklampsi`, `vk_mgso4`, `vk_matipersalinan`, `vk_primi`, `vk_verbaliden`, `vk_verbalread`, `vk_imd`, `vk_jamkomplain`, `vk_ket`, `vk_respon`) VALUES
(1, '19036914', 'WIDIYA, NY', '04/10/2019', 'JL. RAYA SUI KAKAP, GG. CAHAYA HARAPAN NO. 37', '23 TAHUN', 'GRAVIDA 38-39 MINGGU DG OLIGO PRO INDUKSI', 'dr. Mohammad Taufik, Sp. OG', 'dr. Muhammad Aries Fitrian', 'RIHAJENG', '', '', '', '08.00', '09.00', 'Kurang dari 10 menit', 'Lengkap', '09.00', 'qaasd', 'Kurang dari 10 menit', 'Ya', 'Benar', 'Benar', '1', '1', 'Kurang dari 5 menit', '08.11', 'afadsf', 'Kurang dari 10 menit', 'Ya', 'Benar', 'Benar', 'Lebih dari 08.00', '12', '123', 'Kurang dari 60 menit', '123', '123', 'Kurang dari 10 menit', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '1', 'Sehat', 'Kurang dari 14.00', '1', '1', '1', '1', 'Kurang dari 10 menit', '12', 'Kurang dari  60 Menit', 'Benar', 'Kurang dari 2 Jam', 'Kurang dari 6 Jam', '1', '1', 'Kurang dari 10 menit', 'Hidup', 'Tersedia', 'Hidup', 'Normal', '1', '1', 'Ya', '1', '1', 'Kurang dari 10 menit'),
(2, '18023548', 'JANNATA SHAFIYYAH, AN', '04/10/2019', 'JL. KESEHATAN GG KESEHATAN', '1TAHUN', 'ISPA', 'dr. I Nyoman Sudiatmika, Sp.A', '', '', 'HENI, VINA,QORY', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_gizi`
--

CREATE TABLE `pasien_gizi` (
  `id_gizi` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `gizi_jadwal` tinytext NOT NULL,
  `gizi_pemberian` tinytext NOT NULL,
  `gizi_tepat` tinytext NOT NULL,
  `gizi_benar` tinytext NOT NULL,
  `gizi_jamkomplain` tinytext NOT NULL,
  `gizi_ket` tinytext NOT NULL,
  `gizi_respon` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien_sanitasi`
--

CREATE TABLE `pasien_sanitasi` (
  `id_sanitasi` int(11) NOT NULL,
  `id_pasien` int(11) NOT NULL,
  `sani_linen` tinytext NOT NULL,
  `sani_jamkomplain` tinytext NOT NULL,
  `sani_ket` tinytext NOT NULL,
  `sani_respon` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `ujian` tinytext NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` text NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `agama` varchar(40) NOT NULL,
  `kwgn` varchar(40) NOT NULL,
  `nama_ayah` varchar(40) NOT NULL,
  `nama_ibu` varchar(40) NOT NULL,
  `pekerjaan_ayah` varchar(40) NOT NULL,
  `pekerjaan_ibu` varchar(40) NOT NULL,
  `sekolah_asal` varchar(50) NOT NULL,
  `telp` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `statusaktif` enum('Y','N') NOT NULL DEFAULT 'Y',
  `status` int(11) NOT NULL,
  `keterangan` tinytext NOT NULL,
  `tujuan` int(11) DEFAULT '1',
  `jurusan` tinytext NOT NULL,
  `kelas` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `ujian`, `username`, `password`, `nama`, `tgl_lahir`, `jk`, `agama`, `kwgn`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `sekolah_asal`, `telp`, `alamat`, `statusaktif`, `status`, `keterangan`, `tujuan`, `jurusan`, `kelas`) VALUES
(66, '1', 'admin', 'admin', 'admin', '', '', '', '', '', '', '', '', '', '', '', 'Y', 1, '', 1, 'AKUTANSI', 'REGULER');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pasien_gizi`
--
ALTER TABLE `pasien_gizi`
  ADD PRIMARY KEY (`id_gizi`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pasien_gizi`
--
ALTER TABLE `pasien_gizi`
  MODIFY `id_gizi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
