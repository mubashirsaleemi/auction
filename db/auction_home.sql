-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2020 at 03:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `auction_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `asset_type`
--

CREATE TABLE IF NOT EXISTS `asset_type` (
  `asset_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  PRIMARY KEY (`asset_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `asset_type`
--

INSERT INTO `asset_type` (`asset_type_id`, `title`) VALUES
(1, 'Bank Owned'),
(2, 'Foreclosure Sales');

-- --------------------------------------------------------

--
-- Table structure for table `real_property`
--

CREATE TABLE IF NOT EXISTS `real_property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `auction_type` enum('online_auction','in_person_auction') NOT NULL DEFAULT 'in_person_auction',
  `address` text NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `size` varchar(255) NOT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `google_map` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `asset_type_id` int(11) NOT NULL,
  `property_type` int(11) NOT NULL,
  `contract_type` enum('sale','rent') NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL,
  `image5` text NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `real_property`
--

INSERT INTO `real_property` (`property_id`, `user_id`, `auction_type`, `address`, `zip_code`, `city`, `state`, `description`, `size`, `bedroom`, `bathroom`, `garage`, `google_map`, `price`, `asset_type_id`, `property_type`, `contract_type`, `image1`, `image2`, `image3`, `image4`, `image5`, `status`) VALUES
(1, 6, 'in_person_auction', 'Ghulsan-e-Khan, near darbar punjpeer', '54000', 'Lahore', 'New York', 'urpis ultricies pulvinar enim integer lectus, elementum eros vut sagittis egestas enim, lacus non? Integer phasellus scelerisque, tortor, dictumst et, magna! In pulvinar scelerisque! Sit in, arcu mus pid sagittis odio integer, ultricies in nisi odio hac pulvinar, montes hac augue mauris! Porta et adipiscing, ultrices? Tortor tincidunt! Turpis integer? Massa dis porttitor magna, mauris sit lectus. Enim non, vel auctor et enim penatibus, pid diam aenean montes mid elementum placerat egestas? Massa ridiculus! Cras eros pellentesque parturient, lectus adipiscing, sagittis dictumst a? Phasellus, duis ac, elit! Magnis! Ac vel! Ultrices mus. Diam ac, aenean, ac, dictumst enim aliquam. A augue, nunc! Facilisis et cum porttitor quis aliquam? Sit sed, pulvinar! Sociis tristique montes! Turpis pl', '1K', 5, 5, 1, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.962902243697!2d74.3524513!3d31.5312803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf19b0fca37910877!2sHildes!5e0!3m2!1sen!2s!4v1462628396172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '170000', 1, 1, 'sale', '', '', '', '', '', '1'),
(2, 6, 'in_person_auction', 'Malik Park', '54000', 'Lahore', 'Hawaii', 'ing dolor cras mattis integer lectus platea ut, lorem egestas nascetur etiam? Pid, turpis! Turpis augue cum odio lundium in duis sed mus nisi, integer. Ac! Sed penatibus auctor? Elementum! Placerat egestas ultricies est dignissim quis amet elit facilisis nec in sociis ac scelerisque! Egestas rhoncus cum lectus enim. Aliquet sit porttitor et? Nisi turpis, elementum! Turpis augue platea facilisis, est, magna ac scelerisque amet nunc. In in ut, dictumst nunc lundium, habitasse nascetur, in amet, nunc, turpis in. Pulvinar, pid eu in lundium, nunc elit! Porta scelerisque sit hac placerat etiam, rhoncus tortor, pid placerat diam ac? Pulvinar rhoncus? Amet, dictumst ultricies dapibus? Amet! Sed adipiscing in etiam tortor adipiscing elementum purus pellentesque! Dapibus in phasellus rhoncus ', '15M', 3, 4, 2, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.962902243697!2d74.3524513!3d31.5312803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf19b0fca37910877!2sHildes!5e0!3m2!1sen!2s!4v1462628396172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '100000', 2, 3, 'rent', '', '', '', '', '', '1'),
(3, 6, 'in_person_auction', 'Malik Park, near darbar punjpeer', '54000', 'Lahore', 'Hawaii', 'ing dolor cras mattis integer lectus platea ut, lorem egestas nascetur etiam? Pid, turpis! Turpis augue cum odio lundium in duis sed mus nisi, integer. Ac! Sed penatibus auctor? Elementum! Placerat egestas ultricies est dignissim quis amet elit facilisis nec in sociis ac scelerisque! Egestas rhoncus cum lectus enim. Aliquet sit porttitor et? Nisi turpis, elementum! Turpis augue platea facilisis, est, magna ac scelerisque amet nunc. In in ut, dictumst nunc lundium, habitasse nascetur, in amet, nunc, turpis in. Pulvinar, pid eu in lundium, nunc elit! Porta scelerisque sit hac placerat etiam, rhoncus tortor, pid placerat diam ac? Pulvinar rhoncus? Amet, dictumst ultricies dapibus? Amet! Sed adipiscing in etiam tortor adipiscing elementum purus pellentesque! Dapibus in phasellus rhoncus ', '15M', 3, 4, 2, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.962902243697!2d74.3524513!3d31.5312803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf19b0fca37910877!2sHildes!5e0!3m2!1sen!2s!4v1462628396172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '700000', 1, 3, 'rent', '', '', '', '', '', '1'),
(4, 6, 'in_person_auction', 'naya pull darbar punjpeer', '54000', 'Lahore', 'New York', 'elit tincidunt, enim in est tincidunt porttitor natoque enim et in placerat, ut et tristique elementum urna sociis tincidunt parturient, sit sagittis et purus, pulvinar urna! Porttitor nunc, nec diam, elit urna. Vut enim? Porttitor natoque, dignissim, augue egestas duis dolor lacus aenean auctor sed massa massa tincidunt. Odio hac turpis placerat platea urna! Hac dignissim habitasse, hac! Augue placerat sit cursus, ultricies dapibus, dictumst ac! Vel a tortor rhoncus ut augue mauris urna elementum a nec. Enim ut turpis enim lectus, in nunc aliquam, nunc! Porta augue dolor egestas! Aenean mus elementum montes eros cras sociis p', '11M', 3, 2, 1, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13602.962902243697!2d74.3524513!3d31.5312803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf19b0fca37910877!2sHildes!5e0!3m2!1sen!2s!4v1462628396172" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>', '878886', 2, 4, 'sale', '', '', '', '', '', '1'),
(5, 5, 'in_person_auction', 'lahore pakistan', '54000', 'lahore', 'New York', 'asdas as dadasda', '800', 2, 2, 1, '', '11200', 1, 2, 'rent', 'Disha Patni Latest Images & Wallpapers (2).jpg', 'Disha Patni Latest Images & Wallpapers (2).jpg', 'Disha Patni Latest Images & Wallpapers (2).jpg', 'Disha Patni Latest Images & Wallpapers (2).jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `real_property_type`
--

CREATE TABLE IF NOT EXISTS `real_property_type` (
  `property_type` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`property_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `real_property_type`
--

INSERT INTO `real_property_type` (`property_type`, `name`) VALUES
(1, 'Family House'),
(2, 'Apartment'),
(3, 'Condo'),
(4, 'Villa'),
(5, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `real_user`
--

CREATE TABLE IF NOT EXISTS `real_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `about` text NOT NULL,
  `image` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `google` varchar(255) NOT NULL,
  `rss` varchar(255) NOT NULL,
  `status` enum('1','0','2') NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `real_user`
--

INSERT INTO `real_user` (`user_id`, `name`, `fname`, `lname`, `username`, `email`, `password`, `phone`, `mobile`, `address`, `state`, `city`, `zip_code`, `about`, `image`, `facebook`, `twitter`, `google`, `rss`, `status`) VALUES
(1, 'Shah Khan', 'Shah', 'khan', 'shah', 'shah@test.com', '4ba674d85fbee92042e7d76e61145904', '0333 1234567', '0333 1234567', 'Test lahore pakistan', '', 'lahore', '54000', 'tus platea sed tortor! Mid et magnis sit, etiam lundium amet hac, vel odio, parturient, pellentesque vel pellentesque a adipiscing mattis ultricies, magna nunc aliquam ac rhoncus, nascetur, ac parturient! Vel penatibus lectus ultrices. Aenean? Aliquam dolor augue et augue est velit? Mus parturient aliquet, ut! Augue eu! Aenean rhoncus rhoncus odio, porttitor montes. Tempor montes cum montes sed nec? Sed? Massa, sit nec, mid, odio nascetur tincidunt hac tristique sagittis augue, odio porttitor duis urna? Platea et, nec et amet! Augue ac? Arcu ac! Placerat, scelerisque, urna nascetur a augue et placerat est? Augue adipiscing ut mus pulvinar sagittis tortor ac! Magna aenean cursus sed, pellentesque, nec tortor dignissim. Platea. Tristique amet porta ac augue ultricies non! Placerat vut, dolor ac adipiscing, habitasse, proin augue, lundium tincidunt, dolor dolor turpis tincidunt enim mid, porta placerat hac porttitor, ultrices odio dict', '', 'javascript://', 'javascript://', 'javascript://', 'javascript://', '1'),
(2, 'Bhutta Butt', 'Bhutta', 'Butt', 'bhutta', 'bhutta@test.com', '4ba674d85fbee92042e7d76e61145904', '0333 1234567', '0333 1234567', 'dasd asd asd ad ad asd', '', 'Lahore', '54000', 'tus platea sed tortor! Mid et magnis sit, etiam lundium amet hac, vel odio, parturient, pellentesque vel pellentesque a adipiscing mattis ultricies, magna nunc aliquam ac rhoncus, nascetur, ac parturient! Vel penatibus lectus ultrices. Aenean? Aliquam dolor augue et augue est velit? Mus parturient aliquet, ut! Augue eu! Aenean rhoncus rhoncus odio, porttitor montes. Tempor montes cum montes sed nec? Sed? Massa, sit nec, mid, odio nascetur tincidunt hac tristique sagittis augue, odio porttitor duis urna? Platea et, nec et amet! Augue ac? Arcu ac! Placerat, scelerisque, urna nascetur a augue et placerat est? Augue adipiscing ut mus pulvinar sagittis tortor ac! Magna aenean cursus sed, pellentesque, nec tortor dignissim. Platea. Tristique amet porta ac augue ultricies non! Placerat vut, dolor ac adipiscing, habitasse, proin augue, lundium tincidunt, dolor dolor turpis tincidunt enim mid, porta placerat hac porttitor, ultrices odio dict', '', 'javascript://', 'javascript://', 'javascript://', 'javascript://', '1'),
(5, 'M Abu Bakar Khan', 'M Abu Bakar', 'Khan', 'bakar', 'me.select@ymail.com', '4ba674d85fbee92042e7d76e61145904', '0333 1022025', '0332 4109412', 'Ghulsan-e-Khan, near darbar punjpeer', '', 'Lahore', '54000', 'lisis pellentesque vut dis, et augue? Porta integer, eu dapibus porttitor augue adipiscing enim dapibus magnis a dapibus! Ultrices habitasse, dapibus integer ultrices augue, tincidunt placerat, vel! Amet sociis ultricies risus tortor lundium auctor placerat pulvinar, aenean lundium cum urna elementum nisi odio magna adipiscing? Egestas porta sit eu integer ridiculus porta, turpis sit scelerisque auctor, ac aliquet scelerisque sit magna platea risus elementum, cras non! Porta porttitor turpis dictumst, habitasse pellentesque, mattis nunc, nisi lundium et nisi, mauris enim in tincidunt, cras enim. Phasellus pid dictumst a integer nunc magna. Est, amet porta, tristique? Parturient enim sit odio augue nascetur purus, augue magnis.', '', '', '', '', '', '1'),
(6, 'Binish Khan', 'Binish', 'Khan', 'bini', 'binish@hildes.me', '4ba674d85fbee92042e7d76e61145904', '0333 1022025', '0333-12345678', 'Ghulsan-e-Khan, near darbar punjpeer', '', 'Lahore', '54000', 'placerat rhoncus nec facilisis egestas natoque nunc, rhoncus pulvinar et, in ut, non, dictumst egestas a. Aliquet facilisis dapibus etiam quis purus, amet et augue in pellentesque, ridiculus a sed! Magna lundium odio quis? Parturient ultrices porttitor cursus amet placerat, magna habitasse, cursus, elementum ultricies turpis. Odio etiam cursus montes lectus ut mus, in dictumst dolor mid! Pellentesque sed amet platea! Massa nascetur diam placerat ut nascetur pellentesque! Pid! Facilisis? Mattis et nisi sed rhoncus dignissim dignissim in tempor? Lectus sed habitasse pid aenean. Platea in pulvinar pellentesque. Porta placerat est arcu? Aliquam integer tempor sed tempor? Tristique lacus penatibus dis ut.', '', '', '', '', '', '1'),
(7, 'Maria Khan', 'Maria', 'Khan', 'maria', 'maria@khan.com', '4ba674d85fbee92042e7d76e61145904', '', '03331025a222', 'lahore pakistan', '', 'Lahore', '', 'sa dasd as', '', '', '', '', '', '1'),
(8, 'Hello Check', 'Hello', 'Check', 'check', 'check@chaeck.com', '4ba674d85fbee92042e7d76e61145904', '', '03403430', 'lahore pakistan', 'asdsadas', 'lahore', 'dsadasd', '', '', '', '', '', '', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
