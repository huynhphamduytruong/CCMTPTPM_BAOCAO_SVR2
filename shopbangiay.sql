-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 12:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopbangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `ctdh`
--

CREATE TABLE `ctdh` (
  `IDCTHD` int(11) NOT NULL,
  `IDCore` int(11) NOT NULL,
  `IDSp` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `NoiDung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `IDDon` int(11) NOT NULL,
  `IDCore` varchar(255) NOT NULL,
  `NgayDat` varchar(255) NOT NULL,
  `TinhTrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`IDDon`, `IDCore`, `NgayDat`, `TinhTrang`) VALUES
(1, '112233', '12/4/2021', 0);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `IDKH` int(11) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `SDT` int(11) NOT NULL,
  `MatKhau` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`IDKH`, `Ten`, `DiaChi`, `Email`, `SDT`, `MatKhau`) VALUES
(2, 'cà tững 2 3', 'nguyễn khuyễn sg', '456@gmail.com', 11345, '1cc39ffd758234422e1f75beadfc5fb2'),
(3, 'Trường', '113', 'truong@gmail.com', 113, '202cb962ac59075b964b07152d234b70'),
(4, 'Trường', 'adsdasdas', 'truong2@gmail.com', 113, '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Trường', 'sad', 'truong2@gmail.com', 1114, '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Trường', 'adsdasdas', 'truong@gmail.com', 113, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `IDSp` int(11) NOT NULL,
  `IDLoai` int(11) NOT NULL,
  `TenSP` varchar(255) NOT NULL,
  `HinhAnh` varchar(255) NOT NULL,
  `Gia` varchar(255) NOT NULL,
  `SoLuong` int(255) NOT NULL,
  `MoTa` varchar(255) NOT NULL,
  `KhuyenMai` varchar(255) NOT NULL,
  `SanPhamHot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`IDSp`, `IDLoai`, `TenSP`, `HinhAnh`, `Gia`, `SoLuong`, `MoTa`, `KhuyenMai`, `SanPhamHot`) VALUES
(7, 3, '  GUCCI Giày Gucci Chunky Rhyton', 'gucci1.jpg', '2800000', 0, 'Giày hàng hiệu siêu cấp Gucci nói không với hàng kém chất lượng', 'sale 50%', 1),
(8, 6, 'WAVE INTENSE TOUR 5 AC', 'images.jpg', '3000000', 0, 'Đôi giày quý phái sang chảnh', '10%', 1),
(9, 10, 'Converse 1970 cổ thấp', 'giay.jpg', '450000', 0, 'Giày cổ thấp ', '5%', 1),
(11, 4, 'Giày Thể Thao XSPORT Ni.ke Jordan 1 F1', 'Jodan1.jpg', '300000', 0, 'Phối màu tinh tế và đẹp mắt.', '10%', 1),
(15, 4, 'Jordan 1 SpiderMan Pk God Factory', 'anh2.jpg', '3800000', 0, 'Spiderman là một siêu anh hứng được mô tả dưới cây bút của 2 nhà văn stan lee và steve ditko. Được ra mắt đầu tiên vào năm 1960 và được nhiều bạn trẻ trên toàn thế giới yêu thích. Vì vậy nike đã cho ra mắt đôi giày gắn liền với nhận vật siêu anh hùng Nike', '20%', 1),
(16, 14, 'ZX 2K BOOST', 'nike3.jpg', '2700000', 0, 'Giày đen tuyền úa đẹp mắt ', 'sale 50%', 1),
(17, 14, 'ZX 2K BOOST W', 'nike2.jpg', '1700000', 0, 'Phiên bản mới nhất của nike, thuộc dòng sang chảnh chất lượng giá cả phải chăng', '30%', 0),
(18, 14, 'ZX 2K BOOST', 'nike1.jpg', '2900000', 0, 'Phiên bản mới nhất của nike, thuộc dòng sang chảnh chất lượng giá cả phải chăng', 'sale 50%', 1),
(19, 3, 'Gucci Mens Ace', 'gucii2.jpg', '14000000', 0, 'Thiết kế tối giản, tinh tế, tạo thành điểm nhấn cho đôi chân của bạn.', '10%', 1),
(20, 11, 'Sneaker Unisex Vans Ola Skool 36 DX', 'vans.jpg', '2100000', 0, 'Dòng sản phẩm kinh điển của Vans mang đậm chất đường phố.\r\nChất liệu vải kết hợp da lộn bền đẹp.\r\nPhối đồ dễ dàng trong mọi hoàn cảnh.', '5%', 1),
(21, 9, 'Balenciaga Triple S Black White Red', 'balen.jpg', '21000000', 2, 'Balenciaga Triple S Black White Red chính hãng 100% có sẵn tại Authentic Shoes. Giao hàng miễn phí trong 1 ngày. Cam kết đền tiền X5 nếu phát hiện Fake. Đổi trả miễn phí size. FREE vệ sinh giày trọn đời. MUA NGAY!', '5%', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ID` int(11) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Ten` varchar(255) NOT NULL,
  `MatKhau` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ID`, `Email`, `Ten`, `MatKhau`, `DiaChi`) VALUES
(1, 'truong@gmail.com', 'Trần Trường', '202cb962ac59075b964b07152d234b70', 'quận 9 '),
(2, 'taitu@gmail.com', 'Lê Hồng Ngọc', 'd9b1d7db4cd6e70935368a1efb10e377', 'còn lâu mới nói'),
(3, 'abc@gmail.com', 'Tú 2', '14e1b600b1fd579f47433b88e8d85291', 'ở đâu đó'),
(5, 'truong@gmail.com', 'Phong 2', 'd9b1d7db4cd6e70935368a1efb10e377', 'thủ đức'),
(6, 'phattran@gmail.com', 'Tấn phát', '70873e8580c9900986939611618d7b1e', '385 quận 92');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `IDLoai` int(11) NOT NULL,
  `TenLoai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`IDLoai`, `TenLoai`) VALUES
(1, 'Jelly'),
(3, 'gucci'),
(4, 'Jordan'),
(5, 'New Balance'),
(6, 'Mizuno'),
(9, 'Balenciaga'),
(10, 'Converse'),
(11, 'Vans'),
(12, 'Puma'),
(13, 'Adidas'),
(14, 'Nike');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ctdh`
--
ALTER TABLE `ctdh`
  ADD PRIMARY KEY (`IDCTHD`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`IDDon`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`IDKH`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`IDSp`),
  ADD KEY `IDLoai` (`IDLoai`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`IDLoai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ctdh`
--
ALTER TABLE `ctdh`
  MODIFY `IDCTHD` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `IDDon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `IDKH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `IDSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `IDLoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`IDLoai`) REFERENCES `theloai` (`IDLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
