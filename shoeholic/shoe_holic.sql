-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2023 at 07:09 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoe_holic`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `Area_id` int(5) NOT NULL,
  `Area_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`Area_id`, `Area_name`) VALUES
(1, 'Ghatlodia'),
(2, 'Ranip'),
(3, 'Navrangpura'),
(4, 'Sola'),
(5, 'Chandkheda'),
(6, 'prahladnagar'),
(7, 'sarkhej');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `Brand_id` int(5) NOT NULL,
  `Brand_name` varchar(20) NOT NULL,
  `Brand_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`Brand_id`, `Brand_name`, `Brand_logo`) VALUES
(1, 'Nike', 'Nike.png'),
(2, 'Addidas', 'Addidas.png'),
(3, 'Reebok', 'Reebok.png'),
(4, 'Bata', 'Bata.png'),
(5, 'Skechers', 'Sketchers.png'),
(6, 'Fila', 'fila.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_date` date NOT NULL,
  `User_id` int(11) NOT NULL,
  `P_id` int(11) NOT NULL,
  `Cart_quantity` int(11) NOT NULL,
  `Cart_price` int(11) NOT NULL,
  `Cart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_date`, `User_id`, `P_id`, `Cart_quantity`, `Cart_price`, `Cart_id`) VALUES
('2005-02-20', 3, 3, 2, 1000, 13),
('2005-02-20', 3, 17, 1, 2100, 14),
('2005-02-20', 3, 8, 1, 4000, 15),
('2021-02-23', 2, 13, 1, 1400, 16);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `C_id` int(5) NOT NULL,
  `C_name` varchar(20) NOT NULL,
  `C_des` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`C_id`, `C_name`, `C_des`) VALUES
(1, 'Men', 'It store men\'s product description.'),
(2, 'Women', 'It store women\'s product description.'),
(3, 'Kids', 'It store Kids\'s product description.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Contact_id` int(5) NOT NULL,
  `Contact_name` varchar(10) NOT NULL,
  `Contact_phone` varchar(13) NOT NULL,
  `Contact_email` varchar(50) NOT NULL,
  `Contact_message` varchar(150) NOT NULL,
  `Contact_subject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Contact_id`, `Contact_name`, `Contact_phone`, `Contact_email`, `Contact_message`, `Contact_subject`) VALUES
(1, 'Nirav', '+917383171393', 'niravgajera1@gmail.com', 'hello', 'how are you'),
(2, 'Bhavin', '+918758961221', 'bhavinjethwa1201@gmail.com', 'how are you ', 'fine'),
(3, 'Jay', '+918780732724', 'j4jpjaypatel@gmail.com', 'Hii', 'i am fine'),
(4, 'kaushal', '+919725819567', 'kaushalkapadiya123@gmail.com', 'hello', 'how are you'),
(5, 'Dhruvi', '+919574737912', 'kuldeeppatel1785@gmail.com', 'hii', 'i am fine'),
(6, 'jhygtf', '1234567', 'sm@gmail.com', 'jhuygfrdesf', 'gfgfgf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `F_id` int(5) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `F_date` date NOT NULL,
  `User_id` int(5) NOT NULL,
  `P_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`F_id`, `Feedback`, `F_date`, `User_id`, `P_id`) VALUES
(1, 'User can ask about there questions.', '2019-12-03', 2, 1),
(2, 'User can ask about there questions.', '2019-12-10', 6, 2),
(3, 'User can ask about there questions.', '2019-12-16', 4, 3),
(4, 'User can ask about there questions.', '2019-12-20', 3, 4),
(5, 'User can ask about there questions.', '2019-12-09', 5, 5),
(6, 'hi', '2020-02-02', 4, 23),
(7, 'errtfyuio', '2020-02-02', 4, 15),
(8, 'bad', '2020-02-02', 4, 14),
(9, 'it is good product.', '2020-02-05', 3, 8),
(10, 'it is good product.', '2020-02-05', 4, 14),
(11, 'helllo', '2020-02-10', 4, 18);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `Gallery_id` int(5) NOT NULL,
  `Gallery_path` varchar(200) NOT NULL,
  `Gallery_des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Gallery_id`, `Gallery_path`, `Gallery_des`) VALUES
(1, 'rebook.png', 'gallery disciption shows details of gallery'),
(2, 'nike.png', 'gallery disciption shows details of gallery'),
(3, 'addidas.png', 'gallery disciption shows details of gallery'),
(4, 'bata.png', 'gallery disciption shows details of gallery'),
(5, 'fila.jpg', 'gallery disciption shows details of gallery'),
(6, 'fila.jpg', 'gallery disciption shows details of gallery');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_id` int(5) NOT NULL,
  `Order_des` varchar(150) NOT NULL,
  `Order_date` date DEFAULT NULL,
  `Payment_status` varchar(100) NOT NULL,
  `User_id` int(5) NOT NULL,
  `Order_status` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`Order_id`, `Order_des`, `Order_date`, `Payment_status`, `User_id`, `Order_status`) VALUES
(1, 'it shows details of customer\'s orders ', '2019-12-08', 'cash on delivery', 4, 1),
(2, 'it shows details of customer\'s orders ', '2019-12-02', 'Paid', 2, 1),
(3, 'it shows details of customer\'s orders ', '2019-12-04', 'cash on delivey', 6, 2),
(4, 'it shows details of customer\'s orders ', '2019-12-15', 'cash on delivery', 3, 2),
(5, 'it shows details of customer\'s orders ', '2019-12-07', 'paid', 5, 1),
(6, 'order description', '2020-01-01', 'paid', 3, 2),
(7, 'order description', '2020-01-01', 'paid', 3, 2),
(1334, '', '2020-01-16', '0', 4, 2),
(1335, '', '2020-01-16', '0', 4, 2),
(1336, '', '2020-01-16', '0', 4, 0),
(1337, '', '2020-01-16', '0', 4, 0),
(1338, '', '2020-01-16', '0', 4, 0),
(1339, '', '2020-01-16', '0', 4, 0),
(1340, '', '2020-01-16', '0', 4, 0),
(1341, '', '2020-01-16', '0', 4, 0),
(1342, '', '2020-01-16', '0', 4, 0),
(1343, '', '2020-01-16', '0', 4, 0),
(1344, '', '2020-01-17', '0', 4, 0),
(1345, '', '2020-01-17', '0', 4, 0),
(1346, '', '2020-01-18', '0', 4, 0),
(1347, '', '2020-01-22', '0', 4, 0),
(1348, '', '2020-01-30', '0', 3, 2),
(1349, '', '2020-01-30', '0', 3, 1),
(1350, '', '2020-01-31', '0', 3, 2),
(1351, '', '2020-01-31', '0', 3, 1),
(1352, '', '2020-02-02', '0', 3, 1),
(1353, '', '2020-02-02', '0', 3, 0),
(1354, '', '2020-02-02', '0', 3, 0),
(1355, '', '2020-02-02', '0', 4, 0),
(1356, '', '2020-02-04', '0', 3, 0),
(1357, '', '2020-02-04', '0', 4, 0),
(1358, '', '2020-02-04', '0', 4, 0),
(1359, '', '2020-02-05', '0', 4, 0),
(1360, '', '2020-02-10', '0', 4, 1),
(1361, '', '2020-02-10', '0', 4, 0),
(1362, '', '2020-02-10', '0', 4, 2),
(1363, '', '2020-02-11', '0', 4, 2),
(1364, '', '2020-02-11', '0', 2, 2),
(1365, '', '2020-02-11', '0', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order details`
--

CREATE TABLE `order details` (
  `Order_Detail_id` int(5) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Order_id` int(5) NOT NULL,
  `P_id` int(5) NOT NULL,
  `Amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order details`
--

INSERT INTO `order details` (`Order_Detail_id`, `Quantity`, `Order_id`, `P_id`, `Amount`) VALUES
(6, 2, 1334, 18, 6800),
(7, 1, 1334, 7, 6800),
(8, 1, 1335, 7, 3000),
(9, 1, 1336, 8, 4000),
(10, 1, 1337, 8, 4000),
(11, 3, 1338, 18, 5700);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `P_id` int(5) NOT NULL,
  `P_name` varchar(20) NOT NULL,
  `P_des` varchar(150) NOT NULL,
  `P_price` int(10) NOT NULL,
  `P_quantity` int(15) NOT NULL,
  `P_image` varchar(250) NOT NULL,
  `P_Size` int(5) NOT NULL,
  `P_colour` varchar(20) NOT NULL,
  `Sub_C_id` int(5) NOT NULL,
  `Brand_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`P_id`, `P_name`, `P_des`, `P_price`, `P_quantity`, `P_image`, `P_Size`, `P_colour`, `Sub_C_id`, `Brand_id`) VALUES
(1, 'Sport shoes', 'It shows details about sport shoes.', 1500, 1, 'product-1.jpg', 10, 'black', 11, 2),
(2, 'Sneaker Shoes', 'It shows details about running shoes for Men.', 1200, 2, 'skechers4.png', 9, 'Black', 9, 5),
(3, 'Slippers', 'It shows details about slippers', 500, 2, 'nike11.png', 9, 'black', 10, 1),
(4, 'sandals', 'It shows details about sandals', 650, 1, 'adidas21.png', 8, 'black', 9, 2),
(5, 'sneakers', 'It shows details about sneakers', 1200, 1, 'product-7.jpg', 10, 'white', 9, 5),
(7, 'Addidas shoes', 'It is stylish and comfortable shoes.', 3000, 1, 'adidas1.png', 8, 'black', 11, 2),
(8, 'Addidas shoes', 'It is stylish and comfortable shoes.', 4000, 1, 'adidas2.png', 8, 'red', 11, 2),
(9, 'Addidas shoes', 'It is football shoes.', 4500, 1, 'adidas3.png', 10, 'blue', 11, 2),
(10, 'Addidas slippers', 'It is Addidas slippers and comfortable.', 900, 1, 'adidas11.png', 7, 'white', 10, 2),
(11, 'Addidas slippers', 'It is more comfortable for walk and it\'s type flip-flop.', 800, 1, 'adidas12.png', 9, 'black ', 10, 2),
(12, 'Addidas slippers', 'It is Addidas slippers and comfortable.', 1200, 1, 'adidas13.png', 10, 'black', 10, 2),
(13, 'Addidas Sandals', 'It is comfortable sandals and it\'s for man.', 1400, 1, 'adidas23.png', 9, 'Black & Grey', 8, 2),
(14, 'Addidas Sandals', 'It is comfortable sandals for man', 1100, 1, 'adidas24.png', 10, 'Yellow', 8, 2),
(15, 'Addidas Sandals', 'It is comfortable sandals and it\'s for man.', 1300, 1, 'adidas25.png', 7, 'Grey', 8, 2),
(16, 'Bata Shoes', 'It is comfortable sports shoes for man.', 1250, 1, 'bata6.png', 9, 'Black & Grey', 11, 4),
(17, 'Bata Shoes', 'It is comforable shoes for man.', 2100, 1, 'bata8.png', 10, 'Black & Grey', 11, 4),
(18, 'Bata Shoes', 'It is leather shoes for Man.', 1900, 1, 'bata10.png', 7, 'Brown', 6, 4),
(19, 'Bata Slippers', 'It is comfortable slippers for Woman.', 900, 1, 'bata11.png', 8, 'Black', 10, 4),
(20, 'Bata Slippers', 'It is comfortable slippers for Woman.', 1500, 1, 'bata12.png', 9, 'Cream & Black', 10, 4),
(21, 'Bata Slippers', 'It is comfortable slippers for Woman.', 800, 1, 'bata19.png', 8, 'Black & Cream', 10, 4),
(22, 'Bata Sandals', 'It is comfortable Sandals for Woman.', 1250, 1, 'bata21.png', 9, 'Black', 10, 4),
(23, 'Bata Sandals', 'It is comfortable Sandals for Woman.', 1000, 1, 'bata30.png', 8, 'Black', 8, 4),
(24, 'Bata Sandals', 'It is comfortable Sandals for Man.', 900, 1, 'bata23.png', 10, 'White & Blue', 8, 4),
(25, 'Bata Sandals', 'It is comfortable Sandals for Man.', 2000, 1, 'bata26.png', 8, 'Grey & White', 8, 4),
(26, 'Nike Shoes', 'It is comfortable Sports Shoes.', 2100, 1, 'nike1.png', 7, 'Black & White', 11, 1),
(27, 'NIke Shoes', 'It is comfortable Sports Shoes.', 2000, 1, 'nike2.png', 8, 'Black & Red', 11, 1),
(28, 'NIke Shoes', 'It is comfortable Sports Shoes.', 3000, 1, 'nike3.png', 9, 'Black', 11, 1),
(29, 'Nike Slippers', 'It is comfortable Slipers for Woman.', 900, 1, 'nike12.png', 7, 'Black', 10, 1),
(30, 'Nike Slippers', 'It is comfortable Slippers for Man.', 1000, 1, 'nike15.png', 8, 'Black', 10, 1),
(31, 'Nike Flip-Flop', 'It is comfortable Flip-Flop for Man.', 1200, 1, 'nike13.png', 9, 'Black & White', 10, 1),
(32, 'Skechers Shoes', 'It is comfortable Sports Shoes.', 1600, 1, 'skechers2.png', 9, 'Grey & Red', 11, 5),
(33, 'Skechers Shoes', 'It is comfortable Sports Shoes.', 1900, 1, 'skechers5.png', 10, 'Blue', 11, 5),
(34, 'Skechers Shoes', 'It is comfortable Sneakers Shoes.', 2100, 1, 'skecher4.png', 8, 'Grey & White', 9, 5),
(35, 'Skechers Sandals', 'It is comfortable Sandals.', 900, 1, 'skechers22.png', 8, 'Black', 8, 5),
(36, 'Skechers Sandals', 'It is comfortable Sandals for Woman.', 1200, 1, 'skechers24.png', 9, 'White & Brown', 8, 5),
(37, 'Skechers Sandals', 'It is comfortable Sandals for Woman.', 1500, 1, 'skechers25.png', 9, 'Cream & Grey', 8, 5),
(38, 'Skechers Slippers', 'It is comfortable Flip-Flop.', 1200, 1, 'skechers11.png', 9, 'Red & Black', 10, 5),
(39, 'Skecehers Slippers', 'It is comfortable Slippers.', 1000, 1, 'skechers12.png', 8, 'Blue', 10, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sub-category`
--

CREATE TABLE `sub-category` (
  `Sub_C_id` int(5) NOT NULL,
  `Sub_C_name` varchar(20) NOT NULL,
  `Sub_C_des` varchar(150) NOT NULL,
  `C_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub-category`
--

INSERT INTO `sub-category` (`Sub_C_id`, `Sub_C_name`, `Sub_C_des`, `C_id`) VALUES
(6, 'Loffer Shoes', 'Loffer Shoes Is stylish and Comfortable', 3),
(7, 'casual shoes', 'It stored casual shoes discription', 3),
(8, 'sandals', 'It stored sandals discription', 3),
(9, 'sneakers', 'It stored sneakers shoes discriptionnnn', 3),
(10, 'slippers', 'It stored slippers discription', 3),
(11, 'Sports Shoes', 'It stored sports shoes discription', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(5) NOT NULL,
  `User_name` varchar(15) NOT NULL,
  `User_img` varchar(150) DEFAULT NULL,
  `Password` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Contact_no` varchar(13) NOT NULL,
  `Created_date` date NOT NULL,
  `Area_id` int(5) NOT NULL,
  `Is_admin` int(1) NOT NULL,
  `otp` int(6) NOT NULL,
  `otpused` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_name`, `User_img`, `Password`, `Email`, `Address`, `Contact_no`, `Created_date`, `Area_id`, `Is_admin`, `otp`, `otpused`) VALUES
(2, 'Nirav Gajera', 'nirav2.jpg', 'nirav1', 'niravgajera1@gmail.com', 'F/08Parth Avenue Nr. Nalanda School,Ghatlodia', '+917383171393', '2019-11-30', 1, 1, 658614, 0),
(3, 'Jay', 'jay3.jpg', 'jay123', 'j4jpjaypatel@gmail.com', 'A/8 Mrudul Park scoeity part-2 Nr. Niraman Tower, Sola ', '+918780732724', '2019-12-01', 4, 0, 745518, 1),
(4, 'Bhavin ', NULL, 'bhavin@1', 'bhavinjethva1201@gmail.com', '28,Subhag Society,opp/Santaram Complex,Ranip', '+918758961221', '2019-12-02', 2, 0, 951546, 1),
(5, 'Kaushal', NULL, 'kaushal@123', 'kaushalkapadia@gmail.com', 'z-608, Virsavarkar appartment,Gota', '+919725819567', '2019-12-03', 5, 0, 0, 0),
(6, 'Dhruvi', NULL, 'dhruvi@123', 'dhruvipatel@gmail.com', '5,Elephanta Society, bh.Mirambika School,Navrangpura', '+918758579438', '2019-12-04', 3, 0, 0, 0),
(7, 'jimmy', NULL, 'jimmy12', 'shahjimmy@gamil.com', 'ghatlodia', '+918401277099', '0000-00-00', 4, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Wishlist_id` int(5) NOT NULL,
  `User_id` int(5) NOT NULL,
  `Product_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Wishlist_id`, `User_id`, `Product_id`) VALUES
(1, 4, 3),
(2, 3, 2),
(3, 6, 4),
(4, 2, 1),
(5, 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`Area_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`Brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`C_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Contact_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`F_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`Gallery_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `order details`
--
ALTER TABLE `order details`
  ADD PRIMARY KEY (`Order_Detail_id`),
  ADD KEY `Order_id` (`Order_id`),
  ADD KEY `Product_id` (`P_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`P_id`),
  ADD KEY `Sub_C_id` (`Sub_C_id`),
  ADD KEY `Brand_id` (`Brand_id`);

--
-- Indexes for table `sub-category`
--
ALTER TABLE `sub-category`
  ADD PRIMARY KEY (`Sub_C_id`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD KEY `Area_id` (`Area_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Wishlist_id`),
  ADD KEY `Product_id` (`Product_id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `Area_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `Brand_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `C_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Contact_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `F_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `Gallery_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1366;

--
-- AUTO_INCREMENT for table `order details`
--
ALTER TABLE `order details`
  MODIFY `Order_Detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `P_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `sub-category`
--
ALTER TABLE `sub-category`
  MODIFY `Sub_C_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Wishlist_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);

--
-- Constraints for table `order details`
--
ALTER TABLE `order details`
  ADD CONSTRAINT `order details_ibfk_1` FOREIGN KEY (`Order_id`) REFERENCES `order` (`Order_id`),
  ADD CONSTRAINT `order details_ibfk_2` FOREIGN KEY (`P_id`) REFERENCES `product` (`P_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Sub_C_id`) REFERENCES `sub-category` (`Sub_C_id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`Brand_id`) REFERENCES `brand` (`Brand_id`);

--
-- Constraints for table `sub-category`
--
ALTER TABLE `sub-category`
  ADD CONSTRAINT `sub-category_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `category` (`C_id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Area_id`) REFERENCES `area` (`Area_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`Product_id`) REFERENCES `product` (`P_id`),
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
