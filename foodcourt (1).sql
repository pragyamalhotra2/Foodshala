-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2020 at 04:25 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.0.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcourt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindata`
--

CREATE TABLE `admindata` (
  `ad_id` int(122) NOT NULL,
  `contact` varchar(122) NOT NULL,
  `imagename` varchar(122) NOT NULL,
  `c_time` varchar(122) NOT NULL,
  `pro_cat` varchar(111) NOT NULL,
  `type` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `product_id` int(111) NOT NULL,
  `section` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindata`
--

INSERT INTO `admindata` (`ad_id`, `contact`, `imagename`, `c_time`, `pro_cat`, `type`, `category`, `product_id`, `section`) VALUES
(11, 'User@gmail.com ', 'The-Best-Classic-Chili-550.jpg', '2020-05-16 12:53:40', '1', 'like', '488', 13, 'The Best Classic Chili Recipe'),
(12, 'User@gmail.com ', 'burg.jpg', '2020-05-16 12:53:42', '1', 'like', '434', 1, 'Cheese Burger'),
(13, 'User@gmail.com ', 'pan.jpg', '2020-05-16 12:53:43', '1', 'like', '232', 3, 'Masala Dosa'),
(14, 'User@gmail.com ', 'How-to-Make-Crispy-Egg-Rolls.jpg', '2020-05-16 13:02:10', '1', 'like', '440', 17, 'Crispy baked egg rolls'),
(15, 'Pragyamalhotra2@gmail.com ', 'cup.jpg', '2020-05-29 01:09:52', '1', 'like', '323', 10, 'Desserts for winter');

-- --------------------------------------------------------

--
-- Table structure for table `loginadmin`
--

CREATE TABLE `loginadmin` (
  `login_id` int(121) NOT NULL,
  `username` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `name` varchar(222) NOT NULL,
  `contact` varchar(122) NOT NULL,
  `user_type` varchar(111) NOT NULL,
  `custype` varchar(111) NOT NULL,
  `city` varchar(111) NOT NULL,
  `email` varchar(222) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginadmin`
--

INSERT INTO `loginadmin` (`login_id`, `username`, `password`, `name`, `contact`, `user_type`, `custype`, `city`, `email`) VALUES
(103, 'admin@gmail.com', '1', 'Golden', '08081801038', '0', 'Manager', 'Aligarh', 'admin@gmail.com'),
(104, 'user@gmail.com', '1', 'Albaik', '083128191921', '1', 'Self Service', 'Noida', 'user@gmail.com'),
(108, 'pragyamalhotra2@gmail.com', 'pragya23', 'Pragya Malhotra', '09540453661', '1', 'Home Delivery', 'delhi', 'pragyamalhotra2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(20) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `title` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `price` varchar(120) NOT NULL,
  `FileName` varchar(100) NOT NULL,
  `product_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '0-active,1-inactive',
  `collection` varchar(120) NOT NULL DEFAULT 'Restra',
  `description` varchar(111) NOT NULL,
  `material` varchar(111) NOT NULL,
  `mail` varchar(111) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_brand`, `title`, `category`, `price`, `FileName`, `product_status`, `collection`, `description`, `material`, `mail`) VALUES
(1, 'Yum yum cha', 'Loaded Burger', 'Fast_Food', '434', 'burg.jpg', '1', 'restra', 'Tasty Food with lots of veges and cheese', 'Veg', 'raiyan1@gmail.com'),
(2, 'Mamagoto', 'Sandwitch', 'Thai-Food', '67', 'sandv.jpg', '1', 'restra', 'Sandwitch with vegetables, cheese and chicken', 'Non Veg', 'raiyan1@gmail.com'),
(3, 'Big chill', 'Gulab jamun', 'Desserts', '232', 'cup.jpg', '1', 'restra', 'The best dish- loved by all', 'Non Veg Food', 'raiyan1@gmail.com'),
(4, 'KFC ', 'Panner Tikka ', 'Fast_Food', '332', 'pantikka.jpg', '1', 'restra', 'fresh from tandoor', 'Veg Food', 'raiyan1@gmail.com'),
(8, 'Royal-Kitchen', 'Warm Desserts  ', 'Fast-Food', '323', 'Giant-Buckeye-Cookie_EXPS_CIMZ19_242260_E09_13_4b.jpg', '1', 'Restra', 'Warm Desserts to Keep You Cozy on Cold Nights', 'Vegeterion', ' Raiyan@gmail.com'),
(9, 'Royal-Kitchen', 'jackfruit mix', 'Vegan-Food', '323', 'jackfruit-chilli-iceland_sw_recipe.jpg', '1', 'Restra', 'Spicy jackfruit with vegetables', 'Vegeterion', ' Raiyan@gmail.com'),
(10, 'Mamagoto', 'Gulab jamun cup', 'Fast-Food', '323', 'cup.jpg', '1', 'Restra', 'Delicious hot gulab jamuns cup. Best for winters', 'Vegeterion', ' Raiyan@gmail.com'),
(11, 'Mamagoto', 'Chocolate Pastry', 'Fast-Food', '433', 'exps19201_RDS011700016SC03_13_2b_WEB.jpg', '1', 'Restra', 'The desserts of my dreams have both chocolate and peanut butter. So, when I came up with this rich ...', 'Vegeterion', ' Raiyan@gmail.com'),
(12, 'Yum yum cha', 'Chilli Americano', 'Thai-Food', '788', 'all-american-chili.jpg', '1', 'Restra', 'A bowl of warm chilli which is perfect for people who like spicy food.', 'Vegeterion', ' Raiyan@gmail.com'),
(13, 'Big chill', 'The Best Classic Chili Recipe', 'Continental', '488', 'The-Best-Classic-Chili-550.jpg', '1', 'Restra', 'The Best Classic Chili - This traditional chili recipe is just like mom used to make with ground', 'Vegeterion', ' Raiyan@gmail.com'),
(14, 'Mamagoto', 'Hot chocolate', 'Desserts', '60', 'indian-food-500x500.jpg', '1', 'Restra', 'Best Food', 'Vegeterion', ' Raiyan@gmail.com'),
(15, 'Mamagoto', 'Thai-Food', 'Thai-Food', '350', 'Thaicurry.jpg', '1', 'Restra', 'Famous thai dish', 'Vegeterion', ' Raiyan@gmail.com'),
(16, 'Yum yum cha', 'Best Maharashtrian Veg Thalis', 'Fast-Food', '450', 'images (1).jpg', '1', 'Restra', 'Best Maharashtrian Veg Thalis for Gudi Padwa | LBB, Mumbai', 'Vegeterion', ' Raiyan@gmail.com'),
(17, 'Mamagoto', 'Crispy baked egg rolls', 'Fast-Food', '440', 'How-to-Make-Crispy-Egg-Rolls.jpg', '1', 'Restra', 'Step-by-step directions to make simple crispy baked egg rolls using fresh vegetables. Served with a ...', 'Vegeterion', ' Raiyan@gmail.com'),
(18, 'Yum yum cha', 'Egg backed noodles', 'Fast-Food', '250', 'exps9818_FM153592C03_24_3b-2-696x696.jpg', '1', 'Restra', 'These egg rolls are low in fat but the crispiness from baking will fool you into thinking they were ...', 'Vegeterion', ' Raiyan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userreview`
--

CREATE TABLE `userreview` (
  `u_id` int(121) NOT NULL,
  `usermail` varchar(200) NOT NULL,
  `imagename` varchar(200) NOT NULL,
  `price` varchar(111) NOT NULL,
  `quantity` varchar(111) NOT NULL,
  `category` varchar(111) NOT NULL,
  `c_time` varchar(111) NOT NULL,
  `title` varchar(111) NOT NULL,
  `mobile` varchar(111) NOT NULL,
  `address` varchar(222) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreview`
--

INSERT INTO `userreview` (`u_id`, `usermail`, `imagename`, `price`, `quantity`, `category`, `c_time`, `title`, `mobile`, `address`) VALUES
(285, 'User@gmail.com ', 'Giant-Buckeye-Cookie_EXPS_CIMZ19_242260_E09_13_4b.jpg', '323', '1', 'Fast-Food', '2020-05-16 12:58:34', 'Warm Desserts  ', '083128191921', 'sec6439 Delhi'),
(286, 'User@gmail.com ', 'How-to-Make-Crispy-Egg-Rolls.jpg', '440', '4', 'Fast-Food', '2020-05-16 13:02:29', 'Crispy baked egg rolls', '083128191921', 'Egg roll'),
(287, 'User@gmail.com ', 'How-to-Make-Crispy-Egg-Rolls.jpg', '440', '2', 'Fast-Food', '2020-05-16 14:12:45', 'Crispy baked egg rolls', '083128191921', 'gfgf'),
(288, 'Pragyamalhotra2@gmail.com ', 'cup.jpg', '323', '1', 'Fast-Food', '2020-05-29 01:09:10', 'Desserts for winter', '09540453661', 'aa-348 def col'),
(289, 'Pragyamalhotra2@gmail.com ', 'cup.jpg', '323', '1', 'Fast-Food', '2020-05-29 01:09:19', 'Desserts for winter', '09540453661', 'aa-348 def col'),
(290, 'Pragyamalhotra2@gmail.com ', 'cup.jpg', '323', '1', 'Fast-Food', '2020-05-29 01:09:29', 'Desserts for winter', '09540453661', 'aa-348 def col'),
(291, 'Pragyamalhotra2@gmail.com ', 'cup.jpg', '323', '1', 'Fast-Food', '2020-05-29 01:09:29', 'Desserts for winter', '09540453661', 'aa-348 def col'),
(292, 'Pragyamalhotra2@gmail.com ', 'Giant-Buckeye-Cookie_EXPS_CIMZ19_242260_E09_13_4b.jpg', '323', '1', 'Fast-Food', '2020-05-29 01:10:53', 'Warm Desserts  ', '09540453661', 'def col'),
(293, 'Pragyamalhotra2@gmail.com ', 'The-Best-Classic-Chili-550.jpg', '488', '1', 'Continental', '2020-05-29 13:50:57', 'The Best Classic Chili Recipe', '09540453661', 'a-404 def col'),
(294, 'Pragyamalhotra2@gmail.com ', 'The-Best-Classic-Chili-550.jpg', '488', '1', 'Continental', '2020-05-29 13:51:03', 'The Best Classic Chili Recipe', '09540453661', 'a-404 def col'),
(295, 'Pragyamalhotra2@gmail.com ', 'The-Best-Classic-Chili-550.jpg', '488', '1', 'Continental', '2020-05-30 16:01:31', 'The Best Classic Chili Recipe', '09540453661', 'hgfhgu'),
(296, 'Pragyamalhotra2@gmail.com ', 'indian-food-500x500.jpg', '60', '1', 'Desserts', '2020-05-30 16:27:26', 'Indian Food Thali', '09540453661', 'juhiu'),
(297, 'Pragyamalhotra2@gmail.com ', 'indian-food-500x500.jpg', '60', '1', 'Desserts', '2020-05-31 01:00:15', 'Hot chocolate', '09540453661', 'a-404 noida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindata`
--
ALTER TABLE `admindata`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `loginadmin`
--
ALTER TABLE `loginadmin`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `userreview`
--
ALTER TABLE `userreview`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindata`
--
ALTER TABLE `admindata`
  MODIFY `ad_id` int(122) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `loginadmin`
--
ALTER TABLE `loginadmin`
  MODIFY `login_id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `userreview`
--
ALTER TABLE `userreview`
  MODIFY `u_id` int(121) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
