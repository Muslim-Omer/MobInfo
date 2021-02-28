-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2021 at 10:29 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobinfo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobiles_info_tb`
--

CREATE TABLE `mobiles_info_tb` (
  `id` int(100) NOT NULL,
  `product_name` varchar(999) NOT NULL,
  `year` int(100) NOT NULL,
  `size` varchar(999) NOT NULL,
  `cpu` varchar(999) NOT NULL,
  `gpu` varchar(999) NOT NULL,
  `internal_memory` varchar(999) NOT NULL,
  `dual_camera` varchar(999) NOT NULL,
  `video_camera` varchar(999) NOT NULL,
  `single_selfie` varchar(999) NOT NULL,
  `video_selfie` varchar(999) NOT NULL,
  `type_battery` varchar(999) NOT NULL,
  `image_link` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles_info_tb`
--

INSERT INTO `mobiles_info_tb` (`id`, `product_name`, `year`, `size`, `cpu`, `gpu`, `internal_memory`, `dual_camera`, `video_camera`, `single_selfie`, `video_selfie`, `type_battery`, `image_link`) VALUES
(3, 'Iphone 8 Plus', 2017, '5.5 inches, 83.4 cm2 (~67.4% screen-to-body ratio)', 'Hexa-core (2x Monsoon + 4x Mistral)', 'Apple GPU (three-core graphics)', '64GB 3GB RAM, 128GB 3GB RAM, 256GB 3GB RAM', '12 MP, f/1.8, 28mm (wide), PDAF, OIS', '4K@24/30/60fps, 1080p@30/60/120/240fps', '7 MP, f/2.2, 32mm (standard)', '1080p@30fps', 'Li-Ion 2691 mAh, non-removable (10.28 Wh)', 'https://www.google.com/search?q=iphone+x+info&safe=active&sxsrf=ALeKk01Oz3-Y7bKGehIje9KxMIToltzMIQ:1614183260708&source%20%20%20%20%20%20%20%20%20%20=lnms&tbm=isch&sa=X&ved=2ahUKEwjA_-ye9YLvAhVSyoUKHcM9Bn0Q_AUoAXoECA8QAw&biw=1536&bih=722#imgrc=ZIuKAmz6i-AIkM'),
(4, 'Xiaomi Mi 10', 2020, '6.67 inches, 109.2 cm2 (~89.8% screen-to-body ratio)', 'Octa-core (1x2.84 GHz Kryo 585 & 3x2.42 GHz Kryo 585 & 4x1.80 GHz Kryo 585)', 'Adreno 650', '128GB 8GB RAM, 256GB 8GB RAM, 256GB 12GB RAM', '108 MP, f/1.7, (wide), 1/1.33\", 0.8µm, PDAF, OIS 13 MP, f/2.4, 12mm (ultrawide), 1/3.06\", 1.12µm 2 MP, f/2.4, (macro) 2 MP, f/2.4, (depth)', '8K@30fps, 4K@30/60fps, 1080p@30/60fps; gyro-EIS', '20 MP, f/2.0, (wide), 1/3\", 0.9µm', '1080p@30fps', 'Li-Po 4780 mAh, non-removable', 'https://www.google.com/search?q=Xiaomi+Mi+10&client=firefox-b-d&source=lnms&tbm=isch&sa=X&ved=2ahUKEwi8rKGonI3vAhU18uAKHUpRAyIQ_AUoAXoECA8QAw&biw=1366&bih=654#imgrc=MGUzX06xQ-4PZM'),
(5, 'Samsung Galaxy S20', 2020, '6.2 inches, 93.8 cm2 (~89.5% screen-to-body ratio)', 'Octa-core (2x2.73 GHz Mongoose M5 & 2x2.50 GHz Cortex-A76 & 4x2.0 GHz Cortex-A55) - Global', 'Mali-G77 MP11 - Global', '128GB 8GB RAM', '12 MP, f/1.8, 26mm (wide), 1/1.76\", 1.8µm, Dual Pixel PDAF, OIS 64 MP, f/2.0, 29mm (telephoto), 1/1.72\", 0.8µm, PDAF, OIS, 1.1x optical zoom, 3x hybrid zoom 12 MP, f/2.2, 13mm, 120&#730; (ultrawide), 1/2.55\" 1.4µm, Super Steady video', '8K@24fps, 4K@30/60fps, 1080p@30/60/240fps, 720p@960fps, HDR10+, stereo sound rec., gyro-EIS & OIS', '10 MP, f/2.2, 26mm (wide), 1/3.24\", 1.22µm, Dual Pixel PDAF', '4K@30/60fps, 1080p@30fps', 'Li-Ion 4000 mAh, non-removable', 'https://www.google.com/search?q=Samsung+Galaxy+S20&client=firefox-b-d&source=lnms&tbm=isch&sa=X&ved=2ahUKEwjmw-eBwo3vAhVZA2MBHRW5BssQ_AUoAXoECAIQAw&biw=1366&bih=654#imgrc=2GbFR1zadyk30M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobiles_info_tb`
--
ALTER TABLE `mobiles_info_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobiles_info_tb`
--
ALTER TABLE `mobiles_info_tb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
