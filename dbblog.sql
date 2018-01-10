-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2017 at 08:58 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_post`
--

CREATE TABLE `blog_post` (
  `id` int(11) NOT NULL,
  `cattype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `headline` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_post`
--

INSERT INTO `blog_post` (`id`, `cattype`, `headline`, `title`, `description`, `image`, `date`) VALUES
(1, 'php', 'jahid', 'Md: Korim ali khan', 'fdfsdfsdfds', 'images/free.jpeg', '2017-11-18 07:17:31'),
(2, 'css', 'Online news in bangladesh', 'BD News 24.com', 'My favorite news in prothm alo  in bangladesh. so i like is bangla news....', 'images/123steps.jpg', '2017-11-18 07:23:01'),
(3, 'php', 'Online news in bangladesh', 'BD News 24.com', 'My favorite news in prothm alo  in bangladesh. so i like is bangla news....', '../assets/images/123steps.jpg', '2017-11-18 06:57:11'),
(4, 'css', 'Bangladesh cricket tournament in Mirpur.', 'Bangladesh Crricket', 'Bangladesh cricket game in favorite game. I like is Bangladesh cricket game. ', '../assets/images/12.jpg', '2017-11-18 06:57:31'),
(5, 'java', 'new post', 'addpost', 'Post data in database', '../assets/images/13.jpg', '2017-11-18 06:57:49'),
(6, 'HTML', 'Smoyer Knotoshor', 'padma multipurpose bridge', 'The project covers three districts â€”Munshiganj (Mawa Point/North bank), Shariatpur and Madaripur (Janjira/South bank). The total area of land to be acquired and required for its components is 918 hectares. The requisition of land for the construction yard will be for six years on a rental basis. As per the new design, an additional 144.04 ha has been identified for acquisition, bringing the total to 1062.14 hectares. This additional land is required because project site lost significant land due to erosion, for transition structures and due to a change in railway alignment.', '../assets/images/Padm.jpg', '2017-11-18 06:58:04'),
(7, 'Web Design', 'raham', 'Md: Jahidul islam', 'fdsdfsdfsfsdfsd', 'images/Padm.jpg', '2017-11-18 11:08:54'),
(8, '5', 'Computer engineer intern program   ', 'Computer department', 'Computer subject is very hart subject...\r\nSo this very  problem....', '../assets/images/03.jpg', '2017-11-18 05:19:50'),
(9, '', 'Load Shedding', 'Automatic load shedding: ', 'Fail-safe power supply for core components \r\nIn case of overload, automatic load shedding stabilizes the power supply of large-scale industrial plants through the prioritized disconnection of consumers, thereby ensuring that core processes remain under power in critical situations and expensive downtimes are avoided. This function is especially important when grid stability is put at risk by critical events. In this case, low priority consumers are disconnected in order to restore the balance between energy generation and consumption. \r\n\r\nPrepared for every eventuality \r\nTo ensure grid stability at all times, the automatic load shedding system analyzes all possible fault patterns in advance and calculates which loads will need to be disconnected. In the event of a fault, the system recognizes which of these scenarios pertains and disconnects the relevant consumers within a tenth of a second.\r\n\r\n', '../assets/images/52.jpg', '2017-11-18 06:52:46'),
(10, '', 'Load Shedding', 'Automatic load shedding: ', 'Fail-safe power supply for core components \r\nIn case of overload, automatic load shedding stabilizes the power supply of large-scale industrial plants through the prioritized disconnection of consumers, thereby ensuring that core processes remain under power in critical situations and expensive downtimes are avoided. This function is especially important when grid stability is put at risk by critical events. In this case, low priority consumers are disconnected in order to restore the balance between energy generation and consumption. \r\n\r\nPrepared for every eventuality \r\nTo ensure grid stability at all times, the automatic load shedding system analyzes all possible fault patterns in advance and calculates which loads will need to be disconnected. In the event of a fault, the system recognizes which of these scenarios pertains and disconnects the relevant consumers within a tenth of a second.\r\n\r\n', 'images/52.jpg', '2017-11-18 07:15:15'),
(11, '', 'My Test', 'Test Page', 'My Name is jahidul islam  village name is Mymensingh....', '../assets/images/123.jpg', '2017-11-18 07:09:37'),
(12, '', 'new post', 'Test Title', 'My Mother is a best person in my life???????>', 'images/12.jpg', '2017-11-18 07:19:51'),
(13, '', 'Test Post', '', '', '../assets/images/', '2017-11-18 12:41:33'),
(14, '', 'Test Post Headline', 'Test Post', 'Test post content..', '../assets/images/123.jpg', '2017-11-18 12:42:53'),
(15, '', 'Image Test', 'My Image In Check', 'My Image is in ban glades green tree.', 'images/c196da45-c8f2-4db9-ae44-61ffe702b34d.jpg', '2017-11-19 05:13:16'),
(16, '', 'Image Test', 'My Image In Check', 'My Image is in ban glades green tree.', 'images/c196da45-c8f2-4db9-ae44-61ffe702b34d.jpg', '2017-11-19 05:15:01'),
(17, '', 'Image Test', 'My Image In Check', 'My Image is in ban glades green tree.', '../../images/c196da45-c8f2-4db9-ae44-61ffe702b34d.jpg', '2017-11-19 05:18:04'),
(18, '', 'new post', 'result test', 'My result test in image', '../../images/c196da45-c8f2-4db9-ae44-61ffe702b34d.jpg', '2017-11-19 06:13:13'),
(19, '', 'new post', 'result test', 'My result test in image', '../assets/images/c196da45-c8f2-4db9-ae44-61ffe702b34d.jpg', '2017-11-19 06:15:07'),
(20, '', 'new post', 'Md: Korim ali khan', 'igjfdfireojrfm,ffiljrsffgjdfgotertlkfdkldjktrefwrfsd', '../assets/images/e54e355c-4ff7-4c3e-b08b-d8ce649ca5a3.jpg', '2017-11-19 07:06:07'),
(21, '', 'new post', 'Md: Korim ali khan', 'igjfdfireojrfm,ffiljrsffgjdfgotertlkfdkldjktrefwrfsd', '../assets/images/e54e355c-4ff7-4c3e-b08b-d8ce649ca5a3.jpg', '2017-11-19 07:30:11'),
(22, '', '', '', '', '../assets/images/', '2017-11-19 15:10:20'),
(23, '', 'jahid', 'Md: Korim ali khan', '', '../assets/images/ChromeSetup.exe', '2017-11-19 15:11:04'),
(24, '', '', '', '', '../assets/images/bootstrap-4.0.0-beta.2.zip', '2017-11-19 15:11:42'),
(25, '', 'Load Shedding', 'Test Title', 'My name Jahidul islam village name is Bhaluka mymensingh.', '../assets/images/14.jpg', '2017-11-20 05:49:52'),
(26, '', '', '', '', '../assets/images/', '2017-11-21 05:31:37'),
(27, '', '', '', '', '../assets/images/', '2017-11-21 05:40:36'),
(28, '', '', '', '', '../assets/images/', '2017-11-21 05:41:00'),
(29, '', '', '', '', '../assets/images/', '2017-11-21 06:05:13'),
(30, '', '', '', '', '../assets/images/', '2017-11-21 06:05:34'),
(31, '', '', '', '', '../assets/images/', '2017-11-21 06:05:41'),
(32, '', 'new post', 'Md: Korim ali khan', 'kkoklk hhjjh jkh kjhjkh', '../assets/images/2.gif', '2017-11-21 06:11:03');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `catename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `catename`, `date`) VALUES
(1, 'HTML', '2017-11-09 13:35:09'),
(2, 'CSS', '2017-11-12 12:27:33'),
(3, 'Web Design', '2017-11-09 13:49:55'),
(4, 'Freebies', '2017-11-09 13:50:15'),
(5, 'JavaScript', '2017-11-09 13:50:25'),
(6, 'Tutorials', '2017-11-09 13:50:36'),
(7, 'php\r\n', '2017-11-18 06:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `categorydata`
--

CREATE TABLE `categorydata` (
  `id` int(11) NOT NULL,
  `catename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorydata`
--

INSERT INTO `categorydata` (`id`, `catename`, `title`, `description`, `date`) VALUES
(1, 'HTML', 'Web design and development', 'My favorite part is web design and development..... ', '2017-11-12 13:59:51');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `comment`, `date`) VALUES
(1, '', '', '2017-11-07 20:15:08'),
(2, '', '', '2017-11-07 20:15:13'),
(3, '', 'Hello jahid?????', '2017-11-07 20:15:27'),
(4, '', 'Hello jahid?????', '2017-11-07 20:17:05'),
(5, '', 'hello kire???', '2017-11-07 20:17:19'),
(6, '', 'hello kire???', '2017-11-07 20:19:06'),
(7, '', 'hi jahid????', '2017-11-07 20:19:17'),
(8, '', 'hi jahid????', '2017-11-07 20:23:02'),
(9, 'string(1) ', '', '2017-11-07 20:23:05'),
(10, 'string(1) ', '', '2017-11-07 20:23:36'),
(11, '1', 'result', '2017-11-07 20:23:41'),
(12, '1', 'check???', '2017-11-07 20:25:53'),
(13, '', 'Hello Jahidul islam????/', '2017-11-07 20:26:47'),
(14, '', 'Hello Jahidul islam????/', '2017-11-07 20:29:43'),
(15, '2', 'hi jahid???', '2017-11-07 20:34:12'),
(16, '2', 'hi jahid???', '2017-11-07 20:43:45'),
(17, '2', 'hi jahid???', '2017-11-07 20:45:27'),
(18, '1', 'test comment???', '2017-11-07 20:47:27'),
(19, '1', 'test comment???', '2017-11-07 20:49:32'),
(20, '4', 'good flower???', '2017-11-07 20:50:47'),
(21, '2', 'hi jahid???', '2017-11-12 10:46:53'),
(22, '1', 'hello', '2017-11-18 12:39:03'),
(23, '6', 'hey', '2017-11-18 12:39:48'),
(24, '2', '', '2017-11-19 06:22:07'),
(25, '2', '', '2017-11-19 06:22:22'),
(26, '2', '', '2017-11-19 06:22:33'),
(27, '1', 'Hi jahid???\r\n', '2017-11-19 07:31:20'),
(28, '1', '', '2017-11-19 07:31:28'),
(29, '1', '', '2017-11-19 07:32:02'),
(30, '1', '', '2017-11-19 07:32:25'),
(31, '1', '', '2017-11-19 07:32:43'),
(32, '1', '', '2017-11-19 07:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`id`, `name`, `bday`, `image`) VALUES
(10, 'John Doe', '13-februar-1987', 'images/download.png'),
(18, 'jahidul islam', '4-juni-1973', 'images/2.gif'),
(19, 'korim khan', '7-april-1973', 'images/image.jpg'),
(20, 'korim khan', '7-april-1973', 'images/image.jpg'),
(21, 'korim khan', '7-april-1973', 'images/image.jpg'),
(22, 'korim khan', '7-april-1973', 'images/image.jpg'),
(23, 'korim khan', '7-april-1973', 'images/image.jpg'),
(24, 'korim khan', '7-april-1973', 'images/image.jpg'),
(25, 'korim khan', '7-april-1973', 'images/image.jpg'),
(26, 'korim khan', '7-april-1973', 'images/image.jpg'),
(27, 'korim khan', '7-april-1973', 'images/image.jpg'),
(28, 'korim khan', '7-april-1973', 'images/image.jpg'),
(29, 'korim khan', '7-april-1973', 'images/image.jpg'),
(30, 'korim khan', '7-april-1973', 'images/image.jpg'),
(31, 'korim khan', '7-april-1973', 'images/image.jpg'),
(32, 'korim khan', '7-april-1973', 'images/image.jpg'),
(33, 'korim khan', '7-april-1973', 'images/image.jpg'),
(34, 'korim khan', '7-april-1973', 'images/image.jpg'),
(35, 'korim khan', '7-april-1973', 'images/image.jpg'),
(36, 'korim khan', '7-april-1973', 'images/image.jpg'),
(37, 'korim khan', '7-april-1973', 'images/image.jpg'),
(38, 'korim khan', '7-april-1973', 'images/image.jpg'),
(39, '', 'Day-Month-Year', 'images/'),
(40, '', 'Day-Month-Year', 'images/'),
(41, '', 'Day-Month-Year', 'images/'),
(42, '', 'Day-Month-Year', 'images/'),
(43, '', 'Day-Month-Year', 'images/'),
(44, '', 'Day-Month-Year', 'images/'),
(45, '', 'Day-Month-Year', 'images/'),
(46, '', 'Day-Month-Year', 'images/'),
(47, '', 'Day-Month-Year', 'images/'),
(48, '', 'Day-Month-Year', 'images/'),
(49, '', 'Day-Month-Year', 'images/'),
(50, '', 'Day-Month-Year', 'images/'),
(51, '', 'Day-Month-Year', 'images/loading.gif'),
(52, '', 'Day-Month-Year', 'images/loading.gif'),
(53, '', 'Day-Month-Year', 'images/loading.gif'),
(54, 'jahid', 'Day-Month-Year', 'images/loading.gif'),
(55, '', 'Day-Month-Year', 'images/'),
(56, '', 'Day-Month-Year', 'images/'),
(57, '', 'Day-Month-Year', 'images/images.jpg'),
(58, '', 'Day-Month-Year', 'images/images.jpg'),
(59, '', 'Day-Month-Year', 'images/20979604_516558175352010_135100419_n.gif'),
(60, '', 'Day-Month-Year', 'images/image (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'jahidul', 'islam', 'jahedulislam337@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(2, 'monir', 'khan', 'Monir@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(3, 'korim', 'khan', 'korimkhan@gmail.com', '8a38231f964a73d71277eef0893f9fcb3700b8b5'),
(4, 'robiul', 'islam', 'Robiol@gmail.com', 'dea742e166979027ae70b28e0a9006fb1010e760'),
(5, 'kamrol', 'islam', 'kamarol@gmail.com', '16f604fc68a53995f8587f74bfbf030c823a08bb'),
(6, 'Tanbir', 'Islam', 'tanbir@gmail.com', '83d120a75f4af36a60ad09b1a1c21ded48d5fe50'),
(7, 'jahid', 'khan', 'jahid@gmail.com', '3d4f2bf07dc1be38b20cd6e46949a1071f9d0e3d'),
(8, 'ripon', 'miah', 'ripon@gmail.com', '48058e0c99bf7d689ce71c360699a14ce2f99774'),
(9, 'redoy', 'khan', 'redoy@gmail.com', '8a38231f964a73d71277eef0893f9fcb3700b8b5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_post`
--
ALTER TABLE `blog_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorydata`
--
ALTER TABLE `categorydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `practice`
--
ALTER TABLE `practice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_post`
--
ALTER TABLE `blog_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `categorydata`
--
ALTER TABLE `categorydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `practice`
--
ALTER TABLE `practice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
