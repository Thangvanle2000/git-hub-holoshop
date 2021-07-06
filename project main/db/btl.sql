-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 06, 2021 lúc 09:37 AM
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
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `btl_category`
--
ALTER TABLE `btl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
