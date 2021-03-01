-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2021 at 12:30 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'iPhone X', 2017, '5.8 inches, 84.4 cm2 (~82.9% screen-to-body ratio)', 'Hexa-core 2.39 GHz (2x Monsoon + 4x Mistral)', 'Apple GPU (three-core graphics)', '64GB 3GB RAM, 256GB 3GB RAM', '12 MP, f/1.8, 28mm (wide), 1/3\", 1.22?m, dual pixel PDAF, OIS', '4K@24/30/60fps, 1080p@30/60/120/240fps', '7 MP, f/2.2, 32mm (standard)', '1080p@30fps', 'Li-Ion 2716 mAh, non-removable (10.35 Wh)', 'https://images.macrumors.com/article-new/2017/09/iphonexdesign-1-800x597.jpg'),
(2, 'Iphone 8 Plus', 2017, '5.5 inches, 83.4 cm2 (~67.4% screen-to-body ratio)', 'Hexa-core (2x Monsoon + 4x Mistral)', 'Apple GPU (three-core graphics)', '64GB 3GB RAM, 128GB 3GB RAM, 256GB 3GB RAM', '12 MP, f/1.8, 28mm (wide), PDAF, OIS', '4K@24/30/60fps, 1080p@30/60/120/240fps', '7 MP, f/2.2, 32mm (standard)', '1080p@30fps', 'Li-Ion 2716 mAh, non-removable (10.35 Wh)', 'https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/refurb-iphone8plus-gold?wid=1144&hei=1144&fmt=jpeg&qlt=80&op_usm=0.5,0.5&.v=1542226472760'),
(3, 'galaxy A6', 2018, '5.6 inches, 79.6 cm2 (~75.0% screen-to-body ratio)', 'Octa-core 1.6 GHz Cortex-A53', 'Mali-T830 MP1', '32GB 3GB RAM, 64GB 4GB RAM', '16 MP, f/1.7, 26mm (wide), PDAF', '1080p@30fps', '16 MP, f/1.9, 26mm (wide), 1/3.06\", 1.0?m', '1080p@30fps', 'Li-Ion 3000 mAh, non-removable', 'https://www.notebookcheck.net/uploads/tx_nbc2/SamsungGalaxyA6_2018__1_.JPG');

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
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
