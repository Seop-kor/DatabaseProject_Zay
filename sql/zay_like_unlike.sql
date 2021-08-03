-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-30 05:31
-- 서버 버전: 10.4.19-MariaDB
-- PHP 버전: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `zay_like_unlike`
--

CREATE TABLE `zay_like_unlike` (
  `ZAY_like_unlike_idx` int(11) NOT NULL COMMENT '고유번호',
  `ZAY_like_unlike_userid` int(11) NOT NULL COMMENT '좋아요 작성자',
  `ZAY_like_unlike_postid` int(11) NOT NULL COMMENT '좋아요 대상 상품 번호',
  `ZAY_like_unlike_type` int(2) NOT NULL COMMENT '좋아요 타입'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `zay_like_unlike`
--

INSERT INTO `zay_like_unlike` (`ZAY_like_unlike_idx`, `ZAY_like_unlike_userid`, `ZAY_like_unlike_postid`, `ZAY_like_unlike_type`) VALUES
(1, 2, 12, 0),
(3, 3, 12, 0),
(4, 4, 12, 0),
(5, 2, 13, 1),
(6, 3, 13, 1),
(8, 2, 14, 0),
(9, 2, 10, 0),
(10, 2, 8, 1),
(11, 2, 7, 1),
(12, 2, 6, 1),
(13, 2, 11, 0),
(14, 2, 9, 1),
(15, 2, 4, 1),
(16, 2, 3, 1),
(17, 2, 5, 0),
(18, 3, 10, 1),
(19, 3, 9, 1),
(20, 3, 11, 1),
(21, 3, 7, 1),
(22, 3, 6, 1),
(23, 3, 8, 1),
(24, 3, 5, 1),
(25, 3, 4, 1),
(26, 3, 3, 1),
(27, 3, 2, 1),
(28, 3, 1, 1),
(29, 4, 14, 0),
(30, 4, 13, 1),
(31, 4, 10, 1),
(32, 4, 9, 1),
(33, 4, 7, 1),
(34, 4, 5, 1),
(35, 4, 4, 1),
(36, 4, 3, 0);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `zay_like_unlike`
--
ALTER TABLE `zay_like_unlike`
  ADD PRIMARY KEY (`ZAY_like_unlike_idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `zay_like_unlike`
--
ALTER TABLE `zay_like_unlike`
  MODIFY `ZAY_like_unlike_idx` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
