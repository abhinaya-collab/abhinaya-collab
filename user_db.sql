-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2023 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `Full_Name` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `ID_No` varchar(20) NOT NULL,
  `Branch` varchar(50) NOT NULL,
  `Company_Designation` varchar(200) NOT NULL,
  `Experience_with_your_Company` varchar(200) NOT NULL,
  `Suggestions_to_your_juniors` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`Full_Name`, `Gender`, `ID_No`, `Branch`, `Company_Designation`, `Experience_with_your_Company`, `Suggestions_to_your_juniors`, `Email`) VALUES
('Full_Name', 'Gender', 'ID_No', 'Branch', 'Company_Designation', 'Experience_with_your_Company', 'Suggestions _to_your_juniors ', 'Email'),
('CHENNAIAHGARI MOUNIKA', 'Female', 'B171625', 'CIVIL', 'Akash byju\'s, Assistant lecturer', 'Great place to work', 'Focus on the type of job they want to get into, learn from scratch other than studies .If you need core jobs then focus on studies without distractions.', 'b171625@rgukt.ac.in'),
('K Siva Satya Narayana ', 'Male', 'B171567', 'CSE', 'Trainee Software Engineer ', '6 months', 'Don\'t join corporate as a Btech Graduate ', 'shivkancharla@gmail.com'),
('Abhinav Sriram', 'Male', 'B172197', 'CSE', 'Product Engineer @ Whitecarrot ', 'I have a very good experience with this company. It got me out of my comfort zone.', 'Try doing as many internships as possible even you are not paid. It helps you understand how programming is done. Writing program for a star pattern is not what asked when you do an internship. So it ', 'abhisriram007@gmail.com'),
('Sangem Kaveri', 'Female', 'B161093', 'EEE', 'Data Analyst', '1year 6 montha', '', 'sangemkaveri@gmail.com'),
('Gaddala Snehith ', 'Male', 'B171780', 'CSE', '-', '-', 'Go with the flow.', 'snehithgaddala7@gmail.com'),
('Shiphrah Vemuluri ', 'Female', 'B171681', 'CSE', 'NA', 'NA', 'Work hard', 'b171681@rgukt.ac.in'),
('Jangala Sreeja ', 'Female', 'B172074', 'CSE', 'Front-end developer , keka technologies', '', '', 'sreejajangala@gmail.com'),
('Shiny Kotapati', 'Female', 'B161027', 'CSE', 'Software engineer', '1 year', 'stay focused', 'shiny.kotapati@gmail.com'),
('Santhosh Kumar Padidala', 'Male', 'B171777', 'CSE', 'tech at core', '7 months', 'U all can make it ..', 'santhosh143rgj@gmail.com'),
('Megavath Vijayalaxmi ', 'Female', 'B171135', 'CSE', 'Project associate ', 'Good working environment ', '', 'vijaya4421@gmail.com'),
('Erroju Krishnapriya ', 'Female', 'B171629', 'CSE', 'Software Engineer ', 'Nice', '', 'errojukrishnapriya@gmail.com'),
('Rakesh Yata', 'Male', 'B171190', 'CSE', 'Quantum Researcher and Developer', 'It is a startup company and I joined as an intern. Lot of learning happens. Nobody tells you to do something, you have to work. It is exciting. ', '', 'rakeshb171190@gmail.com'),
('Barre Blessy Harshitha', 'Female', 'B172116', 'CSE', 'Associate Software Engineer', 'The work culture is quite good', '', 'b172116@rgukt.ac.in'),
('Gugulothu Divya', 'Female', 'B171326', 'CSE', 'Software Engineer Trainee', 'It is excellent work environment.', 'Do hard work achieve your dreams', 'gugulothudivya1217@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`name`, `email`, `password`, `user_type`) VALUES
('SAN', 'san@gmail.com', '9f5a44a734ac9e43b5968d0f3b71d69b', 'admin'),
('sindhu', 'sindhub@gmail.com', '$2y$10$Ydbgo9E5CvvTzVj20O6Ke.x9LRYgzDZCxrr6mcxxdJR2ODpW5GzJW', 'user'),
('abhinaya', 'abhinaya@gmail.com', '85a586d8b9e3ec0bcb11f39175777814', 'user'),
('nisha', 'nisha@gmail.com', 'a9f56b7ece2113c9c4a1214a19ede99c', 'user'),
('swecha', 'swecha@gmail.com', '6c180d4fb00f40eb9c056a6989833727', 'user'),
('monu', 'monu@gmail.com', '68d03c79ce1717fb2b4c06f0f66c3af5', 'user'),
('vinay', 'vinay@gmail.com', '5a8eaa3e637f51ba3f9df03355d7bc08', 'user'),
('son', 'son@gmail.com', '202cb962ac59075b964b07152d234b70', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `full_name`, `email`, `message`, `timestamp`) VALUES
(3, 'Swecha', 'swecha@gmail.com', 'I like your page . Thank you...', '2023-08-28 17:19:06.363889'),
(5, 'monu', 'monu@gmail.com', 'thanks for the info.', '2023-08-28 17:25:24.595430'),
(6, 'vinay', 'vinay@gmail.com', 'Here , I got my alumni details. Thank You :)', '2023-08-28 17:26:05.155143'),
(7, 'swathi', 'swathi@gmail.com', 'Thank You ...', '2023-08-28 17:27:18.656015'),
(8, 'nk', '123@gmail.com', 'tq', '2023-09-02 05:17:41.481902'),
(9, 'jk', 'jk@gmail.com', 'thankyou', '2023-09-02 06:00:07.977806');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
