-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 11, 2021 lúc 10:25 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl_category`
--

CREATE TABLE `btl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `btl_category`
--

INSERT INTO `btl_category` (`category_id`, `category_name`) VALUES
(1, 'Camera'),
(2, 'Computer'),
(3, 'Device');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl_product`
--

CREATE TABLE `btl_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `product_active` int(11) NOT NULL,
  `product_amount` int(11) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_caption` varchar(255) NOT NULL,
  `product_type` varchar(200) NOT NULL,
  `product_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `btl_product`
--

INSERT INTO `btl_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_active`, `product_amount`, `product_image`, `product_caption`, `product_type`, `product_detail`) VALUES
(1, 2, 'Laptop Asus Gaming ROG Strix G533QM-HQ074T\r\n', '1600', 1, 5, 'Laptop-Asus-ROG-G533QM-HQ074T.jpg', 'I7-10870H/8GB RAM/512GB SSD/15.6 FHD 144hz/GTX 1650Ti 4GB/Win10/Black', 'asus', 'CPU: AMD Ryzen 9 5900HX\r\nRAM: 16GB\r\nHard Drive: 1TB SSD\r\nVGA: NVIDIA RTX 3060 6GB\r\nScreen:15.6 inch FHD 1650hz'),
(2, 2, 'Apple Macbook Air 13 (MGN63SA/A)\r\n', '1100', 1, 4, 'macbook-air13.png', 'Apple M1/8GB RAM/256GB SSD/13.3 inch IPS/Mac OS/Gray (NEW)', 'macbook', 'CPU: Apple M1\r\nRAM: 8GB\r\nHard Drive: 256GB SSD\r\nVGA: Onboard\r\nScreen:13.3 inch Retina IPS'),
(3, 1, 'Camera Sony Alpha ILCE-7RM3/ A7RM3 Body\r\n', '2100', 1, 2, 'sony a7.jpg', 'ISO 100-32000/Exmor CMOS 42.4 megapixels/Speed/30-1/8000/LCD 3.0inch/657g/Black', 'sony', ''),
(4, 1, 'Camera Canon EOS-80D-kit EF-S18-135mm IS USM\r\n', '1000', 1, 4, 'camera-cannon-efm15-45.png', 'ISO 100-12800/CMOS 24.2 megapixels/LCD 3.0inch/Speed 30- 1/8000s/650g/Black', 'cannon', ''),
(5, 2, 'Laptop Acer Swift 3X SF314-510G-57MR', '900', 1, 6, 'acer-swift 3xsf314.png', 'NX.A10SV.004 I5-1135G7/8GB RAM/512GB SSD/14.0 FHD/Win10/Yellow (2020)', 'acer', 'CPU: Intel Core i5 1135G7\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: Onboard\r\nScreen: 14 inch FHD'),
(6, 1, 'Camera Fujifilm X - T4 Kit XF16-80MM(Black)\r\n\r\n', '1600', 1, 4, 'cannon-kit-rf24.jpg', 'Sensor: X-Trans C-M-O-S 4 26.1MP. Maximum resolution: 6240 x 4160.Aspect ratio: 1:1 ', 'fujifilm', ''),
(7, 2, 'Laptop Asus ZenBook UX435EA-A5036T\r\n\r\n', '1600', 2, 5, 'asus-zenbook.jpg', 'Get more done, with less effort. Immersive Four Sides Display. Smart touchpad, evolved. More likely, All-round great performance. ZenBook 14\'s sound system is certified by audio experts to ensure crystal-clear, immersive sound', 'asus', ''),
(8, 2, 'Laptop Acer Gaming Predator Helios 300 PH315-53-70U6', '2000', 2, 1, 'acer-helios300.png', 'Laptop Acer is weight only 2.2kg, users can easily carry it anywhere without being too heavy.The laptop is equipped with a chiclet keyboard .A lot of necessary connection ports so that gamers can fight', 'acer', 'CPU: Intel Core i7 10750H RAM: 16GB Hard Drive: 512GB SSD VGA: Nvidia RTX2060 6G Screen: 15.6 inch FHD 240Hz'),
(9, 2, 'Laptop Dell Inspiron 7490 LTDL101- 6RKVN1', '1400', 2, 6, 'dell-7490.jpeg', '7490LTDL101- 6RKVN1 Configuration for office, light game.here size of an old-fashioned 13.3-inch laptop. Dell Inspiron 7490 laptop has a slim, stylish, modern design .It is equipped with Intel\'s 10th generation', 'dell', 'CPU: Intel Core i7 10510U\r\nRAM: 16GB\r\nHard Drive:512GB SSD\r\nVGA: NVIDIA MX250 2GB\r\nScreen: 14\" FHD'),
(10, 3, 'SteelSeries Arctis Pro+GameDAC 61453-Headset', '200', 2, 2, 'headphone-steekseries.jpg', 'At the heart of Arctis Pro + GameDAC is the legendary ESS Saber 9018 audio processor DAC, revered for its outstanding sound quality with 121 dB dynamic range and -115 dB THD + N.This makes for tight bass.', 'headphone', ''),
(11, 3, 'Mechanical Keyboard VA87M Sakura -Mechanical ', '150', 2, 4, 'keyboard-sakura.jpg', 'From the drawings, the alphabet to the colors on the keycap are also made very meticulously and carefully. With the PBT keycap type that offers durability that won\'t be affected by time.A lovely design with pink cherry\r\n', 'keyboard', ''),
(12, 3, 'Mechanical Keyboard Akko Designer Studio-MOD001-Macaw', '400', 2, 5, 'keyboard-akko.jpg', 'With the famous Cherry Switch set meticulously designed in every detail with 3 basic Chery switch options: red, brown and blue switch. The keyboard is designed with a solid aluminum shell.\r\n\r\n', 'keyboard', ''),
(15, 2, 'Asus TUF Gaming F15 FX506LI-HN039T', '1100', 3, 5, 'asus-tuf.jpg', '', 'asus', 'CPU:AMD Ryzen R7 4800H\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: NVIDIA GTX 1660Ti 6GB\r\nScreen: 17.3 FHD 144hz'),
(16, 2, 'APPLE MACBOOK PRO 15 TOUCHBAR (MV912)', '2350', 3, 4, 'macbook-pro15.png', '', 'macbook', 'CPU: Intel Core i9 2.3Ghz RAM: 16GB Hard Drive: 512GB SSD VGA: 560X 4GB Screen: 15.4 inch'),
(17, 2, 'APPLE MACBOOK PRO 15 TOUCHBAR (MV912)', '2350', 3, 4, 'macbook-pro13.png', '', 'macbook', 'CPU: Apple M1\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: Onboard\r\nScreen: 13.3 inch Retina IPS'),
(18, 2, 'LAPTOP DELL INSPIRON 5406 (TYCJN1)', '1250', 3, 4, 'dell-5406.png', '', 'dell', 'CPU:Intel Core i7 1165G7\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: Nvidia MX330 2GB\r\nScreen: 14 inch FHD'),
(19, 2, 'Laptop Dell Workstation Mobile Precision 3550', '1550', 3, 4, 'dell-mobile-precision-3550.png', '', 'dell', 'CPU: Intel Core i7 10810U\r\nRAM: 16GB\r\nHard Drive: 256GB SSD\r\nVGA: Quadro P520 2G\r\nScreen: 15.6 inch FHD'),
(20, 2, 'LAPTOP ACER GAMING NITRO 5 AN515-56-79U2', '1100', 3, 3, 'laptop-acer-gaming.jpg', '', 'acer', 'CPU: Intel core i7 11370H\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: NVIDIA GTX1650 4G\r\nScreen: 15.6 inch FHD 144hz'),
(21, 2, 'LAPTOP HP PROBOOK 430 G8 (2H0P0PA)', '1100', 3, 4, 'laptop-probook-hp430gb.jpg', '', 'hp', 'CPU: Intel Core i7 1165G7\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: Onboard\r\nScreen: 13.3 inch FHD'),
(22, 2, 'LAPTOP HP ENVY 13-BA1030TU (2K0B6PA)', '1580', 3, 1, 'laptop-hp-envy13.png', '', 'hp', 'CPU: Intel® Core i5-1135G7(upto 4.2GHz, 8MB)\r\nRAM: 8GB 8GB(1 x 8GB) DDR4-3200MHz (2 slot)\r\nHard Drive: 256GB PCIe NVMe™ M.2'),
(23, 2, 'LAPTOP HP ENVY 13-BA1030TU (2K0B6PA)', '2350', 3, 2, 'hp-pavilion15.png', '', 'hp', 'CPU: Intel Core i7-10750H\r\nRAM: 8GB\r\nHard Drive: 512GB SSD\r\nVGA: NVIDIA GTX 1650Ti 4GB\r\nScreen: NVIDIA GTX 1650Ti 4GB');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl_slider`
--

CREATE TABLE `btl_slider` (
  `slider_id` int(11) NOT NULL,
  `slider_name` varchar(200) NOT NULL,
  `slider_caption` varchar(255) NOT NULL,
  `slider_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `btl_slider`
--

INSERT INTO `btl_slider` (`slider_id`, `slider_name`, `slider_caption`, `slider_image`) VALUES
(1, 'Laptop Asus Lamborghini VX7\r\n', 'Break All Configurations', 'banner-computer.jpg'),
(2, 'Sony Alpha A7 Kit 28-70mm', 'Removable Lens\r\n\r\n', 'banner-camera.jpg\r\n'),
(3, 'Rampage MEEPO PLUS Combo\r\n', 'Best Price', 'banner-combo.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `btl_user`
--

CREATE TABLE `btl_user` (
  `id` int(11) NOT NULL,
  `role` enum('user','admin') NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `btl_user`
--

INSERT INTO `btl_user` (`id`, `role`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', '1', 'adminator'),
(2, 'user', 'kha@gmail.com', 'kha123', 'kha123'),
(3, 'user', 'dat@gmail.com', 'dat09', 'dat09'),
(4, 'user', 'peam@gmail.com', '123456', 'peam\r\n'),
(5, 'user', 'doanngu@gmail.com', '123456789', 'kha'),
(6, 'user', 'thang@gmail.com', 'Thang123', 'thang'),
(7, 'user', 'lacda01', 'lacda1', 'lac da'),
(8, 'user', 'lacda02', 'lacda123', 'lac da');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product1`
--

CREATE TABLE `product1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` int(11) NOT NULL,
  `maxreso` int(11) NOT NULL,
  `lowreso` int(11) NOT NULL,
  `pixel` int(11) NOT NULL,
  `zwide` int(11) NOT NULL,
  `ztele` int(11) NOT NULL,
  `macro` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `pr` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product1`
--

INSERT INTO `product1` (`id`, `name`, `date`, `maxreso`, `lowreso`, `pixel`, `zwide`, `ztele`, `macro`, `w`, `pr`, `type`, `img`) VALUES
(1, 'Canon PowerShot A610', 1999, 1024, 512, 0, 28, 70, 17, 290, 150, 1, 'c-4.jpg'),
(2, 'Kodak DC3200', 2000, 1152, 576, 1, 39, 39, 0, 240, 129, 1, 'k-5.jpg'),
(3, 'Fujifilm MX-1200', 1999, 1280, 640, 1, 38, 38, 10, 240, 169, 1, 'f-7.jpg'),
(4, 'Fujifilm MX-1400', 2000, 1280, 640, 1, 38, 114, 10, 390, 169, 1, 'f-8.jpg'),
(5, 'Fujifilm MX-1500', 1999, 1280, 640, 1, 38, 38, 10, 250, 169, 1, 'f-9.jpg'),
(6, 'Fujifilm MX-1700', 1999, 1280, 640, 1, 38, 114, 20, 270, 169, 1, 'f-10.jpg'),
(7, 'Fujifilm MX-500', 1998, 1280, 640, 1, 35, 35, 9, 220, 169, 1, 'f-14.jpg'),
(8, 'Fujifilm MX-700', 1998, 1280, 640, 1, 35, 35, 9, 260, 169, 1, 'f-16.jpg'),
(9, 'Fujifilm MX-600 Zoom', 1999, 1280, 640, 1, 38, 115, 25, 0, 179, 1, 'f-15.jpg'),
(10, 'Leica D-LUX 3', 2000, 1280, 640, 1, 38, 114, 20, 270, 249, 1, 'le-1.jpg'),
(11, 'Sony DSC-F505', 1998, 1344, 640, 1, 28, 140, 0, 900, 149, 1, 's-5.jpg'),
(12, 'Sony DSC-F505V', 1999, 1344, 640, 1, 28, 140, 0, 900, 149, 1, 's-6.jpg'),
(13, 'Kodak DCS315', 1998, 1520, 0, 1, 0, 0, 0, 1800, 126, 1, 'k-11.jpg'),
(14, 'Kodak DCS420', 1994, 1524, 0, 1, 0, 0, 0, 1700, 129, 1, 'k-13.jpg'),
(15, 'Kodak DC260', 1998, 1536, 768, 1, 38, 115, 0, 550, 129, 1, 'k-1.jpg'),
(16, 'Kodak DC265', 1999, 1536, 768, 1, 38, 115, 0, 550, 129, 1, 'k-2.jpg'),
(17, 'Canon PowerShot A620', 2001, 1600, 1024, 1, 35, 105, 5, 315, 139, 1, 'c-5.jpg'),
(18, 'Sony DSC-F55', 1999, 1600, 1024, 1, 38, 190, 8, 475, 149, 1, 's-7.jpg'),
(19, 'Kodak DCS520', 1998, 1728, 0, 2, 0, 0, 0, 1650, 129, 1, 'k-15.jpg'),
(20, 'Kodak DC5000', 2000, 1760, 896, 2, 30, 60, 20, 459, 126, 1, 'k-9.jpg'),
(21, 'Kodak DC280', 1999, 1760, 896, 2, 30, 60, 25, 420, 129, 1, 'k-3.jpg'),
(22, 'Kodak DC3400', 2000, 1760, 896, 2, 38, 76, 25, 420, 129, 1, 'k-6.jpg'),
(23, 'Kodak DC3800', 2000, 1760, 896, 2, 33, 33, 20, 200, 129, 1, 'k-7.jpg'),
(24, 'Kodak DC290', 1999, 1792, 1440, 2, 38, 115, 0, 550, 129, 1, 'k-4.jpg'),
(25, 'Fujifilm MX-2700', 1999, 1800, 1280, 2, 35, 35, 9, 260, 169, 1, 'f-11.jpg'),
(26, 'Fujifilm MX-2900 Zoom', 1999, 1800, 1280, 2, 35, 105, 25, 385, 179, 1, 'f-12.jpg'),
(27, 'Kodak DCS330', 1999, 2008, 0, 3, 0, 0, 0, 1080, 126, 1, 'k-12.jpg'),
(28, 'Canon PowerShot A710 IS', 2001, 2048, 1600, 3, 35, 105, 5, 315, 139, 1, 'c-9.jpg'),
(29, 'Sony DSC-P100', 2000, 2048, 1600, 3, 39, 117, 10, 250, 429, 1, 's-12.jpg'),
(30, 'Sony Mavica CD400', 2007, 2048, 1600, 3, 34, 102, 4, 620, 1399, 1, 's-1.jpg'),
(31, 'Sony Mavica CD500', 2007, 2048, 1632, 3, 41, 123, 10, 522, 1399, 1, 's-2.jpg'),
(32, 'Kodak DC4800', 2000, 2160, 1800, 3, 28, 84, 20, 320, 129, 1, 'k-8.jpg'),
(33, 'Nikon Coolpix L6', 2005, 2272, 1600, 3, 38, 114, 4, 165, 99, 1, 'ni-4.jpg'),
(34, 'Sony DSC-D700', 2007, 2272, 1600, 3, 34, 102, 4, 640, 1399, 1, 's-3.jpg'),
(35, 'Fujifilm FinePix 4700 Zoom', 2000, 2400, 1280, 2, 36, 108, 20, 280, 169, 1, 'f-13.jpg'),
(36, 'Canon PowerShot A630', 2001, 2592, 2592, 5, 35, 140, 1, 285, 139, 1, 'c-6.jpg'),
(37, 'Fujifilm FinePix V10 Zoom', 2006, 2592, 2048, 5, 36, 130, 9, 185, 179, 1, 'f-1.jpg'),
(38, 'Fujifilm FinePix Z1', 2005, 2592, 2048, 5, 36, 108, 8, 170, 179, 1, 'f-2.jpg'),
(39, 'Fujifilm FinePix Z2', 2005, 2592, 2048, 5, 36, 108, 8, 170, 179, 1, 'f-4.jpg'),
(40, 'Fujifilm FinePix Z3', 2006, 2592, 2048, 5, 36, 108, 8, 170, 179, 1, 'f-5.jpg'),
(41, 'Sony DSC-N2', 2007, 2592, 2048, 5, 38, 114, 1, 240, 399, 1, 's-9.jpg'),
(42, 'Sony DSC-N1', 2007, 2592, 2048, 5, 38, 114, 8, 215, 429, 1, 's-8.jpg'),
(43, 'Sony DSC-D770', 2007, 2592, 2048, 5, 34, 102, 4, 606, 1399, 1, 's-4.jpg'),
(44, 'Nikon Coolpix L4', 2005, 2816, 2048, 6, 38, 116, 10, 170, 99, 1, 'ni-3.jpg'),
(45, 'Nikon Coolpix P2', 2005, 2816, 2048, 6, 38, 116, 10, 175, 99, 1, 'ni-6.jpg'),
(46, 'Canon PowerShot A720 IS', 2001, 2816, 2272, 6, 35, 210, 1, 250, 139, 1, 'c-10.jpg'),
(47, 'Canon PowerShot SD800 IS', 2002, 2816, 2272, 6, 35, 140, 2, 195, 384, 1, 'c-12.jpg'),
(48, 'Nikon D50', 2005, 3008, 2256, 6, 0, 0, 0, 522, 549, 1, 'ni-9.jpg'),
(49, 'Nikon D70s', 2005, 3008, 2256, 6, 0, 0, 0, 620, 1599, 1, 'ni-11.jpg'),
(50, 'Fujifilm FinePix S1 Pro', 2000, 3040, 2340, 3, 0, 0, 0, 820, 1699, 1, 'f-17.jpg'),
(51, 'Kodak DCS460', 1995, 3060, 0, 6, 0, 0, 0, 1700, 129, 1, 'k-14.jpg'),
(52, 'Nikon Coolpix P1', 2005, 3072, 2592, 7, 38, 190, 4, 210, 99, 1, 'ni-5.jpg'),
(53, 'Canon PowerShot A640', 2001, 3072, 3072, 7, 35, 140, 1, 285, 139, 1, 'c-8.jpg'),
(54, 'Canon PowerShot A75', 2001, 3072, 2592, 7, 35, 210, 1, 210, 139, 1, 'c-11.jpg'),
(55, 'Canon PowerShot A60', 2001, 3072, 2592, 7, 35, 140, 5, 215, 149, 1, 'c-1.jpg'),
(56, 'Canon PowerShot SD850 IS', 2002, 3072, 2592, 7, 35, 105, 5, 170, 384, 1, 'c-13.jpg'),
(57, 'Canon PowerShot SD870 IS', 2002, 3072, 2592, 7, 28, 105, 3, 195, 384, 1, 'c-14.jpg'),
(58, 'Fujifilm FinePix Z10  fd', 2007, 3072, 2304, 7, 38, 114, 8, 160, 399, 1, 'f-3.jpg'),
(59, 'Nikon Coolpix L3', 2005, 3264, 2592, 8, 35, 105, 15, 225, 159, 1, 'ni-2.jpg'),
(60, 'Canon PowerShot SD900', 2002, 3264, 2272, 8, 35, 140, 2, 195, 384, 1, 'c-15.jpg'),
(61, 'Canon PowerShot SD950 IS', 2002, 3264, 2592, 8, 28, 105, 2, 165, 384, 1, 'c-16.jpg'),
(62, 'Sony DSC-P10', 2007, 3264, 2592, 10, 38, 114, 6, 139, 399, 1, 's-11.jpg'),
(63, 'Sony DSC-P1', 2007, 3264, 2592, 8, 38, 114, 6, 139, 429, 1, 's-10.jpg'),
(64, 'Canon PowerShot SX100 IS', 2002, 3648, 2816, 10, 37, 111, 5, 205, 199, 1, 'c-17.jpg'),
(65, 'Leica M8', 2004, 3840, 3072, 8, 28, 112, 5, 220, 509, 1, 'le-2.jpg'),
(66, 'Nikon D70', 2005, 3872, 2896, 10, 0, 0, 0, 522, 549, 1, 'ni-10.jpg'),
(67, 'Nikon Coolpix 100', 2004, 3936, 2952, 10, 0, 0, 0, 591, 146, 1, 'ni-1.jpg'),
(68, 'Canon PowerShot TX1', 2002, 4000, 3264, 12, 36, 133, 5, 205, 384, 1, 'c-18.jpg'),
(69, 'Leica V-LUX 1', 2004, 4224, 3840, 10, 28, 112, 5, 220, 509, 1, 'le-3.jpg'),
(70, 'Fujifilm FinePix IS Pro', 2007, 4256, 3024, 6, 0, 0, 0, 920, 1699, 1, 'f-6.jpg'),
(71, 'Fujifilm FinePix S2 Pro', 2002, 4256, 3024, 6, 0, 0, 0, 850, 1699, 1, 'f-1.jpg'),
(72, 'Fujifilm FinePix S3 Pro', 2004, 4256, 3024, 6, 0, 0, 0, 930, 1699, 1, 'f-1.jpg'),
(73, 'Fujifilm FinePix S5 Pro', 2006, 4256, 3024, 6, 0, 0, 0, 920, 1699, 1, 'f-4.jpg'),
(74, 'Nikon D40', 2005, 4256, 3184, 12, 0, 0, 0, 1300, 4999, 1, 'ni-7.jpg'),
(75, 'Nikon D40X', 2005, 4288, 3216, 12, 0, 0, 0, 925, 1799, 1, 'ni-8.jpg'),
(76, 'Kodak DCS 14n', 2002, 4536, 3024, 13, 0, 0, 0, 1000, 129, 1, 'k-10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product2`
--

CREATE TABLE `product2` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `ss` varchar(255) NOT NULL,
  `s` varchar(255) NOT NULL,
  `cpu` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `gpu` varchar(255) NOT NULL,
  `w` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product2`
--

INSERT INTO `product2` (`id`, `brand`, `name`, `category`, `ss`, `s`, `cpu`, `ram`, `storage`, `gpu`, `w`, `price`, `img`) VALUES
(1, 'Dell', 'Dell XPS 15 9570', '2 in 1 Convertible', '10.1', 'IPS Panel Touchscreen 1920x1200', 'Intel Atom x5-Z8550 1.44GHz', '4GB', '64GB Flash Storage', 'Intel HD Graphics 400', '0.69kg', 1320, 'dell-6.jpg'),
(2, 'Asus', 'Asus VivoBook 15 X510UF', '2 in 1 Convertible', '10.1', 'IPS Panel Touchscreen 1920x1200', 'Intel Atom x5-Z8550 1.44GHz', '4GB', '64GB Flash Storage', 'Intel HD Graphics 400', '0.69kg', 819, 'asus-7.jpg'),
(3, 'Acer', 'Acer Aspire 1 A114-31', 'Ultrabook', '12.0', 'IPS Panel Retina Display 2304x1440', 'Intel Core M m3 1.2GHz', '8GB', '256GB SSD', 'Intel HD Graphics 615', '0.92kg', 1262, 'acer-6.jpg'),
(4, 'Acer', 'Acer Aspire 3 A315-33-C6S9', 'Ultrabook', '12.0', 'IPS Panel Retina Display 2304x1440', 'Intel Core i5 1.3GHz', '8GB', '512GB SSD', 'Intel HD Graphics 615', '0.92kg', 1510, 'acer-9.jpg'),
(5, 'Dell', 'Dell XPS 13 9380G', 'Netbook', '11.6', '1366x768', 'Intel Atom x5-Z8350 1.44GHz', '2GB', '32GB Flash Storage', 'Intel HD Graphics 400', '0.98kg', 191, 'dell-5.jpg'),
(6, 'Apple', 'Apple MacBook Pro (Retina) ', 'Netbook', '11.6', '1366x768', 'Apple M1', '2GB', '32GB Flash Storage', 'Intel HD Graphics 400', '0.98kg', 1910, 'mb-14.jpg'),
(7, 'Acer', 'Acer Aspire 3', 'Ultrabook', '13.3', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.21kg', 1649, 'acer-12.jpg'),
(8, 'Lenovo', 'Lenovo IdeaPad 320-15IKBRA', 'Ultrabook', '13.3', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.21kg', 1649, 'l-2.jpg'),
(9, 'Apple', 'Apple MacBook Air (Retina)  (MGN65SA/A)', 'Ultrabook', '13.3', 'IPS Panel Full HD / Touchscreen 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD', 'Intel UHD Graphics 620', '1.22kg', 979, 'mb-13.jpg'),
(10, 'Acer', 'Acer Aspire 3 A315-53-52ZL', 'Ultrabook', '13.5', 'Touchscreen 2256x1504', 'Intel Core i5 7200U 2.5GHz', '4GB', '128GB SSD', 'Intel HD Graphics 620', '1.252kg', 1089, 'acer-6.jpg'),
(11, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN83SA/A)', 'Ultrabook', '13.5', 'Touchscreen 2256x1504', 'Intel Core i5 7200U 2.5GHz', '4GB', '128GB SSD', 'Intel HD Graphics 620', '1.252kg', 1089, 'mb-1.jpg'),
(12, 'Asus', 'Asus ZenBook S13 UX392FN', 'Ultrabook', '14.0', 'Full HD 1920x1080', 'Intel Core i7 7500U 2.7GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.25kg', 1049, 'asus-3.jpg'),
(13, 'Dell', 'Dell Inspiron 15 3567N', 'Ultrabook', '14.0', 'Full HD 1920x1080', 'Intel Core i7 7500U 2.7GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.25kg', 1049, 'dell-7.jpg'),
(14, 'Asus', 'Asus X543UB', 'Ultrabook', '13.3', 'Touchscreen / Quad HD+ 3200x1800', 'Intel Core i7 8550U 1.8GHz', '16GB', '512GB SSD', 'Intel UHD Graphics 620', '1.2kg', 1869, 'asus-11.jpg'),
(15, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (BGB63SA/A)', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.8GHz', '8GB', '256GB Flash Storage', 'Intel HD Graphics 6000', '1.34kg', 1158, 'mb-10.jpg'),
(16, 'Lenovo', 'Lenovo IdeaPad 330S-14IKB', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.8GHz', '8GB', '128GB Flash Storage', 'Intel HD Graphics 6000', '1.34kg', 898, 'l-12.jpg'),
(17, 'Acer', 'Acer Aspire 3 A315-54', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.6GHz', '8GB', '128GB Flash Storage', 'Intel HD Graphics 6000', '1.35kg', 1099, 'acer-8.jpg'),
(18, 'HP', 'HP Pavilion 14-ce2000nx', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.6GHz', '8GB', '256GB Flash Storage', 'Intel HD Graphics 6000', '1.35kg', 998, 'hp-15.jpg'),
(19, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN67SA/A)', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.3GHz', '8GB', '128GB SSD', 'Intel Iris Plus Graphics 640', '1.37kg', 1339, 'mb-4.jpg'),
(20, 'HP', 'HP Notebook 14-df0008nx', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.3GHz', '8GB', '128GB SSD', 'Intel Iris Plus Graphics 640', '1.37kg', 1339, 'hp-12.jpg'),
(21, 'Asus', 'Asus ZenBook UX433FN', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.0GHz', '8GB', '256GB SSD', 'Intel Iris Graphics 540', '1.37kg', 1419, 'asus-6.jpg'),
(22, 'Acer', 'Acer Swift 3 SF314-52G', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.3GHz', '8GB', '256GB SSD', 'Intel Iris Plus Graphics 640', '1.37kg', 1518, 'acer-3.jpg'),
(23, 'Asus', 'Asus VivoBook 15 X510UR', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 3.1GHz', '8GB', '256GB SSD', 'Intel Iris Plus Graphics 650', '1.37kg', 1803, 'asus-8.jpg'),
(24, 'Lenovo', 'Lenovo IdeaPad S340B', 'Notebook', '14.0', '1366x768', 'Intel Celeron Dual Core N3060 1.6GHz', '4GB', '32GB SSD', 'Intel HD Graphics 400', '1.44kg', 229, 'l-19.jpg'),
(25, 'Acer', 'Acer Aspire 5 A515-52G-75XJ', 'Notebook', '13.3', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '512GB SSD', 'Intel UHD Graphics 620', '1.49kg', 1103, 'acer-5.jpg'),
(26, 'Acer', 'Acer Aspire 5 A515-54G', 'Notebook', '13.3', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '16GB', '512GB SSD', 'Intel UHD Graphics 620', '1.49kg', 1197, 'acer-13.jpg'),
(27, 'Dell', 'Dell Inspiron 15 3580F', 'Notebook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.4kg', 941, 'dell-12.jpg'),
(28, 'Lenovo', 'Lenovo IdeaPad 330S-14IKD', 'Notebook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.4kg', 941, 'l-14.jpg'),
(29, 'Acer', 'Acer Aspire 3 A315-53-341N', 'Ultrabook', '13.3', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'AMD Radeon 530', '1.4kg', 955, 'acer-7.jpg'),
(30, 'HP', 'HP ENVY 13-ab000nx', '2 in 1 Convertible', '13.3', 'IPS Panel Full HD / Touchscreen 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.5kg', 847, 'hp-6.jpg'),
(31, 'Apple', 'Apple MacBook Air (Retina) 2019', '2 in 1 Convertible', '13.3', 'Full HD / Touchscreen 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.62kg', 819, 'mb-8.jpg'),
(32, 'Dell', 'Dell XPS 13 9360', '2 in 1 Convertible', '13.3', 'Full HD / Touchscreen 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.62kg', 819, 'dell-2.jpg'),
(33, 'Acer', 'Acer Aspire A315-51', 'Notebook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.63kg', 860, 'acer-2.jpg'),
(34, 'Asus', 'Asus X543UB-2', 'Notebook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.63kg', 860, 'asus-13.jpg'),
(35, 'Lenovo', 'Lenovo IdeaPad 330-15IGM', 'Notebook', '14.0', 'IPS Panel Full HD 1920x1080', 'Intel Core i3 7130U 2.7GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.7kg', 599, 'l-6.jpg'),
(36, 'Lenovo', 'Lenovo IdeaPad S145', 'Notebook', '14.0', 'IPS Panel Full HD 1920x1080', 'Intel Core i3 7130U 2.7GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.7kg', 599, 'l-17.jpg'),
(37, 'Asus', 'Asus VivoBook 15 X540UA', 'Ultrabook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.7kg', 879, 'asus-10.jpg'),
(38, 'Lenovo', 'Lenovo IdeaPad S340C', 'Ultrabook', '14.0', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.7kg', 879, 'l-20.jpg'),
(39, 'HP', 'HP ENVY 13-ah0006nx', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Intel Core i7 2.8GHz', '16GB', '256GB SSD', 'AMD Radeon Pro 555', '1.83kg', 2439, 'hp-10.jpg'),
(40, 'Apple', 'Apple MacBook Air (Retina) 2021', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Intel Core i7 2.7GHz', '16GB', '512GB SSD', 'AMD Radeon Pro 455', '1.83kg', 2537, 'mb-3.jpg'),
(41, 'Dell', 'Dell Inspiron 15 3567B', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Intel Core i7 2.7GHz', '16GB', '512GB SSD', 'AMD Radeon Pro 455', '1.83kg', 2537, 'dell-5.jpg'),
(42, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN63SA/A)', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Apple M1', '16GB', '512GB SSD', 'AMD Radeon Pro 560', '1.83kg', 2858, 'mb-1.jpg'),
(43, 'Dell', 'Dell Inspiron 15 3573', 'Ultrabook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Nvidia GeForce GTX 940MX', '1.83kg', 699, 'dell-9.jpg'),
(44, 'HP', 'HP ENVY 13-ad101nx', 'Ultrabook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Nvidia GeForce GTX 940MX', '1.83kg', 699, 'hp-8.jpg'),
(45, 'Acer', 'Acer Swift 5', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '500GB HDD', 'Intel HD Graphics 520', '1.86kg', 1344, 'acer-1.jpg'),
(46, 'Microsoft', 'Microsoft Surface', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '500GB HDD', 'Intel HD Graphics 520', '1.86kg', 1344, 'mic-1.jpg'),
(47, 'Apple', 'Apple MacBook Air (Retina)  (MGN65SA/A)', 'Notebook', '15.6', 'Full HD 1920x1080', 'Apple M1', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.86kg', 1575, 'mb-3.jpg'),
(48, 'HP', 'HP ENVY 13-ah0002nx', 'Notebook', '15.6', '1366x768', 'AMD E-Series E2-9000e 1.5GHz', '4GB', '500GB HDD', 'AMD Radeon R2', '1.86kg', 258, 'hp-9.jpg'),
(49, 'Apple', 'Apple MacBook Air (Retina)  (MGN65SF/A)', 'Notebook', '15.6', '1366x768', 'AMD E-Series E2-9000e 1.5GHz', '4GB', '500GB HDD', 'AMD Radeon R2', '1.86kg', 2580, 'mb-2.jpg'),
(50, 'Acer', 'Acer Aspire 1 A114-31-C6WP', 'Notebook', '15.6', '1366x768', 'Intel Core i5 7200U 2.5GHz', '4GB', '500GB HDD', 'Intel HD Graphics 620', '1.86kg', 693, 'acer-12.jpg'),
(51, 'HP', 'HP 15-db0001nx', 'Notebook', '15.6', '1366x768', 'Intel Core i5 7200U 2.5GHz', '4GB', '500GB HDD', 'Intel HD Graphics 620', '1.86kg', 593, 'hp-5.jpg'),
(52, 'Dell', 'Dell Inspiron 15 3580B', 'Notebook', '15.6', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '256GB SSD', 'AMD Radeon R4 Graphics', '1.86kg', 798, 'dell-11.jpg'),
(53, 'HP', 'HP Pavilion 15-cs0001nx', 'Notebook', '15.6', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '256GB SSD', 'AMD Radeon R4 Graphics', '1.86kg', 398, 'hp-18.jpg'),
(54, 'Asus', 'Asus  G752VS', 'Gaming', '15.6', '1366x768', 'Intel Core i5 7200U 2.5GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '1.86kg', 888, 'asus-1.jpg'),
(55, 'Lenovo', 'Lenovo IdeaPad 330S-14IKC', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.86kg', 690, 'l-13.jpg'),
(56, 'Lenovo', 'Lenovo IdeaPad S340A', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.86kg', 690, 'l-18.jpg'),
(57, 'Dell', 'Dell Inspiron 15 3576', 'Ultrabook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.88kg', 1096, 'dell-10.jpg'),
(58, 'HP', 'HP 15-bs006nx', 'Ultrabook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.88kg', 1096, 'hp-1.jpg'),
(59, 'HP', 'HP 15-da1016nx', 'Ultrabook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', '1.88kg', 1096, 'hp-2.jpg'),
(60, 'Asus', 'Asus VivoBook 14 S430FN', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Atom x5-Z8300 1.44GHz', '4GB', '64GB Flash Storage', 'Intel HD Graphics', '1.89kg', 244, 'asus-2.jpg'),
(61, 'Microsoft', 'Microsoft Surface 2', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Atom x5-Z8300 1.44GHz', '4GB', '64GB Flash Storage', 'Intel HD Graphics', '1.89kg', 944, 'mic-2.jpg'),
(62, 'Lenovo', 'Lenovo IdeaPad 330', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '128GB SSD', 'Intel HD Graphics 520', '1.91kg', 639, 'l-5.jpg'),
(63, 'Dell', 'Dell Vostro 5471', 'Ultrabook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.91kg', 659, 'dell-19.jpg'),
(64, 'Dell', 'Dell Inspiron 15 5570', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', '1.96kg', 598, 'dell-17.jpg'),
(65, 'Lenovo', 'Lenovo IdeaPad 330-15IKBR', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '1.9kg', 549, 'l-8.jpg'),
(66, 'Asus', 'Asus X540UB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '128GB SSD +  1TB HDD', 'Intel UHD Graphics 620', '2.02kg', 855, 'asus-14.jpg'),
(67, 'Dell', 'Dell Inspiron 15 5567', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '128GB SSD +  1TB HDD', 'Intel UHD Graphics 620', '2.02kg', 855, 'dell-16.jpg'),
(68, 'Asus', 'Asus VivoBook 15 X507UB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'AMD Radeon 520', '2.13kg', 767, 'asus-6.jpg'),
(69, 'Apple', 'Apple MacBook Air (Retina) 2020', 'Notebook', '15.6', '1366x768', 'AMD A9-Series 9420 3GHz', '4GB', '500GB HDD', 'AMD Radeon R5', '2.1kg', 1400, 'mb-11.jpg'),
(70, 'Lenovo', 'Lenovo IdeaPad 330S-14IKA', 'Notebook', '15.6', '1366x768', 'Intel Core i3 7130U 2.7GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '2.1kg', 767, 'l-11.jpg'),
(71, 'Lenovo', 'Lenovo IdeaPad S130-14IGM', 'Notebook', '14.0', '1366x768', 'Intel Core i3 6006U 2GHz', '8GB', '1TB HDD', 'Intel HD Graphics 520', '2.1kg', 889, 'l-16.jpg'),
(72, 'Acer', 'Acer Aspire 3 A315-53', 'Notebook', '15.6', '1366x768', 'AMD A9-Series 9420 3GHz', '4GB', '1TB HDD', 'AMD Radeon R5', '2.1kg', 695, 'acer-10.jpg'),
(73, 'Acer', 'Acer Predator 17 GX791 78ND', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Nvidia GeForce 930MX ', '2.1kg', 879, 'acer-helios300.png'),
(74, 'Asus', 'Asus VivoBook 14 X412UB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Nvidia GeForce 930MX ', '2.1kg', 879, 'asus-4.jpg'),
(75, 'Acer', 'Acer Swift 1 SF114-32-C4GB', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1060', '2.2kg', 1449, 'acer-11.jpg'),
(76, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGB63SA/A)', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '256GB SSD', 'AMD Radeon R5 M430', '2.2kg', 1485, 'mb-15.jpg'),
(77, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN63SA/T)', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 7500U 2.7GHz', '8GB', '1TB HDD', 'AMD Radeon R5 M430', '2.2kg', 1599, 'mb-7.jpg'),
(78, 'Lenovo', 'Lenovo IdeaPad S530F', 'Notebook', '15.6', '1366x768', 'Intel Core i3 6006U 2GHz', '4GB', '128GB SSD', 'Intel HD Graphics 520', '2.2kg', 669, 'l-16.jpg'),
(79, 'Asus', 'Asus X543MA', 'Notebook', '15.6', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '128GB SSD', 'AMD R4 Graphics', '2.2kg', 699, 'asus-15.jpg'),
(80, 'HP', 'HP Pavilion 13-an0000nx', 'Notebook', '15.6', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '128GB SSD', 'AMD R4 Graphics', '2.2kg', 899, 'hp-13.jpg'),
(81, 'Acer', 'Acer Swift 1 SF114-32-C4GB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '256GB SSD', 'AMD Radeon R5 M430', '2.2kg', 698, 'acer-11.jpg'),
(82, 'Acer', 'Acer Swift 5 SF514-52TP-8933', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '256GB SSD', 'AMD Radeon R5 M430', '2.2kg', 698, 'acer-2.jpg'),
(83, 'Dell', 'Dell XPS 13 9380F', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 7100U 2.4GHz', '8GB', '1TB HDD', 'Nvidia GeForce 940MX', '2.2kg', 899, 'dell-4.jpg'),
(84, 'Asus', 'Asus VivoBook 14 X420UA', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '2TB HDD', 'Intel HD Graphics 620', '2.2kg', 519, 'asus-5.jpg'),
(85, 'Dell', 'Dell Inspiron 15 3567V', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '2TB HDD', 'Intel HD Graphics 620', '2.2kg', 519, 'dell-8.jpg'),
(86, 'Lenovo', 'Lenovo IdeaPad 320-15IKBRN', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '2TB HDD', 'Intel HD Graphics 620', '2.2kg', 519, 'l-4.jpg'),
(87, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN64SA/A)', 'Notebook', '15.6', 'Full HD 1920x1080', 'Apple M1', '4GB', '1TB HDD', 'Nvidia GeForce MX130', '2.2kg', 530, 'mb-2.jpg'),
(88, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN63SA/B)', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 7500U 2.7GHz', '8GB', '1TB HDD', 'AMD Radeon R5 M430', '2.2kg', 599, 'mb-6.jpg'),
(89, 'Acer', 'Acer Aspire 3 A315-54', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '1TB HDD', 'Nvidia GeForce MX150', '2.2kg', 689, 'acer-10.jpg'),
(90, 'Asus', 'Asus ZenBook UX430UN ', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '1TB HDD', 'Nvidia GeForce MX150', '2.2kg', 689, 'asus-2.jpg'),
(91, 'Dell', 'Dell Vostro 5481', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'AMD Radeon 530', '2.2kg', 800, 'dell-1.jpg'),
(92, 'Asus', 'Asus VivoBook 15 X512UF', 'Notebook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Nvidia GeForce MX150', '2.2kg', 841, 'asus-9.jpg'),
(93, 'Asus', 'Asus VivoBook S430', 'Notebook', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'Nvidia GeForce MX150', '2.2kg', 841, 'asus-12.jpg'),
(94, 'Acer', 'Acer Aspire 3 A315-53G', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'AMD Radeon 530', '2.2kg', 870, 'acer-8.jpg'),
(95, 'HP', 'HP Pavilion 15-cc002nx', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '8GB', '256GB SSD', 'AMD Radeon 530', '2.2kg', 870, 'hp-17.jpg'),
(96, 'Dell', 'Dell Inspiron 15 3567A', 'Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '8GB', '1TB HDD', 'Nvidia GeForce GTX 1050', '2.2kg', 949, 'dell-4.jpg'),
(97, 'Lenovo', 'Lenovo IdeaPad 330S', 'Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '8GB', '1TB HDD', 'Nvidia GeForce GTX 1050', '2.2kg', 949, 'l-10.jpg'),
(98, 'Apple', 'Apple MacBook ', 'Notebook', '15.6', '1366x768', 'Apple M1', '8GB', '1TB HDD', 'Nvidia GeForce 940MX', '2.3kg', 1522, 'mb-12.jpg'),
(99, 'Dell', 'Dell Inspiron 13 5370', 'Notebook', '15.6', '1366x768', 'Intel Core i3 6006U 2GHz', '4GB', '1TB HDD', 'Intel HD Graphics 520', '2.3kg', 718, 'dell-2.jpg'),
(100, 'HP', 'HP 15-da1019nx', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '4GB', '256GB SSD', 'AMD Radeon R5 M430', '2.3kg', 639, 'hp-4.jpg'),
(101, 'Acer', 'Acer Aspire 3 A315-54', 'Gaming', '15.6', 'Full HD 1920x1080', 'AMD FX 9830P 3GHz', '8GB', '1TB HDD', 'AMD Radeon RX 560', '2.45kg', 699, 'acer-13.jpg'),
(102, 'Lenovo', 'Lenovo IdeaPad 320-14ISK', 'Gaming', '15.6', 'Full HD 1920x1080', 'AMD FX 9830P 3GHz', '8GB', '1TB HDD', 'AMD Radeon RX 560', '2.45kg', 699, 'l-1.jpg'),
(103, 'Acer', 'Acer Swift 3 SF314-54G-87HB', 'Notebook', '15.6', '1366x768', 'Intel Core i3 7100U 2.4GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '2.4kg', 584, 'acer-3.jpg'),
(104, 'Dell', 'Dell Inspiron 15 3580N', 'Notebook', '15.6', '1366x768', 'Intel Core i3 7100U 2.4GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '2.4kg', 884, 'dell-13.jpg'),
(105, 'Asus', 'Asus ZenBook 14 UX433FN', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '1TB HDD', 'Nvidia GeForce 930MX', '2.5kg', 896, 'asus-14.jpg'),
(106, 'Microsoft', 'Microsoft Surface 2A', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '1TB HDD', 'Nvidia GeForce 930MX', '2.5kg', 896, 'mic-2.jpg'),
(107, 'Apple', 'Apple MacBook Pro (Retina + Touch Bar)  (MGN69SA/A)', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce 930MX', '2.5kg', 977, 'mb-5.jpg'),
(108, 'HP', 'HP 15-da1018nx', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce 930MX', '2.5kg', 977, 'hp-3.jpg'),
(109, 'HP', 'HP ENVY 17-ae003nx', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce 930MX', '2.5kg', 977, 'hp-11.jpg'),
(110, 'HP', 'HP Pavilion 13-an0001nx', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050', '2.5kg', 999, 'hp-14.jpg'),
(111, 'Lenovo', 'Lenovo IdeaPad 330-15IGM', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050', '2.5kg', 999, 'l-7.jpg'),
(112, 'Dell', 'Dell Inspiron 15 3567C', 'Gaming', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '256GB SSD', 'Nvidia GeForce GTX 1060', '2.65kg', 1195, 'dell-6.jpg'),
(113, 'Acer', 'Acer Aspire 5 A515-51G', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050 Ti', '2.65kg', 1349, 'acer-1.jpg'),
(114, 'Dell', 'Dell Inspiron 15 3582', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050 Ti', '2.65kg', 1349, 'dell-15.jpg'),
(115, 'Asus', 'Asus VivoBook 14 X412FJ', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '256GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1060', '2.65kg', 1499, 'asus-3.jpg'),
(116, 'Dell', 'Dell Alienware 15', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '256GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1060', '2.65kg', 1499, 'dell-1.jpg'),
(117, 'Dell', 'Asus Lamboghini VX7', 'Gaming', '15.6', 'IPS Panel Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '16GB', '2TB SSD +  1TB HDD', 'Nvidia GeForce GTX 2060', '2.65kg', 3499, 'asus-vx7.jpg'),
(118, 'Dell', 'Dell Inspiron 14 5480', 'Notebook', '17.3', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '500GB HDD', 'AMD Radeon 530', '2.71kg', 1339, 'dell-3.jpg'),
(119, 'HP', 'HP Pavilion 14-ce2003nx', 'Notebook', '17.3', 'Full HD 1920x1080', 'AMD A6-Series 9220 2.5GHz', '4GB', '500GB HDD', 'AMD Radeon 530', '2.71kg', 839, 'hp-16.jpg'),
(120, 'Apple', 'Apple MacBook Pro (Retina) 2019', 'Gaming', '17.3', 'Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050', '2.7kg', 1095, 'mb-9.jpg'),
(121, 'Lenovo', 'Lenovo IdeaPad 320-15IKBRA', 'Gaming', '17.3', 'Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050', '2.7kg', 1095, 'l-3.jpg'),
(122, 'Lenovo', 'Lenovo IdeaPad 330G', 'Gaming', '17.3', 'Full HD 1920x1080', 'Intel Core i5 7300HQ 2.5GHz', '8GB', '128GB SSD +  1TB HDD', 'Nvidia GeForce GTX 1050', '2.7kg', 1095, 'l-9.jpg'),
(123, 'Acer', 'Acer Aspire 3 A315-53-34CE', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '16GB', '256GB SSD +  2TB HDD', 'AMD Radeon 530', '2.8kg', 1299, 'acer-2.jpg'),
(124, 'Lenovo', 'Lenovo IdeaPad S340D', 'Notebook', '17.3', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '16GB', '256GB SSD +  2TB HDD', 'AMD Radeon 530', '2.8kg', 1299, 'l-6.jpg'),
(125, 'Asus', 'Asus VivoBook S15 S530FN', 'Notebook', '17.3', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD +  1TB HDD', 'AMD Radeon 530', '2.8kg', 979, 'asus-11.jpg'),
(126, 'MSI', 'MSI GT83VR 7RF Titan SLI', 'Notebook', '17.3', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '128GB SSD +  1TB HDD', 'GeForce? GTX 1080 with 8GB GDDR5X SLI', '2.8kg', 979, 'msi-titan.png'),
(127, 'Asus', 'Asus X507UB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '1TB HDD', 'Intel HD Graphics 620', '2kg', 589, 'asus-13.jpg'),
(128, 'Acer', 'Acer Swift 3 314', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '256GB SSD', 'Intel HD Graphics 520', '2kg', 615, 'acer-4.jpg'),
(129, 'Lenovo', 'Lenovo IdeaPad 330S-15IKB', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i3 6006U 2GHz', '4GB', '256GB SSD', 'Intel HD Graphics 520', '2kg', 715, 'l-15.jpg'),
(130, 'Dell', 'Dell Inspiron 3567', 'Notebook', '15.6', '1366x768', 'Intel Core i5 7200U 2.5GHz', '4GB', '256GB SSD', 'Intel HD Graphics 620', '2kg', 586, 'dell-18.jpg'),
(131, 'Lenovo', 'Lenovo IdeaPad S340E', 'Notebook', '15.6', '1366x768', 'Intel Core i5 7200U 2.5GHz', '4GB', '256GB SSD', 'Intel HD Graphics 620', '2kg', 586, 'l-8.jpg'),
(132, 'Dell', 'Dell XPS 13 9380', 'Gaming', '17.3', 'Full HD 1920x1080', 'AMD Ryzen 1700 3GHz', '8GB', '256GB SSD +  1TB HDD', 'AMD Radeon RX 580', '3.2kg', 1299, 'dell-3.jpg'),
(133, 'HP', 'HP ENVY 13-ad002nx', 'Gaming', '17.3', 'Full HD 1920x1080', 'AMD Ryzen 1700 3GHz', '8GB', '256GB SSD +  1TB HDD', 'AMD Radeon RX 580', '3.2kg', 1299, 'hp-7.jpg'),
(134, 'Dell', 'Dell Inspiron 15 3581', 'Gaming', '17.3', 'Full HD 1920x1080', 'Intel Core i7 7700HQ 2.8GHz', '12GB', '1TB HDD', 'Nvidia GeForce GTX 1050 Ti', '3kg', 949, 'dell-14.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product3`
--

CREATE TABLE `product3` (
  `id` int(11) NOT NULL,
  `sc` varchar(255) NOT NULL,
  `br` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `w` int(11) NOT NULL,
  `pr` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `product3`
--

INSERT INTO `product3` (`id`, `sc`, `br`, `name`, `w`, `pr`, `img`) VALUES
(1, 'hp', 'HyperX', 'HyperX Cloud X', 102, 230, 'hx-15.jpg'),
(2, 'hp', 'HyperX', 'HyperX Cloud PS5', 105, 159, 'hx-16.jpg'),
(3, 'kb', 'Logitech', 'Logitech G607', 105, 53, 'g-18.png'),
(4, 'hp', 'SteelSeries', 'SteelSeries Arctis 6', 106, 68, 'ss-16.png'),
(5, 'm', 'SteelSeries', 'SteelSeries Rival 650', 110, 79, 'ss-8.png'),
(6, 'kb', 'HyperX', 'HyperX Aba', 112, 163, 'hx-19.jpg'),
(7, 'm', 'SteelSeries', 'SteelSeries Rival 150', 117, 220, 'ss-10.png'),
(8, 'm', 'SteelSeries', 'SteelSeries Sensei 430', 119, 110, 'ss-3.png'),
(9, 'm', 'Logitech', 'Logitech G903', 120, 102, 'g903.png'),
(10, 'hp', 'SteelSeries', 'SteelSeries Arctis Pro', 121, 243, 'ss-18.png'),
(11, 'm', 'SteelSeries', 'SteelSeries Sensei 435', 123, 157, 'ss-1.png'),
(12, 'kb', 'AKKO', 'AKKO Sakura', 124, 200, 'ak-2.jpg'),
(13, 'm', 'HyperX', 'HyperX PulseFire 550', 125, 56, 'hx-5.jpg'),
(14, 'kb', 'HyperX', 'HyperX H8', 128, 136, 'hx-24.jpg'),
(15, 'hp', 'HyperX', 'HyperX Cloud JoJo', 129, 93, 'hx-17.jpg'),
(16, 'hp', 'SteelSeries', 'SteelSeries Arctis X', 130, 250, 'ss-19.png'),
(17, 'm', 'Logitech', 'Logitech G502', 134, 231, 'g502.png'),
(18, 'kb', 'AKKO', 'AKKO Obaka', 138, 190, 'ak-10.jpg'),
(19, 'hp', 'Logitech', 'Logitech G PRO X', 139, 82, 'g-3.png'),
(20, 'kb', 'Logitech', 'Logitech G605', 139, 223, 'g-16.png'),
(21, 'hp', 'Logitech', 'Logitech G PRO X Ninja', 141, 149, 'g-9.png'),
(22, 'hp', 'HyperX', 'HyperX Cloud Alpha X', 141, 94, 'hx-13.jpg'),
(23, 'kb', 'Logitech', 'Logitech G609', 141, 67, 'g-20.png'),
(24, 'kb', 'AKKO', 'AKKO Mikasa', 143, 142, 'ak-5.jpg'),
(25, 'm', 'SteelSeries', 'SteelSeries Rival 750', 144, 204, 'ss-7.jpg'),
(26, 'kb', 'Logitech', 'Logitech G608', 145, 223, 'g-19.png'),
(27, 'kb', 'HyperX', 'HyperX CL', 150, 92, 'hx-21.jpg'),
(28, 'hp', 'HyperX', 'HyperX Cloud Core', 151, 152, 'hx-14.jpg'),
(29, 'hp', 'HyperX', 'HyperX Cloud 5', 157, 247, 'hx-9.jpg'),
(30, 'm', 'HyperX', 'HyperX PulseFire 3', 158, 211, 'hx-1.jpg'),
(31, 'm', 'SteelSeries', 'SteelSeries Sensei 650', 161, 54, 'ss-4.png'),
(32, 'kb', 'Logitech', 'Logitech G513', 162, 133, 'g-11.png'),
(33, 'm', 'HyperX', 'HyperX PulseFire Z', 164, 199, 'hx-4.jpg'),
(34, 'hp', 'HyperX', 'HyperX Cloud 2', 166, 72, 'hx-8.jpg'),
(35, 'm', 'Logitech', 'Logitech G502 Hero', 167, 157, 'g502-hero.png'),
(36, 'hp', 'Logitech', 'Logitech G633 Spectrum', 173, 163, 'g-6.png'),
(37, 'kb', 'AKKO', 'AKKO Kawaii', 174, 214, 'ak-8.jpg'),
(38, 'm', 'HyperX', 'HyperX PulseFire 650', 175, 65, 'hx-6.jpg'),
(39, 'hp', 'SteelSeries', 'SteelSeries Arctis 9X', 178, 120, 'ss-20.png'),
(40, 'm', 'SteelSeries', 'SteelSeries Rival 450', 179, 114, 'ss-9.png'),
(41, 'kb', 'HyperX', 'HyperX Hurricanger', 179, 233, 'hx-18.jpg'),
(42, 'm', 'SteelSeries', 'SteelSeries Rival 310', 186, 216, 'ss-5.jpg'),
(43, 'm', 'Logitech', 'Logitech G703', 187, 72, 'g703.png'),
(44, 'hp', 'Logitech', 'Logitech G PRO X Oculus', 188, 187, 'g-8.png'),
(45, 'hp', 'HyperX', 'HyperX Cloud Air', 189, 241, 'hx-11.jpg'),
(46, 'kb', 'AKKO', 'AKKO Boom', 191, 98, 'ak-9.jpg'),
(47, 'kb', 'AKKO', 'AKKO Pladis', 196, 89, 'ak-3.jpg'),
(48, 'kb', 'HyperX', 'HyperX HK', 196, 129, 'hx-22.jpg'),
(49, 'hp', 'SteelSeries', 'SteelSeries Arctis 1', 199, 140, 'ss-11.png'),
(50, 'm', 'Logitech', 'Logitech G303 CTG Orange', 201, 132, 'g303.jpg'),
(51, 'm', 'Logitech', 'Logitech Pro Wireless Carbon', 201, 78, 'gpro.png'),
(52, 'm', 'Logitech', 'Logitech G203', 204, 153, 'g203.jpg'),
(53, 'hp', 'Logitech', 'Logitech G532', 204, 140, 'g-5.png'),
(54, 'kb', 'Logitech', 'Logitech G606', 204, 135, 'g-17.png'),
(55, 'hp', 'Logitech', 'Logitech G933 Artemis', 206, 204, 'g-7.png'),
(56, 'hp', 'SteelSeries', 'SteelSeries Arctis 5', 206, 245, 'ss-15.png'),
(57, 'kb', 'Logitech', 'Logitech G603', 207, 125, 'g-14.png'),
(58, 'kb', 'AKKO', 'AKKO Ocean', 210, 60, 'ak-1.jpg'),
(59, 'kb', 'Logitech', 'Logitech G713', 211, 235, 'g-13.png'),
(60, 'kb', 'HyperX', 'HyperX TF 10', 212, 221, 'hx-23.jpg'),
(61, 'm', 'Logitech', 'Logitech Promouse', 214, 183, 'gpro2.png'),
(62, 'hp', 'SteelSeries', 'SteelSeries Arctis 2', 217, 78, 'ss-12.png'),
(63, 'kb', 'Logitech', 'Logitech G613', 222, 107, 'g-12.png'),
(64, 'hp', 'SteelSeries', 'SteelSeries Arctis 3', 223, 124, 'ss-13.png'),
(65, 'kb', 'AKKO', 'AKKO Baka Sussy', 224, 207, 'ak-7.jpg'),
(66, 'hp', 'SteelSeries', 'SteelSeries Arctis 4', 226, 80, 'ss-14.png'),
(67, 'hp', 'SteelSeries', 'SteelSeries Arctis 7', 226, 87, 'ss-17.png'),
(68, 'kb', 'HyperX', 'HyperX Supermatic', 226, 89, 'hx-20.jpg'),
(69, 'hp', 'Logitech', 'Logitech G432', 227, 187, 'g-1.png'),
(70, 'hp', 'Logitech', 'Logitech G PRO', 227, 108, 'g-2.png'),
(71, 'm', 'SteelSeries', 'SteelSeries Rival 550', 231, 222, 'ss-6.jpg'),
(72, 'm', 'SteelSeries', 'SteelSeries Sensei Fnatic', 231, 105, 'ss-2.jpg'),
(73, 'm', 'HyperX', 'HyperX PulseFire Pro', 232, 163, 'hx-3.jpg'),
(74, 'hp', 'Logitech', 'Logitech G654', 232, 69, 'g-10.png'),
(75, 'hp', 'Logitech', 'Logitech G433', 233, 84, 'g-4.png'),
(76, 'hp', 'HyperX', 'HyperX Cloud 8', 235, 103, 'hx-10.jpg'),
(77, 'm', 'HyperX', 'HyperX PulseFire 4', 236, 160, 'hx-2.jpg'),
(78, 'kb', 'AKKO', 'AKKO MIkochi', 240, 177, 'ak-6.jpg'),
(79, 'm', 'Logitech', 'Logitech G403', 242, 145, 'g403.png'),
(80, 'kb', 'Logitech', 'Logitech G604', 243, 106, 'g-15.png'),
(81, 'hp', 'HyperX', 'HyperX Cloud Sussy Baka', 246, 250, 'hx-12.jpg'),
(82, 'kb', 'AKKO', 'AKKO Eren', 246, 127, 'ak-4.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `btl_category`
--
ALTER TABLE `btl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `btl_product`
--
ALTER TABLE `btl_product`
  ADD PRIMARY KEY (`product_id`) USING BTREE;

--
-- Chỉ mục cho bảng `btl_slider`
--
ALTER TABLE `btl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Chỉ mục cho bảng `btl_user`
--
ALTER TABLE `btl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `btl_product`
--
ALTER TABLE `btl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `btl_slider`
--
ALTER TABLE `btl_slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `btl_user`
--
ALTER TABLE `btl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
