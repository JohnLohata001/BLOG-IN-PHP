-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 01:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(12, 46, 18, 'One day your life will shine before you', '1625217592_shopping-trade.jpg', '&lt;p&gt;The life is qa mistery of God , no one can know tomorrow&lt;/p&gt;', 1, '2021-07-02 12:19:52'),
(13, 46, 20, 'You have to beleve that things will get better', '1625217853_cassidy-kelley-p90szoOBYgk-unsplash-280x186.jpg', '&lt;p&gt;The faith is the main thing who can keep your life save&lt;/p&gt;', 1, '2021-07-02 12:24:13'),
(14, 46, 26, 'The spectacle before us was indeed sublime', '1625217991_pexels-photo-2294353.jpeg', '&lt;p&gt;no thing is more special than others&lt;/p&gt;', 1, '2021-07-02 12:26:31'),
(15, 46, 18, 'We love thing the way that it is', '1625218161_img03.jpg', '&lt;p&gt;No thing can be hard than hard him self&lt;/p&gt;', 1, '2021-07-02 12:29:21'),
(16, 46, 25, 'Give me more wine or leave me alone', '1625218290_waving-flag-dr-congo_97886-6656.jpg', '&lt;p&gt;the wine make sense to some one&lt;/p&gt;', 1, '2021-07-02 12:31:30');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(18, 'Love', '<p>nice feling sweet</p>'),
(20, 'Fiction', '<p>something not realy</p>'),
(25, 'legend', '<p>some thing not realy</p>'),
(26, 'Motivation', '<p>ation of things in good &nbsp;ways</p>'),
(27, 'life', '<p>felling that no one can explain in this world</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created`) VALUES
(46, 1, 'admin', 'admin@admin.com', '$2y$10$pYPPh7UxI6GSSgkXovu9z.U83GJxvUArXtZhl4pRF22IewVNtdQ9G', '2021-07-01 13:51:09'),
(47, 0, 'john', 'john@gmail.com', '$2y$10$klj7NeadvpyrQM8DQCBf5OaTWlEFFMdjsUJyJjjZ9tH0Ce/SA8WM.', '2021-07-06 14:02:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
