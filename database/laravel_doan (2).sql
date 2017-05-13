-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2017 at 04:58 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(2, 'GUCCI', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'LX', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'lascost', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `cates`
--

CREATE TABLE `cates` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cates`
--

INSERT INTO `cates` (`id`, `name`, `alias`, `order`, `parent_id`, `keywords`, `description`, `created_at`, `updated_at`) VALUES
(54, 'Sơ mi nam', 'so-mi-nam', 1, 0, 'sơ mi nam', 'sơ mi nam', '2017-03-24 23:38:07', '2017-03-24 23:38:07'),
(55, 'Thời trang mùa đông', 'thoi-trang-mua-dong', 2, 0, 'Thời trang mùa đông', 'Thời trang mùa đông', '2017-03-24 23:38:43', '2017-03-24 23:38:43'),
(56, 'Áo gió', 'ao-gio', 3, 55, 'áo gió', 'áo gió', '2017-03-25 00:26:29', '2017-03-25 00:26:29'),
(57, 'Áo nỉ', 'ao-ni', 4, 55, 'Áo nỉ', 'Áo nỉ', '2017-03-25 00:26:56', '2017-03-25 00:26:56'),
(58, 'Áo len', 'ao-len', 5, 55, 'Áo len', 'Áo len', '2017-03-25 00:27:19', '2017-03-25 00:27:19'),
(59, 'Thời trang hè', 'thoi-trang-he', 7, 0, 'Thời trang mùa hè', '                                	Thời trang mùa hè\r\n                                ', '2017-03-25 00:27:52', '2017-03-25 00:32:21'),
(60, 'Đồ lót', 'do-lot', 8, 59, 'Đồ lót', 'Đồ lót', '2017-03-25 00:29:09', '2017-03-25 00:29:09'),
(61, 'Áo thun', 'ao-thun', 9, 59, 'Áo thun', 'Áo thun', '2017-03-25 00:29:34', '2017-03-25 00:29:34'),
(62, 'Quần ngố', 'quan-ngo', 11, 59, 'Quần ngố', 'Quần ngố', '2017-03-25 00:33:18', '2017-03-25 00:33:18');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `color_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `color_name`, `created_at`, `updated_at`) VALUES
(1, 'Nâu', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Vàng', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Xanh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tím', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `madeins`
--

CREATE TABLE `madeins` (
  `id` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `madeins`
--

INSERT INTO `madeins` (`id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'US', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'japan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'chine', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'korea', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'VietNam', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `mate_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `mate_name`, `created_at`, `updated_at`) VALUES
(1, 'bò', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'thô', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Da', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'phông', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_08_25_015848_create_cates_table', 1),
('2016_08_25_021124_create_products_table', 2),
('2016_08_25_022145_create_product_images_table', 3),
('2016_10_25_081421_create_transactions_table', 4),
('2016_10_25_082441_create_orders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_viewed` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `transaction_id`, `product_id`, `qty`, `amount`, `status`, `is_viewed`, `created_at`, `updated_at`) VALUES
(123, 108, 11, 1, 1250000, 0, 1, '2017-03-25 04:07:15', '2017-03-25 05:09:30'),
(124, 109, 10, 1, 270000, 0, 1, '2017-03-25 04:45:25', '2017-03-25 04:53:38'),
(125, 109, 9, 1, 450000, 0, 1, '2017-03-25 04:45:25', '2017-03-25 04:55:26'),
(126, 110, 8, 1, 810000, 0, 1, '2017-03-25 04:46:38', '2017-03-25 04:53:20'),
(127, 111, 9, 1, 450000, 0, 1, '2017-03-25 05:13:21', '2017-03-25 05:13:42'),
(128, 112, 11, 1, 1250000, 0, 1, '2017-03-27 22:56:21', '2017-03-27 22:56:42'),
(129, 113, 11, 1, 1250000, 0, 1, '2017-03-31 18:26:54', '2017-03-31 18:27:48'),
(130, 114, 11, 2, 2500000, 0, 0, '2017-03-31 18:29:13', '2017-03-31 18:29:13'),
(131, 115, 8, 3, 2430000, 0, 1, '2017-03-31 18:45:49', '2017-03-31 18:47:00'),
(132, 116, 8, 3, 2430000, 0, 0, '2017-03-31 18:48:55', '2017-03-31 18:48:55'),
(133, 116, 10, 1, 270000, 0, 0, '2017-03-31 18:48:55', '2017-03-31 18:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `color_id` int(11) NOT NULL,
  `made_id` int(11) NOT NULL,
  `mate_id` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `size_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `alias`, `price`, `intro`, `content`, `image`, `keywords`, `description`, `view`, `brand_id`, `color_id`, `made_id`, `mate_id`, `sale_id`, `size_id`, `type_id`, `user_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(8, 'Sơ mi cao cấp SM-4415', 'so-mi-cao-cap-sm-4415', 900000, '<h2><strong><a href="https://h2tshop.com/so-mi-dai-tay/c11.html" style="color: rgb(51, 51, 51); font-size: 12px;">Sơ mi nam</a>&nbsp;chấm bi họa tiết nhẹ nh&agrave;ng nhưng vẫn kh&ocirc;ng l&agrave;m mất đi vẻ mạnh mẽ, c&aacute; t&iacute;nh của c&aacute;c ch&agrave;ng trai đ&atilde; c&oacute; mặt tại hệ thống thời trang Gia Bảo shop</strong></h2>\r\n', '<p>C&oacute; thể n&oacute;i&nbsp;<strong>&aacute;o sơ mi nam chấm bi</strong>&nbsp;đang l&agrave; item thời trang hot nhất tr&ecirc;n thị trường thời trang &aacute;o sơ mi nam hiện nay. Sự kết hợp giữa họa tiết&nbsp;<strong>chấm bi xanh</strong>&nbsp;v&agrave; kiểu&nbsp;<strong>&aacute;o sơ mi body</strong>&nbsp;trong tổng thể&nbsp;<strong>m&agrave;u cam đất</strong>&nbsp;sẽ đem đến cho bạn một biến tấu mới trong xu hướng thời trang nam Xu&acirc;n - H&egrave; 2017.</p>\r\n\r\n<p><img alt="Sơ mi nam chấm bi" src="https://h2tshop.com/media/product/1446_44_2.jpg" style="border:none; display:block; height:800px; margin:auto; max-width:700px; width:600px" /></p>\r\n\r\n<p><strong>&Aacute;o sơ mi nam chấm bi cam đất</strong>&nbsp;gi&uacute;p c&aacute;c ch&agrave;ng vừa năng động c&aacute; t&iacute;nh nhưng vẫn giữ được sự lịch thiệp vốn c&oacute; khi diện n&oacute;.</p>\r\n\r\n<p><img alt="áo sơ mi nam chấm bi" src="https://h2tshop.com/media/product/1446_44_3.jpg" style="border:none; display:block; height:800px; margin:auto; max-width:700px; width:600px" /></p>\r\n\r\n<p>Với chiếc&nbsp;<strong>sơ mi chấm bi cao cấp</strong>&nbsp;n&agrave;y bạn c&oacute; thể kh&eacute;o l&eacute;o mix c&ugrave;ng&nbsp;<a href="https://h2tshop.com/quan-bo-nam/c5.html" style="color: rgb(51, 51, 51);"><strong>quần jean</strong>&nbsp;</a>hay<a href="https://h2tshop.com/quan-au-nam/c7.html" style="color: rgb(51, 51, 51);">&nbsp;<strong>quần &acirc;u nam</strong>&nbsp;</a>đều tạo cho m&igrave;nh một set đồ đi l&agrave;m hay dạo phố ho&agrave;n hảo.</p>\r\n\r\n<p><img alt="Sơ mi nam" src="https://h2tshop.com/media/product/1446_44_1.jpg" style="border:none; display:block; height:800px; margin:auto; max-width:700px; width:600px" /></p>\r\n\r\n<p>C&ograve;n khi m&ugrave;a đ&ocirc;ng đang đến gần th&igrave; một chiếc<strong>&nbsp;<a href="https://h2tshop.com/thoi-trang-mua-dong/c2.html" style="color: rgb(51, 51, 51);">&aacute;o kho&aacute;c nam</a></strong>&nbsp;mix c&ugrave;ng sơ mi sẽ l&agrave; lựa chọn tuyệt vời.</p>\r\n\r\n<p><img alt="so mi cao cap" src="https://h2tshop.com/media/product/1446_44_4.jpg" style="border:none; display:block; height:368px; margin:auto; max-width:700px; width:599px" /></p>\r\n\r\n<p>Với thiết kế chuẩn từ&nbsp;<strong>chất vải cao cấp, đường kim mũi chỉ</strong>&nbsp;đến chi tiết&nbsp;<strong>c&uacute;c x&agrave; cừ</strong>&nbsp;đ&atilde; l&agrave;m n&ecirc;n chiếc &aacute;o<strong>&nbsp;sơ mi cao cấp SM-4415&nbsp;</strong>bạn sẽ kh&ocirc;ng thất vọng khi lựa chọn chiếc<strong>&nbsp;&aacute;o sơ mi</strong>&nbsp;n&agrave;y bổ sung v&agrave;o bộ sưu tập&nbsp;<strong>thời trang xu&acirc;n h&egrave; 2017</strong>&nbsp;của m&igrave;nh.</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1446_44_5.jpg" style="border:none; display:block; height:351px; margin:auto; max-width:700px; width:600px" /></p>\r\n\r\n<p><strong><span style="color:rgb(255, 102, 0); font-size:18pt">|</span></strong>&nbsp;Xem th&ecirc;m:<a href="https://h2tshop.com/dieu-lam-nen-nhung-chiec-ao-so-mi-nam-cao-cap/a87.html" style="color: rgb(51, 51, 51);">&nbsp;Điều l&agrave;m n&ecirc;n những chiếc &aacute;o sơ mi nam cao cấp</a></p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1446_44_6.jpg" style="border:none; display:block; height:357px; margin:auto; max-width:700px; width:600px" /></p>\r\n', '250_1446_44_2.jpg', 'Sơ mi cao cấp SM-4415', '                                                            		    Sơ mi cao cấp SM-4415\r\n                                \r\n                                ', 18, 2, 1, 1, 2, 5, 1, 0, 2, 54, '2017-03-24 23:44:04', '2017-03-31 18:44:15'),
(9, 'Sơ mi zanzi cao cấp SM-3148', 'so-mi-zanzi-cao-cap-sm-3148', 500000, '<h2 style="text-align:justify">Xu hướng thời trang Xu&acirc;n H&egrave; 2017 được đ&aacute;nh dấu bằng sự trở lại của những trang phục phong c&aacute;ch qu&acirc;n đội. Họa tiết camouflage hay c&ograve;n được gọi l&agrave; họa tiết rằn ri (zanzi) đ&atilde; rục rịch quay trở lại với nhiều n&eacute;t mới v&agrave; độc đ&aacute;o hơn. H&atilde;y c&ugrave;ng điểm qua chiếc&nbsp;<a href="https://h2tshop.com/so-mi-dai-tay/c11.html" style="color: rgb(51, 51, 51); font-size: 12px;">&aacute;o sơ mi&nbsp;</a>họa tiết rằn ri tại Gia Bảo Shop&nbsp;trong xu hướng thời trang sơ mi nam 2017 nh&eacute;!&nbsp;</h2>\r\n', '<p><img alt="" src="https://h2tshop.com/media/product/1400_1_1.jpg" style="border:none; display:block; height:855px; margin:auto; max-width:700px; width:650px" /></p>\r\n\r\n<p style="text-align:justify">Với chiếc&nbsp;<strong>&aacute;o sơ mi SM-3148</strong>&nbsp;họa tiết rằn ri cho&nbsp;<strong>thời trang nam 2017</strong>, bạn c&oacute; thể kết hợp với&nbsp;<strong>T-shirt</strong>&nbsp;m&agrave; kh&ocirc;ng cần lo lắng kh&ocirc;ng hợp m&ugrave;a hay thời tiết v&igrave; ch&uacute;ng ph&ugrave; hợp với bất cứ l&uacute;c n&agrave;o trong năm.&nbsp;</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1400_1_2.jpg" style="border:none; display:block; height:976px; margin:auto; max-width:700px; width:650px" /></p>\r\n\r\n<p style="text-align:justify"><strong>&Aacute;o sơ mi rằn ri</strong>&nbsp;được mix đồ đơn giản khi kết hợp c&ugrave;ng với quần v&agrave; gi&agrave;y nam đơn giản, m&agrave;u trơn hay với những m&agrave;u sắc trung t&iacute;nh t&ocirc;n n&ecirc;n họa tiết nổi bật của chiếc &aacute;o. Bạn sẽ kh&ocirc;ng bao giờ lo lỗi mốt với chiếc &aacute;o<strong>&nbsp;sơ mi nam body</strong>&nbsp;mang hoạt tiết n&agrave;y bởi c&aacute;c họa tiết zanzi đa dạng in hoa, kẻ &ocirc;, b&egrave;o nh&uacute;n hay mảng m&agrave;u rằn ri c&aacute; t&iacute;nh.&nbsp;</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1400_1_3.jpg" style="border:none; display:block; height:879px; margin:auto; max-width:700px; width:650px" /></p>\r\n\r\n<p><strong>Sơ mi nam rằn ri</strong>&nbsp;n&agrave;y sẽ mang đến cho người mặc d&aacute;ng vẻ khỏe khoắn, c&oacute; phần bụi bặm, phong trần v&agrave; thậm ch&iacute; rất &quot;chất chơi&quot;.</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1400_1_4.jpg" style="border:none; display:block; height:944px; margin:auto; max-width:700px; width:650px" /><img alt="" src="https://h2tshop.com/media/product/1400_1_5.jpg" style="border:none; display:block; height:435px; margin:auto; max-width:700px; width:650px" /><img alt="" src="https://h2tshop.com/media/product/1400_1_6.jpg" style="border:none; display:block; height:919px; margin:auto; max-width:700px; width:650px" /></p>\r\n\r\n<p><a href="https://h2tshop.com/quan-jogger-kaki-tui-hop-q-2148/p1383.html" style="color: rgb(51, 51, 51);">Quần kaki</a>&nbsp;t&uacute;i hộp c&ugrave;ng với những đ&ocirc;i&nbsp;<strong><em>boots&nbsp;</em></strong>bụi bặm l&agrave; sự kết hợp v&ocirc; c&ugrave;ng tuyệt với cho mẫu &aacute;o sơ mi n&agrave;y!</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1400_1_7.jpg" style="border:none; display:block; height:832px; margin:auto; max-width:700px; width:650px" /></p>\r\n', '1400_1_1.jpg', 'dvsdbrbesb', '                                                            	rbrbsbrsbr	    \r\n                                \r\n                                ', 19, 2, 1, 5, 2, 5, 4, 0, 2, 54, '2017-03-24 23:53:17', '2017-03-25 05:12:57'),
(10, 'Sơ mi bò lót lông SM-642', 'so-mi-bo-lot-long-sm-642', 300000, '<ul>\r\n	<li>&Aacute;o&nbsp;<a href="http://h2tshop.com/so-mi-dai-tay/c11.html" style="color: rgb(51, 51, 51);">sơ mi b&ograve; l&oacute;t l&ocirc;ng</a>&nbsp;l&agrave; mẫu&nbsp;<strong>&aacute;o sơ mi</strong>&nbsp;phổ th&ocirc;ng được c&aacute;c bạn ưa chuộng, ph&ugrave; hợp với bạn nam phong c&aacute;ch trẻ trung, năng động, ph&oacute;ng kho&aacute;ng</li>\r\n	<li>Thiết kế&nbsp;<em><strong>&aacute;o b&ograve;</strong>&nbsp;</em>với điểm nhấn &aacute;o l&oacute;t l&ocirc;ng, hai t&uacute;i trước ngực. &Aacute;o l&oacute;t l&ocirc;ng vừa giữ ấm cho cơ thể nhưng vẫn hợp thời trang, thể hiện phong c&aacute;ch của người mặc</li>\r\n	<li>&Aacute;o ph&ugrave; hợp với thời tiết chuyển giao m&ugrave;a</li>\r\n	<li>M&agrave;u sắc: m&agrave;u xanh</li>\r\n	<li>&nbsp;Chất liệu: vải b&ograve; cao cấp, lớp l&ocirc;ng l&oacute;t nỉ b&ecirc;n trong</li>\r\n</ul>\r\n', '<h2>Dưới đ&acirc;y l&agrave; th&ocirc;ng số tham khảo v&agrave; h&igrave;nh ảnh chi tiết của &aacute;o</h2>\r\n\r\n<ul>\r\n	<li>&nbsp;Để đặt h&agrave;ng v&agrave; tư vấn trực tiếp bạn chat trực tuyến hoặc inbox v&agrave;o fanpage H2TSHOP:&nbsp;<a href="https://www.facebook.com/shopH2T/" style="color: rgb(51, 51, 51);">https://www.facebook.com/shopH2T/#</a></li>\r\n	<li>&nbsp;Địa chỉ hệ thống<a href="http://h2tshop.com/lien-he" style="color: rgb(51, 51, 51);">&nbsp;cửa h&agrave;ng H2TSHOP</a></li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>nẹ&nbsp;<img alt="" src="https://h2tshop.com/media/product/1271_6_1.jpg" style="border:none; display:block; margin:auto; max-width:700px" /><img alt="" src="https://h2tshop.com/media/product/1271_6_2.jpg" style="border:none; display:block; margin:auto; max-width:700px" /><img alt="" src="https://h2tshop.com/media/product/1271_6_3.jpg" style="border:none; display:block; margin:auto; max-width:700px" /><img alt="" src="https://h2tshop.com/media/product/1271_6_4.jpg" style="border:none; display:block; margin:auto; max-width:700px" /></p>\r\n', '250_1271_6_1.jpg', 'dfndmrr', '                            		mdmftmtfm    \r\n                                ', 21, 6, 3, 2, 1, 5, 3, 2, 2, 54, '2017-03-25 00:01:52', '2017-03-31 18:48:11'),
(11, 'Sơ mi cao cấp SM-1342', 'so-mi-cao-cap-sm-1342', 1250000, '<h2>SM-1342 l&agrave; sự lựa chọn ho&agrave;n hảo cho ch&agrave;ng trai năng động, muốn chọn cho m&igrave;nh những kiểu trang phục vừa để đi học, đi l&agrave;m v&agrave; vui chơi c&ugrave;ng bạn b&egrave; trong những ng&agrave;y h&egrave; 2017 của&nbsp;Gia Bảo shop.</h2>\r\n', '<p>&nbsp;</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1280_13_1.jpg" style="border:none; display:block; margin:auto; max-width:700px" /></p>\r\n\r\n<p>Bạn c&oacute; thể kết hợp với&nbsp;<strong><a href="https://h2tshop.com/quan-bo-nam/c5.html" style="color: rgb(51, 51, 51);">quần jeans,</a>&nbsp;<a href="https://h2tshop.com/quan-kaki/c6.html" style="color: rgb(51, 51, 51);">quần kaki</a>,&nbsp;<a href="https://h2tshop.com/quan-au-nam/c7.html" style="color: rgb(51, 51, 51);">quần &acirc;u</a>&nbsp;</strong>với m&agrave;u sắc tương phản của m&agrave;u&nbsp;<strong>&aacute;o sơ mi x&aacute;m</strong>&nbsp;v&agrave;&nbsp;<strong>sơ mi xanh navy</strong>&nbsp;m&agrave; vẫn mang lại vẻ c&aacute; t&iacute;nh, mạnh mẽ. Với sự kết hợp ho&agrave;n hảo n&agrave;y, ch&agrave;ng c&oacute; thể ho&agrave;n to&agrave;n tự tin đi dự tiệc, hội thảo hay hội nghị.</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1280_13_2.jpg" style="border:none; display:block; margin:auto; max-width:700px" /></p>\r\n\r\n<p>Ngo&agrave;i ra, bạn cũng c&oacute; thể chọn cho m&igrave;nh những loại<a href="https://h2tshop.com/ao-thun/c26.html" style="color: rgb(51, 51, 51);"><strong>&nbsp;&aacute;o thun body</strong>&nbsp;</a>giản dị trong gam m&agrave;u trắng, kem v&agrave; th&ecirc;m chiếc<strong>&nbsp;<a href="https://h2tshop.com/ao-khoac-nam/c24.html" style="color: rgb(51, 51, 51);">&aacute;o kho&aacute;c mỏng</a>&nbsp;</strong>để mang lại phong c&aacute;ch ph&ugrave; hợp kết hợp với chiếc&nbsp;<strong>&aacute;o sơ mi nam cao cấp</strong>&nbsp;trong xu hướng&nbsp;<strong>thời trang Xu&acirc;n - H&egrave; 2017.&nbsp;</strong></p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1280_13_3.jpg" style="border:none; display:block; margin:auto; max-width:700px" /></p>\r\n\r\n<p>Với mẫu sơ mi cao cấp n&agrave;y, bạn c&ograve;n c&oacute; thể kết hợp với<strong><a href="https://h2tshop.com/that-lung/c28.html" style="color: rgb(51, 51, 51);">&nbsp;thắt lưng</a>&nbsp;</strong>to bản hoặc m&agrave;u sắc m&agrave; kh&ocirc;ng sợ qu&aacute; nổi bật hay mất đi tổng thể trang phục. Bạn cũng c&oacute; thể kết hợp với<strong>&nbsp;<a href="https://h2tshop.com/vest-nam/c19.html" style="color: rgb(51, 51, 51);">&aacute;o vest</a>, &aacute;o ghi l&ecirc;</strong>&nbsp;th&ecirc;m phần sang trọng.&nbsp;</p>\r\n\r\n<p><img alt="" src="https://h2tshop.com/media/product/1280_13_5.jpg" style="border:none; display:block; margin:auto; max-width:700px" /><img alt="" src="https://h2tshop.com/media/product/1280_13_4.jpg" style="border:none; display:block; margin:auto; max-width:700px" /><img alt="" src="https://h2tshop.com/media/product/1280_13_6.jpg" style="border:none; display:block; margin:auto; max-width:700px" /></p>\r\n', '250_1280_13_1.jpg', 'sgheernr', '                                                            		sdbsbdbbd    \r\n                                \r\n                                ', 23, 3, 3, 3, 4, 1, 2, 0, 2, 54, '2017-03-25 00:10:25', '2017-03-31 18:55:24'),
(12, 'Áo phông nam AP - 1439', 'ao-phong-nam-ap---1439', 420000, '<p>&Aacute;o ph&ocirc;ng nam AP - 1439</p>\r\n', '<p><img src="https://h2tshop.com/media/product/1208_1_8.jpg" /></p>\r\n', '1208_1_1.jpg', 'Áo phông nam AP - 1439', '                            		    Áo phông nam AP - 1439\r\n                                ', 7, 2, 1, 4, 4, 1, 1, 1, 2, 61, '2017-03-25 00:38:17', '2017-03-31 18:07:17');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(12, '1.PNG', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, '2.PNG', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, '3.PNG', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '4.PNG', 8, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '5.PNG', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, '6.PNG', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, '7.PNG', 9, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, '9.PNG', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, '10.PNG', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, '11.PNG', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, '112.PNG', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, '113.PNG', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '114.PNG', 12, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `sale_event` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `sale_event`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'không giam', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Giam giá quôc khánh mùng 2 tháng 9', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Gi?m giá ??u hè', 15, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Gi?m giá noel', 20, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Giam giá mùng 8 tháng 3', 10, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size_name`, `created_at`, `updated_at`) VALUES
(1, 'M', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'S', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'XL', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'XX', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `payment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `status`, `user_name`, `user_email`, `user_phone`, `message`, `amount`, `payment`, `created_at`, `updated_at`) VALUES
(108, 0, 'bui quang duy', 'bduy1789@gmail.com', '01652400676', '                            \r\n               mang ve nam dinh cho tao         ', 1250000, '1', '2017-03-25 04:07:14', '2017-03-25 04:07:14'),
(109, 0, 'vu manh thieu', 'thieuvu@gmail.com', '01421525', 'dua di dau                            \r\n                        ', 720000, '1', '2017-03-25 04:45:25', '2017-03-25 04:45:25'),
(110, 0, 'dao quang toan', 'toandao@gmail.com', '01433535', 'ko cos igg                            \r\n                        ', 810000, '1', '2017-03-25 04:46:38', '2017-03-25 04:46:38'),
(111, 0, 'mai van thuyen', 'thuyen@gmail.com', '0124535', 'khong co gi                            \r\n                        ', 450000, '1', '2017-03-25 05:13:21', '2017-03-25 05:13:21'),
(112, 0, 'buiquangduy', 'bduy1789@gmail.com', '01652400676', 'khong co gi                            \r\n                        ', 1250000, '1', '2017-03-27 22:56:20', '2017-03-27 22:56:20'),
(113, 0, 'dothuytrang', 'trangdo@gmail.com', '01652400676', 'gui hang tai nha              ', 1250000, '1', '2017-03-31 18:26:54', '2017-03-31 18:26:54'),
(114, 0, 'vu anh dung', 'bduy1789@gmail.com', '01652400677', 'khong co gi                            \r\n                        ', 2500000, '1', '2017-03-31 18:29:13', '2017-03-31 18:29:13'),
(115, 0, 'bui quang duy', 'bduy1789@gmail.com', '01652400676', 'khong co gi                            \r\n                        ', 2430000, '1', '2017-03-31 18:45:49', '2017-03-31 18:45:49'),
(116, 0, 'bui quang anh', 'quanganh@gmail.com', '01652400677', '                            \r\n                        ssg', 2700000, '1', '2017-03-31 18:48:55', '2017-03-31 18:48:55');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `type_name`, `created_at`, `updated_at`) VALUES
(1, 'ngan tay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'dài tay', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'ông loe', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'cào', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'dui', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', '$2y$10$gfNYaW8x0WGqDGyixDXBMeaJDkz5Rx2LxMF5YQPcW7rB0G0KoXA2y', 'bduy1789@gmail.com', 1, 'L5TV1RcsoKTmP7NFkxjOlzTDJWXHcXUfT6P8Y0UZZMEyz3hslw1rVPMtY97T', '2016-09-21 07:59:56', '2016-11-04 03:02:00'),
(4, 'member', '$2y$10$5R0TYUzZxriERAYhCH9ba.DE/RGbGKVk1eZKECYJc/XDhhFEOzWwO', 'hihi@gmail.com', 1, 'D5VnVcU8OLoPUBryofe2P8AXLTeQGPLhVUfO6gLd', '2016-09-21 08:26:27', '2016-09-21 08:26:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cates`
--
ALTER TABLE `cates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cates_name_unique` (`name`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `madeins`
--
ALTER TABLE `madeins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_cate_id_foreign` (`cate_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cates`
--
ALTER TABLE `cates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `madeins`
--
ALTER TABLE `madeins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
