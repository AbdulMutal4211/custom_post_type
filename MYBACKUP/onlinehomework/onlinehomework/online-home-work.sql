-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2020 at 12:02 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online-home-work`
--

-- --------------------------------------------------------

--
-- Table structure for table `AC_Eight`
--

CREATE TABLE `AC_Eight` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Eight`
--

INSERT INTO `AC_Eight` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 8');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Five`
--

CREATE TABLE `AC_Five` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Five`
--

INSERT INTO `AC_Five` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 5');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Four`
--

CREATE TABLE `AC_Four` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Four`
--

INSERT INTO `AC_Four` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 4');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Nine`
--

CREATE TABLE `AC_Nine` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Nine`
--

INSERT INTO `AC_Nine` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 9');

-- --------------------------------------------------------

--
-- Table structure for table `AC_One`
--

CREATE TABLE `AC_One` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_One`
--

INSERT INTO `AC_One` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'assignment 1');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Seven`
--

CREATE TABLE `AC_Seven` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Seven`
--

INSERT INTO `AC_Seven` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 7');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Six`
--

CREATE TABLE `AC_Six` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Six`
--

INSERT INTO `AC_Six` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 6');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Ten`
--

CREATE TABLE `AC_Ten` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Ten`
--

INSERT INTO `AC_Ten` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'assignment 10');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Three`
--

CREATE TABLE `AC_Three` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Three`
--

INSERT INTO `AC_Three` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'assignment 3'),
(2, 'i4.png', 'this is tha user icon');

-- --------------------------------------------------------

--
-- Table structure for table `AC_Two`
--

CREATE TABLE `AC_Two` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AC_Two`
--

INSERT INTO `AC_Two` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'assignment 2');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `image`, `text`, `name`) VALUES
(41, '', 'salam abdul kese ho??', 'admin'),
(42, '', 'me theek tum sunao', 'syed mutal'),
(43, '', 'salam abdul kese ho??', 'admin'),
(44, '', 'Bhai kaha to theek hun', 'admin'),
(45, '', 'mene to poocha \r\nor kab kaha??', 'syed mutal'),
(46, '', 'ho sorry ghalti se tumhe kar dia msg mene', 'admin'),
(47, '', 'its OK', 'syed mutal'),
(48, '', 'wese software acha banaya he tum ne  ', 'admin'),
(49, '', 'hmm thanks', 'syed mutal'),
(50, '', 'or kia chal rha he aaj kal??', 'admin'),
(51, '', 'kuch nahi bass isi tarhan k kam chal rahe hen', 'syed mutal'),
(52, '', 'kuch nahi bass isi tarhan k kam chal rahe hen', 'syed mutal'),
(53, '', 'hmm good ', 'admin'),
(54, '', ':)', 'syed mutal');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Eight`
--

CREATE TABLE `HC_Eight` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Eight`
--

INSERT INTO `HC_Eight` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'urdu');

-- --------------------------------------------------------

--
-- Table structure for table `HC_five`
--

CREATE TABLE `HC_five` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_five`
--

INSERT INTO `HC_five` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'english');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Four`
--

CREATE TABLE `HC_Four` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Four`
--

INSERT INTO `HC_Four` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'science');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Nine`
--

CREATE TABLE `HC_Nine` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Nine`
--

INSERT INTO `HC_Nine` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'sindhi');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Seven`
--

CREATE TABLE `HC_Seven` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Seven`
--

INSERT INTO `HC_Seven` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'drawing');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Six`
--

CREATE TABLE `HC_Six` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Six`
--

INSERT INTO `HC_Six` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Ten`
--

CREATE TABLE `HC_Ten` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Ten`
--

INSERT INTO `HC_Ten` (`id`, `image`, `image_text`) VALUES
(1, 'PHP Mailer.txt', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Three`
--

CREATE TABLE `HC_Three` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Three`
--

INSERT INTO `HC_Three` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'islamiat'),
(2, 'Custom Range Slider.txt', 'computer'),
(3, 'i4.png', 'this user icon');

-- --------------------------------------------------------

--
-- Table structure for table `HC_Two`
--

CREATE TABLE `HC_Two` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HC_Two`
--

INSERT INTO `HC_Two` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'urdu'),
(2, 'Custom Range Slider.txt', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `H_Class_One`
--

CREATE TABLE `H_Class_One` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `H_Class_One`
--

INSERT INTO `H_Class_One` (`id`, `image`, `image_text`) VALUES
(1, 'Custom Range Slider.txt', 'english'),
(2, 'Custom Range Slider.txt', 'english'),
(3, 'BDD9159B-FC59-44AB-AD57-F21F148444C4.jpeg', 'Pubg screen shot');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_text` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`) VALUES
(129, 'CBD Vending Machine.docx', 'Class III'),
(130, 'A2BF66EE-23F8-45D4-B6A6-9D41D4BDD9EA.jpeg', 'My picture'),
(131, 'new.docx', 'New'),
(132, 'wp-rocket_3.2.6.zip', 'wp rocket'),
(133, 'Aurora.zip', 'aura psd'),
(134, 'logo.png', 'dfdsfasdfasdfads'),
(135, 'web-project-questionnaire-4-leadership-enterprises-4042.docx', 'class 1 english subjec'),
(136, 'web-project-questionnaire-4-leadership-enterprises-4042.docx', 'class 1 eng'),
(137, 'Leadership Enterprises, Inc_how to contact.jpg', 'this is the picture'),
(138, 'web-project-questionnaire-4-leadership-enterprises-4042.docx', 'class 5 math'),
(156, 'online-home-work.sql', 'SQL file'),
(157, 'PHP Mailer.txt', 'Mailer');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(14, 'admin', 'Teacher', '21232f297a57a5a743894a0e4a801fc3'),
(15, 'Sufiyanhassan4211', 'Teacher', 'c9fdc192a8ee5c952c1aa8cf934e6add'),
(16, 'syed mutal', 'Teacher', '21232f297a57a5a743894a0e4a801fc3'),
(17, 'hamza ali', 'class 2', '21232f297a57a5a743894a0e4a801fc3'),
(18, 'Syed mutal', 'Teacher', '1940e51d84c0c91ecf57412b77f4c587'),
(19, 'Safi Ahmed Siddique', 'Teacher', '8d71d5db7ec2937aa750a1ffcfbd3f57'),
(20, 'hamza', 'class 2', '8950259507cd8ce2a99f8b94674f2b77'),
(21, 'Osama sheikh', 'kg 1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `vications`
--

CREATE TABLE `vications` (
  `image` varchar(1000) NOT NULL,
  `image_text` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vications`
--

INSERT INTO `vications` (`image`, `image_text`, `id`) VALUES
('about.jpg', 'about image', 1),
('Cruits.docx', 'class 2 assignment', 2),
('WP.txt', 'WPs', 5),
('PHP Mailer.txt', 'mailer2', 6),
('news-letter-CSS.txt', 'mycss', 13),
('CustomCss.zip', 'my css', 14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AC_Eight`
--
ALTER TABLE `AC_Eight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Five`
--
ALTER TABLE `AC_Five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Four`
--
ALTER TABLE `AC_Four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Nine`
--
ALTER TABLE `AC_Nine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_One`
--
ALTER TABLE `AC_One`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Seven`
--
ALTER TABLE `AC_Seven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Six`
--
ALTER TABLE `AC_Six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Ten`
--
ALTER TABLE `AC_Ten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Three`
--
ALTER TABLE `AC_Three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `AC_Two`
--
ALTER TABLE `AC_Two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Eight`
--
ALTER TABLE `HC_Eight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_five`
--
ALTER TABLE `HC_five`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Four`
--
ALTER TABLE `HC_Four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Nine`
--
ALTER TABLE `HC_Nine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Seven`
--
ALTER TABLE `HC_Seven`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Six`
--
ALTER TABLE `HC_Six`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Ten`
--
ALTER TABLE `HC_Ten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Three`
--
ALTER TABLE `HC_Three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `HC_Two`
--
ALTER TABLE `HC_Two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `H_Class_One`
--
ALTER TABLE `H_Class_One`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vications`
--
ALTER TABLE `vications`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `AC_Eight`
--
ALTER TABLE `AC_Eight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Five`
--
ALTER TABLE `AC_Five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Four`
--
ALTER TABLE `AC_Four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Nine`
--
ALTER TABLE `AC_Nine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_One`
--
ALTER TABLE `AC_One`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Seven`
--
ALTER TABLE `AC_Seven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Six`
--
ALTER TABLE `AC_Six`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Ten`
--
ALTER TABLE `AC_Ten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `AC_Three`
--
ALTER TABLE `AC_Three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `AC_Two`
--
ALTER TABLE `AC_Two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `HC_Eight`
--
ALTER TABLE `HC_Eight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_five`
--
ALTER TABLE `HC_five`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_Four`
--
ALTER TABLE `HC_Four`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_Nine`
--
ALTER TABLE `HC_Nine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_Seven`
--
ALTER TABLE `HC_Seven`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_Six`
--
ALTER TABLE `HC_Six`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `HC_Ten`
--
ALTER TABLE `HC_Ten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `HC_Three`
--
ALTER TABLE `HC_Three`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `HC_Two`
--
ALTER TABLE `HC_Two`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `H_Class_One`
--
ALTER TABLE `H_Class_One`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vications`
--
ALTER TABLE `vications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
