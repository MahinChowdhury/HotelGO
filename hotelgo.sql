-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 30, 2023 at 02:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelgo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@admin.com', NULL, '$2y$10$MuXHMiK9isRN7gLO2FAKGOWOKVH2oHzKLF2wU5b72J1khB4zY.2pC', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `booking_name` varchar(255) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL DEFAULT current_timestamp(),
  `days` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `user_name`, `room_name`, `amount`, `booking_name`, `checkin`, `checkout`, `days`, `booking_date`, `phone`, `updated_at`, `created_at`, `user_id`, `address`, `payment_status`) VALUES
(12, 'Mahin', 'Mountain View', 2500, 'Mahin', '2023-06-29', '2023-07-04', 5, '2023-06-29 11:09:16', '01839963763', '2023-06-29 05:09:16', '2023-06-29 05:09:16', 8, 'Dhaka,Bangladesh', 'Processing'),
(13, 'Rifat Morshed Rahat', 'Forest View', 1800, 'Rifat', '2023-07-04', '2023-07-08', 4, '2023-06-29 14:18:37', '01774577211', '2023-06-29 08:18:37', '2023-06-29 08:18:37', 9, 'Mohammadpur,Dhaka', 'Processing'),
(14, 'Ehsanul Karim Talha', 'Deluxe Room', 1950, 'Talha', '2023-07-02', '2023-07-05', 3, '2023-06-29 14:35:22', '01871212436', '2023-06-29 08:35:22', '2023-06-29 08:35:22', 10, 'Mirpur,Dhaka', 'Canceled'),
(15, 'Ehsanul Karim Talha', 'Deluxe Room', 1950, 'Ehsanul Karim Talha', '2023-07-04', '2023-07-07', 3, '2023-06-29 14:36:21', '01871212436', '2023-06-29 08:36:21', '2023-06-29 08:36:21', 10, 'Mirpur,Dhaka', 'Pending'),
(16, 'Ehsanul Karim Talha', 'Mountain View', 1000, 'Ehsanul Karim Talha', '2023-07-02', '2023-07-04', 2, '2023-06-29 14:43:59', '01871212436', '2023-06-29 08:43:59', '2023-06-29 08:43:59', 10, 'Mirpur,Dhaka', 'Processing');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
(6, 'TOM', 'PngItem_26692.svg', 'This is tom from tom & Jerry.', '2023-06-24 12:44:15', '2023-06-24 12:44:15'),
(7, 'AC', 'AC.svg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2023-06-24 12:45:37', '2023-06-24 12:45:37'),
(8, 'WIFI', 'WIFI.svg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2023-06-24 12:45:56', '2023-06-24 12:45:56'),
(9, 'HEATER', 'HEATER.svg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2023-06-24 12:46:16', '2023-06-24 12:46:16'),
(10, 'TV', 'TV.svg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', '2023-06-24 12:46:38', '2023-06-24 12:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `updated_at`, `created_at`) VALUES
(3, 'Baby Shark', '2023-06-24 08:57:26', '2023-06-24 08:57:26'),
(4, 'Playstation', '2023-06-24 12:55:55', '2023-06-24 12:55:55'),
(5, 'Xbox', '2023-06-24 13:04:23', '2023-06-24 13:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2023_06_18_070641_create_admins_table', 2),
(5, '2014_10_12_200000_add_two_factor_columns_to_users_table', 3),
(6, '2023_06_18_151115_create_sessions_table', 3),
(7, '2023_06_18_151240_create_sessions_table', 4),
(8, '2014_10_12_100000_create_password_resets_table', 5),
(10, '2023_06_24_170943_create_facilities_table', 6),
(11, '2023_06_25_154606_create_rooms_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `transaction_id` varchar(255) DEFAULT NULL,
  `currency` varchar(20) DEFAULT NULL,
  `bookingId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`, `bookingId`, `userId`) VALUES
(57, 'Mahin', 'mahin00021@gmail.com', '01839963763', 2500, 'Dhaka,Bangladesh', 'Processing', '649d666ed2cf0', 'BDT', 12, 8),
(58, 'Rifat', 'rifat18@gmail.com', '01774577211', 1800, 'Mohammadpur,Dhaka', 'Processing', '649d92cb8398f', 'BDT', 13, 9),
(59, 'Talha', 'talha39@gmail.com', '01871212436', 1950, 'Mirpur,Dhaka', 'Canceled', '649d96b4e9c44', 'BDT', 14, 10),
(60, 'Ehsanul Karim Talha', 'talha39@gmail.com', '01871212436', 1950, 'Mirpur,Dhaka', 'Pending', '649d96f61f545', 'BDT', 15, 10),
(61, 'Ehsanul Karim Talha', 'talha39@gmail.com', '01871212436', 1000, 'Mirpur,Dhaka', 'Processing', '649d98b70e717', 'BDT', 16, 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `room_id` int(11) NOT NULL,
  `review` varchar(500) NOT NULL,
  `rating` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `user_image`, `room_id`, `review`, `rating`, `updated_at`, `created_at`, `user_name`) VALUES
(4, 8, 'dpnsu.jpg', 10, 'They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The sevice was exceptional as well. Would definitely send a friend there.', 5, '2023-06-29 07:53:12', '2023-06-29 07:53:12', 'Mahin'),
(5, 9, 'rifat.jpg', 10, 'Excellent property and very convenient to USC activities. Front desk staff is extremely efficient, pleasant and helpful. Property is clean and has a fantastic old time charm.The decorations and the services were pretty good. Furnitures were neat and clean enough.', 5, '2023-06-29 08:17:22', '2023-06-29 08:17:22', 'Rifat Morshed Rahat'),
(6, 10, 'ehsanul.jpg', 10, 'Excellent property and very convenient to USC activities. Front desk staff is extremely efficient, pleasant and helpful. Property is clean and has a fantastic old time charm.They were extremely accommodating and allowed us to check in early at like 10am. We got to hotel super early and I didn’t wanna wait. So this was a big plus. The sevice was exceptional as well. Would definitely send a friend there.', 5, '2023-06-29 08:24:10', '2023-06-29 08:24:10', 'Ehsanul Karim Talha');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `area`, `guests`, `category`, `description`, `img`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(10, 'SkyView', '1200', '2', 'medium', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi dicta illo inventore ipsum laboriosam laudantium modi natus odit voluptas voluptates! Id necessitatibus, possimus. Commodi deserunt eos id ipsam nam provident?\r\n', 'room_demo-01.jpg', 200, 1, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(11, 'Forest View', '1600', '4', 'medium', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus delectus exercitationem iusto sapiente! Adipisci, at delectus ex hic odio quibusdam temporibus. Animi eligendi necessitatibus perferendis ratione rerum soluta sunt. Exercitationem.', 'room-01.jpg', 450, 3, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(12, 'Deluxe Room', '1800', '6', 'deluxe', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam blanditiis cum dolor dolore fugiat hic ipsum iusto modi nemo obcaecati optio quisquam, quos repellendus sit soluta, voluptates voluptatibus. Error, ex?1', 'room-03.jpg', 650, 4, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(13, 'Mountain View', '1500', '3', 'medium', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur dolorem esse illo in ipsam laudantium reiciendis repellat repellendus tempore velit? Culpa dignissimos dolore excepturi minima numquam praesentium. Fugit, natus, necessitatibus.', 'room-02.jpg', 500, 4, '2023-06-27 05:22:50', '2023-06-27 05:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `room_facilities`
--

CREATE TABLE `room_facilities` (
  `sr_no` int(11) NOT NULL,
  `room_id` bigint(20) UNSIGNED NOT NULL,
  `facilities_id` bigint(20) UNSIGNED NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_facilities`
--

INSERT INTO `room_facilities` (`sr_no`, `room_id`, `facilities_id`, `updated_at`, `created_at`) VALUES
(11, 10, 6, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(12, 10, 7, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(13, 10, 8, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(14, 10, 10, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(15, 11, 7, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(16, 11, 8, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(17, 11, 9, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(18, 11, 10, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(19, 12, 6, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(20, 12, 7, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(21, 12, 8, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(22, 12, 9, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(23, 12, 10, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(24, 13, 7, '2023-06-27 05:22:50', '2023-06-27 05:22:50'),
(25, 13, 9, '2023-06-27 05:22:50', '2023-06-27 05:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `room_features`
--

CREATE TABLE `room_features` (
  `sr_no` int(11) NOT NULL,
  `rooms_id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_features`
--

INSERT INTO `room_features` (`sr_no`, `rooms_id`, `feature_id`, `updated_at`, `created_at`) VALUES
(5, 10, 4, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(6, 10, 5, '2023-06-26 03:56:14', '2023-06-26 03:56:14'),
(7, 11, 4, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(8, 11, 5, '2023-06-26 10:08:13', '2023-06-26 10:08:13'),
(9, 12, 3, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(10, 12, 4, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(11, 12, 5, '2023-06-27 04:50:35', '2023-06-27 04:50:35'),
(12, 13, 4, '2023-06-27 05:22:50', '2023-06-27 05:22:50'),
(13, 13, 5, '2023-06-27 05:22:50', '2023-06-27 05:22:50');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(8, 'Mahin', 'mahin00021@gmail.com', NULL, '$2y$10$VxMsdnyBpth49NUOGChaG.Ff5qW9aHfZ.RYqf.NHdTc9F1nw8D4te', NULL, NULL, NULL, NULL, '2023-06-27 01:24:26', '2023-06-27 03:13:46', 'dpnsu.jpg'),
(9, 'Rifat Morshed Rahat', 'rifat18@gmail.com', NULL, '$2y$10$QY4DAB83pR8aCcqaN/zkcuuuIUigbohdLbp8KJfa81.uGm0K1Bsvu', NULL, NULL, NULL, NULL, '2023-06-29 08:15:52', '2023-06-29 08:15:52', 'rifat.jpg'),
(10, 'Ehsanul Karim Talha', 'talha39@gmail.com', NULL, '$2y$10$m9sdMLC322RZBhrb3Sl4P.G4CceIcUcGzNE5IWhnpw4xj7GTsawrC', NULL, NULL, NULL, NULL, '2023-06-29 08:22:38', '2023-06-29 08:22:38', 'ehsanul.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `updated_at`, `created_at`) VALUES
(1, 'abc', 'abc@gmail.com', 'Need Huawei 24inch Monitor Review (AD80HW)', 'sadgfsdga', '2023-06-09 00:44:04', '2023-06-09 00:44:04'),
(5, 'Mahin', 'mahin00021@gmail.com', 'Booking was cancelled.', 'I want to know why my booking was cancelled?', '2023-06-18 11:52:42', '2023-06-18 11:52:42');

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
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `facilities_id` (`facilities_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_features`
--
ALTER TABLE `room_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `freatured_id` (`feature_id`),
  ADD KEY `rooms_id` (`rooms_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `room_facilities`
--
ALTER TABLE `room_facilities`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `room_features`
--
ALTER TABLE `room_features`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `room_facilities`
--
ALTER TABLE `room_facilities`
  ADD CONSTRAINT `facilities_id` FOREIGN KEY (`facilities_id`) REFERENCES `facilities` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `room_id` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `room_features`
--
ALTER TABLE `room_features`
  ADD CONSTRAINT `freatured_id` FOREIGN KEY (`feature_id`) REFERENCES `features` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `rooms_id` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
