-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 07:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `Name`, `Address`, `Email`) VALUES
('AnhMinh', 'AnhMinh123@', 'Nguyen Anh Minh', 'Ha Noi', 'AnhMinh123@gmail.com'),
('BaoYen', 'BaoYen123@', 'Vu Thi Bao Yen', 'TP.HCM', 'baoyen123@gmail.com'),
('GiaMinh', 'GiaMinh123@', 'Tran Gia Minh', 'Hai Phong', 'GiaMinh123@gmail.com'),
('ThaoVy', 'ThaoVy123@', 'Bui Thao Vy', 'Nha Trang', 'ThaoVy123@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chucvu`
--

CREATE TABLE `chucvu` (
  `MaCV` char(10) NOT NULL,
  `TenCV` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chucvu`
--

INSERT INTO `chucvu` (`MaCV`, `TenCV`) VALUES
('CK01', 'Trưởng khoa Cơ Khí'),
('GVCK', 'Giảng viên Cơ Khí'),
('GVCNTT', 'Giảng viên khoa CNTT'),
('GVQT', 'Giảng viên Quản trị '),
('GVTC', 'Giảng Viên Tài chính'),
('HT01', 'Hiệu trưởng'),
('PHT01', 'Phó Hiệu trưởng'),
('PTK01', 'Phó Khoa CNTT');

-- --------------------------------------------------------

--
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `MaHD` char(10) NOT NULL,
  `MaNV` char(10) NOT NULL,
  `LoaiHD` varchar(30) NOT NULL,
  `TuNgay` date NOT NULL,
  `DenNgay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`MaHD`, `MaNV`, `LoaiHD`, `TuNgay`, `DenNgay`) VALUES
('HD01', 'NV01', 'Hợp đồng lao động 4 năm', '2020-08-14', '2024-08-14'),
('HD02', 'NV02', 'Hợp đồng thử việc', '2022-09-01', '2022-12-01');

-- --------------------------------------------------------

--
-- Table structure for table `hoso`
--

CREATE TABLE `hoso` (
  `MaNV` char(10) NOT NULL,
  `MaTDHV` char(10) NOT NULL,
  `MaCV` char(10) NOT NULL,
  `ChungChiTA` varchar(100) NOT NULL,
  `ThoiGianLamViec` varchar(100) NOT NULL,
  `TinhTrang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoso`
--

INSERT INTO `hoso` (`MaNV`, `MaTDHV`, `MaCV`, `ChungChiTA`, `ThoiGianLamViec`, `TinhTrang`) VALUES
('NV01', 'TS01', 'HT01', 'Chứng chỉ Ielts 8.0', '4 năm', 'Đang làm việc'),
('NV02', 'TS02', 'PHT01', 'ielts 7.5', '3 tháng', 'Đang làm việc'),
('NV03', 'TS01', 'GVTC', 'Chứng chỉ Ielts 7.5', '1 năm', 'Đang làm việc'),
('NV04', 'TS02', 'GVQT', 'Chứng chỉ Ielts 8.0', '2 năm', 'Đang làm việc'),
('NV05', 'TS01', 'GVTC', 'Chứng chỉ Toeic 700', '1 năm', 'Đang làm việc'),
('NV06', 'ThS02', 'GVCK', 'Chứng chỉ C1 của Cambrigde', '2 năm', 'Đang làm việc'),
('NV07', 'ThS02', 'CK01', 'Chứng chỉ Ielts 8.0', '2 năm', 'Đang làm việc');

-- --------------------------------------------------------

--
-- Table structure for table `luong`
--

CREATE TABLE `luong` (
  `BacLuong` int(11) NOT NULL,
  `LCB` float NOT NULL,
  `HeSoLuong` float NOT NULL,
  `HeSoPhuCap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `luong`
--

INSERT INTO `luong` (`BacLuong`, `LCB`, `HeSoLuong`, `HeSoPhuCap`) VALUES
(1, 10000000, 2.32, 0.2),
(2, 15000000, 2.56, 0.5),
(3, 19000000, 3, 0.7),
(4, 20000000, 3.24, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `Manv` char(10) NOT NULL,
  `Hoten` varchar(30) NOT NULL,
  `NgaySinh` date NOT NULL,
  `QueQuan` varchar(20) NOT NULL,
  `GioiTinh` varchar(3) NOT NULL,
  `DanToc` varchar(10) NOT NULL,
  `SDT` char(11) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `MaPH` char(10) NOT NULL,
  `MaCV` char(10) NOT NULL,
  `Matdhv` char(10) NOT NULL,
  `BacLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`Manv`, `Hoten`, `NgaySinh`, `QueQuan`, `GioiTinh`, `DanToc`, `SDT`, `Image`, `MaPH`, `MaCV`, `Matdhv`, `BacLuong`) VALUES
('NV01', 'Nguyễn Vũ An', '1980-09-28', 'Hà Nội', 'Nam', 'Kinh', '03789469', 'hinh1.jpg', 'PH01', 'HT01', 'TS01', 4),
('NV02', 'Trần Phúc Hưng', '1985-12-01', 'TP.HCM', 'Nam', 'Kinh', '03975979', 'hinh2.jpg', 'PH02', 'PHT01', 'TS02', 3),
('NV03', 'Trương Mỹ Nga', '1990-11-18', 'TPHCM', 'Nữ', 'Kinh', '09876543', '3b19fa45c93aed82380e99a288e22869.png', 'PH04', 'GVTC', 'TS01', 3),
('NV04', 'Phạm Thị Thanh Tìn', '1984-06-12', 'Quảng Bình', 'Nữ', 'Kinh', '0987654', '', 'PH04', 'GVQT', 'TS02', 2),
('NV05', 'Vũ Thị Bảo Yến', '1993-12-01', 'Thái Bình', 'Nữ', 'Kinh', '09876543', '5e8231b7e07157012666b5f6_5e82294be8b9ec8550297d21_5e82037423153c30d11487c2_robot%2520h%25C3%25BAt%2520b%25E1%25BB%25A5i%2520lau%2520nh%25C3%25A0-min.png', 'PH06', 'GVTC', 'TS01', 3),
('NV06', 'Nguyễn Xuân Truyền', '1985-06-12', 'Đà Nẵng', 'Nam', 'Kinh', '092456789', '', 'PH03', 'GVCK', 'ThS02', 2),
('NV07', 'Nguyễn Văn Lễ', '1986-11-12', 'TPHCM', 'Nam', 'Kinh', '09876543', '4_moley_kbug.jpg', 'PH03', 'CK01', 'ThS02', 2);

-- --------------------------------------------------------

--
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `MaPH` char(10) NOT NULL,
  `TenPH` varchar(30) NOT NULL,
  `DiaChi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`MaPH`, `TenPH`, `DiaChi`) VALUES
('PH01', 'Phòng Hiệu trưởng', 'Khu A Cơ sở Lê Trọng Tấn'),
('PH02', 'Phòng Phó Hiệu trưởng', 'Khu A Cơ sở Lê Trọng Tấn'),
('PH03', 'Khoa Cơ Khí', 'TP.HCM'),
('PH04', 'Khoa Quản Trị Kinh Doanh', 'TP.HCM'),
('PH05', 'Khoa Công nghệ thông tin', 'TP.HCM'),
('PH06', 'Khoa Tài Chính Kế Toán', 'TP.HCM');

-- --------------------------------------------------------

--
-- Table structure for table `trinhdohv`
--

CREATE TABLE `trinhdohv` (
  `Matdhv` char(10) NOT NULL,
  `TenTD` varchar(20) NOT NULL,
  `ChuyenNganh` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trinhdohv`
--

INSERT INTO `trinhdohv` (`Matdhv`, `TenTD`, `ChuyenNganh`) VALUES
('ThS01', 'Thạc Sĩ CNTT', 'Công nghệ thông tin'),
('ThS02', 'Thạc Sĩ Cơ Khí', 'Công nghệ Cơ khí'),
('TS01', 'Tiến Sĩ Tài Chính', 'Tài Chính Kế Toán'),
('TS02', 'Tiến Sĩ QTKD', 'Quản trị kinh doanh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(100) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Pass`, `Name`) VALUES
('Anhminh123@gmail.com', 'Anhminh123@', 'Nguyen Anh Minh'),
('anng@gmail.com', '345', 'Nguyen Van An'),
('baoyen123@gmail.com', 'baoyen123@', 'Vu Thi Bao Yen'),
('GiaMinh123@gmail.com', 'GiaMinh123@', 'Tran Gia Minh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `chucvu`
--
ALTER TABLE `chucvu`
  ADD PRIMARY KEY (`MaCV`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`MaHD`,`MaNV`),
  ADD KEY `PK_HOPDONG` (`MaNV`);

--
-- Indexes for table `hoso`
--
ALTER TABLE `hoso`
  ADD PRIMARY KEY (`MaNV`),
  ADD KEY `PK_HoSoNV` (`MaNV`),
  ADD KEY `PK_HoSoCV` (`MaCV`),
  ADD KEY `PK_HoSoTDHV` (`MaTDHV`);

--
-- Indexes for table `luong`
--
ALTER TABLE `luong`
  ADD PRIMARY KEY (`BacLuong`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`Manv`),
  ADD KEY `PK_PHONG` (`MaPH`),
  ADD KEY `PK_TDHV` (`Matdhv`),
  ADD KEY `PK_LUONG` (`BacLuong`),
  ADD KEY `PK_CHUCVU` (`MaCV`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`MaPH`);

--
-- Indexes for table `trinhdohv`
--
ALTER TABLE `trinhdohv`
  ADD PRIMARY KEY (`Matdhv`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD CONSTRAINT `PK_HOPDONG` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`Manv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoso`
--
ALTER TABLE `hoso`
  ADD CONSTRAINT `PK_HoSoCV` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PK_HoSoNV` FOREIGN KEY (`MaNV`) REFERENCES `nhanvien` (`Manv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PK_HoSoTDHV` FOREIGN KEY (`MaTDHV`) REFERENCES `trinhdohv` (`Matdhv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `PK_CHUCVU` FOREIGN KEY (`MaCV`) REFERENCES `chucvu` (`MaCV`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PK_LUONG` FOREIGN KEY (`BacLuong`) REFERENCES `luong` (`BacLuong`),
  ADD CONSTRAINT `PK_PHONG` FOREIGN KEY (`MaPH`) REFERENCES `phongban` (`MaPH`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `PK_TDHV` FOREIGN KEY (`Matdhv`) REFERENCES `trinhdohv` (`Matdhv`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
