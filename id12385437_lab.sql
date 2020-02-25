-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 25 Feb 2020 pada 12.24
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12385437_lab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_harga_to_user`
--

CREATE TABLE `tbl_harga_to_user` (
  `id` int(11) NOT NULL,
  `item_uji` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT '-',
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_harga_to_user`
--

INSERT INTO `tbl_harga_to_user` (`id`, `item_uji`, `harga`, `keterangan`, `kategori`) VALUES
(1, 'Ketebalan Jalan Aspal dengan Alat Core Drill ≤7 Titik', 1050000, 'Harga Paket', 'Pengujian Aspal'),
(2, 'Ketebalan Jalan Aspal dengan Alat Core Drill ≥7 Titik', 150000, 'Harga Per Titik', 'Pengujian Aspal'),
(3, 'Ketebalan Jalan berbutir dengan test pit ≤7 Titik', 525000, 'Harga Paket', 'Pengujian Aspal'),
(4, 'Ketebalan Jalan berbutir dengan test pit ≥7 Titik', 75000, 'Harga Per Titik', 'Pengujian Aspal'),
(20, 'Uji Tarik dan Lentur Besi 1 Paket', 900000, 'Pengujian 3 Tarik dan 3 Tekuk', 'Pengujian Struktur'),
(21, 'Pemotongan Benda Uji Baja/Besi 1 Sample', 20000, '', 'Pengujian Struktur'),
(24, 'Kuat Tekan Beton Kubus 1 Sample', 65000, '', 'Pengujian Beton'),
(25, 'Kuat Tekan Beton Kubus 1 Sample', 130000, '≥ Mutu K301', 'Pengujian Beton'),
(26, 'Kuat Tekan Beton Silinder 1 Sample', 65000, '', 'Pengujian Beton'),
(33, 'Hammer Test 1 Titik', 160000, 'Minimal 7 Titik', 'Pengujian Beton'),
(35, 'Kuat Tekan Beton Sample Core 1 Sample', 200000, '', 'Pengujian Beton'),
(52, 'Sondir 1 Titik', 1000000, '', 'Pengujian Tanah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_harga_uji`
--

CREATE TABLE `tbl_harga_uji` (
  `id` int(11) NOT NULL,
  `item_uji` text DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT '-',
  `kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_harga_uji`
--

INSERT INTO `tbl_harga_uji` (`id`, `item_uji`, `harga`, `keterangan`, `kategori`) VALUES
(1, 'Ketebalan Jalan Aspal dengan Alat Core Drill ≤7 Titik', 1050000, 'Harga Paket', 'Pengujian Aspal'),
(2, 'Ketebalan Jalan Aspal dengan Alat Core Drill ≥7 Titik', 150000, 'Harga Per Titik', 'Pengujian Aspal'),
(3, 'Ketebalan Jalan berbutir dengan test pit ≤7 Titik', 525000, 'Harga Paket', 'Pengujian Aspal'),
(4, 'Ketebalan Jalan berbutir dengan test pit ≥7 Titik', 75000, 'Harga Per Titik', 'Pengujian Aspal'),
(5, 'Kepadatan / Density sample core aspal 1 Sample', 60000, '', 'Pengujian Aspal'),
(6, 'Kadar Aspal / Reflux (Gembur/Core Besar) 1 Sample', 600000, '', 'Pengujian Aspal'),
(7, 'Kadar Aspal/Reflux (Core Kecil) 1 Sample', 150000, '', 'Pengujian Aspal'),
(8, 'Analisa Saringan (Setelah Kadar Aspal) 1 Sample', 100000, '', 'Pengujian Aspal'),
(9, 'Kelekatan Agregat Terhadap Aspal 1 Sample', 150000, '', 'Pengujian Aspal'),
(10, 'Marshall 1 Sample', 100000, '', 'Pengujian Aspal'),
(11, 'Penetrasi Aspal 1 Sample', 100000, '', 'Pengujian Aspal'),
(12, 'Daktilitas 1 Sample', 200000, '', 'Pengujian Aspal'),
(13, 'Titik Lembek 1 Sample', 200000, '', 'Pengujian Aspal'),
(14, 'Kehilangan Berat/TFOT 1 Sample', 150000, '', 'Pengujian Aspal'),
(15, 'Sibolt Viskositas 1 Sample', 200000, '', 'Pengujian Aspal'),
(16, 'Titik Nyala, Titik Bakar 1 Sample', 200000, '', 'Pengujian Aspal'),
(17, 'Berat Jenis Aspal 1 Sample', 200000, '', 'Pengujian Aspal'),
(18, 'Desain Mix Formula Aspal 1 Mix', 2550000, '', 'Pengujian Aspal'),
(19, 'Desain Mix Formulas Latasir 1 Mix', 2550000, '', 'Pengujian Aspal'),
(20, 'Uji Tarik dan Lentur Besi 1 Paket', 900000, 'Pengujian 3 Tarik dan 3 Tekuk', 'Pengujian Struktur'),
(21, 'Pemotongan Benda Uji Baja/Besi 1 Sample', 20000, '', 'Pengujian Struktur'),
(22, 'Uji Tarik Plat 1 Paket', 450000, '', 'Pengujian Struktur'),
(23, 'Uji Lentur Kayu 1 Sample', 150000, '', 'Pengujian Struktur'),
(24, 'Kuat Tekan Beton Kubus 1 Sample', 65000, '', 'Pengujian Beton'),
(25, 'Kuat Tekan Beton Kubus 1 Sample', 130000, '≥ Mutu K301', 'Pengujian Beton'),
(26, 'Kuat Tekan Beton Silinder 1 Sample', 65000, '', 'Pengujian Beton'),
(27, 'Keping Beton 1 Sample', 10000, '', 'Pengujian Beton'),
(28, 'Kuat Tekan Paving Block/Batako 1 Sample', 55000, 'Mutu > K-200', 'Pengujian Beton'),
(29, 'Kuat Tekan Paving Block/Batako 1 Sample', 150000, 'Mutu < K-200', 'Pengujian Beton'),
(30, 'Kuat Tekan Mortar 1 Sample', 150000, '', 'Pengujian Beton'),
(31, 'Desain Mix Formula Beton 1 Mix', 1750000, '', 'Pengujian Beton'),
(32, 'Uji Lentur Beton Balok 1 Sample', 150000, '', 'Pengujian Beton'),
(33, 'Hammer Test 1 Titik', 160000, 'Minimal 7 Titik', 'Pengujian Beton'),
(34, 'Ketebalan Jalan Beton dengan Alat Core Drill (Minimal 3 titik) 1 Titik', 750000, '', 'Pengujian Beton'),
(35, 'Kuat Tekan Beton Sample Core 1 Sample', 200000, '', 'Pengujian Beton'),
(36, 'Berat Jenis Base 1 Sample', 300000, '', 'Pengujian Tanah'),
(37, 'Berat Jenis 1 Sample', 150000, '', 'Pengujian Tanah'),
(38, 'Kadar Air 1 Sample', 50000, '', 'Pengujian Tanah'),
(39, 'Berat Volume 1 Sample', 50000, '', 'Pengujian Tanah'),
(40, 'Analisa Saringan/Hydrometer 1 Sample', 100000, '', 'Pengujian Tanah'),
(41, 'Analisa Saringan Base 1 Sample', 150000, '', 'Pengujian Tanah'),
(42, 'Analisa (LL/PL/PI) 1 Sample', 150000, '', 'Pengujian Tanah'),
(43, 'Uji Geser Langsung/Direct Shear 1 Sample', 150000, '', 'Pengujian Tanah'),
(44, 'Konsolodasi 1 Sample', 200000, '', 'Pengujian Tanah'),
(45, 'Pemadatan Standard/Standard Proctor 1 Sample', 400000, '', 'Pengujian Tanah'),
(46, 'Pemadatan Modifikasi/Modified Proctor 1 Sample', 450000, '', 'Pengujian Tanah'),
(47, 'CBR Laboratorium Kering/Rendam 1 Sample', 500000, '', 'Pengujian Tanah'),
(48, 'Triaxial UU 1 Sample', 450000, '', 'Pengujian Tanah'),
(49, 'Triaxial CU 1 Sample', 750000, '', 'Pengujian Tanah'),
(50, 'Triaxial CD 1 Sample', 750000, '', 'Pengujian Tanah'),
(51, 'Permeabilitas 1 Titik', 75000, '', 'Pengujian Tanah'),
(52, 'Sondir 1 Titik', 1000000, '', 'Pengujian Tanah'),
(53, 'Bor Tangan 1 Titik', 500000, '', 'Pengujian Tanah'),
(54, 'Bor Mesin 1 Titik', 17000000, '', 'Pengujian Tanah'),
(55, 'DCP 1 Titik', 150000, '', 'Pengujian Tanah'),
(56, 'CBR Lapangan 1 Titik', 500000, '', 'Pengujian Tanah'),
(57, 'Sand Cone 1 Titik', 250000, '', 'Pengujian Tanah'),
(58, 'Pemadatan Tanah 1 Sample', 600000, 'Harga Paket', 'Pengujian Tanah'),
(59, 'Kadar Air 1 Sample', 50000, '', 'Pengujian Mekanika Bahan'),
(60, 'Berat Volume 1 Sample', 50000, '', 'Pengujian Mekanika Bahan'),
(61, 'Berat Jenis dan Penyerapan 1 Sample', 150000, '', 'Pengujian Mekanika Bahan'),
(62, 'Analisa Saringan/Gradasi 1 Sample', 100000, '', 'Pengujian Mekanika Bahan'),
(63, 'Kadar Lumpur 1 Sample', 75000, '', 'Pengujian Mekanika Bahan'),
(64, 'Kadar Organik Agregat Halus 1 Sample', 150000, '', 'Pengujian Mekanika Bahan'),
(65, 'Abrasi/Los Angeles Agregat Kasar 1 Sample', 300000, '', 'Pengujian Mekanika Bahan'),
(66, 'Uji Tumbuk/Impact Agregat Kasar 1 Sample', 300000, '', 'Pengujian Mekanika Bahan'),
(67, 'Kepipihan Agregat Kasar 1 Sample', 150000, '', 'Pengujian Mekanika Bahan'),
(68, 'Uji Vicat 1 Sample', 100000, '', 'Pengujian Mekanika Bahan'),
(69, 'Agregat Base A/B/S 1 Sample', 1850000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(70, 'Agregat Lapen (1-2/2-3/3-5) 1 Sample', 1050000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(71, 'Analisa Saringan 3x 1 Sample', 1050000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(72, 'Berat Jenis 3x Abrasi 1 Sample', 1050000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(73, 'Abrasi 1 Sample', 1050000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(74, 'Pemadatan Base A/B/S 1 Sample', 800000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(75, 'Pengujian Kelayakan Agregat Kasur (2 Ukuran) 1 Quary', 1050000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(76, 'Pengujian Kelayakan Agregat Kasur (1 Ukuran) 1 Quary', 700000, 'Harga Paket', 'Pengujian Mekanika Bahan'),
(77, 'Pengujian Kelayakan Agregat Halus 1 Quary', 525000, 'Harga Paket', 'Pengujian Mekanika Bahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `kuota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `tanggal`, `kuota`) VALUES
(1, '2020-02-20', 0),
(2, '2020-02-18', 0),
(3, '2020-10-03', 0),
(18, '2020-02-25', 0),
(19, '2020-02-25', 9),
(20, '2020-02-26', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_karyawan`
--

CREATE TABLE `tbl_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_karyawan`
--

INSERT INTO `tbl_karyawan` (`id`, `nama`, `email`, `password`, `jabatan`) VALUES
(1, 'sudo', 'su@mail.com', '61c105c1000bfe1a3a76217cfd6a62082ba64a07d0c0ffa094955951044762648d3fdbf3e5e6d4c0d1151cdec915b348c7d5873ed2e61d2a491264d31219a6f60Jut4WigDv7N1Nu4Xlmn5lRaSg5Vhbp6WL5HaR672Us=', 'su'),
(16, 'Isman Novriyansyah,S.T', 'isman@mail.com', 'e97225d2937b9d85f0cc764629045d19cf6a8ef8b132c3f3bd6ca1647515653858c437b4dc7da88f1c73f93b7c61a3a637d7cd7ea912f976691a48319f44fe63gp5d15ffTNNL4eqx9kIrZXYI5bRU9uwOq9t0LksCDMc=', 'Teknisi'),
(17, 'Ari Setiawan,S.T', 'ari@mail.com', 'be532804e3388df114cd1e4b675a8f6ff1cdde6e7842367d53581b0502a1b58baf285fa5798b48f1b885d21890a22ce293b78c6079935ab2b865efd10deb8d47oQYvXkOck4icKoD1aRcF1KWYGL7pVfpO+cTuC5V0qIU=', 'Teknisi'),
(18, 'Hilman Saputra,S.T', 'hilman@mail.com', '8d7a4e18347a7aef4f61ef44fd075a354e2bc1b7bf67c43f340c5228b200ea2f566f3c2eef00794a3e7e0c60d3396a5c2184df694791ddf20d3b79f011e0aec6gwAeG64EW7Y9k/OXLNmZVoEMKfxumVqQHfUWO1eI7g0=', 'Teknisi'),
(19, 'Waris,S.T', 'waris@mail.com', '54adeb2acd6951df6ad5aea5228cdd1402166dfcfbe3249dbab3bf28fb1848b7fa772ba71271dc5648ef7f119d096438c73cae4527d6c658035a7d353b6065ddZe7szL4LAkuhydafIpC/43w70sXWgBX4HQHNBMln+a8=', 'Teknisi'),
(20, 'Sufiyanto,S.Kom', 'sufiyanto@mail.com', 'a351a2a1f83ae4f85ae901d483246d3b31b9e70259240c89ad91f783f130136f73bf904cce92fba17445e3047b2cb5e5ba03e0f4c0052e9ccd5f9353d3fa3442OeAY/sau7xW9ia3sXZ8VnaH97sfgHL8SYbyKLLne+z8=', 'Teknisi'),
(21, 'Sep Aan Anshori, S.T', 'sep@mail.com', 'd533eccfbd4b1bb712351a54e87158f34eb4982b0714562d41abc50edea54dd7ad24b21838dc855da422157e793c66ed6c4685a548c8c8fa788a245f889a8492ZVLCO/4kFUM65SZlPJ8mZzTGAdW6JrsH+gfxyXcTz6g=', 'Teknisi'),
(22, 'Adi Prayoga, S.T', 'adi@mail.com', '5c8acaf90570b62053c0acf71d5ae6c31298267863a37d9f9a241493ac1b69822f0eeb4019a18f91a598363f538903f1769a1f2908372a582cd336eb08fe74a4RtWU4s/SrMVVvNAXkS4Ao3nnU8dHx9mcGRgUkllSqUw=', 'Teknisi'),
(23, 'user', 'user@mail.com', 'adc98f42e77aa2585ea3084e7ec388aaf821cd818738672295f24252ffa96e2caca16e5055e31cded685a81d77fa225fb9054c08fb0d25061646b48463610711qUYpbPYLoudVIM5H4SHVii9yiC0U58uAv/IzTC4ytq0=', ''),
(24, 'Kepalaleb', 'kepala@mail.com', '46bd84d05c2a9665766c1a20005bd73e8254483ad1790d5223cd156eb8ffc573930dda4cd2a905cb9c69ad4f44a39399095981ae34693f3a183262176a8f31c29EjNHX6W/N/06kAi20kzleIfUL8CqOd1UnKRkZDGmv8=', 'Kepala Lab'),
(25, 'Teknisi', 'teknisi@mail.com', '6ccba2bcb653a1f37021e9971812162c5c7541d3faf2578e9625fb8a34b598d21c16201ba1d12256e75aff89cd8f6f22f2c61da405786dcb015e8880c83db723H4r91szFHAs1zt1Db1hSVEtF3nO5gQ4VP6ZvlmoYrag=', 'Teknisi'),
(26, 'Karyawan', 'kasir@mail.com', 'abc5846acbced9716c2282ba62b9ffb360bc6e95302ed49b02d78a164c71b0e4a96c6f7ac39744bfc565eff90ee60aa55b26a902ee1af528894c1082b6f9badfVTzktDQSAcCF0l1gac5TwYh28ThUdCU2kGGZTh1JbOE=', 'Kasir'),
(27, 'Penyelia', 'penyelia@mail.com', 'aed068f5b8a261752350ccee74e8bb12bf17d34216c9d38bdd70d6bcdacd31930181ff66621ac5274ce7de4a57658a16052707b2c16d7be37be541f4c82945262O9zwbpDDw06ByIjFALXIFII7ON51VJxafBuhvnemSI=', 'Penyelia'),
(28, 'Lebing', 'lebing@mail.com', '75912b964624949ebc406a13c29f7ddb5fb0ba666bf58253f3a45dd75773c85e64645d56698455ca4b9871aa589e52b86aa2aef8677c31eba055920bc6633d5fcxMdO5/31vutmei3+8vPUJFxJlRgkugOFn1dCF3Jv5Q=', 'Lebing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelanggan`
--

CREATE TABLE `tbl_pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nope` varchar(100) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `nama_perusahaan` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(300) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pelanggan`
--

INSERT INTO `tbl_pelanggan` (`id`, `nama`, `nope`, `alamat`, `nama_perusahaan`, `email`, `password`, `tanggal`, `status`) VALUES
(1, 'Guru Baik', '08965434323', 'Jl Japan', 'Usaha Muda', 'user@mail.com', 'd76432c9d071f3e97086aeb2150e33d9430c889d16cbdff1c3343a06806e1910a67970980af6dff28e692a68003481eaf606c2d8ff6414fa953dc55baf564f6bwApxd9fw/xclP9qW2xOm2nhwoLUBTqNrXh4/NN7FYXc=', '2020-02-18 16:17:05', 1),
(4, 'Kepalaleb', '123', 'ubl', 'leb ubl', 'kepalaleb@com', '72becc5ece20eb2228d1bd4d92aa404da8ce9f040d98b2581a739c1d7efac4c3e7b49e9fcaf3acd8500713c0368398ae675db73a8053dff0fb5e3259a539c108nuAJHcJvXW0gWn/N/vA7lgqihByzt52j/hzxKyPymJs=', '2020-02-20 02:43:14', 0),
(5, 'Jono', '089900992233k', 'Jalan Kamboja No 30', 'PT. LPTS-UBL', 'snr@lidik.id', 'ad03180ccfe0ddb9f7ff4e543fe772b69ad8f659ea4c6777a7fe88a71657dd904764217c995dbe1fc12510351d2020bf929d6d17d5826cc50758a0e7dd822ecauQ56yZvJ2IY7vzTuo97HYzMf7YRgw8IKe6PAwMzYjbA=', '2020-02-21 12:56:17', 0),
(6, 'TESTWEB', '0721', 'Jalan Kamoo', 'PT MEIDA', '123@gmail.com', 'cbf533e9d00a43fcba96b013e9ad0b16c0374f0c4f7b2cab26e0f86551d4b483511bce5137c363ffc28d9c0d6523882596be70b2c03bc74c58e41ede8c3150ffCsGYgcCOUCNMchjy2cLV/MVdYZDOs2GmTeHev7jTt/w=', '2020-02-20 03:31:58', 0),
(7, 'BEJO', '082299002222', 'Jalan Kamboja No 9', 'PT.OKE OEC', 'bejo@mail.com', '1b875e0d031977a194e1b8144f345c13f7cf5bc7d295e71e25fcc385c85e355461a6628ab835ce09db1eb02df987b7fb363301269d473a2654c57ba1fb8f96d3josaEEXJglJL1q3CIXN5hxW/nWYBPNFznKDBYL4DjPA=', '2020-02-21 12:55:37', 0),
(8, 'pak roni', '0811273777343', 'Z.A Pagar Alaman No 9', 'leb teknik', 'roni@mail.com', 'b614901678ef0bc8ae7b2389f39946f275fa704d407d53d13bedf062bc0100b6344b5b525486ec03f54a31c7214404f8d8f3fc1cdc646b825ff2ef88057e3777NHWpYaoenPiqG7qQnGpzeImk2uxCvPQnXjyPAvI8xXs=', '2020-02-21 07:52:40', 0),
(9, 'Jini', '082280082028', 'Jalan Kamboja No 90', 'PT.PRIMA', 'jini@mail.com', '61d643ca965566eaeca71d7c39774ac29bee22bb2b3a154271016f696ecb28eee35c88327bfe30d4ae56b09123c96de3664612d0f404e6d14a10f0b8515f8d43MsxWjEqnsW2gDTUyJw+zCDp9XiFl5ycP5bHYIo9Sqk4=', '2020-02-21 12:55:11', 0),
(10, 'Satriya', '081299880088', 'Jalan Urip No 90 Tanjung Karang,Bandar Lampung', 'PT. Berkah Jaya', 'sat@oke.com', '8b827f52962f455ff3d8f5adcea9eb40abb1635c0f8f6f3cc4f129c69d4715bf6daeb8cca5757282f8b53c2d9dc662d8e8b5e0b8fd101ee7d21f808dbefd0e0c9BTQLp7SojgwWuKuueFvlQRjlG28dIcDm0TKzPuHGMY=', '2020-02-21 12:54:54', 0),
(13, 'Joni', '123456789', 'Jalan Asu', 'PT.PRIMA', 'joni@mail.com', 'ce73df167b1f9ccae108cc71c2c07b851199b3e4585cbbecb00ef44e33dbab628f5b33db360322591144f03c033e021794df5cb8515b28216bc046cf84d93de6VW3dPI/9xnVxuBm1AvtdtSnt9kdb5zx2pQvpjIIPggg=', '2020-02-21 13:16:15', 1),
(14, 'kokom', '089988997766', 'Jalan Jaya', 'PT OKI', 'kokom@mail.com', '38ea7bb8c960456ae6f907bde3bc3248955e814332f44d2c3646f0de37c30c6a18fe0328f8400adaa18b8002fdf804796ee8588394c412473659b3cf349540dbLryDW13vJJQfo4TmtpUYMYnBZf9+E14CvZGMvsfpOr4=', '2020-02-21 13:59:08', 1),
(15, 'mas bejo', '082299002222', 'Jalan Cempaka', 'PT Vanili', 'mas@mail.com', '02e6cb63efadc39f05aebba4c799289d03eab1a1b4c5cc09a7f3f406dfc7dc977eb4b58b7f23be3d156e6db2b8e4ded285fd267b8b8d1d6089395318a20fb65fJIelVqwIqgNrjeIiq4QZpFpgVDkIkxTh/wWAKh9EMQE=', '2020-02-21 14:50:56', 1),
(16, 'yono', '081233559944', 'Tanjung Bintang', 'PT. Mandiri', 'yono@mail.com', '786b71c3ae31c025f609dd7163f0e1ce33a25d950cfb63a06809f0462cbf4d1ee7e4574af5016fb72c4b67c2390d3f806949fa633b6a9a5e8d748e0cbb0f1a46t46egEVkT/vn+q+zRO7m2aLuTGFf6Rsfb6p82IvTaC8=', '2020-02-22 04:17:44', 0),
(18, 'Hendi', '089911223344', 'Jalan Abidin', 'PT. Hendi Koding', 'hendi@mail.com', '4d195e22b825ed4ef1c01b38f2620a99436264fde5f11d00d3c9c59774b98b2de787e100e9388a2de479a888701e32aad3ab9f42cbb06b234ded0fbced1bf7a3/o7Ttqq3vp3gdFft8ildNq32QCuARSJGW7uSPDSiwXM=', '2020-02-22 14:40:28', 1),
(19, 'Mas Ajis', '082180807070', 'Jalan Airan Raya No 80 Jatimulyo,Lampung Selatan', 'PT.Media Jaya', 'ajis@gmail.com', '7b7abd64340043b131dbf3dff37c2c983bbb5a47c6b088d540ba6e46ed15d7251aaaf2ceea40d5ebeb68baddc4efcfbc79789ef65b7097cff51193e64757dd3daG+gbGCLHEpMGtlBJjH1AHCYCJKqafmdzkzjgXQDx7Q=', '2020-02-23 15:01:27', 1),
(20, 'Satriyawan', '082280072027', 'Jl.Durian Gg.Matoa No.30 Korpri Jaya,Sukarame,Kota Bandar Lampung', 'PT.FIK UBL', 'satriyawan@gmail.com', '0a8aebf504d405d197b14d9c1ba2d1fb4ab7f9aa12d2ce8498f7222ed58abf8e18174359b33ef4b2e6acbc9011bb950693e3233bfba146eb0cdda0d1d4bcf028GbKnrFzLXezQtjBqX+1kfOWB1sDqWEC4dFF9AtGuQho=', '2020-02-24 17:07:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_timeline`
--

CREATE TABLE `tbl_timeline` (
  `id` int(11) NOT NULL,
  `faktur` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`id`, `faktur`, `status`, `waktu`) VALUES
(7, 'IK682S', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 08:14:17'),
(8, 'IK682S', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-21 08:14:38'),
(9, 'TN4128U', 'Menunggu konfirmasi Bayar', '2020-02-21 08:16:33'),
(10, 'TN4128U', 'Menunggu Persetujuan Penyelia', '2020-02-21 08:18:27'),
(11, 'TN4128U', 'Memulai Proses Uji', '2020-02-21 08:21:13'),
(12, 'TN4128U', 'menunggu konfirmasi Penyelia', '2020-02-21 08:23:19'),
(13, 'TN4128U', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 08:23:57'),
(14, 'XM1123H', 'Memulai Proses Uji', '2020-02-21 08:24:19'),
(15, 'TN4128U', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-21 08:25:23'),
(16, 'LN4958O', 'Menunggu Persetujuan Penyelia', '2020-02-21 10:56:44'),
(17, 'LN4958O', 'Memulai Proses Uji', '2020-02-21 10:58:33'),
(18, 'LN4958O', 'menunggu konfirmasi Penyelia', '2020-02-21 11:03:01'),
(19, 'LN4958O', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 11:03:47'),
(20, 'LN4958O', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-21 11:05:07'),
(21, 'PN9788T', 'Menunggu konfirmasi Bayar', '2020-02-21 12:55:21'),
(22, 'TC4473M', 'Menunggu konfirmasi Bayar', '2020-02-21 13:05:12'),
(23, 'TC4473M', 'Menunggu Persetujuan Penyelia', '2020-02-21 13:06:57'),
(24, 'KG2102B', 'Menunggu konfirmasi Bayar', '2020-02-21 13:20:34'),
(25, 'TT704G', 'Menunggu konfirmasi Bayar', '2020-02-21 14:01:23'),
(26, 'TT704G', 'Memulai Proses Uji', '2020-02-21 14:03:03'),
(27, 'TT704G', 'Menunggu Persetujuan Penyelia', '2020-02-21 14:07:13'),
(28, 'BY6132P', 'Menunggu konfirmasi Bayar', '2020-02-21 14:12:24'),
(29, 'BY6132P', 'Menunggu Persetujuan Penyelia', '2020-02-21 14:15:34'),
(30, 'BY6132P', 'Memulai Proses Uji', '2020-02-21 14:18:01'),
(31, 'BY6132P', 'menunggu konfirmasi Penyelia', '2020-02-21 14:21:04'),
(32, 'BY6132P', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 14:39:08'),
(33, 'BY6132P', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-21 14:40:37'),
(34, 'TT704G', 'menunggu konfirmasi Penyelia', '2020-02-21 14:42:27'),
(35, 'WM6029J', 'Menunggu konfirmasi Bayar', '2020-02-21 14:51:55'),
(36, 'WM6029J', 'Menunggu Persetujuan Penyelia', '2020-02-21 14:52:58'),
(37, 'WM6029J', 'Memulai Proses Uji', '2020-02-21 14:56:03'),
(38, 'WM6029J', 'menunggu konfirmasi Penyelia', '2020-02-21 14:57:02'),
(39, 'WM6029J', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 15:02:26'),
(40, 'YR5791N', 'Menunggu konfirmasi Bayar', '2020-02-21 15:45:55'),
(41, 'WM6029J', 'Perbaikan Penyelia', '2020-02-21 15:47:12'),
(42, 'WM6029J', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 15:49:01'),
(43, 'WM6029J', 'Perbaikan Penyelia', '2020-02-21 15:49:20'),
(44, 'RN8135O', 'Menunggu konfirmasi Bayar', '2020-02-21 16:31:20'),
(45, 'SA3630B', 'Menunggu konfirmasi Bayar', '2020-02-21 16:32:01'),
(46, 'HA8178H', 'Menunggu konfirmasi Bayar', '2020-02-21 16:34:46'),
(47, 'HA8178H', 'Menunggu Persetujuan Penyelia', '2020-02-21 16:37:06'),
(48, 'HA8178H', 'Memulai Proses Uji', '2020-02-21 16:41:53'),
(49, 'HA8178H', 'menunggu konfirmasi Penyelia', '2020-02-21 16:43:06'),
(50, 'HA8178H', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 16:48:32'),
(51, 'HA8178H', 'Perbaikan Penyelia', '2020-02-21 16:50:43'),
(52, 'HA8178H', 'Menunggu Persetujuan Kepala Lab', '2020-02-21 16:51:38'),
(53, 'HA8178H', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-21 16:52:09'),
(54, 'GJ7042G', 'Menunggu konfirmasi Bayar', '2020-02-22 02:13:09'),
(55, 'GJ7042G', 'Menunggu Persetujuan Penyelia', '2020-02-22 02:17:45'),
(56, 'GJ7042G', 'Memulai Proses Uji', '2020-02-22 02:19:30'),
(57, 'FT1640G', 'Menunggu Persetujuan Penyelia', '2020-02-22 03:54:37'),
(58, 'FT1640G', 'Memulai Proses Uji', '2020-02-22 03:55:35'),
(59, 'FT1640G', 'menunggu konfirmasi Penyelia', '2020-02-22 03:56:19'),
(60, 'FT1640G', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 03:57:37'),
(61, 'FT1640G', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 03:58:38'),
(62, 'EB7714B', 'Menunggu Persetujuan Penyelia', '2020-02-22 04:24:30'),
(63, 'EB7714B', 'Memulai Proses Uji', '2020-02-22 04:24:50'),
(64, 'EB7714B', 'menunggu konfirmasi Penyelia', '2020-02-22 04:25:14'),
(65, 'EB7714B', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 04:27:11'),
(66, 'EB7714B', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 04:27:31'),
(67, 'MN3008X', 'Menunggu Persetujuan Penyelia', '2020-02-22 08:39:56'),
(68, 'MN3008X', 'Memulai Proses Uji', '2020-02-22 08:40:54'),
(69, 'MN3008X', 'menunggu konfirmasi Penyelia', '2020-02-22 08:42:41'),
(70, 'MN3008X', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 08:43:37'),
(71, 'MN3008X', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 08:44:30'),
(72, 'VH1284T', 'Menunggu Persetujuan Penyelia', '2020-02-22 09:07:25'),
(73, 'VH1284T', 'Memulai Proses Uji', '2020-02-22 09:08:59'),
(74, 'VH1284T', 'menunggu konfirmasi Penyelia', '2020-02-22 09:09:47'),
(75, 'VH1284T', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 09:10:33'),
(76, 'VH1284T', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 09:11:13'),
(77, 'NF8325I', 'Menunggu konfirmasi Bayar', '2020-02-22 09:51:38'),
(78, 'XM1123H', 'Menunggu Persetujuan Penyelia', '2020-02-22 09:53:07'),
(79, 'SA3630B', 'Memulai Proses Uji', '2020-02-22 09:57:38'),
(80, 'GJ7042G', 'menunggu konfirmasi Penyelia', '2020-02-22 10:04:26'),
(81, 'GJ7042G', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 10:07:34'),
(82, 'GJ7042G', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 10:09:58'),
(83, 'SJ4920S', 'Menunggu konfirmasi Bayar', '2020-02-22 14:40:55'),
(84, 'SJ4920S', 'Menunggu Persetujuan Penyelia', '2020-02-22 14:42:07'),
(85, 'SJ4920S', 'Memulai Proses Uji', '2020-02-22 14:43:01'),
(86, 'SJ4920S', 'menunggu konfirmasi Penyelia', '2020-02-22 14:43:39'),
(87, 'SJ4920S', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 14:44:58'),
(88, 'SJ4920S', 'Perbaikan Penyelia', '2020-02-22 14:45:36'),
(89, 'SJ4920S', 'Menunggu Persetujuan Kepala Lab', '2020-02-22 14:46:28'),
(90, 'SJ4920S', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-22 14:46:38'),
(91, 'XU1221U', 'Menunggu konfirmasi Bayar', '2020-02-23 15:04:39'),
(92, 'XU1221U', 'Menunggu Persetujuan Penyelia', '2020-02-23 15:10:23'),
(93, 'XU1221U', 'Memulai Proses Uji', '2020-02-23 15:11:36'),
(94, 'XU1221U', 'menunggu konfirmasi Penyelia', '2020-02-23 15:14:53'),
(95, 'XU1221U', 'Menunggu Persetujuan Kepala Lab', '2020-02-23 15:19:25'),
(96, 'XU1221U', 'Perbaikan Penyelia', '2020-02-23 15:20:16'),
(97, 'XU1221U', 'Menunggu Persetujuan Kepala Lab', '2020-02-23 15:22:16'),
(98, 'XU1221U', 'Uji Selesai, Silahkan Download Hasilnya', '2020-02-23 15:22:51'),
(99, 'NH5249W', 'Menunggu konfirmasi Bayar', '2020-02-24 17:30:53'),
(100, 'TB6514I', 'Menunggu konfirmasi Bayar', '2020-02-24 17:38:28'),
(101, 'NH5249W', 'Memulai Proses Uji', '2020-02-24 18:09:55'),
(102, 'XM1123H', 'menunggu konfirmasi Penyelia', '2020-02-24 18:20:47'),
(103, 'ZZ8801J', 'Menunggu konfirmasi Bayar', '2020-02-25 05:10:30'),
(104, 'TP1619S', 'Menunggu konfirmasi Bayar', '2020-02-25 05:11:46'),
(105, 'TP1619S', 'Menunggu Persetujuan Penyelia', '2020-02-25 05:13:05'),
(106, 'TP1619S', 'Memulai Proses Uji', '2020-02-25 05:13:42'),
(107, 'TP1619S', 'menunggu konfirmasi Penyelia', '2020-02-25 05:17:41'),
(108, 'TP1619S', 'Menunggu Persetujuan Kepala Lab', '2020-02-25 05:20:11'),
(109, 'LB9893Q', 'Menunggu konfirmasi Bayar', '2020-02-25 06:34:22'),
(110, 'LB9893Q', 'Menunggu Persetujuan Penyelia', '2020-02-25 08:01:49'),
(111, 'LB9893Q', 'Memulai Proses Uji', '2020-02-25 08:03:23'),
(112, 'AW2602T', 'Memulai Proses Uji', '2020-02-25 08:09:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_uji`
--

CREATE TABLE `tbl_uji` (
  `faktur` varchar(100) NOT NULL,
  `id_pelanggan` varchar(100) DEFAULT NULL,
  `id_uji` int(11) DEFAULT NULL,
  `jenis_uji` varchar(100) DEFAULT NULL,
  `tanggal_uji` date DEFAULT NULL,
  `bukti_bayar` text DEFAULT '-',
  `hasil_uji` text DEFAULT '-',
  `status_uji` varchar(100) DEFAULT 'pending',
  `jenis_bayar` varchar(100) DEFAULT NULL,
  `teknisi` int(11) DEFAULT NULL,
  `status_periksa` varchar(100) DEFAULT 'penyelia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_uji`
--

INSERT INTO `tbl_uji` (`faktur`, `id_pelanggan`, `id_uji`, `jenis_uji`, `tanggal_uji`, `bukti_bayar`, `hasil_uji`, `status_uji`, `jenis_bayar`, `teknisi`, `status_periksa`) VALUES
('AH7898U', '1', 3, 'Lapangan', '2020-10-03', 'https://labuji.000webhostapp.com/bukti/I582027C.jpeg', 'https://labuji.000webhostapp.com/hasil/Q327073G.pdf', 'verified', 'transfer', 6, 'done'),
('AW2602T', '1', 54, 'Lab', '2020-02-22', '-', '-', 'pending', '', 21, 'penyelia'),
('BY6132P', '14', 3, 'Lapangan', '2020-02-22', 'https://labuji.000webhostapp.com/bukti/F299949G.jpg', 'https://labuji.000webhostapp.com/hasil/X309599I.pdf', 'verified', 'transfer', 11, 'done'),
('EB7714B', '1', 38, 'Lab', '2020-02-23', '-', 'https://labuji.000webhostapp.com/hasil/H549008S.jpg', 'verified', 'cash', 17, 'done'),
('FT1640G', '1', 28, 'Lab', '2020-02-22', 'https://labuji.000webhostapp.com/bukti/D333381C.jpg', 'https://labuji.000webhostapp.com/hasil/B325514W.jpg', 'verified', 'transfer', 12, 'done'),
('GB5280I', '9', 2, 'Lab', '2020-10-03', 'https://labuji.000webhostapp.com/bukti/V326286V.jpg', '-', 'pending', 'transfer', NULL, 'penyelia'),
('GJ7042G', '14', 2, 'Lapangan', '2020-02-22', '-', 'https://labuji.000webhostapp.com/hasil/L266668W.jpg', 'verified', 'cash', 12, 'done'),
('HA8178H', '15', 2, 'Lapangan', '2020-02-22', '-', 'https://labuji.000webhostapp.com/hasil/C878832D.pdf', 'verified', 'cash', 11, 'done'),
('IK682S', '8', 35, 'Lab', '2020-10-03', '-', 'https://labuji.000webhostapp.com/hasil/M206019G.png', 'verified', 'cash', 10, 'done'),
('KG2102B', '13', 20, 'Lapangan', '0000-00-00', 'https://labuji.000webhostapp.com/bukti/X198225I.jpg', '-', 'pending', 'transfer', NULL, 'penyelia'),
('KJ5068F', '6', 76, 'Lab', '2020-10-03', '-', 'https://labuji.000webhostapp.com/hasil/J385384J.jpg', 'verified', 'cash', 6, 'done'),
('LB9893Q', '20', 24, 'Lapangan', '2020-02-25', '-', '-', 'process', 'cash', 22, 'penyelia'),
('LN4958O', '9', 1, 'Lab', '2020-10-03', '-', 'https://labuji.000webhostapp.com/hasil/Q14597Z.jpg', 'verified', 'cash', 11, 'done'),
('MN3008X', '1', 40, 'Lab', '2020-02-23', '-', 'https://labuji.000webhostapp.com/hasil/Q846079U.jpg', 'verified', 'cash', 22, 'done'),
('NF8325I', '17', 1, 'Lapangan', '2020-02-22', '-', '-', 'pending', 'cash', NULL, 'penyelia'),
('NH5249W', '20', 2, 'Lapangan', '2020-02-25', '-', '-', 'pending', 'cash', 22, 'penyelia'),
('PN9788T', '10', 35, 'Lapangan', '2020-10-03', '-', '-', 'pending', 'transfer', NULL, 'penyelia'),
('RN8135O', '14', 35, 'Lapangan', '2020-02-22', '-', '-', 'pending', 'cash', NULL, 'penyelia'),
('SA3630B', '14', 24, 'Lapangan', '2020-02-22', '-', '-', 'pending', 'cash', 18, 'penyelia'),
('SJ4920S', '18', 24, 'Lapangan', '2020-02-23', '-', 'https://labuji.000webhostapp.com/hasil/V493067K.pdf', 'verified', 'cash', 22, 'done'),
('TB6514I', '20', 4, 'Lapangan', '2020-02-25', '-', '-', 'pending', 'cash', NULL, 'penyelia'),
('TC4473M', '11', 4, 'Lapangan', '2020-10-03', 'https://labuji.000webhostapp.com/bukti/J94176N.jpg', '-', 'process', 'transfer', NULL, 'penyelia'),
('TN4128U', '9', 1, 'Lapangan', '2020-10-03', 'https://labuji.000webhostapp.com/bukti/U494283O.jpg', 'https://labuji.000webhostapp.com/hasil/D208864B.jpg', 'verified', 'transfer', 10, 'done'),
('TP1619S', '20', 21, 'Lapangan', '2020-02-25', '-', 'https://labuji.000webhostapp.com/hasil/Z889603D.pdf', 'waiting', 'cash', 22, 'keplab'),
('TT704G', '14', 52, 'Lapangan', '2020-02-22', 'https://labuji.000webhostapp.com/bukti/J464763G.jpg', 'https://labuji.000webhostapp.com/hasil/O845219D.pdf', 'waiting', 'transfer', 11, 'penyelia'),
('VH1284T', '1', 39, 'Lab', '2020-02-22', '-', 'https://labuji.000webhostapp.com/hasil/X432160A.jpg', 'verified', 'cash', 19, 'done'),
('WM6029J', '15', 21, 'Lapangan', '2020-02-22', '-', 'https://labuji.000webhostapp.com/hasil/U414566J.pdf', 'waiting', 'cash', 12, 'penyelia'),
('XM1123H', '8', 1, 'Lab', '2020-10-03', 'https://labuji.000webhostapp.com/bukti/R516920B.jpg', 'https://labuji.000webhostapp.com/hasil/P512514T.png', 'waiting', 'transfer', 7, 'penyelia'),
('XU1221U', '19', 52, 'Lapangan', '2020-02-23', 'https://labuji.000webhostapp.com/bukti/V972622L.jpg', 'https://labuji.000webhostapp.com/hasil/J71951E.pdf', 'verified', 'transfer', 22, 'done'),
('YR5791N', '15', 25, 'Lapangan', '2020-02-22', 'https://labuji.000webhostapp.com/bukti/J288905B.jpg', '-', 'pending', 'transfer', NULL, 'penyelia'),
('ZZ8801J', '27', 21, 'Lapangan', '2020-02-25', '-', '-', 'pending', 'cash', NULL, 'penyelia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_harga_to_user`
--
ALTER TABLE `tbl_harga_to_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_harga_uji`
--
ALTER TABLE `tbl_harga_uji`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_uji`
--
ALTER TABLE `tbl_uji`
  ADD PRIMARY KEY (`faktur`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_harga_to_user`
--
ALTER TABLE `tbl_harga_to_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tbl_harga_uji`
--
ALTER TABLE `tbl_harga_uji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_karyawan`
--
ALTER TABLE `tbl_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelanggan`
--
ALTER TABLE `tbl_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tbl_timeline`
--
ALTER TABLE `tbl_timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
