-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2020 at 11:23 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(33) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `clients_logo`
--

CREATE TABLE `clients_logo` (
  `id` int(11) NOT NULL,
  `clients_name` varchar(255) NOT NULL,
  `brand_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_logo`
--

INSERT INTO `clients_logo` (`id`, `clients_name`, `brand_logo`) VALUES
(2, 'Denary Computing LTD', 'brand-3.png'),
(3, 'Blue Canvas LTD', 'brand-2.png'),
(4, 'Maxwell Services', 'brand-1.png'),
(5, '', 'brand-8.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `subject`, `message`) VALUES
(1, 'wgew', 'eey', ''),
(2, '016253@gmail.com', 'thanks', 'fhtsjhryj'),
(3, 'admin@admin.com', 'thanks', 'dsgdhdh'),
(4, '01625326156dj@gmail.com', 'thanks', 'your system is good.'),
(5, 'vaguja@mailinator.com', 'Dolorem maiores odit', 'Voluptatibus ad quo '),
(6, '01625326156dj@gmail.com', 'problem', 'high problem');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(11) NOT NULL,
  `sender_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `sender_email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `message` varchar(500) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `sender_name`, `sender_email`, `message`) VALUES
(14, 'Orlando Fowler', 'races@mailinator.net', 'Et laborum Laudanti'),
(15, 'Orlando Fowler', 'races@mailinator.net', 'Et laborum Laudanti'),
(16, 'Bianca Butler', 'zoqi@mailinator.net', 'Cupidatat esse plac'),
(17, 'MD Saiful Islam', 'rymak@mailinator.com', 'Tempore quod adipis');

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `n_id` int(3) NOT NULL,
  `n_name` varchar(44) CHARACTER SET utf8 NOT NULL,
  `n_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`n_id`, `n_name`, `n_link`) VALUES
(4, 'CONTACT', '#contact'),
(5, 'TESTIMONIAL', '#testimonial'),
(6, 'PORTFOLIO', '#portfolio'),
(7, 'SERVICES', '#services'),
(8, 'ABOUT', '#about'),
(9, 'HOME', '#home');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(3) NOT NULL,
  `sub_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `sub_email`) VALUES
(16, '1000310@daffodil.ac'),
(17, '1000310@daffodil.ac'),
(18, '01625326156dj@gmail.com'),
(19, '01625326156dj@gmail.com'),
(20, '01625326156dj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `number_area`
--

CREATE TABLE `number_area` (
  `id` int(3) NOT NULL,
  `area_icon` text NOT NULL,
  `area_value` int(8) NOT NULL,
  `area_type_decription` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `number_area`
--

INSERT INTO `number_area` (`id`, `area_icon`, `area_value`, `area_type_decription`) VALUES
(1, 'fa fa-clock-o', 3015, 'Hours Worked'),
(2, 'fa fa-code', 6589, 'Lines of Code'),
(3, 'fa fa-user', 237, 'Happy Customer'),
(4, 'fa fa-trophy', 33, 'Awards Won');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `location` varchar(50) NOT NULL,
  `phone` varchar(18) NOT NULL,
  `email` varchar(30) NOT NULL,
  `facebook` text NOT NULL,
  `linkedin` text NOT NULL,
  `github` text NOT NULL,
  `twitter` text NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`location`, `phone`, `email`, `facebook`, `linkedin`, `github`, `twitter`, `id`) VALUES
('Dhaka, Bangladesh', '(+880) 162 532 615', 'contact@imsaiful.info', 'https://www.facebook.com/Bita639', 'https://www.linkedin.com/in/bita639/', 'https://github.com/bita639', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `full_name` varchar(44) CHARACTER SET utf8 NOT NULL,
  `job_title` varchar(44) CHARACTER SET utf8 NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `resume` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `full_name`, `job_title`, `description`, `resume`, `image`) VALUES
(2, 'Saiful Islam', 'Full Stack Web Developer', 'Full Stuck Web Application Developer with extensive knowledge in PHP , Python and Django framework. Very much familiar with Agile and some of its fantastic framework such as SCRUM & DSDM. Beside the programming i am very much passionate in Cyber security. I have plethora of skill in Networking and cloud computing and penetration Testing.', 'Resume_MD_Saiful_Islam.pdf', 'about-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` int(3) NOT NULL,
  `p_name` varchar(44) NOT NULL,
  `p_description` varchar(120) NOT NULL,
  `p_image` text NOT NULL,
  `client` varchar(20) NOT NULL,
  `completed` date NOT NULL,
  `Type` varchar(30) NOT NULL,
  `Link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `p_description`, `p_image`, `client`, `completed`, `Type`, `Link`) VALUES
(1, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores, velit. Accusantium mollitia obcaecati quos.', 'port1.jpg', 'fdgdg', '2020-05-13', 'sdfgd', 'www.facebook.com'),
(2, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores, velit. Accusantium mollitia obcaecati quos.', 'port2.jpg', 'Reebok', '2020-05-20', 'Wordpress', 'www.youtube.com'),
(3, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores, velit. Accusantium mollitia obcaecati quos.', 'port3.jpg', 'dfsgdsf', '2020-05-01', 'hfssasf', 'www.youtube.com/'),
(4, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores, velit. Accusantium mollitia obcaecati quos.', 'port4.jpg', 'lkjhgf', '2020-05-05', 'lkjhgfc', 'https://www.youtube.com/'),
(5, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, dolores, velit. Accusantium mollitia obcaecati quos.', 'port5.jpg', 'kjhgf', '2020-05-08', 'jhgf', 'https://www.facebook.com/'),
(6, 'My Project Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, delectus deserunt eum eveniet, illo iste magni nobis ', 'port6.jpg', 'fsdgf', '2020-05-01', 'svdsfs', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(2) NOT NULL,
  `s_title` varchar(44) CHARACTER SET utf8 NOT NULL,
  `s_description` varchar(500) CHARACTER SET utf8 NOT NULL,
  `s_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_title`, `s_description`, `s_logo`) VALUES
(1, 'Web Development', 'I provide expert web application development and web design services to my clients. I offer a variety of website design and development services, from creating mobile web development solutions.', 'fa fa-joomla'),
(2, 'System Administration', 'With extensive knowledge of Linux and windows server, I prove remote and physical administrative support to my clients. I am here to provide you all kind of server and network solution and deploy your software to the host.', 'fa fa-viacoin'),
(3, 'Penetration Testing', 'I provide penetration Testing service to find any hole or weakness in your system and then makes a cool report with the best solution to prevent Your system threats.', 'fa fa-renren');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `skill_name` varchar(20) NOT NULL,
  `percentage` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skill_name`, `percentage`) VALUES
(1, 'PHP', 85),
(2, 'Python', 75),
(3, 'Django', 65),
(4, 'Penetration Testing', 60),
(5, 'HTML/CSS', 85),
(6, 'Bootstrap', 90);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `xxname` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `xxname`) VALUES
(10, 'asdfg'),
(11, 'asdfg'),
(12, 'ssddd'),
(13, 'casdas'),
(15, 'hasib vhai'),
(16, 'hasib vhai'),
(17, 'sdfsav');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `t_id` int(3) NOT NULL,
  `t_image` text NOT NULL,
  `t_name` varchar(44) NOT NULL,
  `t_role` varchar(50) NOT NULL,
  `t_description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`t_id`, `t_image`, `t_name`, `t_role`, `t_description`) VALUES
(1, 'testi-1.jpg', 'Yeasin', 'CEO, Google', 'My Experience working with Mason has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind.'),
(2, 'testi-1.jpg', 'buyh', 'CEO, Houston', 'My Experience working with Mason has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind.'),
(3, 'testi-3.jpg', 'Yungchuk', 'MD, SONY', 'My Experience working with Mason has been very positive. I always receive quality service from him. I highly recommend this guy to everyone because I think he is one a of kind.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(26, 'bita639', '123456', 'MD Saiful', 'Islam', '01625326156dj@gmail.com', 'my_pic.jpg', 'subscriber', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients_logo`
--
ALTER TABLE `clients_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `number_area`
--
ALTER TABLE `number_area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `clients_logo`
--
ALTER TABLE `clients_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `n_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `number_area`
--
ALTER TABLE `number_area`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_information`
--
ALTER TABLE `personal_information`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `p_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `t_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
