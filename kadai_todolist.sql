-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2020 年 6 月 25 日 16:34
-- サーバのバージョン： 10.4.11-MariaDB
-- PHP のバージョン: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gsacf_d06_19`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_todolist`
--

CREATE TABLE `kadai_todolist` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `done` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `kadai_todolist`
--

INSERT INTO `kadai_todolist` (`id`, `name`, `done`) VALUES
(1, '下田浩之', 1),
(2, '下田浩之', 1),
(3, 'noname', 1),
(4, '下田浩之', 1),
(5, '', 1),
(6, '', 1),
(7, '', 1),
(8, '', 1),
(9, '', 1),
(10, '', 1),
(11, '', 1),
(12, '', 1),
(13, '下田浩之', 1),
(14, '', 1),
(15, '', 1),
(16, '', 1),
(17, '', 1),
(18, '下田浩之', 1),
(19, '下田浩之', 1),
(20, '', 1),
(21, '', 1),
(22, '', 1),
(23, '', 1),
(24, '', 1),
(25, 'noname', 1),
(26, '', 1),
(27, '勉強', 1),
(28, '下田浩之', 1),
(29, '勉強', 1),
(30, '勉強', 1),
(31, '', 1),
(32, '', 1),
(33, '', 1),
(34, '', 1),
(35, '', 1),
(36, '', 1),
(37, '', 1),
(38, '', 1),
(39, '', 1),
(40, '', 1),
(41, '勉強', 1),
(42, '', 1),
(43, '', 1),
(44, '', 1),
(45, '', 1),
(46, 'q.', 1),
(47, '下田浩之', 1),
(48, '', 1),
(49, '', 1),
(50, '', 1),
(51, '', 1),
(52, '', 1),
(53, '', 1),
(54, '', 1),
(55, '', 1),
(56, '', 1),
(57, '', 1),
(58, '', 1),
(59, '', 1),
(60, '', 1),
(61, '', 1),
(62, '', 1),
(63, '下田浩之', 1),
(64, '', 1),
(65, '', 1),
(66, '', 1),
(67, '', 1),
(68, '', 1),
(69, '', 1),
(70, '', 1),
(71, '勉強', 1),
(72, '下田浩之', 1),
(73, '', 1),
(74, '', 1),
(75, '', 1),
(76, '下田浩之', 1),
(77, '勉強', 1),
(78, '', 1),
(79, '', 1),
(80, '', 1),
(81, '', 1),
(82, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(83, '', 1),
(84, '', 1),
(85, '', 1),
(86, '', 1),
(87, '', 1),
(88, '', 1),
(89, '', 1),
(90, '', 1),
(91, '', 1),
(92, '', 1),
(93, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(94, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(95, '', 1),
(96, '', 1),
(97, '', 1),
(98, '', 1),
(99, '', 1),
(100, '', 1),
(101, '', 1),
(102, '', 1),
(103, '', 1),
(104, '', 1),
(105, '', 1),
(106, '', 1),
(107, '', 1),
(108, '', 1),
(109, '', 1),
(110, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(111, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(112, '', 1),
(113, '', 1),
(114, '', 1),
(115, '', 1),
(116, '', 1),
(117, '', 1),
(118, '', 1),
(119, '勉強', 1),
(120, '', 1),
(121, 'サッカーサッカーサッカー', 1),
(122, '', 1),
(123, 'ああああああああああああああああああああああ', 1),
(124, '', 1),
(125, '', 1),
(126, '', 1),
(127, '', 1),
(128, '', 1),
(129, '', 1),
(130, '', 1),
(131, '勉強', 1),
(132, '勉強', 1),
(133, '', 1),
(134, '', 1),
(135, '勉強', 1),
(136, '', 1),
(137, '', 1),
(138, '', 1),
(139, '勉強', 1),
(140, '勉強', 1),
(141, '勉強', 1),
(142, '', 1),
(143, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(144, '', 1),
(145, '', 1),
(146, '', 1),
(147, '', 1),
(148, '', 1),
(149, 'ｆ；ｌｆｌぱｆｌｐ', 1),
(150, '勉強', 1),
(151, '', 1),
(152, '', 1),
(153, '', 1),
(154, '', 1),
(155, '勉強', 1),
(156, '', 1),
(157, '', 1),
(158, '', 1),
(159, '', 1),
(160, '', 1),
(161, '', 1),
(162, '勉強', 1),
(163, '', 1),
(164, '勉強', 1),
(165, '勉強', 1),
(166, '', 1),
(167, '', 1),
(168, '', 1),
(169, '', 1),
(170, '', 1),
(171, '', 1),
(172, '', 1),
(173, '', 1),
(174, '', 1),
(175, '', 1),
(176, '', 1),
(177, '', 1),
(178, '', 1),
(179, '', 1),
(180, '', 1),
(181, '', 1),
(182, '', 1),
(183, '', 1),
(184, '', 1),
(185, '', 1),
(186, '', 1),
(187, '', 1),
(188, '', 1),
(189, '', 1),
(190, '', 1),
(191, '勉強', 1),
(192, '勉強', 1),
(193, '勉強', 1),
(194, '勉強', 1),
(195, '', 1),
(196, '', 1),
(197, '', 1),
(198, '', 1),
(199, '', 1),
(200, '勉強', 1),
(201, '勉強', 1),
(202, '勉強', 1),
(203, '', 1),
(204, '', 1),
(205, '', 1),
(206, '', 1),
(207, '', 1),
(208, '', 1),
(209, '', 1),
(210, '', 1),
(211, '', 1),
(212, '', 1),
(213, '', 1),
(214, '', 1),
(215, '', 1),
(216, 'kmk', 1),
(217, '勉強', 1),
(218, 'サッカー', 1),
(219, 'adaada', 1),
(220, '', 1),
(221, '', 1),
(222, '', 1),
(223, 'llprlprlplqprqplplqrlprpq', 1),
(224, 'fkaofkokoaa', 1),
(225, '', 1),
(226, '', 1),
(227, '勉強', 1),
(228, '', 1),
(229, '', 1),
(230, '', 1),
(231, '', 1),
(232, '', 1),
(233, '', 1),
(234, '', 1),
(235, '', 1),
(236, 'f', 1),
(237, '', 1),
(238, '', 1),
(239, '', 1),
(240, '', 1),
(241, '', 1),
(242, '', 1),
(243, '', 1),
(244, '', 1),
(245, '', 1),
(246, '', 1),
(247, '', 1),
(248, '', 1),
(249, '', 1),
(250, '', 1),
(251, '', 1),
(252, '', 1),
(253, '', 1),
(254, 'faaa', 1),
(255, '', 1),
(256, '', 1);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_todolist`
--
ALTER TABLE `kadai_todolist`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `kadai_todolist`
--
ALTER TABLE `kadai_todolist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=257;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;