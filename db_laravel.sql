-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 15, 2021 at 11:02 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idcd` int UNSIGNED NOT NULL,
  `status` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_detail`
--

DROP TABLE IF EXISTS `cart_detail`;
CREATE TABLE IF NOT EXISTS `cart_detail` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idsp` int UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `idcus` int UNSIGNED DEFAULT NULL,
  `iduser` int UNSIGNED DEFAULT NULL,
  `notes` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_detail`
--

INSERT INTO `cart_detail` (`id`, `idsp`, `quantity`, `idcus`, `iduser`, `notes`, `created_at`, `updated_at`) VALUES
(19, 4, 2, NULL, 1, NULL, NULL, NULL),
(20, 1, 3, NULL, 1, NULL, NULL, NULL),
(21, 1, 3, NULL, 1, NULL, NULL, NULL),
(22, 4, 2, NULL, 1, NULL, NULL, NULL),
(23, 2, 1, NULL, 1, NULL, NULL, NULL),
(24, 2, 1, NULL, 1, NULL, NULL, NULL),
(25, 2, 3, NULL, 1, NULL, NULL, NULL),
(26, 5, 2, NULL, 1, NULL, NULL, NULL),
(27, 14, 2, 5, NULL, 'aaaaaaaaaa', NULL, NULL),
(28, 14, 2, 5, NULL, 'aaaaaaaaaa', NULL, NULL),
(29, 14, 2, 6, NULL, 'aaaaaaaaaa', NULL, NULL),
(30, 14, 2, 6, NULL, 'aaaaaaaaaa', NULL, NULL),
(31, 11, 1, NULL, 3, NULL, NULL, NULL),
(32, 20, 3, NULL, 3, NULL, NULL, NULL),
(33, 3, 2, 7, NULL, 'giao lúc 12h ngày zzz', NULL, NULL),
(34, 3, 2, 7, NULL, 'giao lúc 12h ngày zzz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_shopping`
--

DROP TABLE IF EXISTS `cart_shopping`;
CREATE TABLE IF NOT EXISTS `cart_shopping` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `idcd` int UNSIGNED NOT NULL,
  `status` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_shopping`
--

INSERT INTO `cart_shopping` (`id`, `idcd`, `status`, `created_at`, `updated_at`) VALUES
(1, 24, 0, NULL, NULL),
(2, 25, 0, NULL, NULL),
(4, 30, 1, NULL, NULL),
(5, 31, 1, NULL, NULL),
(6, 32, 0, NULL, NULL),
(7, 34, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int UNSIGNED NOT NULL,
  `adress` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `phone`, `adress`, `created_at`, `updated_at`) VALUES
(1, 'Ngô Thành Cang', 12312312, '1212 qwqwq', NULL, NULL),
(3, 'Ngô Thành Cang', 12312312, '1212 qwqwq', NULL, NULL),
(4, 'Ngô Thành Cang', 12312312, '1212 qwqwq', NULL, NULL),
(5, 'Ngô Thành Cang', 12312312, '1212 qwqwq', NULL, NULL),
(6, 'Ngô Thành Cang', 12312312, '1212 qwqwq', NULL, NULL),
(7, 'Ngô Thành Cang', 363566937, '12312 3eqweqw', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_name`
--

DROP TABLE IF EXISTS `list_name`;
CREATE TABLE IF NOT EXISTS `list_name` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idname` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `list_name`
--

INSERT INTO `list_name` (`id`, `name`, `idname`, `created_at`, `updated_at`) VALUES
(1, 'Thịt heo', 1, NULL, NULL),
(2, 'Thịt Bò', 1, NULL, NULL),
(3, 'Cá', 1, NULL, NULL),
(4, 'Hải Sản', 1, NULL, NULL),
(5, 'Thịt Gà', 1, NULL, NULL),
(6, 'Chuối', 3, NULL, NULL),
(8, 'Thịt , Hải Sản Đông Lạnh', 2, NULL, NULL),
(9, 'Nước Ngọt', 7, NULL, NULL),
(10, 'Bia', 7, NULL, NULL),
(11, 'Mật Ong', 7, NULL, NULL),
(12, 'Mì , Cháo , Phở , Bún', 6, NULL, NULL),
(13, 'Gạo, Bột', 6, NULL, NULL),
(14, 'Soài', 3, NULL, NULL),
(15, 'Táo', 3, NULL, NULL),
(16, 'Ổi', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2019_08_19_000000_create_failed_jobs_table', 1),
(40, '2021_03_19_155825_name_pro', 1),
(41, '2021_03_19_163104_list_name', 1),
(42, '2021_03_19_163122_cart', 1),
(43, '2021_03_19_163127_cart_detail', 1),
(44, '2021_03_19_163138_customer', 1),
(45, '2021_03_19_163154_product', 1),
(46, '2021_03_22_194745_create_sessions_table', 2),
(47, '2021_03_23_205551_cart_shopping', 3);

-- --------------------------------------------------------

--
-- Table structure for table `name_pro`
--

DROP TABLE IF EXISTS `name_pro`;
CREATE TABLE IF NOT EXISTS `name_pro` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_pro`
--

INSERT INTO `name_pro` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Đồ Tươi Sống', NULL, NULL),
(2, 'Đồ Đông Lạnh', NULL, NULL),
(3, 'Trái Cây', NULL, NULL),
(4, 'Đồ Ăn Liền', NULL, NULL),
(5, 'Rau , Củ , Quả', NULL, NULL),
(6, 'Đồ Khô', NULL, NULL),
(7, 'Đồ Uống Các Loại', NULL, NULL),
(8, 'Dầu Ăn, Gia Vị', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int UNSIGNED NOT NULL,
  `weight` double DEFAULT NULL,
  `sales` int UNSIGNED NOT NULL,
  `quantity` int UNSIGNED NOT NULL,
  `date` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idlist` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `weight`, `sales`, `quantity`, `date`, `content`, `images`, `idlist`, `created_at`, `updated_at`) VALUES
(1, 'Nạc heo xay túi 200g', 36000, 0.2, 30000, 3, '24h', 'thịt heo tươi', '1616600343-product.jpg', 1, NULL, NULL),
(2, 'Chân giò heo sau khay 500g', 65000, 0.5, 60000, 3, '24h', 'thịt heo tươi', '1616434799-product.jpg', 1, NULL, NULL),
(3, 'Sườn cốt lết khay 500g', 80000, 0.5, 0, 3, '24h', 'thịt heo tươi', '1616434846-product.jpg', 1, NULL, NULL),
(4, 'Nạc dăm heo khay 500g', 82000, 0.5, 0, 3, '24h', 'thịt heo tươi', '1616434884-product.jpg', 1, NULL, NULL),
(5, 'Thịt đùi heo khay 500g', 80000, 0.5, 0, 3, '24h', 'thịt heo tươi', '1616434915-product.jpg', 1, NULL, NULL),
(6, 'Gầu bò Mỹ đông lạnh Thảo Tiến Foods khay 300g', 118000, 0.3, 0, 3, '1 tháng', 'Thịt bò Mỹ Đông Lạnh', '1616590715-product.jpg', 7, NULL, NULL),
(7, 'Gầu bò Mỹ đông lạnh Thảo Tiến Foods khay 300g', 118000, 0.3, 0, 3, '1 tháng', 'Thịt bò Mỹ Đông Lạnh', '1616601510-product.jpg', 8, NULL, NULL),
(8, 'Đùi tỏi gà khay 500g', 52000, 0.5, 0, 3, '24h', 'Thịt Gà tươi', '1616602058-product.jpg', 5, NULL, NULL),
(9, 'Má đùi gà khay 500g', 32000, 0.5, 0, 3, '24h', 'Thịt Gà tươi', '1616603872-product.jpg', 5, NULL, NULL),
(10, 'Cánh gà khay 500g', 50000, 0.5, 0, 3, '24h', 'Thịt Gà tươi', '1616607028-product.jpg', 5, NULL, NULL),
(11, 'Chân gà khay 500g', 35000, 0.5, 0, 3, '24h', 'Thịt Gà tươi', '1616611859-product.jpg', 5, NULL, NULL),
(12, 'Cá hường làm sạch khay 500g', 49000, 0.5, 0, 3, '24h', 'Cá Tươi', '1616613610-product.jpg', 3, NULL, NULL),
(13, 'Cá lóc sống khay 500g', 44500, 0.5, 0, 3, '24h', 'Cá Tươi', '1616615420-product.jpg', 3, NULL, NULL),
(14, 'Cá điêu hồng làm sạch khay 500g', 42000, 0.5, 0, 3, '24h', 'Cá Tươi', '1616615596-product.jpg', 3, NULL, NULL),
(15, 'Cá nục vỉ 500g', 37500, 0.5, 0, 4, '24h', 'Cá nục là một loại cá sống ở biển', '1616616059-product.jpg', 3, NULL, NULL),
(16, 'Tôm thẻ khay 300g', 52000, 0.5, 0, 3, '24h', 'Tôm thẻ là một món ăn rất được nhiều người ưa thích, có khá nhiều loại tôm khác nhau như: Tôm thẻ chân trắng, tôm thẻ chân đỏ, tôm thẻ bạc. Loại tôm chứa rất nhiều nguồn năng lượng, dưỡng chất cần thiết cho cơ thể con người bao gồm: Protein, chất béo, Kali, Vitamin B12, vitamin A, D, canxi,... Với giá trị dinh dưỡng vượt trội rất hữu ích cho quá trình phát triển thể chất, não bộ ở trẻ em. Đồng thời, tăng cường sức đề kháng cho người cao tuổi.', '1616616309-product.jpg', 4, NULL, NULL),
(17, 'Hàu sữa gói 300g', 90000, 0.3, 0, 3, '24h', '90% thịt hàu, 10% nước muối', '1616616784-product.jpg', 4, NULL, NULL),
(18, 'Mật ong chín hoa miền núi Honimore chai 630g', 288000, 0.63, 0, 3, 'Lâu Năm', 'Được thu hoạch từ những giọt mật tinh túy của những bông hoa đại ngàn tại núi rừng Tây Bắc Việt Nam, mật ong chín hoa miền núi Honimore có màu vàng nhạt tươi sáng, vị mật ong chín ngọt lịm, thơm lan tỏa mùi hoa dại núi rừng. Đây là sản phẩm của thương hiệu Honimore, được bảo quản trong chai thủy tinh với khối lượng 630g.', '1616616904-product.jpg', 11, NULL, NULL),
(19, '6 chai Sting hương dâu 330ml', 50000, NULL, 0, 3, 'Lâu Năm', 'Lắc nhẹ trước khi uống, dùng ngay sau khi mở nắp. Ngon hơn khi uống lạnh.', '1616617018-product.jpg', 9, NULL, NULL),
(20, 'Ba khía muối khay 300g', 71000, 0.3, 0, 3, '1 tháng', 'Ba khía khá giống cua nhưng có kích thích nhỏ hơn, chúng sống trong môi trường nước mặn, nước lợ, ven sông. Ba khía có nhiều nhất là các tỉnh: Cà Mau, Bạc Liêu,... Cái tên ba khía được được bắt nguồn từ ba dấu gạch trên lưng của nó. Mùa của ba khía là vào tháng 10, trong những ngày mưa thì thịt ba khía ngon và chắc nhất.', '1616617135-product.jpg', 4, NULL, NULL),
(21, '6 lon bia Heineken 330ml', 100000, NULL, 0, 3, 'Lâu Năm', 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', '1616617418-product.jpg', 10, NULL, NULL),
(22, '6 lon bia Carlsberg Smooth Draught 330ml', 102000, NULL, 0, 3, 'Lâu Năm', 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai. Thưởng thức có trách nhiệm, đã uống đồ uống có cồn thì không lái xe!', '1616645449-product.jpg', 10, NULL, NULL),
(23, '6 lon bia Heineken 0.0% độ cồn 330ml', 106000, NULL, 0, 6, 'Lâu Năm', 'Sản phẩm dành cho người trên 18 tuổi và không dành cho phụ nữ mang thai.', '1616645557-product.jpg', 10, NULL, NULL),
(24, 'Mì YumYum vị Tom Yum Kung chua cay gói 67g', 6000, NULL, 0, 3, 'Lâu Năm', 'Tom Yum Kung chua cay', '1616645729-product.jpg', 12, NULL, NULL),
(25, 'Chuối già giống Nam Mỹ hộp 500g', 12000, 0.5, 0, 3, '24h', 'Chuối là loại trái cây được nhiều người yêu thích và có rất nhiều loại chuối khác nhau như: chuối tiêu, chuối sứ, chuối tây,... Trong đó, chuối già giống Nam Mỹ là loại đang được nhiều người ưa chuộng hiện nay. Chuối già Nam Mỹ là giống chuối cấy mô, có nguồn gốc từ Nam Mỹ nên có chất lượng tốt và hương vị ngon.', '1616645872-product.jpg', 6, NULL, NULL),
(26, 'Chuối cau túi 500g (giao ngẫu nhiên chuối sống hoặc chín)', 12500, 0.5, 0, 4, '24h', 'Trong thực đơn giảm cân của các chị em phụ nữ thường không thể thiếu loại trái cây phổ biến là chuối. Chuối sở hữu nhiều công dụng, không chỉ hỗ trợ giảm cân, cải thiện tiêu hóa mà còn có khả năng phòng ngừa các bệnh như tiểu đường, tim mạch. Có rất nhiều loại chuối để chị em có thể lựa chọn. Trong đó, chuối cau là trái cây Bách Hóa Xanh ưu tiên hơn cả. Chuối cau được nhiều chuyên gia tư vấn sức khỏe đánh giá là loại hoa quả giàu chất dinh dưỡng. Giá trị dinh dưỡng của chuối cau đem đến nhiều lợi ích cho sức khỏe, chứa nhiều chất xơ, vitamin, khoáng chất và một chút tinh bột.', '1616645972-product.jpg', 6, NULL, NULL),
(27, 'Chuối sứ túi 500g (giao ngẫu nhiên chuối sống hoặc chín)', 11000, 0.5, 0, 4, '24h', 'Chuối sứ là một trong những loại trái cây được tiêu thụ rộng rãi nhất trên thế giới vì chúng mang lại giá trị dinh dưỡng lớn cho sức khỏe con người. Ngày nay, chuối được trồng chủ yếu ở vùng Đông Nam Á và được xếp hạng trong số các loại cây lương thực quan trọng của thế giới.', '1616646032-product.jpg', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int UNSIGNED NOT NULL,
  `adress` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `phone`, `adress`, `email`, `active`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'test1', 'test01', 12312312, '1212 qwqwq', 'muspassyou10@gmail.com', 1, NULL, '$2y$10$VXxOCY8yDIVkE91xijPLi.W5mMl6jnMG1H.mdpW/kP81L9dMDPLvS', NULL, NULL, NULL),
(2, 'Ngô Thành Cang', 'test', 12312312, '1212 qwqwq', 'test@gmail.com', 0, NULL, '$2y$10$oUneSVQKMj2/jGhmDiokDuFG4hph4LH8QaCWmGM1930Uf2Lwu/jaq', NULL, NULL, NULL),
(3, 'test1', 'test2', 12312312, '1212 qwqwq', 'muspassyou0@gmail.com', 1, NULL, '$2y$10$z8zk0GcSPZ1z1z/MsqqNh.lgiSYltEKNkJ/78dWgS2ASG.HPJqrcm', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
