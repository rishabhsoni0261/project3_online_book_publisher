-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2022 at 10:46 AM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_number` varchar(50) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`bill_id`),
  KEY `reader_id` (`reader_id`,`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bill`
--


-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_cover_page` text NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_description` text NOT NULL,
  `book_ISBN` text NOT NULL,
  `book_total_page` bigint(20) NOT NULL,
  `book_qty` varchar(50) NOT NULL,
  `book_price` varchar(50) NOT NULL,
  `book_regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `book_status` enum('Available','Unavailable') NOT NULL DEFAULT 'Available',
  `book_author_name` varchar(50) NOT NULL,
  `book_upload` text NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `publisher_id` (`publisher_id`),
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_cover_page`, `book_name`, `book_description`, `book_ISBN`, `book_total_page`, `book_qty`, `book_price`, `book_regdate`, `book_status`, `book_author_name`, `book_upload`, `publisher_id`, `category_id`, `subcategory_id`) VALUES
(40, 'coverpage/The Digital Photography.jpg', 'The Digital Photography', 'There’s a golden rule of landscape photography, and you can follow every tip in this chapter, but without strictly following this rule, you’ll never get the results the top pros do. As a landscape photographer, you can only shoot two times a day: (1) Dawn. You can shoot about 15 to 30 minutes before sunrise, and then from 30 minutes to an hour (depending on how harsh the light becomes) afterward.', '978-0-321-93494-9', 55, '8', '549', '2020-07-28 20:18:27', 'Available', 'Scott Kelby', 'ebook_uploaded/The Digital Photography.pdf', 3, 11, 10),
(41, 'coverpage/Still Me.jpg', 'Still Me', 'It was the mustache	that	reminded	me	I	was	no	longer	in	England:	a solid,	gray	millipede	firmly	obscuring	the	man’s	upper	lip;	a	Village People	mustache,	a	cowboy	mustache,	the	miniature	head	of	a	broom that	meant	business.	You	just	didn’t	get	that	kind	of	mustache	at	home. I	couldn’t	tear	my	eyes	from	it. ', '9780399562471', 423, '5', '699', '2020-07-28 20:18:33', 'Available', 'Jojo Moyes', 'ebook_uploaded/Still-Me.pdf', 3, 4, 20),
(42, 'coverpage/The Vampire Lestat.jpg', 'The Vampire Lestat ', ' I am The Vampire Lestat.  I am immortal.  More or less.  The light of the sun, the sustained heat of an intense fire these things might destroy me.  But then again, they might not.  I am six feet tall, which was fairly impressive in the 1780s when I was a young mortal man.  It is not bad now.  I have thick blond hair, not quite shoulder length, and rather curly, which appears white under fluorescent light. ', '9780399562457', 427, '7', '549', '2020-07-28 20:18:38', 'Available', 'Anne Rice ', 'ebook_uploaded/the_vampire_lestat.pdf', 3, 18, 14),
(43, 'coverpage/One Indian Girl.jpg', 'One Indian Girl', 'Some people are good at taking decisions. I am not one of them. Some people fall asleep quickly at night. I am not one of them either. It is 3 in the morning. I have tossed and turned in bed for two hours. I am to get married in fifteen hours. We have over 200 guests in the hotel, here to attend my grand destination wedding in Goa. I brought them here. Everyone is excited. After all, it is the first destination wedding in the Mehta family. ', ' 9781477809235', 232, '10', '499', '2020-07-28 20:18:43', 'Available', 'Chetan Bhagat', 'ebook_uploaded/One_Indian_Girl.pdf', 3, 17, 13),
(44, 'coverpage/Blue Gold.jpg', 'Blue Gold', 'political, and economic impacts of water scarcity are rapidly becoming a destabilizing force, with water-related conflicts springing up around the globe. Quite simply, unless we dramatically change our ways, between one-half and two-thirds of humanity will be living with severe fresh water shortages within the next quarter-century. ', ' 978-1-844-07024-4 ', 60, '6', '249', '2020-07-28 20:18:49', 'Available', 'Tony Clarke', 'ebook_uploaded/Blue Gold.pdf', 3, 3, 35),
(46, 'coverpage/Are you afraid of the dark.jpg', 'Are you afraid of the dark', 'SONJA VERBRUGGE HAD no idea that this was going to be her last day on earth. She was pushing her way through the sea of summer tourists overflowing the busy sidewalks of Unter den Linden. Don not panic, she told herself. You must keep calm. The instant message on her computer from Franz had been terrifying. Run, Sonja! Go to the Artemisia Hotel. You will be safe there. Wait until you hear fromThe message had ended suddenly. ', ' 953-0-52-201653-5', 169, '8', '499', '2020-07-28 20:18:58', 'Available', 'Sidney Sheldon ', 'ebook_uploaded/2004 Are You Afraid of the Dark_Sidney Sheldon.pdf', 1, 18, 28),
(47, 'coverpage/Ghost Soldiers.jpg', 'Ghost Soldiers', 'All about them, their work lay in ruins. Their raison d’être, the task their commandant had said would take them three months but had taken nearly three years. A thousand naked days of clearing, lifting, leveling, wheelbarrowing, hacking. Thirty-odd months in close heavy heat smashing rocks into smaller rocks, and smaller rocks into pebbles, hammering sad hunks of brain coral into bone-white flour with which to make concrete.', '1-4000-3340-3', 261, '4', '749', '2020-07-28 20:19:02', 'Available', 'Hampton Sides', 'ebook_uploaded/Ghost Soldiers.pdf', 1, 20, 18),
(48, 'coverpage/The Seven Lost Secrets of Success.jpg', 'The Seven Lost Secrets of Success', 'What a wonderful book! I am delighted that my friend Dr. Joe Vitale has written about a great man who profoundly in? uenced my life. When I met Bruce Barton, I needed his help badly. I had begun my small advertising business on foot, pushing my two babies before me on a rickety baby stroller with pillows tied on with rope. ', '978-0-470-10810-9 ', 224, '7', '699', '2020-07-28 20:19:11', 'Available', 'JOE VITALE', 'ebook_uploaded/The Seven Lost Secrets of Success_ Million Dollar Ideas.pdf', 1, 10, 17),
(49, 'coverpage/Dietary Reference Intakes.jpg', 'Dietary Reference Intakes', 'This report is one of a series designed to provide guidance on the interpretation and uses of Dietary Reference Intakes (DRIs). The term Dietary Reference Intakes is relatively new to the field of nutrition and refers to a set of four nutrient-based reference values that can be used for assessing and planning diets and for many other purposes. Specifically, this report provides guidance to nutrition and health professionals for applications of the DRIs in dietary assessment of individuals and groups.', ' 0-309-07311', 306, '9', '629', '2020-07-28 20:19:15', 'Available', 'LENORE ARAB', 'ebook_uploaded/Dietary Reference Intakes.pdf', 1, 13, 1),
(53, 'coverpage/Killing Floor.jpg', 'Killing Floor', 'I was arrested in Eno diner. At twelve o clock. I was eating eggs and\r\ndrinking coffee. A late breakfast, not lunch. I was wet and tired after a long\r\nwalk in heavy rain. All the way from the highway to the edge of town. The\r\ndiner was small, but bright and clean. Brand-new, built to resemble a\r\nconverted railroad car. Narrow, with a long lunch counter on one side and a\r\nkitchen bumped out back', ' 953-0-52-202053-5', 335, '5', '529', '2020-07-28 20:19:19', 'Available', 'Lee Child', 'ebook_uploaded/Killing_Floor.pdf', 1, 3, 34);

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--

CREATE TABLE IF NOT EXISTS `bookmark` (
  `bookmark_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`bookmark_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bookmark`
--


-- --------------------------------------------------------

--
-- Table structure for table `book_enquiry`
--

CREATE TABLE IF NOT EXISTS `book_enquiry` (
  `enquiry_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `enquiry_name` varchar(50) NOT NULL,
  `enquiry_email` varchar(50) NOT NULL,
  `enquiry_phone` bigint(20) NOT NULL,
  `enquiry_description` text NOT NULL,
  PRIMARY KEY (`enquiry_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book_enquiry`
--

INSERT INTO `book_enquiry` (`enquiry_id`, `book_id`, `reader_id`, `book_name`, `enquiry_name`, `enquiry_email`, `enquiry_phone`, `enquiry_description`) VALUES
(2, 40, 3, 'The Digital Photography', 'abdul kallawala', 'abdulkallawala53@gmail.com', 7874031752, 'Can you please send me more details about this book?'),
(4, 42, 3, 'The Vampire Lestat ', 'abdul kallawala', 'abdulkallawala53@gmail.com', 7874031752, 'Can you please send me more details about this book?'),
(5, 44, 2, 'Blue Gold', 'Adnan Rasawala', 'adnanrasawala@gmail.com', 8469814652, 'Can you please send me more details about this book?');

-- --------------------------------------------------------

--
-- Table structure for table `book_review`
--

CREATE TABLE IF NOT EXISTS `book_review` (
  `bookreview_id` int(11) NOT NULL AUTO_INCREMENT,
  `bookreview_details` varchar(100) NOT NULL,
  `bookreview_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reader_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`bookreview_id`),
  KEY `reader_id` (`reader_id`,`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book_review`
--

INSERT INTO `book_review` (`bookreview_id`, `bookreview_details`, `bookreview_date`, `reader_id`, `book_id`) VALUES
(1, 'This book is awesome. You have to try it atleast once.', '2020-07-22 21:34:55', 2, 41),
(2, 'This book is not very good or not very bad but it is one time read.', '2020-07-23 00:15:31', 3, 42),
(3, 'I am the big fan of photography. And this book helps a lot in polishing my photography skills', '2020-07-24 02:03:13', 2, 40),
(4, 'Nice Book\r\n', '2020-07-28 10:58:50', 3, 44),
(5, 'At starting i did not like this book but after reading the whole book i loved this book.', '2020-08-08 21:09:36', 2, 44);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `book_price` varchar(50) NOT NULL,
  `book_quantity` int(11) NOT NULL,
  `total_book_price` bigint(20) NOT NULL,
  PRIMARY KEY (`cart_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `book_id`, `reader_id`, `book_price`, `book_quantity`, `total_book_price`) VALUES
(14, 45, 3, '599', 6, 3594),
(17, 40, 0, '549', 1, 549),
(18, 41, 0, '699', 2, 1398),
(19, 41, 3, '699', 2, 1398);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  `category_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_date`, `category_status`) VALUES
(2, 'Comedy', '2020-01-02 22:40:03', 'Deactive'),
(3, 'Thriller', '2020-07-29 11:59:19', 'Active'),
(4, 'Romance', '2020-01-02 22:40:16', 'Active'),
(10, 'Business', '2020-01-01 23:20:14', 'Deactive'),
(11, 'Arts & Music', '2020-01-01 23:20:14', 'Deactive'),
(12, 'Computers & Tech', '2020-01-01 23:01:30', 'Active'),
(13, 'Cooking', '2020-01-01 23:01:41', 'Active'),
(14, 'Health And Fitness', '2020-01-01 23:17:03', 'Active'),
(16, 'Comic', '2020-01-05 20:50:30', 'Active'),
(17, 'AutoBiography', '2020-06-30 12:12:38', 'Active'),
(18, 'Horror', '2020-06-30 20:28:28', 'Active'),
(19, 'Literature', '2020-07-14 11:56:09', 'Active'),
(20, 'Sci & Fiction', '2020-07-18 12:55:03', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `city_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `city_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`city_id`),
  KEY `state_id` (`state_id`),
  KEY `state_id_2` (`state_id`),
  KEY `state_id_3` (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `state_id`, `city_name`, `city_date`, `city_status`) VALUES
(4, 23, 'Surat', '2020-01-02 13:03:28', 'Active'),
(6, 23, 'Vadodara', '2020-01-02 13:05:52', 'Active'),
(7, 24, 'Pune', '2020-01-02 13:06:01', 'Active'),
(8, 24, 'Mumbai', '2020-01-02 13:06:10', 'Active'),
(9, 25, 'Chennai', '2020-01-02 13:10:54', 'Deactive'),
(10, 24, 'Thane', '2020-01-02 13:07:06', 'Active'),
(11, 25, 'Kaniyakumari', '2020-01-02 13:08:53', 'Active'),
(12, 24, 'Aurangabad', '2020-01-02 13:10:05', 'Active'),
(13, 23, 'Ahmedabad', '2020-01-02 13:11:23', 'Active'),
(14, 4, 'Patna', '2020-01-02 13:20:12', 'Active'),
(15, 4, 'Muzaffarpur', '2020-01-02 13:28:21', 'Active'),
(16, 14, 'Panaji', '2020-01-02 13:28:50', 'Active'),
(17, 14, 'Vasco-da-gama', '2020-01-02 13:29:24', 'Active'),
(18, 15, 'Guwahati', '2020-01-02 13:30:11', 'Active'),
(19, 26, 'Ranchi', '2020-01-02 13:31:52', 'Active'),
(20, 23, 'Anand', '2020-01-06 13:21:24', 'Active'),
(21, 23, 'Bardoli', '2021-06-07 09:32:42', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `membership_id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_type` text NOT NULL,
  `membership_details` text NOT NULL,
  PRIMARY KEY (`membership_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`membership_id`, `membership_type`, `membership_details`) VALUES
(1, 'Trial', '5 Books, 30 Days'),
(2, 'Basic', '10 Books, 30 Days'),
(3, 'Gold', 'Unlimited Books, 30 Days');

-- --------------------------------------------------------

--
-- Table structure for table `membership_price`
--

CREATE TABLE IF NOT EXISTS `membership_price` (
  `membershipprice_id` int(11) NOT NULL AUTO_INCREMENT,
  `submembership_id` int(11) NOT NULL,
  `membership_price` bigint(20) NOT NULL,
  PRIMARY KEY (`membershipprice_id`),
  KEY `submembership_id` (`submembership_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `membership_price`
--

INSERT INTO `membership_price` (`membershipprice_id`, `submembership_id`, `membership_price`) VALUES
(1, 1, 100),
(2, 2, 150),
(3, 3, 150),
(4, 4, 150),
(5, 5, 150),
(6, 6, 150),
(7, 7, 150),
(8, 8, 150),
(9, 9, 150),
(10, 10, 150),
(11, 11, 150),
(12, 12, 150),
(13, 13, 150),
(14, 14, 200),
(15, 15, 200),
(16, 16, 200),
(17, 17, 200),
(18, 18, 200),
(19, 19, 200),
(20, 20, 200),
(21, 21, 200),
(22, 22, 200),
(23, 23, 200),
(24, 24, 200),
(25, 25, 200),
(28, 7, 0),
(29, 8, 0),
(30, 9, 0),
(31, 10, 0),
(32, 11, 0),
(33, 12, 0),
(34, 13, 0),
(35, 14, 0),
(36, 15, 0),
(37, 16, 0),
(38, 17, 0),
(39, 18, 0),
(40, 19, 0),
(41, 20, 0),
(42, 21, 0),
(43, 22, 0),
(44, 23, 0),
(45, 24, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `quantity` bigint(20) NOT NULL,
  `total_price` bigint(20) NOT NULL,
  `order_no` bigint(20) NOT NULL,
  `order_payment_mode` enum('COD','CREDIT') NOT NULL DEFAULT 'COD',
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` enum('Confirm','Pending','Reject') NOT NULL DEFAULT 'Pending',
  PRIMARY KEY (`order_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `book_id`, `reader_id`, `quantity`, `total_price`, `order_no`, `order_payment_mode`, `order_date`, `order_status`) VALUES
(1, 40, 2, 2, 1098, 22293, 'COD', '2021-06-06 23:49:57', 'Pending'),
(2, 40, 8, 2, 1098, 49408, 'COD', '2021-06-06 17:38:18', 'Pending'),
(3, 43, 8, 1, 499, 49408, 'COD', '2021-06-06 17:38:18', 'Pending'),
(4, 44, 8, 1, 249, 536604, 'COD', '2021-06-07 10:17:36', 'Pending'),
(5, 40, 2, 1, 549, 997378, 'COD', '2021-06-22 13:19:41', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS `publisher` (
  `publisher_id` int(11) NOT NULL AUTO_INCREMENT,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_email` varchar(50) NOT NULL,
  `publisher_password` varchar(30) NOT NULL,
  `publisher_office_address` text NOT NULL,
  `publisher_office_number` bigint(15) NOT NULL,
  `publisher_state` varchar(50) NOT NULL,
  `publisher_city` varchar(50) NOT NULL,
  `publisher_profile` text NOT NULL,
  `registration_id` int(11) NOT NULL,
  PRIMARY KEY (`publisher_id`),
  KEY `registration_id` (`registration_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_email`, `publisher_password`, `publisher_office_address`, `publisher_office_number`, `publisher_state`, `publisher_city`, `publisher_profile`, `registration_id`) VALUES
(1, 'Navneet Books', 'navneet@gmail.com', 'Navneet@5253', '', 0, 'Gujarat', 'Surat', '', 0),
(2, 'Jaico Publishing House 1', 'jphpublisher123@gmail.com', 'jaico@123', '', 0, 'Goa', 'Panaji', '', 0),
(3, 'Arihant Books', 'arihantpub@gmail.com', 'arihant123', '', 0, 'Gujarat', 'Vadodara', '', 0),
(4, 'amrpublisher', 'amrpub@gmail.com', 'amr5253', '', 0, 'Gujarat', 'Vadodara', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reader`
--

CREATE TABLE IF NOT EXISTS `reader` (
  `reader_id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_name` varchar(50) NOT NULL,
  `reader_email` varchar(50) NOT NULL,
  `reader_password` varchar(50) NOT NULL,
  `reader_address` text NOT NULL,
  `reader_city` varchar(50) NOT NULL,
  `reader_state` varchar(50) NOT NULL,
  `reader_dob` datetime NOT NULL,
  `reader_mobile` bigint(15) NOT NULL,
  `reader_gender` varchar(50) NOT NULL,
  `reader_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `reader_profile` text NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`reader_id`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `reader`
--

INSERT INTO `reader` (`reader_id`, `reader_name`, `reader_email`, `reader_password`, `reader_address`, `reader_city`, `reader_state`, `reader_dob`, `reader_mobile`, `reader_gender`, `reader_date`, `reader_profile`, `book_id`) VALUES
(2, 'Rishabh Soni', 'rishabhsoni0261@gmail.com', 'riso1708', 'B/82,Jalaram nagar,Pandesara,Surat', 'Surat', 'Gujarat', '0000-00-00 00:00:00', 9601169077, '', '2022-02-03 20:16:27', '', 0),
(3, 'Mehul Agarwal', 'mehul53@gmail.com', 'mehul123', 'Samta', 'Surat', 'Gujarat', '0000-00-00 00:00:00', 787401752, '', '2022-02-03 20:16:27', '', 0),
(4, 'Yashwant singh rathore', 'yashwant@gmail.com', 'yashwant007', 'Majoora Gate', 'Mumbai', 'Maharashtra', '0000-00-00 00:00:00', 8347700842, '', '2022-02-03 20:16:27', '', 0),
(8, 'Nitesh Singh', 'niteshsingh@gmail.com', 'Nitesh@123', 'Bhestan', 'Surat', 'Gujarat', '0000-00-00 00:00:00', 8469814652, '', '2021-06-06 23:47:57', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `registration_id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_username` varchar(50) NOT NULL,
  `registration_mobileno` varchar(15) NOT NULL,
  `registration_email` varchar(50) NOT NULL,
  `registration_gender` varchar(20) NOT NULL,
  `registration_password` varchar(50) NOT NULL,
  PRIMARY KEY (`registration_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `registration_username`, `registration_mobileno`, `registration_email`, `registration_gender`, `registration_password`) VALUES
(1, 'rishabhsoni0261', '9601169077', 'rishabhsoni0261@gmail.com', 'Male', '17081999'),
(2, 'yashwant007', '7874031752', 'yashwant007@gmail.com', 'Male', '1234'),
(3, 'mehularg', '9828523882', 'mehularg@gmail.com', 'Male', '786'),
(4, 'nitu', '9726697996', 'nitu@gmail.com', 'Female', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE IF NOT EXISTS `shipping_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `reader_id` int(11) NOT NULL,
  `order_no` int(11) NOT NULL,
  `address_mobile_no` bigint(20) NOT NULL,
  `address_state` varchar(100) NOT NULL,
  `address_city` varchar(100) NOT NULL,
  `address_shipping` text NOT NULL,
  `address_pincode` int(11) NOT NULL,
  `address_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  `address_entry_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`address_id`),
  KEY `registration_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`address_id`, `reader_id`, `order_no`, `address_mobile_no`, `address_state`, `address_city`, `address_shipping`, `address_pincode`, `address_status`, `address_entry_date`) VALUES
(2, 8, 454223, 9123456789, 'Gujarat', 'Surat', 'bhestan', 123456, 'Active', '2021-06-07 01:23:26'),
(3, 8, 536604, 9123456789, 'Gujarat', 'Surat', 'bhestan', 123456, 'Active', '2021-06-07 10:17:36'),
(4, 2, 997378, 8469814652, 'Gujarat', 'Surat', 'Moti Talkies', 0, 'Active', '2021-06-22 13:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `state_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `state_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_date`, `state_status`) VALUES
(4, 'Bihar', '2021-04-11 14:10:36', 'Active'),
(14, 'Goa', '2021-04-11 14:10:36', 'Active'),
(15, 'Assam', '2019-12-29 10:39:40', 'Active'),
(23, 'Gujarat', '2020-01-02 13:01:01', 'Active'),
(24, 'Maharashtra', '2020-01-06 13:02:18', 'Active'),
(25, 'Tamil Nadu', '2020-01-06 13:02:18', 'Deactive'),
(26, 'Jharkhand', '2021-06-07 09:26:01', 'Active'),
(33, 'Madhya Pradesh', '2020-01-06 09:32:15', 'Active'),
(34, 'delhi', '2020-06-28 18:56:48', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `subcategory_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `subcategory_name` varchar(50) NOT NULL,
  `subcategory_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `subcategory_status` enum('Active','Deactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`subcategory_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `category_id`, `subcategory_name`, `subcategory_date`, `subcategory_status`) VALUES
(1, 13, 'Baking', '2020-01-06 08:53:54', 'Active'),
(2, 16, 'DC', '2020-01-05 20:52:21', 'Active'),
(3, 16, 'Marvel', '2020-01-06 08:53:54', 'Active'),
(4, 10, 'Finance', '2020-01-05 20:53:24', 'Active'),
(5, 10, 'Industries', '2020-01-05 20:53:39', 'Active'),
(6, 11, 'Music', '2020-01-05 20:53:54', 'Active'),
(10, 11, 'Photography', '2020-01-06 08:51:40', 'Active'),
(11, 12, 'Apple', '2020-01-06 08:51:50', 'Active'),
(13, 17, 'Leaders & Notable Persons', '2020-06-30 12:13:33', 'Active'),
(14, 18, 'Vampire', '2020-06-30 20:28:54', 'Active'),
(15, 19, 'History', '2020-07-14 11:56:43', 'Active'),
(16, 17, 'Historical', '2020-07-14 12:00:32', 'Active'),
(17, 10, 'Careers', '2020-07-14 12:06:10', 'Active'),
(18, 20, 'Action', '2020-08-10 20:02:41', 'Active'),
(19, 20, 'Adventure', '2020-08-10 20:02:41', 'Deactive'),
(20, 4, 'Fantasy', '2020-07-18 13:01:49', 'Active'),
(21, 4, 'Young Adult', '2020-07-18 13:02:11', 'Active'),
(22, 4, 'Religious/Spiritual', '2020-07-18 13:02:42', 'Active'),
(23, 16, 'Graphics Novel', '2020-07-18 13:06:37', 'Active'),
(24, 16, 'Sci-Fi', '2020-07-18 13:07:04', 'Active'),
(25, 10, 'Economics', '2020-07-18 13:08:26', 'Active'),
(26, 12, 'Internet & Social Media', '2020-07-18 13:10:35', 'Active'),
(27, 12, 'Graphic Design', '2020-07-18 13:11:02', 'Active'),
(28, 18, 'Ghosts', '2020-07-18 13:12:55', 'Active'),
(29, 3, 'Paranormal', '2020-08-11 09:58:45', 'Active'),
(30, 18, 'Supernatural', '2020-07-18 13:14:53', 'Active'),
(31, 11, 'Film', '2020-07-18 13:16:04', 'Active'),
(32, 11, 'Fashion', '2020-07-18 13:18:35', 'Active'),
(33, 3, 'Action Thriller', '2020-07-24 20:18:19', 'Deactive'),
(34, 3, 'Crime', '2020-07-18 17:56:59', 'Active'),
(35, 3, 'Mystery', '2020-07-18 17:57:13', 'Active'),
(36, 3, 'Science Fiction', '2020-07-18 17:57:36', 'Active'),
(38, 12, 'nbsnbnsdnsbd', '2021-06-07 09:38:38', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `submembership`
--

CREATE TABLE IF NOT EXISTS `submembership` (
  `submembership_id` int(11) NOT NULL AUTO_INCREMENT,
  `membership_id` int(11) NOT NULL,
  `submembership_duration` bigint(20) NOT NULL,
  PRIMARY KEY (`submembership_id`),
  KEY `membership_id` (`membership_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `submembership`
--

INSERT INTO `submembership` (`submembership_id`, `membership_id`, `submembership_duration`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3),
(5, 2, 4),
(6, 2, 5),
(7, 2, 6),
(8, 2, 7),
(9, 2, 8),
(10, 2, 9),
(11, 2, 10),
(12, 2, 11),
(13, 2, 12),
(14, 3, 1),
(15, 3, 2),
(16, 3, 3),
(17, 3, 4),
(18, 3, 5),
(19, 3, 6),
(20, 3, 7),
(21, 3, 8),
(22, 3, 9),
(23, 3, 10),
(24, 3, 11),
(25, 3, 12);

-- --------------------------------------------------------

--
-- Table structure for table `website_review`
--

CREATE TABLE IF NOT EXISTS `website_review` (
  `websitereview_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_name` varchar(50) NOT NULL,
  `website_details` varchar(100) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `review_email` varchar(50) NOT NULL,
  `review_phone` bigint(20) NOT NULL,
  PRIMARY KEY (`websitereview_id`),
  KEY `reader_id` (`reader_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `website_review`
--

INSERT INTO `website_review` (`websitereview_id`, `review_name`, `website_details`, `reader_id`, `review_email`, `review_phone`) VALUES
(2, 'Abdul', 'I hated this website because it is under development, but i can not wait to access this awesome webs', 3, 'abdulkallawala@gmail.com', 7874031752),
(5, 'Adnan', 'Hello', 2, 'adnanrasawala@gmail.com', 8469814652),
(6, 'Nitu', 'query', 0, 'nitu@gmail.com', 8469814652),
(7, 'Poorna', 'I have query', 0, 'poo@gmail.com', 8469814652);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `reader_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`wishlist_id`),
  KEY `book_id` (`book_id`),
  KEY `reader_id` (`reader_id`),
  KEY `category_id` (`category_id`),
  KEY `subcategory_id` (`subcategory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `book_id`, `reader_id`, `category_id`, `subcategory_id`) VALUES
(6, 41, 3, 4, 20),
(9, 45, 2, 3, 34),
(11, 46, 3, 18, 28),
(13, 45, 3, 3, 34),
(20, 40, 3, 11, 10),
(22, 40, 7, 11, 10),
(23, 40, 8, 11, 10),
(24, 42, 8, 18, 14);
