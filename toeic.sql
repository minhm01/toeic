-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2022 lúc 03:07 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `toeic`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baithi`
--

CREATE TABLE `baithi` (
  `id_baithi` int(10) UNSIGNED NOT NULL,
  `id_hocvien` int(10) UNSIGNED DEFAULT NULL,
  `id_dethi` int(10) UNSIGNED NOT NULL,
  `ngaythi` timestamp NOT NULL DEFAULT current_timestamp(),
  `traloi` text NOT NULL,
  `diemso` int(10) NOT NULL,
  `diemtong` int(10) NOT NULL,
  `sai` int(10) NOT NULL,
  `chua` int(10) NOT NULL,
  `thoigianlam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `baithi`
--

INSERT INTO `baithi` (`id_baithi`, `id_hocvien`, `id_dethi`, `ngaythi`, `traloi`, `diemso`, `diemtong`, `sai`, `chua`, `thoigianlam`) VALUES
(86, 1, 6, '2022-11-28 07:05:23', '{\"1\":{\"id\":\"36\",\"traloi\":\"to\",\"ds\":\"Sai\"},\"2\":{\"id\":\"42\",\"traloi\":\"where\",\"ds\":\"Sai\"},\"3\":{\"id\":\"49\",\"traloi\":\"is\",\"ds\":\"Sai\"},\"4\":{\"id\":\"57\",\"traloi\":\"\'m\",\"ds\":\"Sai\"},\"5\":{\"id\":\"76\",\"traloi\":\"enjoyed\",\"ds\":\"Sai\"},\"6\":{\"id\":\"83\",\"traloi\":\"make\",\"ds\":\"Sai\"},\"7\":{\"id\":\"85\",\"traloi\":\"pupil\",\"ds\":\"Sai\"},\"8\":{\"id\":\"91\",\"traloi\":\"eat\",\"ds\":\"Sai\"},\"9\":{\"id\":\"94\",\"traloi\":\"inpolite\",\"ds\":\"\\u0110\\u00fang\"},\"10\":{\"id\":\"97\",\"traloi\":\"waved\",\"ds\":\"Sai\"}}', 1, 10, 9, 0, 7),
(87, 1, 6, '2022-11-28 07:06:15', '{\"1\":{\"id\":\"36\",\"traloi\":\"working\",\"ds\":\"Sai\"},\"2\":{\"id\":\"42\",\"traloi\":\"where\",\"ds\":\"Sai\"},\"3\":{\"id\":\"49\",\"traloi\":\"isn\'t\",\"ds\":\"Sai\"},\"4\":{\"id\":\"57\",\"traloi\":\"\'m\",\"ds\":\"Sai\"},\"5\":{\"id\":\"76\",\"traloi\":\"went\",\"ds\":\"Sai\"},\"6\":{\"id\":\"83\",\"traloi\":\"take\",\"ds\":\"Sai\"},\"7\":{\"id\":\"85\",\"traloi\":\"studier\",\"ds\":\"Sai\"},\"8\":{\"id\":\"91\",\"traloi\":\"eat\",\"ds\":\"Sai\"},\"9\":{\"id\":\"94\",\"traloi\":\"inpolite\",\"ds\":\"\\u0110\\u00fang\"},\"10\":{\"id\":\"97\",\"traloi\":\"waved\",\"ds\":\"Sai\"}}', 1, 10, 9, 0, 10),
(88, 1, 6, '2022-11-28 07:08:45', '{\"1\":{\"id\":\"36\",\"traloi\":\"working\",\"ds\":\"Sai\"},\"2\":{\"id\":\"42\",\"traloi\":\"where\",\"ds\":\"Sai\"},\"3\":{\"id\":\"49\",\"traloi\":\"are\",\"ds\":\"\\u0110\\u00fang\"},\"4\":{\"id\":\"57\",\"traloi\":\"would\",\"ds\":\"\\u0110\\u00fang\"},\"5\":{\"id\":\"76\",\"traloi\":\"went\",\"ds\":\"Sai\"},\"6\":{\"id\":\"83\",\"traloi\":\"take\",\"ds\":\"Sai\"},\"7\":{\"id\":\"85\",\"traloi\":\"student\",\"ds\":\"\\u0110\\u00fang\"},\"8\":{\"id\":\"91\",\"traloi\":\"eat\",\"ds\":\"Sai\"},\"9\":{\"id\":\"94\",\"traloi\":\"inpolite\",\"ds\":\"\\u0110\\u00fang\"},\"10\":{\"id\":\"97\",\"traloi\":\"wavy\",\"ds\":\"\\u0110\\u00fang\"}}', 5, 10, 5, 0, 123),
(89, 1, 6, '2022-11-28 07:11:22', '{\"1\":{\"id\":\"36\",\"traloi\":\"working \\u2026 to have\",\"ds\":\"\\u0110\\u00fang\"},\"2\":{\"id\":\"42\",\"traloi\":\"where the bus stop is\",\"ds\":\"\\u0110\\u00fang\"},\"3\":{\"id\":\"49\",\"traloi\":\"are\",\"ds\":\"\\u0110\\u00fang\"},\"4\":{\"id\":\"57\",\"traloi\":\"would\",\"ds\":\"\\u0110\\u00fang\"},\"5\":{\"id\":\"76\",\"traloi\":\"went out\",\"ds\":\"\\u0110\\u00fang\"},\"6\":{\"id\":\"83\",\"traloi\":\"take it easy\",\"ds\":\"\\u0110\\u00fang\"},\"7\":{\"id\":\"85\",\"traloi\":\"student\",\"ds\":\"\\u0110\\u00fang\"},\"8\":{\"id\":\"91\",\"traloi\":\"eat out\",\"ds\":\"\\u0110\\u00fang\"},\"9\":{\"id\":\"94\",\"traloi\":\"inpolite\",\"ds\":\"\\u0110\\u00fang\"},\"10\":{\"id\":\"97\",\"traloi\":\"wavy\",\"ds\":\"\\u0110\\u00fang\"}}', 10, 10, 0, 0, 15),
(90, 1, 9, '2022-11-28 09:13:43', '{\"1\":{\"id\":\"81\",\"traloi\":\"irritated\",\"ds\":\"Sai\"},\"2\":{\"id\":\"84\",\"traloi\":\"let\",\"ds\":\"\\u0110\\u00fang\"},\"3\":{\"id\":\"94\",\"traloi\":\"impolite\",\"ds\":\"Sai\"},\"4\":{\"id\":\"99\",\"traloi\":\"plays\",\"ds\":\"Sai\"},\"5\":{\"id\":\"100\",\"traloi\":\"waiter\",\"ds\":\"Sai\"},\"6\":{\"id\":\"101\",\"traloi\":\"opposite\",\"ds\":\"\\u0110\\u00fang\"},\"7\":{\"id\":\"104\",\"traloi\":\"an only child\",\"ds\":\"\\u0110\\u00fang\"},\"8\":{\"id\":\"111\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"113\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"116\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 3, 10, 4, 3, 20),
(91, 1, 9, '2022-11-28 09:15:28', '{\"1\":{\"id\":\"81\",\"traloi\":\"annoyed\",\"ds\":\"Sai\"},\"2\":{\"id\":\"84\",\"traloi\":\"allow\",\"ds\":\"Sai\"},\"3\":{\"id\":\"94\",\"traloi\":\"inpolite\",\"ds\":\"\\u0110\\u00fang\"},\"4\":{\"id\":\"99\",\"traloi\":\"go\",\"ds\":\"\\u0110\\u00fang\"},\"5\":{\"id\":\"100\",\"traloi\":\"waitress\",\"ds\":\"\\u0110\\u00fang\"},\"6\":{\"id\":\"101\",\"traloi\":\"opposed\",\"ds\":\"Sai\"},\"7\":{\"id\":\"104\",\"traloi\":\"an only child\",\"ds\":\"\\u0110\\u00fang\"},\"8\":{\"id\":\"111\",\"traloi\":\"ambitiative\",\"ds\":\"Sai\"},\"9\":{\"id\":\"113\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"116\",\"traloi\":\"4\",\"ds\":\"Sai\"}}', 4, 10, 5, 1, 80),
(92, 1, 9, '2022-12-02 11:08:10', '{\"1\":{\"id\":\"108\",\"traloi\":\"large\",\"ds\":\"\\u0110\\u00fang\"},\"2\":{\"id\":\"88\",\"traloi\":\"greatest\",\"ds\":\"Sai\"},\"3\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"109\",\"traloi\":\"retire\",\"ds\":\"Sai\"},\"5\":{\"id\":\"79\",\"traloi\":\"benefit for you\",\"ds\":\"Sai\"},\"6\":{\"id\":\"91\",\"traloi\":\"eat outwardly\",\"ds\":\"Sai\"},\"7\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"104\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"92\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 1, 10, 4, 5, 5),
(93, 1, 9, '2022-12-02 11:35:19', '{\"1\":{\"id\":\"79\",\"traloi\":\"good for you\",\"ds\":\"\\u0110\\u00fang\"},\"2\":{\"id\":\"88\",\"traloi\":\"tallest\",\"ds\":\"\\u0110\\u00fang\"},\"3\":{\"id\":\"85\",\"traloi\":\"studier\",\"ds\":\"Sai\"},\"4\":{\"id\":\"109\",\"traloi\":\"retire\",\"ds\":\"Sai\"},\"5\":{\"id\":\"108\",\"traloi\":\"big\",\"ds\":\"Sai\"},\"6\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"104\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 2, 10, 3, 5, 15),
(94, NULL, 6, '2022-12-02 11:35:59', '{\"1\":{\"id\":\"36\",\"traloi\":\"working \\u2026 having\",\"ds\":\"Sai\"},\"2\":{\"id\":\"44\",\"traloi\":\"went\",\"ds\":\"\\u0110\\u00fang\"},\"3\":{\"id\":\"45\",\"traloi\":\"were\",\"ds\":\"\\u0110\\u00fang\"},\"4\":{\"id\":\"68\",\"traloi\":\"do you cooking?\",\"ds\":\"Sai\"},\"5\":{\"id\":\"57\",\"traloi\":\"would\",\"ds\":\"\\u0110\\u00fang\"},\"6\":{\"id\":\"48\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"41\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"54\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"67\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"64\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 3, 10, 2, 5, 7),
(95, NULL, 9, '2022-12-02 12:29:10', '{\"1\":{\"id\":\"108\",\"traloi\":\"huge\",\"ds\":\"Sai\"},\"2\":{\"id\":\"85\",\"traloi\":\"pupil\",\"ds\":\"Sai\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"traloi\":\"benefit for you\",\"ds\":\"Sai\"},\"5\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"104\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"78\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"96\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 3, 7, 2),
(96, 1, 6, '2022-12-02 13:00:35', '{\"1\":{\"id\":\"58\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"45\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"57\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"36\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"68\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"48\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"53\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"67\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"64\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"54\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 0),
(97, NULL, 9, '2022-12-02 13:19:05', '{\"1\":{\"id\":\"108\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 1),
(98, NULL, 9, '2022-12-02 13:20:57', '{\"1\":{\"id\":\"108\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 1),
(99, NULL, 9, '2022-12-02 13:21:11', '{\"1\":{\"id\":\"108\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 1),
(100, NULL, 9, '2022-12-02 13:21:16', '{\"1\":{\"id\":\"108\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 1),
(101, NULL, 9, '2022-12-02 13:21:40', '{\"1\":{\"id\":\"108\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"2\":{\"id\":\"109\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"3\":{\"id\":\"88\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"4\":{\"id\":\"79\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"5\":{\"id\":\"85\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"6\":{\"id\":\"110\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"7\":{\"id\":\"91\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"95\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"89\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"83\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 0, 10, 0, 10, 1),
(102, 1, 8, '2022-12-03 10:58:35', '{\"1\":{\"id\":\"90\",\"traloi\":\"office\",\"ds\":\"Sai\"},\"2\":{\"id\":\"80\",\"traloi\":\"headhurt\",\"ds\":\"Sai\"},\"3\":{\"id\":\"101\",\"traloi\":\"opposite\",\"ds\":\"\\u0110\\u00fang\"},\"4\":{\"id\":\"76\",\"traloi\":\"enjoyed\",\"ds\":\"Sai\"},\"5\":{\"id\":\"100\",\"traloi\":\"waiteress\",\"ds\":\"Sai\"},\"6\":{\"id\":\"105\",\"traloi\":\"fourth\",\"ds\":\"Sai\"},\"7\":{\"id\":\"97\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"8\":{\"id\":\"107\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"9\":{\"id\":\"82\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"},\"10\":{\"id\":\"94\",\"ds\":\"Ch\\u01b0a tr\\u1ea3 l\\u1eddi\"}}', 1, 10, 5, 4, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id_cauhoi` int(10) UNSIGNED NOT NULL,
  `noidung` text NOT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `amthanh` varchar(255) DEFAULT NULL,
  `kynang` varchar(255) NOT NULL,
  `da_a` text NOT NULL,
  `da_b` text NOT NULL,
  `da_c` text NOT NULL,
  `da_d` text NOT NULL,
  `trinhdo` varchar(255) NOT NULL,
  `da_dung` text NOT NULL,
  `dokho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id_cauhoi`, `noidung`, `hinhanh`, `amthanh`, `kynang`, `da_a`, `da_b`, `da_c`, `da_d`, `trinhdo`, `da_dung`, `dokho`) VALUES
(36, 'I spend too much time ________. I’d like ________ more time for myself and my family.', NULL, NULL, 'grammar', 'to work … to have', 'working … having', 'to work … having', 'working … to have', 'Đại học', 'working … to have', 'dễ'),
(37, 'He drives quite ________, but his brother drives really ________.', NULL, NULL, 'grammar', 'slow … fast', 'slowly … fast', 'slowly … fastly', 'slow … fastly', 'THPT', 'slowly … fast', 'dễ'),
(38, 'I was ________ exhausted by the end of the day.', NULL, NULL, 'grammar', 'incredibly', 'extremely', 'very', 'completely', 'THPT', 'completely', 'dễ'),
(39, 'She ________ in a small house near the park.', NULL, NULL, 'grammar', 'stays', 'lives', 'live', 'living', 'THPT', 'lives', 'dễ'),
(40, 'She’s from ________, so she speaks ________.', NULL, NULL, 'grammar', 'Spain … Spanish', 'Spanish … Spain', 'Spain … Spainese', 'Spanish … Spanish', 'Đi làm', 'Spain … Spanish', 'trung bình'),
(41, 'By next month I ________ all my exams, and I can relax!', NULL, NULL, 'grammar', 'will have finished', 'will be finishing', 'will finish', 'will have been finishing', 'Đại học', 'will have finished', 'khó'),
(42, 'Could you tell me ________?', NULL, NULL, 'grammar', 'where the bus stop is', 'the bus stop is where', 'where is the bus stop', 'is where the bus stop', 'THPT', 'where the bus stop is', 'trung bình'),
(43, 'I’ll send it to you ________ I get the money.', NULL, NULL, 'grammar', 'until', 'as soon as', 'unless', 'in case', 'Đi làm', 'as soon as', 'dễ'),
(44, 'I ________ to Germany last year.', NULL, NULL, 'grammar', 'went', 'go', 'goed', 'gone', 'Đại học', 'went', 'dễ'),
(45, 'I wouldn’t say that to him if I ________ you.', NULL, NULL, 'grammar', 'was', 'were', 'am', 'would be', 'Đại học', 'were', 'dễ'),
(46, 'How long have they ________ there?', NULL, NULL, 'grammar', 'waited', 'been waited', 'waiting', 'been waiting', 'THPT', 'been waiting', 'trung bình'),
(47, 'She ________ have short hair, but now it’s long.', NULL, NULL, 'grammar', 'used to', 'didn\'t', 'before', 'use to', 'THPT', 'used to', 'dễ'),
(48, 'Take a sandwich with you ________ you get hungry later.', NULL, NULL, 'grammar', 'when', 'in case', 'so as not to', 'if', 'Đại học', 'in case', 'dễ'),
(49, 'Where ________ they from?', NULL, NULL, 'grammar', 'are', 'am', 'is', 'isn\'t', 'THPT', 'are', 'dễ'),
(50, 'Do you think it’s ________ rain tomorrow?', NULL, NULL, 'grammar', 'to', 'going', 'going to', 'will', 'THPT', 'going to', 'dễ'),
(51, 'I’m busy on Friday, so I ________ come.', NULL, NULL, 'grammar', 'don\'t', 'not can', 'am not', 'can\'t', 'Đi làm', 'can\'t', 'dễ'),
(52, 'The film ________ by Quentin Tarantino.', NULL, NULL, 'grammar', 'directed', 'did directed', 'was direct', 'was directed', 'Đi làm', 'was directed', 'trung bình'),
(53, 'It was the first time he ________ anything so spicy.', NULL, NULL, 'grammar', 'had been eating', 'had eaten', 'has eaten', 'was eating', 'Đại học', 'had eaten', 'khó'),
(54, 'But they ________be away – I saw them this morning!', NULL, NULL, 'grammar', 'can\'t', 'mustn\'t', 'shouldn\'t', 'don\'t have to', 'Đại học', 'can\'t', 'trung bình'),
(55, 'He ________ ever works as ________ as he should.', NULL, NULL, 'grammar', 'hardly … hardly', 'hardly … hard', 'hard … hard', 'hard … hardly', 'Đi làm', 'hardly … hard', 'khó'),
(56, 'I don’t know where she is. I suppose she ________ got stuck in traffic.', NULL, NULL, 'grammar', 'might have', 'can have', 'must have', 'should have', 'THPT', 'might have', 'trung bình'),
(57, 'If I had more time, I ________ do more exercise.', NULL, NULL, 'grammar', '\'m going to', 'would', 'want to', 'will', 'Đại học', 'would', 'dễ'),
(58, 'How did this ________ broken?', NULL, NULL, 'grammar', 'be', 'become', 'was', 'get', 'Đại học', 'get', 'dễ'),
(59, 'I wish he ________ so rude to people when we go out.', NULL, NULL, 'grammar', 'didn\'t be', 'won\'t be', 'hadn\'t been', 'wouldn\'t be', 'Đi làm', 'wouldn\'t be', 'trung bình'),
(60, 'If he ________ one minute later, he ________ the train.', NULL, NULL, 'grammar', 'arrived … would have missed', 'would arrive … would miss', 'had arrived … would have missed', 'would have arrived … would have missed', 'THPT', 'had arrived … would have missed', 'khó'),
(61, 'Put ________ bag on ________ table, then give me ________ apple and ________ bar of chocolate.', NULL, NULL, 'grammar', 'the … the … a … a', 'a … a … the … the', 'a … the … an … the', 'the … the … an … a', 'Đi làm', 'the … the … an … a', 'khó'),
(62, 'Where ________ he work?', NULL, NULL, 'grammar', 'does', 'is', 'do', 'don\'t', 'Đi làm', 'does', 'dễ'),
(63, 'I drink coffee ________.', NULL, NULL, 'grammar', 'twice a day', 'two times for a day', 'two times day', 'twice in day', 'THPT', 'twice a day', 'trung bình'),
(64, 'I’d love to ________ in the 19th century.', NULL, NULL, 'grammar', 'lived', 'live', 'have lived', 'have been lived', 'Đại học', 'have lived', 'trung bình'),
(65, 'Whose bag is this?\r\nIt’s ________.', NULL, NULL, 'grammar', 'the mine', 'of me', 'mine', 'my', 'Đi làm', 'mine', 'dễ'),
(66, 'I’ve already called her four times ________.', NULL, NULL, 'grammar', 'today', 'again', 'before', 'yesterday', 'THPT', 'today', 'dễ'),
(67, 'This house is ________, but also ________.', NULL, NULL, 'grammar', 'more big … more expensive', 'bigger … more expensive', 'bigger … expensiver', 'more big … expensiver', 'Đại học', 'bigger … more expensive', 'trung bình'),
(68, 'That smells good! What ________.', NULL, NULL, 'grammar', 'are you cooking?', 'do you cook?', 'are you cook?', 'do you cooking?', 'Đại học', 'are you cooking?', 'dễ'),
(69, 'That wasn’t a good idea – you ________ thought about it more carefully.', NULL, NULL, 'grammar', 'must have', 'ought have', 'have to', 'should have', 'THPT', 'should have', 'dễ'),
(70, 'She’s wearing a ________ dress.', NULL, NULL, 'grammar', 'black long beautiful', 'long beautiful black', 'beautiful long black', 'long black beautiful', 'THPT', 'beautiful long black', 'trung bình'),
(71, 'Let’s go to the cinema.\r\nGreat idea! What film ________ we watch?', NULL, NULL, 'grammar', 'do', 'are we going to', 'will', 'shall', 'Đại học', 'shall', 'khó'),
(72, 'I ________ like getting up early.', NULL, NULL, 'grammar', 'am not', 'doesn\'t', 'don\'t', 'not', 'THPT', 'don\'t', 'dễ'),
(73, 'I ________ been hit by a car, but luckily I just managed to get out of the way.', NULL, NULL, 'grammar', 'could have', 'should have', 'can have', 'must have', 'THPT', 'could have', 'trung bình'),
(74, 'Winters here ________ be really cold sometimes, so make sure you bring warm clothes!', NULL, NULL, 'grammar', 'could', 'can', 'may', 'might', 'THPT', 'can', 'trung bình'),
(75, '_______ spent time abroad when I was a student, I found it easier to get used to ________ in another country.', NULL, NULL, 'grammar', 'Have … live', 'Having … living', 'Having … live', 'To have … living', 'Đi làm', 'Having … living', 'khó'),
(76, 'At the weekend I _________ with some friends – we went for a curry, then had a couple of drinks.', NULL, NULL, 'vocabulary', 'went out', 'enjoyed', 'went for fun', 'played', 'THPT', 'went out', 'dễ'),
(77, 'Do you live in a house or _________?', NULL, NULL, 'vocabulary', 'an apartment', 'a village', 'a home', 'a building', 'Đi làm', 'an apartment', 'dễ'),
(78, 'You can’t smoke here – please _________ your cigarette.', NULL, NULL, 'vocabulary', 'put away', 'put up with', 'put down', 'put out', 'Đại học', 'put out', 'trung bình'),
(79, 'Fruit and vegetables are healthy. = Fruit and vegetables are _________.', NULL, NULL, 'vocabulary', 'good for you', 'good for health', 'benefit for you', 'healthsome', 'Đại học', 'good for you', 'dễ'),
(80, 'Argh! This noise is giving me a _________.', NULL, NULL, 'vocabulary', 'headpain', 'headouch', 'headhurt', 'headache', 'THPT', 'headache', 'dễ'),
(81, 'tired –> exhausted\r\nsmall –> tiny\r\nangry –> _________', NULL, NULL, 'vocabulary', 'irritated', 'annoyed', 'furious', 'vexed', 'Đại học', 'furious', 'trung bình'),
(82, 'It’s a good idea, but it’s _________ that the boss will agree with you.', NULL, NULL, 'vocabulary', 'likely', 'unlikely', 'improbably', 'unprobably', 'THPT', 'unlikely', 'trung bình'),
(83, 'I’ve been so busy all week. I don’t want to do anything at the weekend – I’ll just stay at home and _________.', NULL, NULL, 'vocabulary', 'make it easy', 'take it easy', 'have a relax', 'make a rest', 'Đại học', 'take it easy', 'trung bình'),
(84, 'Our teacher doesn’t _________ us use mobile phones in class.', NULL, NULL, 'vocabulary', 'allow', 'forbid', 'make', 'let', 'THPT', 'let', 'dễ'),
(85, 'He studies maths at university. He’s a _________.', NULL, NULL, 'vocabulary', 'pupil', 'studier', 'student', 'professor', 'Đại học', 'student', 'dễ'),
(86, 'She’s a police officer, so she has to wear a _________ at work.', NULL, NULL, 'vocabulary', 'clothes', 'police suit', 'dress', 'uniform', 'Đi làm', 'uniform', 'dễ'),
(87, 'They never argue and they enjoy spending time together. = They _________.', NULL, NULL, 'vocabulary', 'like themselves very much', 'relationship very good', 'get on very well', 'relate very well', 'THPT', 'get on very well', 'khó'),
(88, 'It’s the _________ building in the city.', NULL, NULL, 'vocabulary', 'tallest', 'greatest', 'fattest', 'highest', 'Đại học', 'tallest', 'dễ'),
(89, 'Your father’s brother’s daughter is your _________.', NULL, NULL, 'vocabulary', 'cousin', 'niece', 'sister', 'cousina', 'Đại học', 'cousin', 'trung bình'),
(90, 'What time do you go to _________ every day?', NULL, NULL, 'vocabulary', 'workplace', 'office', 'work', 'job', 'THPT', 'work', 'dễ'),
(91, 'Let’s go to a restaurant for dinner tonight = Let’s _________ tonight.', NULL, NULL, 'vocabulary', 'eat away', 'eat outwardly', 'eat outside', 'eat out', 'Đại học', 'eat out', 'khó'),
(92, 'Every time I wear something white, I _________ coffee or orange juice or something on it.', NULL, NULL, 'vocabulary', 'pour', 'let', 'spill', 'drop', 'Đại học', 'spill', 'trung bình'),
(93, 'I’m a bit lost. Can you tell me how to _________ to the university?', NULL, NULL, 'vocabulary', 'reach', 'go', 'get', 'find', 'Đi làm', 'get', 'khó'),
(94, 'friendly –> unfriendly\r\nhonest –> dishonest\r\npolite –> _________', NULL, NULL, 'vocabulary', 'inpolite', 'unpolite', 'dispolite', 'impolite', 'THPT', 'inpolite', 'trung bình'),
(95, 'I love all fruit, but _________ strawberries.', NULL, NULL, 'vocabulary', 'mostly', 'specifically', 'specially', 'especially', 'Đại học', 'especially', 'trung bình'),
(96, 'Excuse me, I think you’ve _________ a mistake in our bill.', NULL, NULL, 'vocabulary', 'made', 'had', 'done', 'given', 'Đại học', 'made', 'trung bình'),
(97, 'Her hair isn’t completely straight – it’s slightly _________.', NULL, NULL, 'vocabulary', 'wavy', 'waved', 'curl', 'bent', 'THPT', 'wavy', 'khó'),
(98, 'Breakfast, lunch and dinner are _________.', NULL, NULL, 'vocabulary', 'eatings', 'meals', 'food', 'foodtimes', 'Đi làm', 'meals', 'dễ'),
(99, 'I _________ swimming every Saturday morning.', NULL, NULL, 'vocabulary', 'do', 'play', 'plays', 'go', 'Đi làm', 'go', 'dễ'),
(100, 'He’s a waiter; she’s a _________.', NULL, NULL, 'vocabulary', 'waitree', 'waiter', 'waitress', 'waiteress', 'THPT', 'waitress', 'dễ'),
(101, '‘Happy’ is the _________ of ‘sad’.', NULL, NULL, 'vocabulary', 'oppositive', 'oppose', 'opposed', 'opposite', 'THPT', 'opposite', 'dễ'),
(102, 'The weather was great – it was really _________.', NULL, NULL, 'vocabulary', 'sunny', 'sun', 'strong sun', 'sunshine', 'THPT', 'sunny', 'dễ'),
(103, 'Do you want a _________ or a return ticket?', NULL, NULL, 'vocabulary', 'single', 'one-journey', 'lonely', 'outbound', 'THPT', 'single', 'khó'),
(104, 'She doesn’t have brothers or sisters – she’s _________.', NULL, NULL, 'vocabulary', 'an only child', 'an alone child', 'a single child', 'a lonely child', 'Đại học', 'an only child', 'trung bình'),
(105, 'What time is it?\r\nIt’s 6.15 – a _________ past six.', NULL, NULL, 'vocabulary', 'fourth', 'fifteen', 'half', 'quarter', 'THPT', 'quarter', 'khó'),
(106, 'If I were you, I’d leave earlier, so you can avoid the _________.', NULL, NULL, 'vocabulary', 'traffic time', 'peak time', 'peak hour', 'rush hour', 'THPT', 'rush hour', 'trung bình'),
(107, 'apartment –> flat\r\nelevator –> lift\r\ngasoline –> _________', NULL, NULL, 'vocabulary', 'fuel', 'coal', 'petrol', 'oil', 'THPT', 'petrol', 'trung bình'),
(108, 'What size do you need: small, medium or _________?', NULL, NULL, 'vocabulary', 'large', 'giant', 'huge', 'big', 'Đại học', 'large', 'dễ'),
(109, 'I don’t like my job very much. I’m going to _________ and look for another one.', NULL, NULL, 'vocabulary', 'resign', 'fire', 'finish', 'retire', 'Đại học', 'resign', 'dễ'),
(110, 'Are you planning to go _________ for the weekend?', NULL, NULL, 'vocabulary', 'out', 'off', 'far', 'away', 'Đại học', 'away', 'khó'),
(111, 'imagine –> imaginative\r\nrely –> reliable\r\nambition –> _________', NULL, NULL, 'vocabulary', 'ambitiable', 'ambitious', 'ambitionful', 'ambitiative', 'THPT', 'ambitious', 'khó'),
(112, 'I don’t _________ going out tonight.', NULL, NULL, 'vocabulary', 'have mood to', 'like', 'want to', 'feel like', 'THPT', 'feel like', 'dễ'),
(113, 'I’ve got all the data. Now I just need to _________ the answer.', NULL, NULL, 'vocabulary', 'think out', 'work out', 'make out', 'count out', 'Đi làm', 'work out', 'khó'),
(114, 'He’s so _________! I’m not _________ in anything he says.', NULL, NULL, 'vocabulary', 'bored … interesting', 'bored … interested', 'boring … interested', 'boring … interesting', 'Đi làm', 'boring … interested', 'trung bình'),
(115, 'We nearly missed the plane—we were only just _________.', NULL, NULL, 'vocabulary', 'on time', 'in time', 'in time for', 'timely', 'THPT', 'in time', 'khó');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi_dethi`
--

CREATE TABLE `cauhoi_dethi` (
  `id_dethi` int(10) UNSIGNED NOT NULL,
  `id_cauhoi` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dethi`
--

CREATE TABLE `dethi` (
  `id_dethi` int(10) UNSIGNED NOT NULL,
  `tendethi` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `kynang` varchar(255) NOT NULL,
  `thoigian` int(11) NOT NULL,
  `trinhdo` varchar(255) NOT NULL,
  `de` int(10) DEFAULT 0,
  `trungbinh` int(10) DEFAULT 0,
  `kho` int(10) DEFAULT 0,
  `hienthi` int(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dethi`
--

INSERT INTO `dethi` (`id_dethi`, `tendethi`, `mota`, `kynang`, `thoigian`, `trinhdo`, `de`, `trungbinh`, `kho`, `hienthi`, `created_at`, `updated_at`) VALUES
(6, 'Test 2', 'Bài 2', 'grammar', 15, 'Đại học', 6, 3, 1, 1, '2022-11-28 06:45:26', '2022-11-28 06:47:10'),
(8, 'Test 3', 'Bài 3', 'vocabulary', 20, 'THPT', 5, 3, 2, 1, '2022-11-28 08:04:19', '2022-11-28 08:04:30'),
(9, 'Test 4', 'Bài 4', 'vocabulary', 20, 'Đại học', 5, 3, 2, 1, '2022-11-28 09:11:34', '2022-11-28 09:12:36');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `muctieu`
--

CREATE TABLE `muctieu` (
  `id_hocvien` int(10) UNSIGNED NOT NULL,
  `id_muctieu` int(10) UNSIGNED NOT NULL,
  `ngaythi` date NOT NULL,
  `diemso` int(10) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoidung`
--

CREATE TABLE `nguoidung` (
  `id_nguoidung` int(10) UNSIGNED NOT NULL,
  `ten` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `hocvan` varchar(255) NOT NULL,
  `sdt` int(10) DEFAULT NULL,
  `vaitro` varchar(255) NOT NULL DEFAULT 'hocvien',
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'user_icon.png',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `nguoidung`
--

INSERT INTO `nguoidung` (`id_nguoidung`, `ten`, `ngaysinh`, `hocvan`, `sdt`, `vaitro`, `username`, `password`, `avatar`, `created_at`, `updated_at`) VALUES
(1, 'Minh', '2012-07-01', 'Đại học', 588852512, 'quanly', 'minhm01', '1c479acf4b0191984233b0464f3012e1', 'a7chill.webp', '2022-10-24 09:29:58', '2022-11-24 12:44:21'),
(5, 'Minn', '1998-11-11', 'Đại học', 23232, 'hocvien', 'minhm03', '1c479acf4b0191984233b0464f3012e1', 'user_icon.png', '2022-11-25 22:53:02', NULL),
(6, 'asdas', '2022-11-02', 'Đại học', 2131, 'hocvien', 'minhm05', '1c479acf4b0191984233b0464f3012e1', 'user_icon.png', '2022-11-27 07:44:26', NULL),
(7, 'Minn', '2022-11-04', 'THCS', NULL, 'hocvien', 'minhm06', '1c479acf4b0191984233b0464f3012e1', 'user_icon.png', '2022-11-27 07:47:29', NULL),
(8, 'awdaw', '2022-12-14', 'THCS', 12312, 'hocvien', 'minhm07', '7815696ecbf1c96e6894b779456d330e', 'user_icon.png', '2022-11-27 07:51:39', NULL),
(11, 'Minh', '2022-09-28', 'Đại học', 123456789, 'hocvien', 'minhm0', '1c479acf4b0191984233b0464f3012e1', 'user_icon.png', '2022-11-27 09:48:18', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tailieu`
--

CREATE TABLE `tailieu` (
  `id_tailieu` int(10) UNSIGNED NOT NULL,
  `tentailieu` varchar(255) NOT NULL,
  `tomtat` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `hinhminhhoa` varchar(255) DEFAULT NULL,
  `filedinhkem` varchar(255) DEFAULT NULL,
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tailieu`
--

INSERT INTO `tailieu` (`id_tailieu`, `tentailieu`, `tomtat`, `noidung`, `hinhminhhoa`, `filedinhkem`, `id_giaovien`, `created_at`, `updated_at`) VALUES
(9, 'The Key to IELTS Success', 'Tên: The Key to IELTS Success\r\nTác giả: Pauline Cullen', '<h2>Th&ocirc;ng tin về cuốn s&aacute;ch:</h2>\r\n\r\n<p>T&ecirc;n: The Key to IELTS Success</p>\r\n\r\n<p>T&aacute;c giả: Pauline Cullen</p>\r\n\r\n<p>Cuốn s&aacute;ch được bi&ecirc;n soạn bởi t&aacute;c giả Pauline Cullen - một c&aacute;i t&ecirc;n kh&aacute; quen thuộc trong giới viết s&aacute;ch IELTS. Nh&igrave;n chung, cuốn s&aacute;ch n&agrave;y kh&ocirc;ng phải l&agrave; cuốn s&aacute;ch luyện đề m&agrave; The Key to IELTS Success nhằm mục đ&iacute;ch giải quyết c&aacute;c vấn đề m&agrave; người học IELTS thường gặp v&agrave; đồng thời đưa ra những lời khuy&ecirc;n, phương ph&aacute;p để bạn c&oacute; thể cải thiện được điểm số ở 4 kỹ năng: Nghe - N&oacute;i -Đọc - Viết. Đồng thời,&nbsp; xuy&ecirc;n suốt cuốn s&aacute;ch l&agrave; đề xuất của t&aacute;c giả về c&aacute;c t&agrave;i liệu luyện IELTS hiệu quả nhằm phục vụ cho mục đ&iacute;ch &ocirc;n luyện của bạn đọc.&nbsp;</p>\r\n\r\n<h2>Cuốn s&aacute;ch n&agrave;y c&oacute; thể gi&uacute;p g&igrave;?</h2>\r\n\r\n<p>Pauline Cullen đ&atilde; n&ecirc;u ra ba vấn đề ch&iacute;nh m&agrave; người học IELTS thường phải đối mặt trong qu&aacute; tr&igrave;nh luyện thi IELTS:</p>\r\n\r\n<ul>\r\n	<li>Thứ nhất, nhiều người&nbsp;lựa chọn sử dụng c&aacute;c nguồn t&agrave;i liệu thực h&agrave;nh miễn ph&iacute; hoặc kh&ocirc;ng chất lượng</li>\r\n	<li>Thứ hai, đại đa số những người học đi theo lời khuy&ecirc;n về c&aacute;ch đạt được band điểm cao trong thời gian ngắn&nbsp;dựa tr&ecirc;n những t&agrave;i liệu n&agrave;y. T&aacute;c giả cho rằng đ&acirc;y l&agrave; một quan niệm sai lầm v&igrave; c&aacute;c t&agrave;i liệu v&agrave; lời khuy&ecirc;n k&egrave;m theo kh&ocirc;ng phản &aacute;nh b&agrave;i kiểm tra thực tế, bởi những mẹo đ&oacute; kh&ocirc;ng thể &aacute;p dụng được trong b&agrave;i kiểm tra thật đ&acirc;u. Do đ&oacute;, những người dựa v&agrave;o những mẹo&nbsp;n&agrave;y vẫn bị mắc kẹt ở một band điểm&nbsp;v&agrave; họ sẽ phải bỏ ra một khoản tiền kh&ocirc;ng &iacute;t để thi đi thi lại đ&oacute;.</li>\r\n	<li>Vấn đề thứ ba li&ecirc;n quan đến việc nghi&ecirc;n cứu ng&ocirc;n ngữ. Pauline Cullen chia sẻ rằng nhiều người trong số những người tiếp x&uacute;c với b&agrave;&nbsp;l&agrave; những sinh vi&ecirc;n tự học v&agrave; &ocirc;n luyện, họ chưa bao giờ học ng&ocirc;n ngữ ở cấp độ chuy&ecirc;n s&acirc;u&nbsp;trước đ&acirc;y, v&agrave; những người đ&oacute; họ&nbsp;cảm thấy bế tắc v&agrave; lu&ocirc;n gặp kh&oacute; khăn trong qu&aacute; tr&igrave;nh &ocirc;n luyện, đặc biệt l&agrave; trong phần viết.</li>\r\n</ul>\r\n\r\n<p>Bởi vậy, The Key to IELTS Success được bi&ecirc;n soạn v&agrave; ra đời&nbsp;n&agrave;y nhằm giải quyết ba vấn đề n&ecirc;u tr&ecirc;n. Cuốn s&aacute;ch&nbsp;sẽ gi&uacute;p bạn</p>\r\n\r\n<ol>\r\n	<li>Ph&acirc;n biệt những&nbsp;th&ocirc;ng tin về IELTS: đ&acirc;u l&agrave; sự thật v&agrave; đ&acirc;u l&agrave; &#39;lời đồn&#39;</li>\r\n	<li>Giới thiệu c&aacute;c nguồn t&agrave;i liệu, tham khảo đ&aacute;ng tin cậy v&agrave; chỉ cho bạn c&aacute;ch học một ng&ocirc;n ngữ ở tr&igrave;nh độ n&acirc;ng cao để bạn c&oacute; thể đạt được band điểm&nbsp;mục ti&ecirc;u của&nbsp;m&igrave;nh.</li>\r\n</ol>\r\n\r\n<h2>Nội dung của cuốn s&aacute;ch:</h2>\r\n\r\n<p>Do tiếp cận mọi vấn đề từ gốc rễ n&ecirc;n mặc d&ugrave; tựa d&agrave;nh cho band&nbsp;7+, The Key to IELTS Success vẫn l&agrave; cuốn s&aacute;ch ph&ugrave; hợp với tất cả đối tượng người học v&agrave; ở mọi tr&igrave;nh độ. Với người mới bắt đầu, đ&acirc;y l&agrave; lựa chọn tốt v&igrave; cuốn s&aacute;ch mang lại cho người học một trải nghiệm được dẫn dắt từ đầu ch&iacute; cuối, c&oacute; những kiến thức nền tảng ngay khi mới bắt đầu. C&ograve;n với những đối tượng kh&aacute;c, c&aacute;c bạn c&oacute; thể tham khảo The Key to IELTS Success để hiểu th&ecirc;m về c&aacute;ch thức l&agrave;m b&agrave;i, l&yacute; do về sự hiệu quả của mỗi c&aacute;ch tiếp cận v&agrave; đặc biệt l&agrave; thỏa m&atilde;n được c&acirc;u hỏi tại sao người học thường tiến bộ rất nhanh ở c&aacute;c band thấp (từ 1-5) nhưng lại gặp nhiều kh&oacute; khăn khi n&acirc;ng cấp từ band 5,6 (intermediate) l&ecirc;n band 7+ (advance).</p>\r\n\r\n<p>Về cấu tr&uacute;c,&nbsp;The Key to IELTS Success&nbsp;bao gồm 10 chương&nbsp;</p>\r\n\r\n<p>Mục &quot;Key ideas&quot; được đ&oacute;ng khung v&agrave; b&ocirc;i m&agrave;u gi&uacute;p người học nắm bắt được nội dung ch&iacute;nh của mỗi chương.</p>\r\n\r\n<h2>Tại sao cuốn s&aacute;ch n&agrave;y kh&aacute;c với những lời khuy&ecirc;n được t&igrave;m thấy tr&ecirc;n mạng?</h2>\r\n\r\n<p>T&aacute;c giả Pauline Cullen đ&atilde; chia sẻ khi viết cuốn s&aacute;ch n&agrave;y như sau: &quot;Những g&igrave; ch&uacute;ng t&ocirc;i viết đều xuất ph&aacute;t từ quan điểm v&agrave; kinh nghiệm của t&ocirc;i trong cuộc sống. V&igrave; vậy, kinh nghiệm t&ocirc;i c&oacute; được với việc học ng&ocirc;n ngữ, dạy ng&ocirc;n ngữ v&agrave; bi&ecirc;n soạn&nbsp;b&agrave;i kiểm tra, tất cả đều gi&uacute;p định h&igrave;nh những cuốn s&aacute;ch của t&ocirc;i. T&ocirc;i học ng&ocirc;n ngữ ở trường đại học v&agrave; đủ điều kiện trở th&agrave;nh gi&aacute;o vi&ecirc;n dạy ng&ocirc;n ngữ v&agrave;o năm 1985. T&ocirc;i dạy tiếng Anh như ng&ocirc;n ngữ thứ hai cho đến năm 1997 v&agrave; lu&ocirc;n bị cuốn h&uacute;t v&agrave;o việc giảng dạy c&aacute;c lớp luyện thi Cambridge. T&ocirc;i trở th&agrave;nh gi&aacute;m khảo của Cambridge v&agrave;o đầu những năm 1990 v&agrave; dạy c&aacute;c lớp IELTS khi n&oacute; được giới thiệu lần đầu ti&ecirc;n ở &Uacute;c, v&agrave;o năm 1992. T&ocirc;i trở th&agrave;nh gi&aacute;m khảo IELTS v&agrave;o năm 1993 v&agrave; bắt đầu viết v&agrave; bi&ecirc;n soạn&nbsp;t&agrave;i liệu kiểm tra một c&aacute;ch chuy&ecirc;n nghiệp v&agrave;o năm 1995. Khi viết s&aacute;ch, t&ocirc;i lu&ocirc;n đặt m&igrave;nh v&agrave;o 3 avi tr&ograve;: học sinh học ng&ocirc;n ngữ, gi&aacute;o vi&ecirc;n dạy ng&ocirc;n ngữ&nbsp;v&agrave; người bi&ecirc;n soạn t&agrave;i liệu&nbsp;kiểm tra. Nếu bạn th&ecirc;m cuốn s&aacute;ch n&agrave;y v&agrave;o những cuốn s&aacute;ch kh&aacute;c của t&ocirc;i về IELTS hoặc của những t&aacute;c giả m&agrave; t&ocirc;i sẽ giới thiệu sau n&agrave;y, th&igrave; bạn sẽ biết mọi thứ bạn cần biết về IELTS v&agrave;&nbsp; cho IELTS&quot;</p>\r\n\r\n<p>Với lời chia sẻ v&ocirc; c&ugrave;ng ch&acirc;n thật từ Pauline Cullen - một t&ecirc;n tuổi lớn trong giới IELTS thế n&agrave;y th&igrave; bạn c&ograve;n ngần ngại g&igrave; nữa m&agrave; h&atilde;y cho ngay cuốn s&aacute;ch n&agrave;y v&agrave;o tủ s&aacute;ch &ocirc;n luyện IELTS của bạn nh&eacute;!!</p>\r\n\r\n<p><strong>DOWNLOAD PDF:</strong>&nbsp;https://drive.google.com/file/d/1kZyEuscvLG63DoA6s8YUWdk1tkym9Am0/view?usp=sharing</p>', '9_img_1669527946.jfif', NULL, 1, '2022-11-27 05:45:46', '2022-11-27 05:45:46'),
(10, 'Destination C1&C2 Grammar and Vocabulary', 'Cuốn sách này phù hợp cho những bạn từ trình độ B2 trở lên (~6.0 IELTS)', '<h2><strong>Đối tượng sử dụng:</strong></h2>\r\n\r\n<p><strong>Destination C1 &amp; C2&nbsp;</strong>l&agrave; cuốn cuối c&ugrave;ng v&agrave; l&agrave; cuốn c&oacute; độ kh&oacute; cao nhất của bộ s&aacute;ch Destination của NXB MACMILLAN. Cuốn s&aacute;ch được thiết kế nhằm gi&uacute;p người học r&egrave;n luyện ngữ ph&aacute;p v&agrave; bổ sung vốn từ vựng để chuẩn bị tốt nhất cho c&aacute;c kỳ thi C1, C2 như kỳ thi Cambridge CAE hoặc kỳ thi Cambridge CPE,...<br />\r\nCuốn s&aacute;ch n&agrave;y ph&ugrave; hợp cho những bạn từ tr&igrave;nh độ B2 trở l&ecirc;n (~6.0 IELTS)</p>\r\n\r\n<h2><strong>Nội dung ch&iacute;nh:</strong></h2>\r\n\r\n<p><img src=\"https://lh6.googleusercontent.com/Rv5RDeG-t3Ps4Alvd43KKdsqHuB8G05DH3u69T4D_SKXkj3ayeflE8QaHEKNmrf1MhEKdvhZ56_cs3LkCmOruSLB77Dc_Xk41X1fUI29YMDVTFxvplbSpkt8hIxjByecw_ckqKwa\" /><br />\r\n<strong>Destination C1&amp;C2</strong>&nbsp;bao gồm 26 b&agrave;i học: 13 b&agrave;i về ngữ ph&aacute;p v&agrave; 13 b&agrave;i về từ vựng. Tương tự như cuốn B2,&nbsp;cuốn s&aacute;ch n&agrave;y c&oacute; 13&nbsp;b&agrave;i review (sau mỗi 2 Unit)&nbsp;v&agrave; 2 b&agrave;i kiểm tra tiến độ.&nbsp;</p>\r\n\r\n<h2><strong>Grammar &amp; Vocabulary</strong></h2>\r\n\r\n<p><img src=\"https://lh6.googleusercontent.com/2Kx8vKHjGGPN1t9PU_wWQ7FY8igH6aE1sWFqbolw2tyET1zGW0YXFDXAHoXFbtbfX4c3Ptuh8Hj9VZD5jezhJIn3oRFcCaGcsiwgtYfD5sQZqHQfcXxZrW_1zIHKZuvsF9axBa2-\" /></p>\r\n\r\n<p><em>Cấu tr&uacute;c l&yacute; thuyết của một b&agrave;i Grammar</em></p>\r\n\r\n<p>Cấu tr&uacute;c b&agrave;i học của hai phần Grammar v&agrave; Vocabulary được thiết kế giống với Destination B1 trước đ&oacute;: bao gồm phần l&yacute; thuyết sau đ&oacute; l&agrave; những b&agrave;i tập thực h&agrave;nh.&nbsp;<br />\r\nTuy nhi&ecirc;n, c&oacute; thể thấy lượng kiến thức trong mỗi b&agrave;i học của Destination C1&amp;C2 nhiều hơn đ&aacute;ng kể. Đặc biết, với những b&agrave;i học về từ vựng được bổ sung th&ecirc;m collocations v&agrave; idioms hay, gi&uacute;p c&aacute;c &quot;sĩ từ IELTS&quot; x&acirc;y dựng được một ng&acirc;n h&agrave;ng từ vựng phong ph&uacute;.<br />\r\n<br />\r\n<img src=\"https://lh6.googleusercontent.com/V6XpdkBa-yBcyIAgn5cpZ9-ON92wv8f4jxBW0C6-00RBqVyIKpCzj_UX6OMwvEhGIEef6wYpVORyCAZm9ARsAg_EUlQ6WootSJgPrF6oltl_8nTfnS8UHWiwgTymWROFQtbn6ioH\" /></p>\r\n\r\n<p><em>Cấu tr&uacute;c phần giới thiệu từ vựng v&agrave; c&aacute;c loại từ của một b&agrave;i Vocabulary</em></p>\r\n\r\n<p><strong>DOWNLOAD PDF:&nbsp;</strong>https://drive.google.com/file/d/19yWkn3ukJYEP4JHpNJtaW5C7f7gUyQHv/view</p>', '10_img_1669528001.png', NULL, 1, '2022-11-27 05:46:41', '2022-11-27 05:46:41'),
(11, 'Get Ready for IELTS Writing', 'Sách được dùng cho các bạn từ trình độ khoảng 3.0-4.0.', '<h2><strong>Get Ready for IELTS d&agrave;nh cho ai?</strong></h2>\r\n\r\n<p>Get Ready for IELTS l&agrave; cuốn s&aacute;ch d&agrave;nh cho c&aacute;c bạn mới bắt đầu để l&agrave;m quen với IELTS, thực h&agrave;nh, biết được b&agrave;i thi IELTS như thế n&agrave;o cũng như c&aacute;c dạng c&acirc;u hỏi, đề thi ra sao&hellip;&nbsp;S&aacute;ch được d&ugrave;ng cho c&aacute;c bạn từ tr&igrave;nh độ&nbsp;khoảng 3.0-4.0.&nbsp;</p>\r\n\r\n<h2><strong>Get Ready for IELTS c&oacute; những g&igrave;?</strong></h2>\r\n\r\n<p>Bộ s&aacute;ch tập trung v&agrave;o 4 kỹ năng trong b&agrave;i thi IELTS bao gồm: Nghe - N&oacute;i - Đọc - Viết. Mỗi cuốn s&aacute;ch về 1 kỹ năng&nbsp;bao gồm&nbsp;<strong>12 b&agrave;i học</strong>. Mỗi b&agrave;i học&nbsp;tập trung v&agrave;o một chủ đề kh&aacute;c nhau v&agrave; những chủ đề n&agrave;y&nbsp;thường xuất hiện trong kỳ thi IELTS.</p>\r\n\r\n<p>1. thể dễ học nhất v&agrave; c&oacute; thể tự học được bởi n&oacute; được minh họa bởi c&aacute;c v&iacute; dụ rất r&otilde; r&agrave;ng. Những kiến thức được cung cấp mang độ cơ bản, kh&ocirc;ng kh&oacute; để người học l&agrave;m quen với IELTS dần dần.&nbsp;</p>\r\n\r\n<p>2. Những phần ngữ ph&aacute;p&nbsp;v&agrave; phần từ vựng then chốt được cung cấp trong từng b&agrave;i học. Theo từng cuốn, bạn sẽ c&oacute; được những kiến thức phục vụ ri&ecirc;ng cho việc &ocirc;n luyện kỹ năng đ&oacute;, ph&acirc;n t&iacute;ch tỉ mỉ v&agrave; chi tiết.&nbsp;</p>\r\n\r\n<p>3. Mỗi cuốn cung cấp c&aacute;c gợi &yacute;, những mẹo nhỏ để l&agrave;m b&agrave;i nhanh đối với c&aacute;c dạng b&agrave;i thường xuy&ecirc;n sẽ được đưa ra ở từng b&agrave;i thi của từng kỹ năng. Đ&acirc;y l&agrave; phần quan trọng gi&uacute;p bạn học IELTS hiệu quả hơn. Th&ecirc;m v&agrave;o đ&oacute;, trong từng phần từng b&agrave;i học c&ograve;n l&agrave;m s&aacute;ng tỏ những lỗi sai hay gặp đối với c&aacute;c th&iacute; sinh dự thi IELTS khi tham gia thi thật.&nbsp;</p>\r\n\r\n<p>4. Cuối mỗi b&agrave;i học đều c&oacute; b&agrave;i tập để c&aacute;c bạn thực h&agrave;nh theo những kiến thức đ&atilde; học. Sau mỗi một phần học th&igrave; bạn c&ograve;n c&oacute; b&agrave;i test để tự &ocirc;n lại to&agrave;n bộ kiến thức theo từng dạng b&agrave;i trước đ&oacute;. Luyện tập thường xuy&ecirc;n sẽ gi&uacute;p bạn học g&igrave; nhớ nấy.&nbsp;&nbsp;</p>\r\n\r\n<p>5. 4 b&agrave;i Review cuối s&aacute;ch l&agrave; những dạng b&agrave;i tập sẽ gi&uacute;p bạn kiểm tra lại kiến thức v&agrave; gi&uacute;p bạn thực sự hiểu vững chắc những kĩ năng v&agrave; c&aacute;ch cảm nhận ng&ocirc;n ngữ cho b&agrave;i thi IELTS. C&oacute; đầy đủ c&aacute;c b&agrave;i để luyện tập v&agrave; k&egrave;m theo đ&aacute;p &aacute;n trả lời được cung cấp sau mỗi phần.</p>\r\n\r\n<p>6. Phần answer keys cuối s&aacute;ch gi&uacute;p bạn check lại đ&aacute;p &aacute;n b&agrave;i tập để củng cố v&agrave; kiểm tra tr&igrave;nh độ của bản th&acirc;n.&nbsp;</p>\r\n\r\n<p>7. Đặc biệt, ng&acirc;n h&agrave;ng từ vựng cho từng b&agrave;i tập cũng sẽ được cung cấp ở cuối&nbsp;mỗi quyển s&aacute;ch</p>\r\n\r\n<h2><strong>Get Ready for IELTS Writing:</strong></h2>\r\n\r\n<p><strong>Get ready for IELTS Writing</strong>&nbsp;bao gồm&nbsp;<strong>4 Review units</strong>&nbsp;được tr&igrave;nh b&agrave;y v&agrave; hướng dẫn chi tiết gi&uacute;p bạn &ocirc;n tập v&agrave; tự kiểm tra để củng cố kỹ năng ch&iacute;nh cho b&agrave;i thi&nbsp;<strong>IELTS</strong>&nbsp;<strong>Writing</strong>. Trong đ&oacute; c&ograve;n c&oacute; b&agrave;i kiểm tra thực h&agrave;nh IELTS Writing v&agrave; c&acirc;u trả lời chi tiết k&egrave;m từ vựng cần thiết.<br />\r\n<br />\r\n<strong>DOWNLOAD PDF:&nbsp;</strong>https://drive.google.com/file/d/1UkyXIxX1IWh7ylDlZyeByuj1HnJRQMgk/view</p>', '11_img_1669528030.jfif', NULL, 1, '2022-11-27 05:47:10', '2022-11-27 05:47:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thacmac`
--

CREATE TABLE `thacmac` (
  `id_thacmac` int(10) UNSIGNED NOT NULL,
  `id_hocvien` int(10) UNSIGNED NOT NULL,
  `noidung` text NOT NULL,
  `traloi` text NOT NULL,
  `ngayhoi` datetime NOT NULL,
  `ngaytraloi` datetime NOT NULL,
  `id_giaovien` int(10) UNSIGNED NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `baithi`
--
ALTER TABLE `baithi`
  ADD PRIMARY KEY (`id_baithi`),
  ADD KEY `baithi_ibfk_1` (`id_dethi`),
  ADD KEY `baithi_ibfk_2` (`id_hocvien`);

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id_cauhoi`);

--
-- Chỉ mục cho bảng `cauhoi_dethi`
--
ALTER TABLE `cauhoi_dethi`
  ADD PRIMARY KEY (`id_dethi`,`id_cauhoi`),
  ADD KEY `cauhoi_dethi_ibfk_1` (`id_cauhoi`);

--
-- Chỉ mục cho bảng `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`id_dethi`);

--
-- Chỉ mục cho bảng `muctieu`
--
ALTER TABLE `muctieu`
  ADD PRIMARY KEY (`id_muctieu`,`id_hocvien`),
  ADD KEY `id_hocvien` (`id_hocvien`);

--
-- Chỉ mục cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`id_nguoidung`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Chỉ mục cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD PRIMARY KEY (`id_tailieu`),
  ADD KEY `id_giaovien` (`id_giaovien`);

--
-- Chỉ mục cho bảng `thacmac`
--
ALTER TABLE `thacmac`
  ADD PRIMARY KEY (`id_thacmac`),
  ADD KEY `id_giaovien` (`id_giaovien`),
  ADD KEY `id_hocvien` (`id_hocvien`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `baithi`
--
ALTER TABLE `baithi`
  MODIFY `id_baithi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id_cauhoi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT cho bảng `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id_dethi` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `muctieu`
--
ALTER TABLE `muctieu`
  MODIFY `id_muctieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `id_nguoidung` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  MODIFY `id_tailieu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `thacmac`
--
ALTER TABLE `thacmac`
  MODIFY `id_thacmac` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baithi`
--
ALTER TABLE `baithi`
  ADD CONSTRAINT `baithi_ibfk_1` FOREIGN KEY (`id_dethi`) REFERENCES `dethi` (`id_dethi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `baithi_ibfk_2` FOREIGN KEY (`id_hocvien`) REFERENCES `nguoidung` (`id_nguoidung`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `cauhoi_dethi`
--
ALTER TABLE `cauhoi_dethi`
  ADD CONSTRAINT `cauhoi_dethi_ibfk_1` FOREIGN KEY (`id_cauhoi`) REFERENCES `cauhoi` (`id_cauhoi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cauhoi_dethi_ibfk_2` FOREIGN KEY (`id_dethi`) REFERENCES `dethi` (`id_dethi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `muctieu`
--
ALTER TABLE `muctieu`
  ADD CONSTRAINT `muctieu_ibfk_1` FOREIGN KEY (`id_hocvien`) REFERENCES `nguoidung` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `tailieu`
--
ALTER TABLE `tailieu`
  ADD CONSTRAINT `tailieu_ibfk_1` FOREIGN KEY (`id_giaovien`) REFERENCES `nguoidung` (`id_nguoidung`);

--
-- Các ràng buộc cho bảng `thacmac`
--
ALTER TABLE `thacmac`
  ADD CONSTRAINT `thacmac_ibfk_1` FOREIGN KEY (`id_giaovien`) REFERENCES `nguoidung` (`id_nguoidung`),
  ADD CONSTRAINT `thacmac_ibfk_2` FOREIGN KEY (`id_hocvien`) REFERENCES `nguoidung` (`id_nguoidung`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
