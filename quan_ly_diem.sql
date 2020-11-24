-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 01:28 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quan_ly_diem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ma_admin` int(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ma_admin`, `email`, `password`) VALUES
(1, 'adc@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `diem`
--

CREATE TABLE `diem` (
  `ma_sinh_vien` int(10) NOT NULL,
  `ma_mon` int(10) NOT NULL,
  `diem_lan_1` int(10) NOT NULL,
  `diem_lan_2` int(10) DEFAULT NULL,
  `kieu_diem` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diem`
--

INSERT INTO `diem` (`ma_sinh_vien`, `ma_mon`, `diem_lan_1`, `diem_lan_2`, `kieu_diem`) VALUES
(1, 4, 10, 6, 1),
(1, 5, 7, NULL, 0),
(1, 5, 5, NULL, 1),
(2, 4, 3, 7, 1),
(3, 4, 10, NULL, 1),
(4, 4, 8, NULL, 1),
(15, 5, 8, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

CREATE TABLE `khoa` (
  `ma_khoa` int(10) NOT NULL,
  `ten_khoa` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`ma_khoa`, `ten_khoa`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, 'k13');

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `ma_lop` int(10) NOT NULL,
  `ma_khoa` int(10) NOT NULL,
  `ma_nganh` int(10) NOT NULL,
  `ten_lop` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`ma_lop`, `ma_khoa`, `ma_nganh`, `ten_lop`) VALUES
(1, 8, 1, 'BKD01'),
(2, 8, 1, 'BKD02'),
(3, 8, 1, 'BKD03'),
(4, 8, 1, 'BKD04'),
(5, 5, 1, 'bkd05'),
(6, 8, 2, 'BKD06'),
(7, 8, 2, 'BIT01'),
(8, 8, 2, 'BIT02'),
(9, 8, 2, 'BIT03'),
(10, 8, 2, 'BIT04'),
(11, 8, 2, 'BIT05'),
(12, 8, 3, 'BKN01'),
(13, 8, 3, 'BKN02'),
(15, 8, 3, 'BKN03'),
(16, 8, 3, 'BKN04'),
(17, 8, 3, 'BKN05'),
(18, 9, 1, 'BKD01'),
(19, 9, 1, 'BKD02'),
(20, 9, 1, 'BKD03'),
(21, 9, 1, 'BKD04'),
(22, 9, 1, 'BKD05'),
(23, 9, 2, 'BKD06'),
(24, 9, 2, 'BIT01'),
(25, 9, 2, 'BIT02'),
(26, 9, 2, 'BIT03'),
(27, 9, 2, 'BIT04'),
(28, 9, 2, 'BIT05'),
(29, 9, 3, 'BKN01'),
(30, 9, 3, 'BKN02'),
(31, 9, 3, 'BKN03'),
(32, 9, 3, 'BKN04'),
(33, 9, 3, 'BKN05'),
(34, 10, 1, 'BKD01'),
(35, 10, 1, 'BKD02'),
(36, 10, 1, 'BKD03'),
(37, 10, 1, 'BKD04'),
(38, 10, 1, 'BKD05'),
(39, 10, 2, 'BKD06'),
(40, 10, 2, 'BIT01'),
(41, 10, 2, 'BIT02'),
(42, 10, 2, 'BIT03'),
(43, 10, 2, 'BIT04'),
(44, 10, 2, 'BIT05'),
(45, 10, 3, 'BKN01'),
(46, 10, 3, 'BKN02'),
(47, 10, 3, 'BKN03'),
(48, 10, 3, 'BKN04'),
(49, 10, 3, 'BKN05'),
(50, 11, 1, 'BKD01'),
(51, 11, 1, 'BKD02'),
(52, 11, 1, 'BKD03'),
(53, 11, 1, 'BKD04'),
(54, 11, 1, 'BKD05'),
(55, 11, 2, 'BKD06'),
(56, 11, 2, 'BIT01'),
(57, 11, 2, 'BIT02'),
(58, 11, 2, 'BIT03'),
(59, 11, 2, 'BIT04'),
(60, 11, 2, 'BIT05'),
(61, 11, 3, 'BKN01'),
(62, 11, 3, 'BKN02'),
(63, 11, 3, 'BKN03'),
(64, 11, 3, 'BKN04');

-- --------------------------------------------------------

--
-- Table structure for table `mon`
--

CREATE TABLE `mon` (
  `ma_mon` int(10) NOT NULL,
  `ma_nganh` int(10) NOT NULL,
  `ten_mon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mon`
--

INSERT INTO `mon` (`ma_mon`, `ma_nganh`, `ten_mon`) VALUES
(4, 1, 'Toán Cao Cấp'),
(5, 1, 'Tin học cơ bản'),
(6, 1, 'Cấu trúc máy tính'),
(7, 1, 'Java-OOP'),
(8, 1, 'AJP'),
(10, 1, 'PHP_1'),
(12, 1, 'PHP_2'),
(13, 1, 'SQL_1'),
(14, 1, 'SQL_2'),
(15, 2, 'Toán Cao Cấp'),
(16, 2, 'Tin học cơ bản'),
(17, 2, 'Cấu trúc máy tính'),
(18, 2, 'Java-OOP'),
(19, 2, 'AJP'),
(20, 2, 'PHP_1'),
(21, 2, 'PHP_2'),
(22, 2, 'SQL_1'),
(23, 2, 'SQL_2'),
(24, 3, 'Toán Cao Cấp'),
(25, 3, 'Tin học cơ bản'),
(26, 3, 'Cấu trúc máy tính'),
(27, 3, 'Java-OOP'),
(28, 3, 'AJP'),
(29, 3, 'PHP_1'),
(30, 3, 'PHP_2'),
(31, 3, 'SQL_1'),
(32, 3, 'SQL_2'),
(33, 1, 'Khác'),
(34, 2, 'Khác'),
(35, 3, 'Khác');

-- --------------------------------------------------------

--
-- Table structure for table `nganh`
--

CREATE TABLE `nganh` (
  `ma_nganh` int(10) NOT NULL,
  `ten_nganh` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nganh`
--

INSERT INTO `nganh` (`ma_nganh`, `ten_nganh`) VALUES
(1, 'Lập trình'),
(2, 'Quản trị mạng'),
(3, 'Quản trị kinh doanh');

-- --------------------------------------------------------

--
-- Table structure for table `sinh_vien`
--

CREATE TABLE `sinh_vien` (
  `ma_sinh_vien` int(10) NOT NULL,
  `ten_sinh_vien` varchar(200) NOT NULL,
  `email` text DEFAULT NULL,
  `ma_lop` int(10) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `sdt` int(10) NOT NULL,
  `ngay_sinh` date NOT NULL,
  `gioi_tinh` tinyint(2) NOT NULL COMMENT '1- Nam, 0- Nữ',
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinh_vien`
--

INSERT INTO `sinh_vien` (`ma_sinh_vien`, `ten_sinh_vien`, `email`, `ma_lop`, `dia_chi`, `sdt`, `ngay_sinh`, `gioi_tinh`, `password`) VALUES
(1, 'Mai Đình Trung', 'cbannister0@epa.gov', 1, 'vn', 744, '1995-12-01', 1, '123456'),
(2, 'Trần Ngọc Toàn', 'lscarfe1@paypal.com', 1, 'vn', 744, '1990-01-01', 1, '123456'),
(3, 'Lô Hải Đăng', 'ggerge2@mapquest.com', 1, '', 744, '1999-07-17', 1, '123456'),
(4, 'Nguyễn Văn Trường', 'crenn3@ted.com', 1, '', 744, '1995-01-03', 1, '123456'),
(5, 'Doãn Hải Phong', 'kpretswell4@i2i.jp', 1, '', 744, '1994-07-12', 1, '123456'),
(6, 'Lê Thị Thu Hiền', 'hteas5@nationalgeographic.com', 1, '', 744, '2001-06-06', 0, '123456'),
(7, 'Vũ Nhật Vi', 'stollerfield6@gmpg.org', 1, '', 744, '1990-08-11', 0, '123456'),
(15, 'Lê Quang Khải', 'ckorbae@rambler.ru', 2, '', 744, '1999-07-23', 1, '123456'),
(16, 'Bùi Như Thuần', 'cinnsf@moonfruit.com', 2, '', 744, '1995-10-30', 1, '123456'),
(17, 'Phạm Công Huy', 'ytebbeg@accuweather.com', 2, '', 744, '2000-10-11', 1, '123456'),
(18, 'Hoàng Đình Thành', 'jcastellih@friendfeed.com', 2, '', 744, '1998-07-12', 1, '123456'),
(19, 'Phạm Sỹ Hùng', 'cclingoei@npr.org', 2, '', 744, '1996-03-12', 1, '123456'),
(20, 'Vũ Quang Anh', 'evasyunichevj@oracle.com', 2, '', 744, '1996-05-18', 1, '123456'),
(54, 'Đặng Văn Sơn', 'bfrunks1d@ycombinator.com', 3, '', 744, '1996-06-07', 1, ''),
(55, 'Đinh Văn Đức', 'gbedwell1e@jiathis.com', 3, '', 744, '2000-09-12', 1, ''),
(56, 'Trần Mạnh Nam', 'jdecourcey1f@photobucket.com', 3, '', 744, '1995-04-29', 1, ''),
(57, 'Nguyễn Mạnh Hà', 'dhalkyard1g@angelfire.com', 3, '', 744, '1991-02-13', 1, ''),
(58, 'Vũ Minh Phương', 'ecressor1h@samsung.com', 3, '', 744, '1995-05-15', 0, ''),
(59, 'Lường Ngọc Quang', 'fmcglew1i@ezinearticles.com', 3, '', 744, '1995-03-27', 1, ''),
(60, 'Đỗ Nhật Anh', 'jshearstone1j@china.com.cn', 3, '', 744, '1994-11-19', 0, ''),
(61, 'Trương Thị Diệu ', 'ibaudichon1k@sfgate.com', 3, '', 744, '1991-09-11', 0, ''),
(62, 'Trần Đình Hoàn', 'psabater1l@abc.net.au', 3, '', 744, '1994-11-03', 1, ''),
(63, 'Đào Việt Tùng', 'vchippindale1m@feedburner.com', 3, '', 744, '1994-11-02', 1, ''),
(64, 'Đặng Thị Lan Anh', 'kbrideaux1n@vimeo.com', 4, '', 744, '1997-04-06', 0, ''),
(65, 'Đặng Huy Hoàng', 'liwanowicz1o@army.mil', 4, '', 744, '1993-09-03', 1, ''),
(66, 'Lê Tuyết Mai', 'amanie1p@dion.ne.jp', 4, '', 744, '1994-02-17', 0, ''),
(67, 'Đặng Phương Nam', 'gdanielsohn1q@alibaba.com', 4, '', 744, '2000-01-04', 1, ''),
(68, 'Nguyễn Đăng Huy', 'aizzett1r@reddit.com', 4, '', 744, '1993-12-23', 1, ''),
(69, 'Đinh Quang Dũng', 'mdelamere1s@eventbrite.com', 4, '', 744, '1992-08-30', 1, ''),
(70, 'Đặng Nhật Tiến', 'jmcaster1t@ed.gov', 4, '', 744, '1994-08-24', 1, ''),
(71, 'Ngô Thu Trang', 'emcgann1u@hud.gov', 4, '', 744, '2000-02-25', 0, ''),
(92, 'Nguyễn Văn Anh', '2@gmail.com', 1, 'Long An', 359982003, '1999-11-05', 0, '123456'),
(93, 'Nguyễn dinh Bình', '2faf@gmail.com', 1, 'Long An', 359982004, '1999-11-06', 0, '123456'),
(94, 'Nguyễn Nam Anh Linh', '3adsd@gmail.com', 1, 'Long An', 359982005, '1999-11-07', 0, '123456'),
(95, 'Nguyễn Văn Anh', '2@gmail.com', 1, 'Long An', 359982003, '1999-11-05', 0, '123456'),
(96, 'Nguyễn dinh Bình', '2faf@gmail.com', 1, 'Long An', 359982004, '1999-11-06', 0, '123456'),
(97, 'Nguyễn Nam Anh Linh', '3adsd@gmail.com', 1, 'Long An', 359982005, '1999-11-07', 0, '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ma_admin`);

--
-- Indexes for table `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`ma_sinh_vien`,`ma_mon`,`kieu_diem`),
  ADD KEY `ma_mon` (`ma_mon`);

--
-- Indexes for table `khoa`
--
ALTER TABLE `khoa`
  ADD PRIMARY KEY (`ma_khoa`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`ma_lop`),
  ADD KEY `ma_khoa` (`ma_khoa`),
  ADD KEY `ma_nganh` (`ma_nganh`);

--
-- Indexes for table `mon`
--
ALTER TABLE `mon`
  ADD PRIMARY KEY (`ma_mon`),
  ADD KEY `ma_nganh` (`ma_nganh`);

--
-- Indexes for table `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`ma_nganh`);

--
-- Indexes for table `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD PRIMARY KEY (`ma_sinh_vien`),
  ADD KEY `ma_lop` (`ma_lop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ma_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khoa`
--
ALTER TABLE `khoa`
  MODIFY `ma_khoa` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lop`
--
ALTER TABLE `lop`
  MODIFY `ma_lop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `mon`
--
ALTER TABLE `mon`
  MODIFY `ma_mon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `nganh`
--
ALTER TABLE `nganh`
  MODIFY `ma_nganh` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sinh_vien`
--
ALTER TABLE `sinh_vien`
  MODIFY `ma_sinh_vien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`ma_mon`) REFERENCES `mon` (`ma_mon`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`ma_sinh_vien`) REFERENCES `sinh_vien` (`ma_sinh_vien`);

--
-- Constraints for table `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`ma_khoa`) REFERENCES `khoa` (`ma_khoa`),
  ADD CONSTRAINT `lop_ibfk_2` FOREIGN KEY (`ma_nganh`) REFERENCES `nganh` (`ma_nganh`);

--
-- Constraints for table `mon`
--
ALTER TABLE `mon`
  ADD CONSTRAINT `mon_ibfk_1` FOREIGN KEY (`ma_nganh`) REFERENCES `nganh` (`ma_nganh`);

--
-- Constraints for table `sinh_vien`
--
ALTER TABLE `sinh_vien`
  ADD CONSTRAINT `sinh_vien_ibfk_1` FOREIGN KEY (`ma_lop`) REFERENCES `lop` (`ma_lop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
