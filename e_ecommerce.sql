-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 12, 2024 at 08:11 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `type` enum('Admin','Staff') NOT NULL DEFAULT 'Staff',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(91, 'SAMSUNG', 'sam_sung', 'Active', NULL, NULL),
(92, 'IPHONE', 'i_phone', 'Active', NULL, NULL),
(93, 'APPLE', 'apple', 'Active', NULL, NULL),
(94, 'DELL', 'dell', 'Active', NULL, NULL),
(95, 'HP', 'hp', 'Active', NULL, NULL),
(96, 'ASUS', 'asus', 'Active', NULL, NULL),
(97, 'VIVO', 'vivo', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(5, 'IPAD', 'ipad', 'Active', NULL, NULL),
(6, 'PHONE', 'phone', 'Active', NULL, NULL),
(7, 'LAPTOP', 'laptop', 'Active', NULL, NULL),
(8, 'APPLE WATCH', 'apple_watch', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `status` enum('Processing','Confirmed','Shipping','Delivered','Cancelled') NOT NULL DEFAULT 'Processing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(20) UNSIGNED NOT NULL,
  `order_id` int(20) UNSIGNED NOT NULL,
  `product_id` int(20) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `qty` int(4) NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `summary` text NOT NULL,
  `stock` int(3) UNSIGNED NOT NULL,
  `price` double NOT NULL,
  `discounted_price` double NOT NULL,
  `images` text NOT NULL,
  `category_id` int(20) UNSIGNED NOT NULL,
  `brand_id` int(20) UNSIGNED NOT NULL,
  `status` enum('Active','Inactive') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `description`, `summary`, `stock`, `price`, `discounted_price`, `images`, `category_id`, `brand_id`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Samsung Galaxy S23 Ultra 5G 8GB/256GB', 'samsung-galaxy-s23-ultra-5g-8gb-256gb', '\r\n                        ', 'Samsung Galaxy S23 Ultra 5G 256GB is Samsung\'s most high-end smartphone, possessing an unbelievable configuration with a powerful chip optimized by Qualcomm specifically for the Galaxy line and a camera up to 200 MP, worthy of being the most anticipated Android flagship in 2023.', 20, 24990000, 21490000, 'uploads/6707e6f25ea94samsung-galaxy-s23-ultra-green-thumbnew-600x600.jpg', 6, 91, 'Active', NULL, NULL),
(14, 'Samsung Galaxy Z Fold5 5G 12GB/256GB', 'samsung-galaxy-z-fold5-5g-12gb-256gb', '\r\n                        ', 'Samsung Galaxy Z Fold5 is a high-end phone model launched in July 2023 with many notable features such as unique folding design, powerful performance thanks to Snapdragon 8 Gen 2 for Galaxy chip and sharp camera. Supports AI features .Galaxy Z Fold5, a product from Samsung\'s Galaxy family that was officially launched earlier, has now been installed with advanced AI features, which previously appeared in the Galaxy S24 series through the One UI 6.1 user interface at the end of March 2024.', 10, 40000000, 38000000, 'uploads/6707e7e5c0a43samsung-galaxy-z-fold5-blue-thumbnew-600x600.jpg', 6, 91, 'Active', NULL, NULL),
(15, 'Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W)', 'asus-vivobook-go-15-e1504fa-r5-7520u-nj776w-', '\r\n                        ', 'Asus Vivobook Go 15 E1504FA R5 7520U (NJ776W) laptop has a luxurious design style, powerful performance and multi-functionality, which will definitely help you meet all your daily work and study tasks in the most effective and professional way.\r\nFamiliar design, luxurious style. The style is too familiar from Asus\'s Vivobook lines, but with such a modern minimalist design, I personally find it extremely suitable for current fashion trends. Asus laptops still retain their purity with a bright silver color that is quite attractive, the shell is made of plastic but is very sturdy, the durability is also guaranteed to meet military standards MIL STD 810H and the surfaces are carefully machined and joined, so I just need to equip an additional shockproof bag to be able to carry it anywhere with peace of mind.', 40, 18000000, 16999000, 'uploads/6707e896452b5asus-vivobook-go-15-e1504fa-r5-nj776w-thumb-600x600.jpg', 7, 96, 'Active', NULL, NULL),
(16, 'Dell Inspiron 15 3520 i5 1235U (N5I5052W1)', 'dell-inspiron-15-3520-i5-1235u-n5i5052w1-', '\r\n                        ', 'Dell Inspiron 15 3520 i5 1235U (N5I5052W1) laptop is a perfect mid-range product for office users, students and those who need a mobile device for entertainment and basic work. Featuring a powerful 12th generation Intel processor, it promises to bring stable performance, good multitasking capabilities and a modern, compact design.      ', 100, 24000000, 23000000, 'uploads/6707e9233440bdell-inspiron-15-3520-i5-n5i5052w1-thumb-600x600.jpg', 7, 94, 'Active', NULL, NULL),
(17, 'Laptop HP 15 fc0085AU R5 7430U/16GB/512GB/Win11 (A6VV8PA)', 'laptop-hp-15-fc0085au-r5-7430u-16gb-512gb-win11-a6vv8pa-', '\r\n                        ', ' Outstanding and very familiar in the segment of cheap study - office laptops, the HP 15 fc0085AU R5 7430U (A6VV8PA) laptop with stable configuration, effectively operates all tasks from work to multimedia entertainment. The machine converges all the elements to become an ideal assistant for users.\r\n• HP laptop with AMD Ryzen 5 - 7430U processor combined with AMD Radeon Graphics card helps to smoothly handle everything from office work to entertainment, quickly processing documents with Microsoft Office and Google Docs. Moreover, some jobs such as popular graphic design with Adobe Photoshop, Figma, ...', 9, 13000000, 10000000, 'uploads/6707e9be5c52fhp-15-fc0085au-r5-a6vv8pa-thumb-638624255401777068-600x600.jpg', 7, 95, 'Active', NULL, NULL),
(18, 'iPhone 16 Pro Max 256GB', 'iphone-16-pro-max-256gb', '\r\n                        ', 'The iPhone 16 series offers many important upgrades compared to the iPhone 15 series, from performance, camera, to other advanced features. Equipped with a more powerful A18 chip, the iPhone 16 delivers superior performance compared to the iPhone 15 with the A16 chip, helping to improve graphics processing and better energy efficiency. The iPhone 16 brings a breakthrough with the 48 MP \"Fusion\" camera, which helps create clear photos, especially in low light. The spatial video recording and macro shooting features turn moments into vivid 3D photos and videos. Equally prominent is the Camera Control button, which supports quick operations and touch control, and is compatible with many third-party applications.\r\n                        ', 90, 34999000, 32000000, 'uploads/6707ea404a9d2iphone-16-pro-max-tu-nhien-thumb-600x600.jpg', 6, 93, 'Active', NULL, NULL),
(20, 'Samsung Galaxy Tab S9 FE WiFi 6GB/128GB', 'samsung-galaxy-tab-s9-fe-wifi-6gb-128gb', '\r\n                        ', 'Samsung Galaxy Tab S9 FE WiFi 128GB was launched by Samsung in October 2023 and attracted a lot of attention from its appearance to its internal configuration. The highlights that we can notice are the Exynos 1380 chip, 6 GB RAM, large 8000 mAh battery as well as 45 W fast charging. Sophisticated, modern design. Samsung Galaxy Tab S9 FE WiFi is not just a regular tablet but also represents a sophisticated combination of modernity and convenience. The flat design of the screen and back helps create an aesthetic beauty that is bold in the beauty of modernity and luxury.       ', 30, 17999000, 15999000, 'uploads/6707ec74d95b2galaxy-tab-s9-fe-xanh-mint-thumb-600x600.jpg', 5, 91, 'Active', NULL, NULL),
(21, 'iPad 10 WiFi 256GB', 'ipad-10-wifi-256gb', '\r\n                        ', 'By the iPad Gen 10, Apple decided to remove the Home button on the iPad 9, the edges were thinned for a feeling of unlimited viewing. With 4 color versions: silver, pink, gold and blue, it meets more user preferences. The tablet is only 7 mm thin and weighs 477 g, not too large, similar to a book, so you can easily put it in a backpack or handbag to bring to school, work or on trips.', 40, 11000000, 9800000, 'uploads/6707ecfc736ddiPad-Gen-10-yellow-thumb-600x600.jpg', 5, 93, 'Active', NULL, NULL),
(22, 'Samsung Galaxy A55 5G 12GB/256GB', 'samsung-galaxy-a55-5g-12gb-256gb', '\r\n                        ', 'Samsung Galaxy A55 5G, the new model of the Galaxy A series, launched with many pioneering technologies along with fast 5G connectivity. Introduced as a versatile, high-quality option but with a reasonable price, it promises to be a notable product on the market.\r\n50 MP camera for sharp photography. Equipped with a 50 MP main camera with a 12 MP super wide-angle secondary camera and a 5 MP macro camera, the Galaxy A55 5G brings an impressive photography experience, not only producing high-quality photos but also bringing many features with interesting shooting modes such as super wide angle or close-up.\r\n                        ', 31, 12000000, 10000000, 'uploads/6707ed84653d1samsung-galaxy-a55-5g-xanh-thumb-1-600x600.jpg', 6, 91, 'Active', NULL, NULL),
(23, 'vivo Y28 8GB/128GB', 'vivo-y28-8gb-128gb', '\r\n                        ', 'vivo Y28 has a trendy appearance with square cuts, along with a monolithic design that creates a seamless overall look. The thickness of only 7.99 mm (blue-black version) and 8.09 mm (orange version) with a weight of only 199 g provides a comfortable grip for users even when used for a long time. The device is equipped with face unlock and edge fingerprint unlocking capabilities to help you log in to the device quickly without entering a password, in addition to enhancing the security of data and personal information in the device. ', 9, 9000000, 7990000, 'uploads/6707eff57ce20vivo-y28-vang-thumb-600x600.jpg', 6, 97, 'Active', NULL, NULL),
(24, 'iPhone 15 Pro Max 256GB', 'iphone-15-pro-max-256gb', '\r\n                        ', 'The iPhone 15 Pro Max will continue to be a phone with a flat screen and back, typical of Apple, bringing elegance and luxury. The main material of the iPhone 15 Pro Max is still a metal frame and tempered glass back, creating durability and solidity. However, with advanced technology, this frame has been upgraded to titanium instead of stainless steel or aluminum in previous generations.              ', 32, 28000000, 25000000, 'uploads/6707f06c791e6iphone-15-pro-max-gold-thumbnew-600x600.jpg', 6, 93, 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(20) UNSIGNED NOT NULL,
  `user_id` int(20) UNSIGNED NOT NULL,
  `product_id` int(20) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `rating` int(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
