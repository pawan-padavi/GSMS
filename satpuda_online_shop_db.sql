-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2021 at 09:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satpuda_online_shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_registration`
--

CREATE TABLE `admin_registration` (
  `aid` int(11) NOT NULL,
  `cmpunqid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL,
  `usrname` varchar(50) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `rpwd` varchar(20) NOT NULL,
  `cmpname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_registration`
--

INSERT INTO `admin_registration` (`aid`, `cmpunqid`, `fname`, `mname`, `lname`, `profile`, `usrname`, `pwd`, `rpwd`, `cmpname`) VALUES
(2021072724, 7777, '777', '777', '777', '1957490480.jpg', 'pppp@mail.com', '4477', '4477', '4477'),
(2021100130, 1111, 'pawan', 'randansing', 'padavi', '419741061.png', 'padavipawansing@gmail.com', '123456', '123456', 'GSMS');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `c_id` bigint(20) DEFAULT NULL,
  `p_id` bigint(20) DEFAULT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` mediumint(9) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `date_time` datetime DEFAULT current_timestamp(),
  `payment_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `client_registration`
--

CREATE TABLE `client_registration` (
  `c_id` bigint(20) NOT NULL,
  `c_fname` varchar(30) NOT NULL,
  `c_mname` varchar(30) NOT NULL,
  `c_lname` varchar(30) NOT NULL,
  `c_mobile` bigint(20) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_profilepic` varchar(50) DEFAULT NULL,
  `c_village` varchar(50) DEFAULT NULL,
  `tehsil` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `pincode` bigint(20) DEFAULT NULL,
  `c_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_registration`
--

INSERT INTO `client_registration` (`c_id`, `c_fname`, `c_mname`, `c_lname`, `c_mobile`, `c_email`, `c_profilepic`, `c_village`, `tehsil`, `district`, `state`, `pincode`, `c_password`) VALUES
(80421023303, 'pawansing', 'Randansing', 'padavi ', 8788707848, 'padavipawansing@gmail.com', '30281682.jpg', 'Lakdya Hanuman', 'shirpur', 'dhule', 'maharashtra', 425405, '123456'),
(310521030314, 'Sanjay', 'karan', 'pawara', 8888888888, 'sanjay@gmail.com', '1225659965.jpg', 'Dhule', 'Dhule', 'dhule', 'maharashtra', 425405, '87878787');

-- --------------------------------------------------------

--
-- Table structure for table `dispatchproduct`
--

CREATE TABLE `dispatchproduct` (
  `dp_id` int(11) NOT NULL,
  `ordid` bigint(20) DEFAULT NULL,
  `c_id` bigint(20) DEFAULT NULL,
  `p_id` bigint(20) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `payment` varchar(30) DEFAULT NULL,
  `dispatched_from` varchar(50) DEFAULT NULL,
  `deliverd_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispatchproduct`
--

INSERT INTO `dispatchproduct` (`dp_id`, `ordid`, `c_id`, `p_id`, `p_quantity`, `payment`, `dispatched_from`, `deliverd_at`) VALUES
(2105313457, 2131053455, 80421023303, 130825, 2, 'C_CARD', '2021:05:31', '2021:06:02'),
(2105313501, 2131053491, 80421023303, 300341, 2, 'C_CARD', '2021:05:31', '2021:06:02'),
(2105315921, 2131055834, 80421023303, 133434, 1, 'OLN_B', '2021:05:31', '2021:06:02'),
(2106013112, 2101061288, 80421023303, 130825, 5, 'D_CARD', '2021:06:01', '2021:06:03'),
(2106013115, 2101061365, 80421023303, 133434, 2, 'D_CARD', '2021:06:01', '2021:06:03'),
(2106015009, 2131055811, 80421023303, 300341, 2, 'OLN_B', '2021:06:01', '2021:06:03'),
(2106021928, 2102061686, 310521030314, 133434, 2, 'D_CARD', '2021:06:02', '2021:06:04'),
(2106021932, 2101063902, 80421023303, 300341, 2, 'C_CARD', '2021:06:02', '2021:06:04'),
(2106023539, 2102063489, 80421023303, 133434, 4, 'C_CARD', '2021:06:02', '2021:06:04'),
(2106023540, 2102063436, 80421023303, 130825, 3, 'C_CARD', '2021:06:02', '2021:06:04'),
(2106023543, 2102063422, 80421023303, 300341, 3, 'C_CARD', '2021:06:02', '2021:06:04'),
(2106023547, 2102063483, 80421023303, 315301, 5, 'C_CARD', '2021:06:02', '2021:06:04'),
(2106100654, 2110060467, 80421023303, 102939, 3, 'COD', '2021:06:10', '2021:06:12'),
(2106100657, 2110065637, 80421023303, 133434, 1, 'COD', '2021:06:10', '2021:06:12'),
(2106100704, 2110065708, 80421023303, 315301, 2, 'COD', '2021:06:10', '2021:06:12'),
(2106101118, 2110060975, 80421023303, 105147, 4, 'D_CARD', '2021:06:10', '2021:06:12'),
(2106101437, 2110061416, 80421023303, 105147, 2, 'COD', '2021:06:10', '2021:06:12'),
(2106101715, 2110061149, 80421023303, 105552, 3, 'OLN_B', '2021:06:10', '2021:06:12'),
(2106102351, 2110062203, 80421023303, 105552, 5, 'D_CARD', '2021:06:10', '2021:06:12'),
(2106103449, 2110063431, 80421023303, 300341, 1, 'D_CARD', '2021:06:10', '2021:06:12'),
(2106103747, 2110063673, 80421023303, 133434, 3, 'D_CARD', '2021:06:10', '2021:06:12'),
(2106170759, 2117060663, 80421023303, 105814, 2, 'D_CARD', '2021:06:17', '2021:06:19');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordid` bigint(20) NOT NULL,
  `c_id` bigint(20) DEFAULT NULL,
  `p_id` bigint(20) DEFAULT NULL,
  `p_name` varchar(50) DEFAULT NULL,
  `p_price` mediumint(9) DEFAULT NULL,
  `p_quantity` int(11) DEFAULT NULL,
  `total` bigint(20) DEFAULT NULL,
  `payment` varchar(50) DEFAULT NULL,
  `cart_date` datetime DEFAULT NULL,
  `payment_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordid`, `c_id`, `p_id`, `p_name`, `p_price`, `p_quantity`, `total`, `payment`, `cart_date`, `payment_date`) VALUES
(2101061288, 80421023303, 130825, 'Chicken Masala', 220, 5, 1100, 'D_CARD', '2021-06-01 13:42:25', '01:06:21:01:43:41'),
(2101061365, 80421023303, 133434, 'Red_chilli', 800, 2, 1600, 'D_CARD', '2021-06-01 13:43:01', '01:06:21:01:43:41'),
(2101063902, 80421023303, 300341, 'Coriender Powder', 500, 2, 1000, 'C_CARD', '2021-06-01 14:08:27', '01:06:21:02:08:38'),
(2102061686, 310521030314, 133434, 'Red_chilli', 800, 2, 1600, 'D_CARD', '2021-06-02 20:46:08', '02:06:21:08:46:17'),
(2102063422, 80421023303, 300341, 'Coriender Powder', 500, 3, 1500, 'C_CARD', '2021-06-02 22:04:15', '02:06:21:10:04:38'),
(2102063436, 80421023303, 130825, 'Chicken Masala', 220, 3, 660, 'C_CARD', '2021-06-02 22:04:20', '02:06:21:10:04:38'),
(2102063483, 80421023303, 315301, 'Kali masoor', 200, 5, 1000, 'C_CARD', '2021-06-02 22:04:25', '02:06:21:10:04:38'),
(2102063489, 80421023303, 133434, 'Red_chilli', 800, 4, 3200, 'C_CARD', '2021-06-02 22:04:10', '02:06:21:10:04:38'),
(2110060467, 80421023303, 102939, 'suffola edible oil', 700, 3, 2100, 'COD', '2021-06-10 11:34:31', '10:06:21:11:35:32'),
(2110060975, 80421023303, 105147, 'Musturd Oil', 500, 4, 2000, 'D_CARD', '2021-06-10 09:39:16', '10:06:21:09:39:53'),
(2110061149, 80421023303, 105552, 'Hing Powder', 140, 3, 420, 'OLN_B', '2021-06-10 11:41:13', '10:06:21:11:41:26'),
(2110061416, 80421023303, 105147, 'Musturd Oil', 500, 2, 1000, 'COD', '2021-06-10 09:43:33', '10:06:21:09:43:46'),
(2110062203, 80421023303, 105552, 'Hing Powder', 140, 5, 700, 'D_CARD', '2021-06-10 14:52:02', '10:06:21:02:52:16'),
(2110063431, 80421023303, 300341, 'Coriender Powder', 500, 1, 500, 'D_CARD', '2021-06-10 10:03:51', '10:06:21:10:03:57'),
(2110063673, 80421023303, 133434, 'Red_chilli', 800, 3, 2400, 'D_CARD', '2021-06-10 15:06:11', '10:06:21:03:06:27'),
(2110065637, 80421023303, 133434, 'Red_chilli', 800, 1, 800, 'COD', '2021-06-10 10:25:52', '10:06:21:10:26:50'),
(2110065708, 80421023303, 315301, 'Kali masoor', 200, 2, 400, 'COD', '2021-06-10 10:26:08', '10:06:21:10:26:50'),
(2117060663, 80421023303, 105814, 'Musturd oil', 500, 2, 1000, 'D_CARD', '2021-06-17 08:36:44', '17:06:21:08:37:02'),
(2131053455, 80421023303, 130825, 'Chicken Masala', 220, 2, 440, 'C_CARD', '2021-06-01 01:03:55', '01:06:21:01:04:13'),
(2131053491, 80421023303, 300341, 'Coriender Powder', 500, 2, 1000, 'C_CARD', '2021-06-01 01:04:02', '01:06:21:01:04:13'),
(2131055811, 80421023303, 300341, 'Coriender Powder', 500, 2, 1000, 'OLN_B', '2021-06-01 01:27:50', '01:06:21:01:28:09'),
(2131055834, 80421023303, 133434, 'Red_chilli', 800, 1, 800, 'OLN_B', '2021-06-01 01:27:43', '01:06:21:01:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` bigint(20) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_img` varchar(50) NOT NULL,
  `pdesc` varchar(100) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `p_brand` varchar(50) NOT NULL,
  `c_format` varchar(20) NOT NULL,
  `p_price` double NOT NULL,
  `p_search` varchar(50) NOT NULL,
  `pd_ck` varchar(1) NOT NULL,
  `date_time` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_img`, `pdesc`, `c_name`, `sc_name`, `p_brand`, `c_format`, `p_price`, `p_search`, `pd_ck`, `date_time`) VALUES
(102939, 'suffola edible oil', '128220053.jpeg', 'suffola edivle oil', 'Sauces', 'Marrow', 'suffola', '₹', 700, 'suffola', 'o', '10-Jun-2021 11:29:39'),
(105147, 'Musturd Oil', '249464476.jpeg', 'Musturd Oil', 'Sauces', 'cutted', 'Musturd oil', '₹', 500, 'Musturd oil', 'o', '10-Jun-2021 06:51:47'),
(105552, 'Hing Powder', '340320179.jpeg', 'hing Powder', 'Deli', 'Dry', 'Hing Powder', '₹', 140, 'Hing Powder can', 'o', '10-Jun-2021 06:55:52'),
(105814, 'Musturd oil', '2057339179.jpeg', 'Kachi Ghani musturd oil', 'Sauces', 'leafy', 'Kachi Ghani Musturd oil', '₹', 500, 'Kachi Ghani oil', 'o', '10-Jun-2021 06:58:14'),
(130825, 'Chicken Masala', '2020966771.jpeg', 'chicken curry masala', 'Meat', 'Allium', 'Chicken masala', '₹', 220, 'chicken curry', 'o', '13-May-2021 15:08:25'),
(133434, 'Red_chilli', '566879490.jpeg', 'Red Chilli', 'Wheat', 'Chana', 'Red chilli', '₹', 800, 'Red chilli', 'o', '13-May-2021 13:34:34'),
(300341, 'Coriender Powder', '834841265.jpeg', 'Coriender Powder', 'Wheat', 'Chana', 'Tata Sampann', '₹', 500, 'Coriender powder  Tata sampann', 'o', '30-May-2021 18:03:41'),
(315301, 'Kali masoor', '863119072.jpeg', 'kali massor', 'Cereal', 'Dry', 'kali massor', '₹', 200, 'kali massor', 'o', '31-May-2021 14:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `p_ck` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`c_id`, `c_name`, `p_ck`) VALUES
(212538, 'Vegetables', '1'),
(212624, 'Canned Goods', '1'),
(212822, 'Condiments and Spices', '1'),
(212843, 'Sauces and oils', '1'),
(212914, 'Snacks', '1'),
(212928, 'Bread and Backery', '1'),
(212950, 'Bevarges', '1'),
(213006, 'Pasta and Rice', '1'),
(213026, 'Cereal', '1'),
(213039, 'Baby Items', '1'),
(213056, 'Baking Items', '1'),
(213110, 'Personal Care', '1'),
(213540, 'Health Care', '1'),
(213559, 'Other Items', '1'),
(213625, 'Legumes', '1'),
(213711, 'Grains', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_delivery`
--

CREATE TABLE `product_delivery` (
  `pdid` int(11) NOT NULL,
  `dp_id` int(11) DEFAULT NULL,
  `d_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_delivery`
--

INSERT INTO `product_delivery` (`pdid`, `dp_id`, `d_status`) VALUES
(2, 2105313457, 'Deliverd'),
(3, 2106013112, 'deliverd'),
(7, 2106023540, 'deliverd'),
(11, 2105315921, 'deliverd'),
(21, 2106013115, 'deliverd'),
(23, 2106101118, 'deliverd'),
(24, 2106101437, 'deliverd'),
(26, 2106103449, 'deliverd'),
(27, 2106100704, 'deliverd'),
(28, 2106102351, 'deliverd'),
(29, 2106103747, 'deliverd'),
(30, 2106170759, 'return');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `img_id` int(11) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `p_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_quantity`
--

CREATE TABLE `product_quantity` (
  `p_qnt_id` int(11) NOT NULL,
  `p_id` bigint(20) DEFAULT NULL,
  `p_qnt` int(11) DEFAULT NULL,
  `p_measure` varchar(10) DEFAULT NULL,
  `p_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_quantity`
--

INSERT INTO `product_quantity` (`p_qnt_id`, `p_id`, `p_qnt`, `p_measure`, `p_stock`) VALUES
(20210514, 315301, 5, '㎏', 628),
(20210527, 130825, 4, '㎏', 175),
(20210545, 300341, 5, '㎏', 192),
(20210548, 133434, 10, '㎏', 188),
(20210614, 102939, 5, '㎏', 97),
(20210617, 105814, 1, '㎏', 118),
(20210633, 105147, 5, '㎏', 149),
(20210638, 105552, 100, 'gm', 125);

-- --------------------------------------------------------

--
-- Table structure for table `product_sub_category`
--

CREATE TABLE `product_sub_category` (
  `sc_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `sc_name` varchar(50) NOT NULL,
  `sp_ck` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sub_category`
--

INSERT INTO `product_sub_category` (`sc_id`, `c_name`, `sc_name`, `sp_ck`) VALUES
(212814, 'Sauces', 'ketchup', '1'),
(212854, 'Bevarges', 'cold', '1'),
(213000, 'Legumes', 'cutted', '1'),
(213055, 'Legumes', 'rounded', '1'),
(213146, 'Fruits', 'Dry Fruits', '1'),
(213449, 'Fruits', 'Fruits', '1'),
(213610, 'Vegetables', 'Allium', '1'),
(213654, 'Vegetables', 'Marrow', '1'),
(213717, 'Vegetables', 'leafy green', '1'),
(213740, 'Vegetables', 'Cruciferous', '1'),
(213827, 'Vegetables', 'Root', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_registration`
--
ALTER TABLE `admin_registration`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `usrname` (`usrname`),
  ADD UNIQUE KEY `pwd` (`pwd`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `cart_ibfk_1` (`p_id`);

--
-- Indexes for table `client_registration`
--
ALTER TABLE `client_registration`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `c_email` (`c_email`),
  ADD UNIQUE KEY `c_password` (`c_password`),
  ADD UNIQUE KEY `c_mobile` (`c_mobile`);

--
-- Indexes for table `dispatchproduct`
--
ALTER TABLE `dispatchproduct`
  ADD PRIMARY KEY (`dp_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `ordid` (`ordid`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordid`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `product_delivery`
--
ALTER TABLE `product_delivery`
  ADD PRIMARY KEY (`pdid`),
  ADD UNIQUE KEY `dp_id` (`dp_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD PRIMARY KEY (`p_qnt_id`),
  ADD KEY `product_quantity_ibfk_1` (`p_id`);

--
-- Indexes for table `product_sub_category`
--
ALTER TABLE `product_sub_category`
  ADD PRIMARY KEY (`sc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_delivery`
--
ALTER TABLE `product_delivery`
  MODIFY `pdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_delivery`
--
ALTER TABLE `product_delivery`
  ADD CONSTRAINT `product_delivery_ibfk_1` FOREIGN KEY (`dp_id`) REFERENCES `dispatchproduct` (`dp_id`);

--
-- Constraints for table `product_quantity`
--
ALTER TABLE `product_quantity`
  ADD CONSTRAINT `product_quantity_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
