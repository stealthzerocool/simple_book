-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2019 at 07:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `Book_id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `genre` varchar(20) NOT NULL,
  `author` varchar(36) NOT NULL,
  `price` int(6) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`Book_id`, `name`, `genre`, `author`, `price`, `description`) VALUES
(1, '1984', 'Non-Fiction', 'George Orwell', 500, 'George Orwell’s dystopian, totalitarian world of control, fear and lies has never been more relevant'),
(2, 'Harry Potter and the Philosopher’s Stone', 'Fiction', 'JK Rowling', 300, 'Join Harry Potter as he begins his journey into the world of magic, where he is the celebrated Boy Who Lived.'),
(3, 'The Lord of the Rings', 'Fiction', 'R.R Tolkien', 900, 'Middle Earth is a wonderful, expansive fantasy world filled with turmoil, heroes, evil and innocence.'),
(4, 'Romeo and Juliet', 'Romance', 'William Shakespeare', 500, 'A Classic story of love and fate');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '12345');

-- --------------------------------------------------------

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`) VALUES
(3, 'img3.jpg', ''),
(6, 'img2.jpg', ''),
(8, 'img1.png', '');
