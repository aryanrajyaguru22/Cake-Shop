-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 01:13 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cakeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_register`
--

CREATE TABLE `admin_register` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `id` int(10) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_register`
--

INSERT INTO `admin_register` (`name`, `email`, `pass`, `id`, `image`) VALUES
('Rajyaguru Aryan', 'aryanrajyaguru22@gmail.com', 'aryan@2212', 65, '00000pIMG-20191201-WA0001~2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_subcate_id` int(11) NOT NULL,
  `cart_user_id` int(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `total` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `s_name` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_subcate_id`, `cart_user_id`, `quantity`, `weight`, `price`, `total`, `status`, `type`, `s_name`, `created_at`) VALUES
(19, 16, 21, '2', '0.5', '1600', '1600', 'success', 'Egg Less', 'Balloons,Candles,Fire Candles', '2021-05-16 05:10:04'),
(20, 28, 21, '1', '1', '6800', '6800', 'success', 'Egg', 'Candles,Fire Candles,Celebration Cap', '2021-05-16 05:10:25'),
(21, 12, 21, '5', '2', '1500', '15000', 'pending', 'Egg', 'Candles,Fire Candles,Spary', '2021-05-16 05:10:37'),
(22, 7, 29, '4', '2', '1100', '8800', 'success', 'Egg', 'Balloons,Candles,Fire Candles', '2021-05-16 05:11:24'),
(25, 38, 29, '3', '2', '1500', '9000', 'success', 'Egg Less', 'Balloons,Fire Candles,Spary', '2021-05-16 05:10:59'),
(43, 7, 0, '1', '1', '1100', '1100', 'pending', 'Egg', '', '2021-05-16 05:11:07'),
(44, 16, 29, '4', '3', '1600', '19200', 'success', 'Egg', 'Balloons,Candles,Fire Candles', '2021-05-16 05:11:18'),
(53, 12, 0, '1', '1', '1500', '1500', 'pending', 'Egg', 'Fire Candles,Celebration Cap,Spary', '2021-05-16 05:24:16'),
(65, 12, 29, '1', '1', '1500', '1500', 'success', 'Egg', 'Balloons,Candles,Fire Candles', '2021-05-18 11:28:43'),
(71, 67, 29, '1', '1', '1400', '1400', 'success', 'Egg', 'Candles', '2021-06-03 09:33:14'),
(77, 21, 31, '2', '1', '1700', '3400', 'pending', 'Egg Less', 'Balloons,Fire Candles,Spary', '2021-06-05 12:27:26'),
(79, 7, 29, '1', '3', '1100', '3300', 'success', 'Egg Less', 'Candles,Fire Candles,Celebration Cap', '2021-06-05 12:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `title` varchar(400) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `title`, `date`) VALUES
(7, 'Birthday Cakes', '2021-05-22 14:56:44'),
(9, 'Anniversary Cakes', '2021-05-22 14:56:48'),
(10, 'Baby Shower Cakes', '2021-05-22 14:56:51'),
(11, 'Pinata Cakes', '2021-05-22 14:56:57'),
(12, 'Wedding Cakes', '2021-05-22 14:57:10'),
(22, 'SuperHero Cakes', '2021-05-22 14:56:34'),
(23, 'Cartoon Cakes', '2021-05-22 15:29:49');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(10) NOT NULL,
  `sub_cat_id` int(30) NOT NULL,
  `c_name` varchar(600) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comments` longtext NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `sub_cat_id`, `c_name`, `email`, `comments`, `image`, `date`) VALUES
(45, 7, 'Manpreet singh', 'manpreet234@gmail.com', 'Liked the Rainbow  Cake , that made my birthday Very special and Colourful just like Rainbow.', '5844-1665-1922-5503-face12.jpg', '2021-05-12 11:48:53'),
(46, 8, 'Alexxa', 'alexxa123@gmail.com', 'This Red Rose Heart Cake made my Anniversary very Joyful', 'pexels-andrea-piacquadio-3756679.jpg', '2021-05-12 12:02:58'),
(47, 38, 'Karishma Khan', 'karishma54@gmail.com', 'The Unicorn Cake made our Baby shower very great.', 'pexels-mentatdgt-937483 (1).jpg', '2021-05-12 12:06:51'),
(48, 10, 'Ishan Modi', 'ishan345@gmail.com', 'I like the experience of smash the cake with hammer , Loved the cake', '5093-7356-5623-9378-face16.jpg', '2021-05-12 12:08:53'),
(49, 11, 'Sonali Thakker', 'sonali89@gmail.com', 'This Grooms Cake Made My Wedding Very Very Memorable.', 'pexels-emmy-e-2381069.jpg', '2021-06-07 13:11:21'),
(50, 43, 'Mukesh Soni', 'mukesh78@gmail.com', 'This Captain America Cake Is Really Masterpiece , I Really Liked It.', 'pexels-buro-millennial-1438081.jpg', '2021-06-07 13:16:11'),
(51, 51, 'Pranav jaani', 'jaani1999@gmail.com', 'My Little Daughter Really Like the Mini Mouse Cake And Her Happiness Is Priceless , Thank You For This Amazing Cake.', 'pexels-emre-keshavarz-3526923.jpg', '2021-06-07 13:18:31'),
(52, 18, 'jay patel', 'pateljay52@gmail.com', 'I Liked the Concept Of Oreo Kitkat Cake , It Was A Nice Experience.', 'pexels-ali-madad-sakhirani-997512.jpg', '2021-06-07 14:30:54'),
(53, 12, 'Fenil Panvala', 'fenil34@gmail.com', 'I am Just Loving The Red Velvet Cake Beacuse It has Heart Shape Which is Very Facsinating. ', 'pexels-andrea-piacquadio-3760263 (1).jpg', '2021-06-07 14:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `ct_id` int(8) NOT NULL,
  `ct_name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ct_subject` varchar(200) NOT NULL,
  `ct_message` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`ct_id`, `ct_name`, `email`, `ct_subject`, `ct_message`) VALUES
(5, 'Manpreet Singh', 'manpreet234@gmail.com', 'Delivery', 'How much time it take in Delivery?'),
(6, 'Alexxa', 'alexxa123@gmail.com', 'Payment', 'Can I pay with my Mastercard?\r\n'),
(7, 'Karishma Khan', 'karishma54@gmail.com', 'Address', 'Can I change my delivery address?');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `f_id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(3000) NOT NULL,
  `que` varchar(2000) NOT NULL,
  `ans` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`f_id`, `email`, `subject`, `que`, `ans`) VALUES
(10, 'alexxa123@gmail.com', 'Delivery', 'How much time it take in Delivery?', 'After order it will take 2 hours for delivery'),
(11, 'karishma54@gmail.com', 'Cake', 'How long does a cake stay fresh?', 'Our cakes stay fresh at room temperature up to one week.'),
(12, 'manpreet234@gmail.com', 'Cake', 'Do you sell sugar free cakes?', 'Yes , We sell sugar free cakes.'),
(13, 'ishan@gmail.com', 'Payment', 'What payment methods do you accept?', 'We accept Credit - Debit cards , Paytm , Phonepay , Gpay etc.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `m_id` int(8) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `ingredient` varchar(250) NOT NULL,
  `price` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`m_id`, `item_name`, `ingredient`, `price`) VALUES
(2, 'Rainbow Cake', 'white granulated sugar , butter softened , eggs , vanilla extract , buttermilk , heavy whipping cream , baking powder , Food coloring: red, yellow, blue, green', '1100'),
(3, 'Red Rose Heart Cake', 'cups cake flour, milk, egg whites, almond extract, vanilla extract , rose water , granulated sugar , baking powder , unsalted butter, softened roses', '2200'),
(13, 'Unicorn Cake	', 'cake flour ,sugar baking powder , unsalted butter, large egg whites, milk, vanilla extract , almond extract, rainbow jimmies', '1500'),
(14, 'Chocolate Hammer Cake', 'cooking oil spray , milk ,chocolate melts, Cadbury Favourites chocolates , party mix lollies Crispy M&Ms ,white chocolate melts , hammer', '1000'),
(15, 'Grooms Cake', 'sugar, cake flour, egg(s), egg whites, sour cream, whole milk, butter , leftover egg yolks.', '2700'),
(16, 'Red Velvet Cake	', 'cake flour ,cocoa powder ,unsalted butter, granulated white sugar ,eggs, pure vanilla extract ,buttermilk, liquid red food coloring , white distilled vinegar , baking soda', '1500'),
(22, ' Barbie Cake', 'yellow cake mix ,vanilla frosting ,red food coloring ,water, oil, eggs , cans frosting , candy sprinkles', '1600'),
(23, 'Kitkat Oreo Cake', 'flour , sugar , cocoa , coffee powder ,baking powder, baking soda , milk, canola ,large eggs , vanilla ,boiling water ,KitKat bars, mini Oreos', '1450'),
(24, 'KitKat Cake', 'chocolate cake mix, unsalted butter, chocolate fudge frosting , pound powdered sugar , heavy cream', '1550'),
(25, 'Rainbow Sprinkle Pinata Cake', 'caster sugar , vanilla extact ,eggs , flour , milk, assorted lollies , Wonka Rainbow Nerd, rainbow choc chips', '1300'),
(26, 'White Forest Cake', 'All purpose flour , Sugar , Egg , Butter , Vanilla Essence , Baking powder, Baking salt , White Chocolate bar , Whipping cream, Cherry', '1700'),
(27, 'Flowers Cake', 'cake flour , baking soda , egg white , full-fat sour cream, rainbow sprinkles , Vanilla Buttercream ,unsalted butter , sugar heavy cream , vanilla extract', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `order_email` varchar(100) NOT NULL,
  `order_phone` varchar(20) NOT NULL,
  `order_address` varchar(1000) NOT NULL,
  `o_date` varchar(30) NOT NULL,
  `order_city` varchar(100) NOT NULL,
  `order_notes` text NOT NULL,
  `order_final_amount` int(100) NOT NULL,
  `order_payment_type` varchar(100) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `order_cart_ids` varchar(100) NOT NULL,
  `order_product_ids` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_name`, `order_email`, `order_phone`, `order_address`, `o_date`, `order_city`, `order_notes`, `order_final_amount`, `order_payment_type`, `order_status`, `order_cart_ids`, `order_product_ids`) VALUES
(11, 'Karishma Khan', 'karishma123@gamil.com', '9423497756', 'Silver Stone Arcade , Vesu , Surat', '2021-05-22', 'Surat', 'fgfdg', 8400, 'Stripe', 'success', '19,20', '16,28'),
(12, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-15', 'Surat', 'gfdfg', 8800, 'Stripe', 'success', '22', '7'),
(13, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-29', 'Surat', 'gfhfgh', 1500, 'Stripe', 'Pending', '24', '38'),
(14, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-26', 'Surat', 'dgfdfgdf', 9000, 'Stripe', 'success', '25', '38'),
(15, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-27', 'Surat', 'hfghfgh', 19200, 'Stripe', 'success', '44', '16'),
(16, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-26', 'Surat', 'fdfsf', 4500, 'Stripe', 'Pending', '50', '12'),
(17, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-28', 'Surat', 'dfgdfg', 5800, 'Stripe', 'success', '59', '18'),
(18, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-22', 'Surat', 'frtyrty', 3300, 'Stripe', 'success', '61', '7'),
(19, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-05-29', 'Surat', 'dgdfgdf', 1500, 'Stripe', 'success', '65', '12'),
(20, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-07-02', 'Surat', 'jghj', 1400, 'Stripe', 'success', '71', '67'),
(21, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-20', 'Surat', 'dfdfg', 3100, 'Stripe', 'Pending', '73', '19'),
(22, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-26', 'Surat', 'ghdfggfh', 2200, 'Stripe', 'Pending', '75', '8'),
(23, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-15', 'Surat', 'dfgdfg', 1550, 'Stripe', 'Pending', '76', '19'),
(24, 'Karishma Khan', 'karishma54@gmail.com', '9124387756', 'Silver Stone Arcade , Rander , Surat', '2021-06-25', 'Surat', 'dhgfhgfh', 3400, 'Stripe', 'Pending', '77', '21'),
(25, 'Karishma Khan', 'karishma54@gmail.com', '9124387756', 'Silver Stone Arcade , Rander , Surat', '2021-06-25', 'Surat', 'dhgfhgfh', 3400, 'Stripe', 'Pending', '77', '21'),
(26, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-30', 'Surat', 'dfgdfgdfg', 3150, 'Stripe', 'Pending', '76,78', '19,57'),
(27, 'Manpreet Singh', 'manpreet234@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-17', 'Surat', 'hghgfh', 3300, 'Stripe', 'success', '79', '7'),
(28, 'Manpreet Singh', 'keyurmodi85@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-12', 'Surat', 'Add Some candles', 2200, 'Stripe', 'Pending', '86', '7'),
(29, 'Manpreet Singh', 'keyurmodi85@gmail.com', '9173457609', 'Shuffle Square , Adajan , Surat', '2021-06-09', 'Surat', '', 0, 'Stripe', 'Pending', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ourchef`
--

CREATE TABLE `ourchef` (
  `ch_id` int(30) NOT NULL,
  `ch_name` varchar(30) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `image` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ourchef`
--

INSERT INTO `ourchef` (`ch_id`, `ch_name`, `description`, `image`, `date`) VALUES
(6, 'Mitchell Sydney', 'Birthday Cake Specialist', '9746-1.jpg', '2021-04-08 16:23:18'),
(7, 'Geroge Bailey', 'Anniversary Cake Specialist', '8926-2.jpg', '2021-04-08 16:23:54'),
(8, 'Andre Istambul', 'Pinata Cake Specialists', '3437-3519-4089-3.jpg', '2021-04-08 16:24:14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `porder_id` int(11) NOT NULL,
  `pamount` text NOT NULL,
  `card_number` text NOT NULL,
  `expireDate` varchar(20) NOT NULL,
  `cvv_no` int(10) NOT NULL,
  `status` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `porder_id`, `pamount`, `card_number`, `expireDate`, `cvv_no`, `status`, `invoice`, `date`) VALUES
(1, 4, '905000', '4242424242424242', '02/23', 123, 'success', '19858787', '2021-04-29 13:02:14'),
(2, 4, '905000', '4242424242424242', '02/23', 123, 'success', '19728970', '2021-04-29 13:09:31'),
(3, 6, '160000', '4242424242424242', '02/23', 123, 'success', '41103111', '2021-04-29 13:17:20'),
(4, 7, '680000', '4242424242424242', '02/23', 123, 'success', '50126584', '2021-04-29 13:31:10'),
(5, 8, '100000', '4242424242424242', '02/23', 123, 'success', '21478673', '2021-04-29 13:35:16'),
(6, 9, '160000', '4242424242424242', '03/23', 123, 'success', '37450364', '2021-05-06 08:53:30'),
(7, 10, '750000', '4242424242424242', '08/23', 123, 'success', '89872770', '2021-05-06 08:57:33'),
(8, 11, '840000', '4242424242424242', '02/23', 123, 'success', '65223393', '2021-05-12 09:57:02'),
(9, 12, '880000', '4242424242424242', '02/23', 123, 'success', '84321201', '2021-05-13 05:47:29'),
(10, 14, '900000', '4242424242424242', '02/23', 123, 'success', '60602250', '2021-05-13 09:54:34'),
(11, 15, '1920000', '4242424242424242', '02/23', 456, 'success', '26244257', '2021-05-15 13:31:27'),
(12, 17, '580000', '4242424242424242', '02/23', 123, 'success', '94812545', '2021-05-16 11:37:45'),
(13, 18, '330000', '42424242424242', '02/23', 123, 'success', '41958746', '2021-05-17 07:29:55'),
(14, 19, '150000', '4242424242424242', '02/23', 123, 'success', '30584645', '2021-05-18 11:28:41'),
(15, 20, '140000', '4242424242424242', '02/23', 123, 'success', '69598156', '2021-06-03 09:33:14'),
(16, 27, '330000', '4242424242424242', '02/23', 123, 'success', '76961719', '2021-06-05 12:39:46');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(10) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `price` varchar(8) NOT NULL,
  `description` varchar(900) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `price`, `description`, `image`) VALUES
(32, 'dfdsf', '1000', 'qwqwqwqw', 'Cake-Making-L2-1200x600.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(8) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_title`, `image`) VALUES
(2, 'Balloons', '6802-service-2.png'),
(3, 'Candless', '676-6917-service-2 (1).png'),
(4, 'Knife', '1007-service-2 (2).png'),
(5, 'Fire Candle', '2518-service-2 (3).png'),
(6, 'Celebration Cap', '1862-service-2 (4).png'),
(7, 'Spray', '1177-service-2 (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `sid` int(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `content` varchar(900) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`sid`, `title`, `content`, `image`) VALUES
(8, 'SWEET CAKES', 'Nothing in this world is better than cake but more cake.', '3399-239-2728-112-3792-8863-new 3.jpg'),
(9, 'CAKE SHOP', 'Cake is a form of sweet food made from flour, sugar, and other ingredients, that is usually baked. In their oldest forms, cakes were modifications of bread, but cakes now cover', '5257-slider.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `content` varchar(900) NOT NULL,
  `description` varchar(900) NOT NULL,
  `price` varchar(8) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_cat_id`, `cat_id`, `content`, `description`, `price`, `image`, `date`) VALUES
(7, 7, 'Rainbow Cake', 'Not only is this rainbow cake beautiful and colorful, but it also tastes really delicious. Made from my famous white velvet cake recipe and easy buttercream, this rainbow cake makes the perfect special occasion cake!', '1100', 'GDS_0051-600x600.jpg', '2021-05-13 05:30:26'),
(8, 9, 'Red Rose Heart Cake ', 'This stunning and elegant rose cake is perfect for Valentine’s Day or your next special occasion! My uniquely flavored rose water cake is made with rose-water cake layers, rose buttercream, rose water syrup and rose marmalade filling on the inside.', '2200', 'red-rose-heart-cakea-600x600.jpg', '2021-05-12 11:19:51'),
(10, 11, 'Chocolate Hammer Cake', 'These are heart-shaped cakes with a hammer. These 3-D looking cakes are called Pinata cakes and have taken the internet by a storm for a good reason. They’re incredibly fun to make and can be filled with anything you want- making for a great surprise.', '1000', 'smash-the-heart-pinata-cake-600x600.jpg', '2021-05-12 11:23:15'),
(11, 12, 'Grooms Cake', 'A groom cake is simply a wedding cake entirely influenced by the groom, representing his tastes and favorite hobbies. The groom cake is typically served at either the rehearsal dinner or alongside the wedding cake at the reception.', '2700', '671-2212-2120-pexels-alicia-zinn-159993.jpg', '2021-05-12 11:24:20'),
(12, 9, 'Red Velvet Cake', 'This cake is incredibly soft, moist, buttery, and topped with an easy cream cheese frosting.', '1500', '15391548495672-600x600.jpg', '2021-05-12 11:25:06'),
(18, 7, 'Kitkat Oreo Cake', '“The Oreo Kit Kat Cake!” I am not ashamed to call this the “heart attack” cake: A rich, chocolate espresso cake with a sweet chocolate buttercream, decorated with Kit Kats, Whoppers, M&Ms.', '1450', '44324_chocooreo-kit-kat-cake.jpg', '2021-05-12 11:25:59'),
(19, 7, 'KitKat Cake', 'Kit Kat Cake is a chocolate layer cake with chocolate buttercream frosting, surrounded by Kit Kat candy bars, then topped with M&M’s and tied with a big bow for a festive, fun party cake!', '1550', 'starburst-kitkat-cake.jpg', '2021-05-12 11:26:30'),
(20, 11, 'Rainbow Pinata Cake', 'This is the ultimate Rainbow cake… rainbow sponge, rainbow buttercream, rainbow piping! The fun doesn’t stop there with a sprinkle surprise inside!', '1300', 'Rainbow.jpg', '2021-05-12 11:26:58'),
(21, 9, 'White Forest Cake', 'This White Forest Cake is a variation on the traditional Black Forest Cake. It is made of vanilla cake layers that are brushed with syrup and filled with homemade cherry jam and vanilla cream. Perfect cake for cherry lovers that is also a great idea for hosting', '1700', '8114-pexels-jonathan-borba-5610326.jpg', '2021-05-12 11:27:46'),
(38, 10, 'Unicorn Cake', 'Unicorn-inspired layer cake is the pinnacle of cuteness—perfect for a birthday party or for anyone who’s just super into the current unicorn craze.', '1500', '154288597613-600x600.jpg', '2021-05-12 11:22:33'),
(43, 22, 'Captain America Cake', 'This Captain America cake will steal your heart with its beatutiful looks', '800', '23.jpg', '2021-05-22 15:03:15'),
(44, 22, 'Spidermen Cake', 'That Spider face in the cake make the cake very Awsome look cake', '850', '14.jpg', '2021-05-22 15:12:22'),
(45, 22, 'Supermen Cake', 'The Design of Supermen cake is really megnificiant to viewers', '750', '25.jpg', '2021-05-22 15:16:49'),
(46, 22, 'Batmen Cake', 'This Batmen cake is Famous because of its Killer Look ', '900', '27.jpg', '2021-05-22 15:18:20'),
(47, 22, 'Spidermen Web Cake', 'The Design of this cake is really unbelivable because of spider in web and the eyes of Spidermen look damn', '1000', '15.jpg', '2021-05-22 15:36:22'),
(48, 22, 'SuperHero Special Cake', 'The Speciality Of this cake is it is Combined Of all the SuperHeros ', '1100', '16.jpg', '2021-05-22 15:27:17'),
(49, 22, 'Avengers Cake', 'This Cake Is Specially Made for the Avengers Fan', '900', '22.jpg', '2021-05-22 15:29:03'),
(50, 22, 'Captain America Shield Cake', 'This Captain America Shield cake is Looks Awsome With the Standing men with Shield', '1000', 'captain-america-cake-500x500.jpg', '2021-05-22 15:39:18'),
(51, 23, 'Minnie Mouse Cake', 'This Cute Minnie Mouse Cake Is Really an Amazing Art Among the Cakes', '1100', '33890_minnie-mouse-cartoon-cake.jpg', '2021-05-24 16:27:36'),
(52, 23, 'Doraemon Cake', 'This Doraemon Cake Can Cherish Your Childhood Memories', '1000', '6.jpg', '2021-05-24 16:21:14'),
(53, 23, 'Barbie Cake', 'This Princess Barbie cake is every little girls dream. Delicious vanilla sponge cake decorated beautifully in pink, this cake makes the prettiest birthday celebration cake.', '1000', 'barbie-girl-cake-007-600x600.jpg', '2021-05-24 16:24:53'),
(54, 23, 'Mickey Mouse Cake', 'This Mickey Mouse Cake Has Stunning look that Everyone Shocked !!', '800', '11.jpg', '2021-05-24 16:31:41'),
(55, 7, 'Foodie Special Cake', 'This Cake Is Specially Made for Foodie people Who likes to Eat Everything.', '1300', '30.jpg', '2021-05-24 16:34:59'),
(56, 7, 'Cute Panda Cake', 'This Small Panda On the Cake Is look Very Wonderful', '900', '17.jpg', '2021-05-24 16:38:21'),
(57, 7, 'Jerry Berry Cake', 'This Cake is Fully Covered with Strawberry , Cherry etc', '800', '12.jpg', '2021-05-24 16:40:37'),
(58, 7, 'Burger Cake', 'This Cake Is Specially Made For The Burger Lover ', '700', '21.jpg', '2021-05-24 16:43:42'),
(59, 7, 'Rainbow Vanilla Cake', 'This Cake Is Made up Of Vanilla Creame And There Are Small Rainbow On the Cake Which Makes the Cake Beautiful', '750', '24.jpg', '2021-05-24 16:46:37'),
(60, 10, 'Boy Or Girl Cake', 'Hip Hip Hooray The Baby On His / Her Way', '1050', '10.jpg', '2021-05-24 16:53:42'),
(61, 10, 'Candy Castle Cake', 'Cake Fully Covered with Too Many Candies And Look very Georgeous.', '1300', '28.jpg', '2021-05-27 15:59:46'),
(62, 12, 'Happy Couple Cake', 'A Couple cake is simply a wedding cake entirely influenced by the couple, representing their tastes and favorite hobbies', '1500', '2.jpg', '2021-05-27 16:03:56'),
(63, 12, 'Rose Fondant Cake', 'Fondant is a playdough-like sugar paste that can be rolled out and draped over a simple or sculpted cake. It is usually kneaded until very silky and pliable and can be used to create a smooth seamless finish on cakes in any color.', '1400', '1.jpg', '2021-05-27 16:07:28'),
(64, 12, 'New Journey Cake', 'This Cake Is Very Very Special For The New Couple As they Starting New Journey', '1650', '29.jpg', '2021-05-27 16:19:36'),
(65, 9, 'White Tiered Cake', 'Cake With Too Many Tiers And Mini Cup Cakes Are looking Very Adorable.', '1350', '9.jpg', '2021-05-27 16:25:15'),
(66, 9, 'Butterfly Cake', 'Make this pretty butterfly cake to celebrate Anniversary', '1100', '19.jpg', '2021-05-27 16:32:44'),
(67, 9, 'Flowers Cake', 'Flower wedding cakes are so versatile that they can be adapted to fit almost any wedding theme. Go the rustic route with scattered buds and greenery at the cake base. A confection with gold accents or intricate sugar flowers in between each layer befits a glamorous affair.', '1400', 'pexels-jai-kumar-5186877.jpg', '2021-05-27 16:34:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `u_id` int(8) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(300) NOT NULL,
  `image` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`u_id`, `name`, `email`, `pass`, `phone`, `address`, `image`) VALUES
(40, 'Shalin Shah', 'shalinshah07@gmail.com', '12345678', '1234567890', 'Block: B 3rd floor,132 Premchand Nagar Judges Bunglow Road Ahmedabad 380054\r\nJudges Bunglow Road / Premchand Nagar', 'download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_register`
--
ALTER TABLE `admin_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `ourchef`
--
ALTER TABLE `ourchef`
  ADD PRIMARY KEY (`ch_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_cat_id`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_register`
--
ALTER TABLE `admin_register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `ct_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `m_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `ourchef`
--
ALTER TABLE `ourchef`
  MODIFY `ch_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `sid` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `u_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
