-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2024 pada 05.37
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pesanan`
--

CREATE TABLE `detail_pesanan` (
  `id_detail` int(11) NOT NULL,
  `id_pesanan` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_pesanan`
--

INSERT INTO `detail_pesanan` (`id_detail`, `id_pesanan`, `id_produk`, `kuantitas`, `total_harga`) VALUES
(1, 1, 13, 0, 0),
(2, 1, 13, 2, 300000),
(3, 1, 13, 2, 600000),
(4, 7, 13, 1, 150000),
(5, 9, 12, 1, 120000),
(6, 11, 18, 1, 159000),
(7, 12, 16, 1, 150000),
(8, 13, 17, 1, 350000),
(9, 16, 15, 1, 299000),
(10, 18, 16, 1, 150000),
(11, 20, 24, 2, 510000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(9, 'BTS'),
(10, 'New Jeans'),
(11, 'Tommorow X Together'),
(12, 'Enhypen'),
(13, 'Illit'),
(14, 'Lesserafim'),
(15, 'Seventeen'),
(16, 'Promis9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `kuantitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_user`, `id_produk`, `kuantitas`) VALUES
(66, 0, 18, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pesanan` date NOT NULL,
  `no_tujuan` varchar(13) NOT NULL,
  `alamat_tujuan` text NOT NULL,
  `bukti_bayar` varchar(255) NOT NULL,
  `status_pesanan` enum('pending','konfirmasi','ditolak','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_user`, `tgl_pesanan`, `no_tujuan`, `alamat_tujuan`, `bukti_bayar`, `status_pesanan`) VALUES
(11, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Bangka Provinsi Bangka Belitung Kode Pos 33212 jne JTR; 175000; 19-25 Hari', '', 'pending'),
(12, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kota Batam Provinsi Kepulauan Riau Kode Pos 29413 jne JTR; 190000; 18-24 Hari', '', 'pending'),
(13, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Lampung Barat Provinsi Lampung Kode Pos 34814 jne JTR; 185000; 9-10 Hari', '', 'pending'),
(14, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Lampung Barat Provinsi Lampung Kode Pos 34814 jne JTR; 185000; 9-10 Hari', '', 'pending'),
(15, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Lampung Barat Provinsi Lampung Kode Pos 34814 jne JTR; 185000; 9-10 Hari', '', 'pending'),
(16, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Barito Selatan Provinsi Kalimantan Tengah Kode Pos 73711 jne JTR; 295000; 19-25 Hari', '4cdd20625903dcd059a4bffe75c4ff86.jpg', 'pending'),
(17, 17, '2024-07-09', '085200000000', 'jl. lubug begalung nan xx Kabupaten Barito Selatan Provinsi Kalimantan Tengah Kode Pos 73711 jne JTR; 295000; 19-25 Hari', '4cdd20625903dcd059a4bffe75c4ff86.jpg', 'pending'),
(18, 17, '2024-07-09', '085200000000', 'aini Kabupaten Way Kanan Provinsi Lampung Kode Pos 34711 jne JTR; 185000; 9-10 Hari', '4cdd20625903dcd059a4bffe75c4ff86.jpg', 'pending'),
(20, 17, '2024-07-10', '085200000000', 'jl. lubug begalung nan xx Kabupaten Bulungan (Bulongan) Provinsi Kalimantan Utara Kode Pos 77211 jne JTR; 420000; 19-25 Hari', '1.jpg', 'diterima');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(10, 0, '', '', 0, ''),
(11, 0, '', '', 0, ''),
(15, 9, 'Love Your Self [Answer]', 'BTS - Repackage Album - Love Yourself [Answer] \r\nRelease date: 24 Agustus', 299000, '4cdd20625903dcd059a4bffe75c4ff86.jpg'),
(16, 9, 'You Never Walk Alone', 'Album Only Include :\r\n🌸Photobook\r\n🌸CD-R\r\n🌸Special Gift (sesuai stock) \r\n🌸Freebies', 150000, '5dbca5212d9d14165501b734aa78e3e0.jpg'),
(17, 10, 'NewJeans GET UP', 'Tracklist\r\n1. New Jeans\r\n2. Super Shy\r\n3. ETA\r\n4. Cool With You\r\n5. Get Up\r\n6. ASAP', 350000, '0a3506d263549998bc237e5f26e99597.png'),
(18, 10, 'NewJeans 1st EP New Jeans', 'Track List\r\n1. Attention\r\n2. Hype Boy\r\n3. Cookie\r\n4. Hurt', 159000, '9912453e36490a90474afaf1f6e38606.png'),
(19, 11, 'The Chaos Chapter: FREEZE (Random)', '1. Anti-Romantic\r\n2. 0X1=LOVESONG (I Know I Love You) feat. Seori\r\n3. Magic\r\n4. 소악행\r\n5. 밸런스 게임\r\n6. No Rules\r\n7. 디어 스푸트니크\r\n8. Frost', 236000, '9.jpg'),
(20, 11, 'JP 4th Single [CHIKAI] Limited Edition A', '01 We’ll Never Change\r\n02 Deja Vu [Japanese Ver.]\r\n03 Kitto Zutto', 265000, '8.png'),
(21, 9, 'MAP OF THE SOUL : PERSONA', '1. [1 Ver.] Intro : Persona\r\n2. 작은 것들을 위한 시 (Boy with Luv) feat. Halsey\r\n3. 소우주 (Mikrokosmos)\r\n4. Make It Right\r\n5. HOME\r\n6. Jamais Vu\r\n7. Dionysus', 300000, '01783d5e533d80c44a9b631e2a0018ff.jpg'),
(22, 10, 'NewJeans 2nd EP Get Up', '1. New Jeans\r\n2. Super Shy\r\n3. ETA\r\n4. Cool With You\r\n5. Get Up\r\n6. ASAP', 350000, '10.png'),
(23, 14, '1st Mini Album FEARLESS', '1. The World Is My Oyster\r\n2. FEARLESS\r\n3. Blue Flame\r\n4. The Great Mermaid\r\n5. Sour Grapes', 150000, '11.png'),
(24, 14, '2nd Mini Album ANTIFRAGILE', '1/ The Hydra\r\n2/ ANTIFRAGILE *Title\r\n3/ Impurities\r\n4/ No Celestial\r\n5/ Good Parts (when the quality is bad but I am)', 255000, '12.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `level` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `foto`, `level`) VALUES
(1, 'admin aini', 'aini', 'aini', 'gojoo.jpeg', 'admin'),
(17, 'aini', 'aini', 'aini', 'e12056b4-a5d2-4aba-8b1b-90937137a90c.jpeg', 'member'),
(19, 'dokter', 'as', 'asd', 'e12056b4-a5d2-4aba-8b1b-90937137a90c.jpeg', 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pesanan`
--
ALTER TABLE `detail_pesanan`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
