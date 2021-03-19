-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 01:31 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pusyantek`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `barcode` varchar(16) NOT NULL,
  `barang_id` varchar(6) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang_id` int(11) NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`barcode`, `barang_id`, `nama_barang`, `jenis_barang_id`, `satuan_id`, `created`, `updated`) VALUES
('1010301001000027', '000027', 'Stabilo Bos', 1010301001, 5, '2020-09-06 20:35:26', NULL),
('1010301001000039', '000039', 'Nota Kontan', 1010301001, 5, '2020-10-11 08:53:03', NULL),
('1010301001000048', '000048', 'Spidol Kecil', 1010301001, 5, '2020-09-17 10:16:58', NULL),
('1010301001000058', '000058', 'Pensil Fabel Castel 2B', 1010301001, 5, '2020-09-17 10:17:42', NULL),
('1010301001000066', '000066', 'Spidol Whiteboard Snowman', 1010301001, 5, '2020-09-17 10:18:28', NULL),
('1010301001000068', '000068', 'Ballpoint Meja', 1010301001, 5, '2020-09-17 10:19:22', NULL),
('1010301001000075', '000075', 'Ballpoint Kenko', 1010301001, 5, '2020-09-18 20:40:08', NULL),
('1010301001000076', '000076', 'Spidol Snowman OPM', 1010301001, 5, '2020-09-18 20:40:52', NULL),
('1010301001000077', '000077', 'Spidol Snowman OPF', 1010301001, 5, '2020-09-18 20:41:19', NULL),
('1010301001000078', '000078', 'Ballpoint Balliner', 1010301001, 6, '2020-09-18 20:41:55', NULL),
('1010301001000082', '000082', 'Ballpoint Zebra Sarasa', 1010301001, 5, '2020-09-18 20:42:26', NULL),
('1010301001000089', '000089', 'Dispenser Pop Up', 1010301001, 5, '2020-09-18 20:43:00', NULL),
('1010301001000090', '000090', 'Kalkulator Citizen 868L', 1010301001, 5, '2020-09-18 20:43:31', NULL),
('1010301001000091', '000039', 'Gunting 838', 1010301001, 5, '2020-09-18 20:44:02', NULL),
('1010301001000092', '000092', 'Rautan Pensil', 1010301001, 5, '2020-09-18 20:44:26', NULL),
('1010301001000093', '000093', 'Joyco Key', 1010301001, 5, '2020-09-18 20:45:04', NULL),
('1010301001000094', '000094', 'Casing', 1010301001, 5, '2021-02-08 23:42:58', NULL),
('1010301003000001', '000001', 'Border Clip 105', 1010301003, 8, '2020-10-02 08:03:35', NULL),
('1010301003000003', '000003', 'Binder Clip 155', 1010301003, 5, '2020-10-02 08:04:24', NULL),
('1010301003000004', '000004', 'Border Clip 200', 1010301003, 5, '2020-10-02 08:04:52', NULL),
('1010301003000005', '000005', 'Staples Max HD 50', 1010301003, 5, '2020-10-02 08:05:13', NULL),
('1010301003000007', '000007', 'Border Clip 107', 1010301003, 8, '2020-10-02 08:05:59', NULL),
('1010301003000008', '000008', 'Border Clip 111', 1010301003, 5, '2020-10-02 08:06:20', NULL),
('1010301003000009', '000009', 'Border Clip 260', 1010301003, 5, '2020-10-02 08:06:58', NULL),
('1010301003000016', '000016', 'Paper Clip No 5', 1010301003, 8, '2020-10-02 08:07:30', NULL),
('1010301003000023', '000023', 'Staples Max HD 10', 1010301003, 5, '2020-10-02 08:08:00', NULL),
('1010301003000031', '000031', 'Trigonal Clip 1', 1010301003, 8, '2020-10-02 08:08:26', NULL),
('1010301003000033', '000033', 'Staples HD 12H/24', 1010301003, 5, '2020-10-02 08:09:00', NULL),
('1010301004000001', '000001', 'Tipe Ex Pentel', 1010301004, 5, '2020-10-02 08:09:26', NULL),
('1010301004000011', '000011', 'Penghapus Papan Tulis', 1010301004, 5, '2020-10-02 08:10:14', NULL),
('1010301004000039', '000039', 'Penghapus Steadler', 1010301004, 5, '2020-09-17 10:20:18', NULL),
('1010301004000043', '000043', 'Tipe Ex Kertas Kenko', 1010301004, 5, '2020-10-02 08:11:15', NULL),
('1010301005000029', '000029', 'Buku Folio', 1010301005, 7, '2020-10-02 08:13:25', NULL),
('1010301005000032', '000032', 'Buku Kwitansi Besar', 1010301005, 7, '2020-10-02 08:13:56', NULL),
('1010301005000037', '000037', 'Buku Kwitansi Kecil', 1010301005, 7, '2020-10-02 08:14:23', NULL),
('1010301005000043', '000043', 'Buku Tulis', 1010301005, 7, '2020-10-02 08:14:51', NULL),
('1010301006000015', '000015', 'Map Batik', 1010301006, 5, '2020-10-02 08:15:44', NULL),
('1010301006000016', '000016', 'Clear Holder F60', 1010301006, 5, '2020-10-02 08:16:20', NULL),
('1010301006000038', '000038', 'Map Plastik Daichi F4', 1010301006, 5, '2020-10-02 08:17:04', NULL),
('1010301006000052', '000052', 'Map Diamond 5002', 1010301006, 5, '2020-10-02 08:17:59', NULL),
('1010301006000059', '000059', 'Binder Ecology', 1010301006, 5, '2020-10-02 08:18:36', NULL),
('1010301006000073', '000073', 'Ordner Bantex 1465', 1010301006, 5, '2020-10-02 08:19:04', NULL),
('1010301006000075', '000075', 'Map Gantung Lihit Filling Folder', 1010301006, 5, '2020-10-02 08:19:40', NULL),
('1010301006000076', '000076', 'Map Plastik Daichi A4', 1010301006, 5, '2020-10-02 08:20:08', NULL),
('1010301006000078', '000078', 'Bisnis File Folio', 1010301006, 5, '2020-10-02 08:20:43', NULL),
('1010301006000081', '000081', 'Box File Bantex', 1010301006, 5, '2020-10-02 08:21:07', NULL),
('1010301007000019', '000019', 'Penggaris Plastik 30cm', 1010301007, 5, '2020-10-02 08:21:49', NULL),
('1010301007000020', '000020', 'Penggaris Besi 30cm', 1010301007, 5, '2020-10-02 08:22:24', NULL),
('1010301008000025', '000025', 'Cutter A-300', 1010301008, 5, '2020-10-02 08:22:59', NULL),
('1010301008000026', '000026', 'Isi Cutter A-300', 1010301008, 5, '2020-10-02 08:23:26', NULL),
('1010301008000028', '000028', 'Cutter L-500', 1010301008, 5, '2020-10-02 08:23:47', NULL),
('1010301009000024', '000024', 'Pita Mesin Tik Brother', 1010301009, 5, '2020-10-02 08:24:37', NULL),
('1010301009000027', '000027', 'Full Mark F583', 1010301009, 5, '2020-10-02 08:25:09', NULL),
('1010301010000050', '000050', 'Isolatape Panfix 1/2 * 72', 1010301010, 9, '2020-10-02 08:26:06', NULL),
('1010301010000051', '000051', 'Double Tap 1 Inch', 1010301010, 9, '2020-10-02 08:26:35', NULL),
('1010301010000052', '000052', 'Double Tap 0.5 Inch', 1010301010, 9, '2020-10-02 08:27:03', NULL),
('1010301010000053', '000053', 'Lem Stik Pronto 8 Gram', 1010301010, 5, '2020-10-02 08:27:31', NULL),
('1010301010000058', '000058', 'Lakban Coklat', 1010301010, 9, '2020-10-02 08:28:00', NULL),
('1010301010000059', '000059', 'Lakban Hitam', 1010301010, 9, '2020-10-02 08:28:21', NULL),
('1010301010000062', '000062', 'Lem Korea', 1010301010, 5, '2020-10-02 08:28:48', NULL),
('1010301010000063', '000063', 'Tape Dispenser Lion No 50', 1010301010, 5, '2020-10-02 08:29:24', NULL),
('1010301010000066', '000066', 'Lakban Bening', 1010301010, 9, '2020-10-02 08:29:58', NULL),
('1010301010000068', '000068', 'Double Tap Form 1 Inch', 1010301010, 9, '2020-10-02 08:30:41', NULL),
('1010301010000069', '000069', 'Tape Dispenser Lion No 20', 1010301010, 5, '2020-10-02 08:31:10', NULL),
('1010301010000070', '000070', 'Tape Dispenser Lion No 7', 1010301010, 5, '2020-10-02 08:31:46', NULL),
('1010301010000072', '000072', 'Isolatape Panfix 1*72', 1010301010, 9, '2020-10-02 08:32:25', NULL),
('1010301010000074', '000074', 'Isolatape Panfix 1/12 * 10', 1010301010, 9, '2020-10-02 08:33:12', NULL),
('1010301013000001', '000001', 'Isi Staples No 3-1m', 1010301013, 5, '2020-10-02 08:34:06', NULL),
('1010301013000003', '000003', 'Isi Staples No 10-1m', 1010301013, 5, '2020-10-02 08:34:43', NULL),
('1010301013000004', '000004', 'Isi Staples Max No 23/10', 1010301013, 5, '2020-10-02 08:35:21', NULL),
('1010302002000007', '000007', 'Tom & Jerry 101', 1010302002, 6, '2020-10-02 08:54:56', NULL),
('1010302002000018', '000018', 'Amplop Jaya 110', 1010302002, 5, '2020-10-02 08:56:03', NULL),
('1010302002000019', '000019', 'Kertas F4 80 Gr Bola Dunia', 1010302002, 11, '2020-10-02 08:37:13', NULL),
('1010302002000021', '000021', 'Amplop Coklat A3', 1010302002, 5, '2020-10-02 09:00:43', NULL),
('1010302002000023', '000023', 'Kertas Concorde 90 Gram', 1010302002, 6, '2020-10-02 08:37:55', NULL),
('1010302002000024', '000024', 'Amplop Jaya 90', 1010302002, 5, '2020-10-02 09:01:23', NULL),
('1010302002000030', '000030', 'Amplop Coklat A4', 1010302002, 5, '2020-10-02 09:02:54', NULL),
('1010302002000032', '000032', 'Amplop Coklat Cabinet', 1010302002, 5, '2020-10-02 09:03:32', NULL),
('1010302002000033', '000033', 'Tempat CD Kertas', 1010302002, 5, '2020-10-02 09:04:06', NULL),
('1010302002000034', '000034', 'Kertas A4 80 Gr 80 Gr Bola Dunia', 1010302002, 11, '2020-10-02 08:38:37', NULL),
('1010302002000052', '000052', 'Kertas Fax', 1010302002, 9, '2020-10-02 08:39:05', NULL),
('1010302002000058', '000058', 'Kertas A3 80 Gr 80 Gr Bola Dunia', 1010302002, 11, '2020-10-02 08:40:01', NULL),
('1010302002000066', '000066', 'Kertas Gulung/Kertas Kasir', 1010302002, 9, '2020-10-02 08:40:53', NULL),
('1010302002000069', '000069', 'Continous Form 4 Ply SS', 1010302002, 8, '2020-10-02 08:41:32', NULL),
('1010302002000072', '000072', 'Kertas Foto', 1010302002, 10, '2020-10-02 08:42:01', NULL),
('1010302002000073', '000073', 'Kertas Concorde 160 Gr', 1010302002, 6, '2020-10-02 08:42:46', NULL),
('1010302002000074', '000074', 'Tom & Jerry 109', 1010302002, 6, '2020-10-02 08:43:39', NULL),
('1010302002000075', '000075', 'Kertas Concorde 100 Gram', 1010302002, 6, '2020-10-02 08:44:32', NULL),
('1010302002000076', '000076', 'Kertas Sampul Coklat', 1010302002, 10, '2020-10-02 08:45:00', NULL),
('1010302002000077', '000077', 'Pronto Sign Here', 1010302002, 5, '2020-10-02 08:45:27', NULL),
('1010302002000078', '000078', 'Kertas HVS Warna', 1010302002, 11, '2020-10-02 08:46:05', NULL),
('1010302002000079', '000079', 'Pronto Mark & Notes', 1010302002, 5, '2020-10-02 08:46:40', NULL),
('1010302002000081', '000081', 'Tom & Jerry 121', 1010302002, 6, '2020-10-02 08:47:13', NULL),
('1010302002000082', '000082', 'Tom & Jerry 103', 1010302002, 6, '2020-10-02 08:55:31', NULL),
('1010302002000084', '000084', 'Kertas Concorde 230 Gr', 1010302002, 6, '2020-10-02 08:47:46', NULL),
('1010302002000085', '000085', 'Kertas Concorde 210 Gr', 1010302002, 6, '2020-10-02 08:48:55', NULL),
('1010302002000086', '000086', 'Kertas Folio Bergaris', 1010302002, 10, '2020-10-02 08:49:29', NULL),
('1010302002000088', '000088', 'Post It Pop Up', 1010302002, 5, '2020-10-02 08:53:51', NULL),
('1010302002000089', '000089', 'Kertas Concorde 220 Gr', 1010302002, 6, '2020-10-02 08:54:28', NULL),
('1010303999000003', '000003', 'Tempat DIR', 1010303999, 5, '2020-10-02 09:05:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `jenis_barang_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`jenis_barang_id`, `name`, `created`, `updated`) VALUES
(1010301001, 'Alat Tulis', '2020-08-19 09:46:09', NULL),
(1010301003, 'Penjepit Kertas', '2020-08-19 10:18:02', NULL),
(1010301004, 'Penghapus/Korektor', '2020-08-25 13:39:55', NULL),
(1010301005, 'Buku Tulis', '2020-08-28 14:50:57', NULL),
(1010301006, 'Ordner dan Map', '2020-08-31 12:21:37', NULL),
(1010301007, 'Penggaris', '2020-09-17 10:08:05', NULL),
(1010301008, 'Cutter', '2020-09-17 10:08:19', NULL),
(1010301009, 'Pita Mesin Tik Brother', '2020-09-17 10:08:37', NULL),
(1010301010, 'Alat Perekat', '2020-09-17 10:08:55', NULL),
(1010301013, 'Isi Staples', '2020-09-17 10:09:18', NULL),
(1010301014, 'Humas', '2020-12-09 16:38:13', NULL),
(1010302002, 'Berbagi Kertas', '2020-09-17 10:09:46', NULL),
(1010303999, 'Bahan Cetak Lainnya', '2020-09-17 10:10:40', NULL),
(1010304001, 'CD/DVD', '2020-09-17 10:11:09', NULL),
(1010304002, 'Computer File/Tempat Disket', '2020-09-17 10:11:43', NULL),
(1010304004, 'Tinta/Tonner Printer', '2020-09-17 10:12:11', NULL),
(1010304006, 'USB/Flashdisk', '2020-09-17 10:12:36', NULL),
(1010304999, 'Bahan Komputer Lainnya', '2020-09-17 10:12:54', NULL),
(1010305006, 'Alat Pengikat', '2020-09-17 10:13:16', NULL),
(1010306010, 'Batu Baterai', '2020-10-02 08:00:42', NULL),
(1010399999, 'Alat/Bahan u/ kegiatan Lainnya', '2020-09-17 10:14:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `satuan`
--

CREATE TABLE `satuan` (
  `satuan_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `satuan`
--

INSERT INTO `satuan` (`satuan_id`, `name`, `created`, `updated`) VALUES
(5, 'Buah', '2020-08-24 10:18:31', NULL),
(6, 'Pax', '2020-08-24 10:20:27', NULL),
(7, 'Buku', '2020-08-28 14:53:11', NULL),
(8, 'Dus', '2020-09-17 10:06:11', NULL),
(9, 'Roll', '2020-09-17 10:06:24', NULL),
(10, 'Lembar', '2020-09-17 10:06:33', NULL),
(11, 'Rim', '2020-09-17 10:06:41', NULL),
(12, 'Keping', '2020-09-17 10:06:52', NULL),
(13, 'Box', '2020-09-17 10:07:02', NULL),
(18, 'Humas', '2020-12-09 16:39:32', NULL),
(19, 'tes', '2021-02-25 13:42:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `transaksi_id` int(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` int(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `barcode` varchar(100) NOT NULL,
  `jenis_barang_id` int(11) NOT NULL,
  `satuan_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `updated` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`transaksi_id`, `nama`, `nama_barang`, `jumlah`, `user_id`, `barcode`, `jenis_barang_id`, `satuan_id`, `created`, `updated`) VALUES
(93, 'galih pratama', '000027', 1312, 1, '1010301001000027', 1010301001, 5, '2020-09-06', NULL),
(96, 'Afgan', '1010301001000027', 12, 1, '1010301001000027', 1010301001, 5, '2020-09-04', NULL),
(97, 'maira', '1010301001000027', 26, 8, '1010301001000027', 1010301001, 5, '2020-09-06', NULL),
(99, 'FEBY', '1010301001000027', 324, 1, '1010301001000027', 1010301001, 5, '2020-09-07', NULL),
(101, 'muhammad aja', '000027', 4, 1, '1010301001000027', 1010301001, 5, '2020-09-11', NULL),
(102, 'maira', '000027', 123, 8, '1010301001000027', 1010301001, 5, '2020-09-13', NULL),
(103, 'refaldo', '1010301001000027', 3, 1, '1010301001000027', 1010301001, 5, '2020-09-15', NULL),
(104, 'aldo', '1010301001000068', 3, 1, '1010301001000068', 1010301001, 5, '2020-09-17', NULL),
(105, 'refaldo rachman', '1010301001000066', 1, 1, '1010301001000066', 1010301001, 5, '2020-09-17', NULL),
(107, 'refal', '1010301001000066', 123, 1, '1010301001000066', 1010301001, 5, '2020-09-18', NULL),
(108, 'maira', '1010301001000068', 1, 1, '1010301001000068', 1010301001, 5, '2020-09-18', NULL),
(109, 'aldo', '1010301004000039', 123, 1, '1010301004000039', 1010301004, 5, '2020-09-18', NULL),
(110, 'aldo', '1010301001000066', 3, 1, '1010301001000066', 1010301001, 5, '2020-09-21', NULL),
(112, 'maira', '1010301001000058', 3, 8, '1010301001000058', 1010301001, 5, '2020-09-21', NULL),
(113, 'maira', '1010301001000058', 2, 8, '1010301001000058', 1010301001, 5, '2020-09-22', NULL),
(114, 'maira', '1010301001000048', 2, 8, '1010301001000048', 1010301001, 5, '2020-09-22', NULL),
(116, 'aldo', '000027', 3, 1, '1010301001000027', 1010301001, 5, '2020-09-22', NULL),
(117, 'aldo', '000027', 2, 1, '1010301001000027', 1010301001, 5, '2020-09-22', NULL),
(118, 'ganteng', '000048', 1, 1, '1010301001000048', 1010301001, 5, '2020-09-22', NULL),
(119, 'Aldo', '1010301001000027', 5, 1, '1010301001000027', 1010301001, 5, '2020-10-04', NULL),
(127, 'aldo', '000048', 21, 1, '1010301001000027', 1010301001, 11, '2020-10-04', NULL),
(128, 'aldo', '1010301001000058', 5, 1, '1010301001000058', 1010301001, 5, '2020-10-04', NULL),
(130, 'maira', '1010301001000058', 3, 8, '1010301001000058', 1010301001, 5, '2020-10-05', NULL),
(131, 'aldo', '1010301001000066', 3, 1, '1010301001000066', 1010301001, 5, '2020-10-05', NULL),
(132, 'aldo', '1010301001000068', 1, 1, '1010301001000068', 1010301001, 5, '2020-10-05', NULL),
(133, 'nanda,aldo', '1010301001000068', 3, 1, '1010301001000068', 1010301001, 5, '2020-10-05', NULL),
(135, 'anisa', '1010301001000027', 3, 22, '1010301001000027', 1010301001, 5, '2020-11-02', NULL),
(136, 'aldo', '000027', 1, 1, '1010301001000027', 1010301001, 5, '2020-12-28', NULL),
(137, 'Elon Musk', '1010301001000027', 2, 24, '1010301001000027', 1010301001, 5, '2021-01-27', NULL),
(138, 'Elon Musk', '1010301001000027', 2, 1, '1010301001000027', 1010301001, 5, '2021-01-28', NULL),
(139, 'aldo', '1010301001000078', 2, 1, '1010301001000078', 1010301001, 6, '2021-02-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `level`) VALUES
(1, 'refaldo', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Mohammad Refaldo Rachman', 1),
(8, 'febbi', 'df51e37c269aa94d38f93e537bf6e2020b21406c', 'febi', 2),
(22, 'anisa', '8cb2237d0679ca88db6464eac60da96345513964', 'Annisa', 2),
(23, 'agung21', '8cb2237d0679ca88db6464eac60da96345513964', 'agung21', 1),
(24, 'emusk', '8cb2237d0679ca88db6464eac60da96345513964', 'elon', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`barcode`,`barang_id`),
  ADD KEY `jenis_barang_id` (`jenis_barang_id`),
  ADD KEY `satuan_id` (`satuan_id`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`jenis_barang_id`);

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`satuan_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD KEY `satuan_id` (`satuan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `jenis_barang_id` (`jenis_barang_id`),
  ADD KEY `transaksi_ibfk_6` (`barcode`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
  MODIFY `satuan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `transaksi_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`jenis_barang_id`) REFERENCES `jenis_barang` (`jenis_barang_id`),
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`satuan_id`) REFERENCES `satuan` (`satuan_id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`satuan_id`) REFERENCES `satuan` (`satuan_id`),
  ADD CONSTRAINT `transaksi_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `transaksi_ibfk_5` FOREIGN KEY (`jenis_barang_id`) REFERENCES `jenis_barang` (`jenis_barang_id`),
  ADD CONSTRAINT `transaksi_ibfk_6` FOREIGN KEY (`barcode`) REFERENCES `barang` (`barcode`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
