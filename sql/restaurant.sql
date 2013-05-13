-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2013 at 06:17 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `published` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `reservation_count` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `booking` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `details` text,
  `path` text,
  `event_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `created`, `modified`, `published`, `active`, `reservation_count`, `user_id`, `booking`, `details`, `path`, `event_date`) VALUES
(1, 'Kotthu party', '0000-00-00 00:00:00', '2012-12-17 00:22:27', 1, 1, 18, 9, 0, 'dasda', '', '2013-01-03 13:30:00'),
(10, 'TEST2', '2012-11-30 12:40:37', '2012-12-17 01:05:03', 0, 0, 0, 9, 0, 'daadada add asd ', 'flights.pdf', '2013-01-05 00:00:00'),
(11, 'asdadasdadas', '2012-11-30 13:32:42', '2012-12-17 01:21:11', 1, 0, 0, 9, 1, 'asdasda ada as da', 'final_teapot 5.pdf', NULL),
(12, 'asda', '2012-12-01 07:24:11', '2012-12-17 21:21:13', 1, 0, 0, 9, 1, 'dasda', '', '2012-12-01 14:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  `isSpecial` tinyint(11) NOT NULL DEFAULT '100',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `menu_item_count` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `desc`, `group_id`, `isSpecial`, `created`, `modified`, `menu_item_count`, `order`, `active`, `user_id`) VALUES
(1, 'THIN CRUST Wood FIRed oveN PIzza', '', 4, 7, '2012-07-18 00:18:19', '2012-07-18 10:18:19', 9, 7, 1, 0),
(2, 'GoURMeT PIzzas', '', 4, 8, '2012-07-18 00:19:47', '2012-07-18 10:19:47', 2, 9, 1, 0),
(3, 'Wood Fired oven Calzone ', '', 4, 9, '2012-06-03 09:04:25', '2012-06-03 09:04:25', 1, 10, 1, 0),
(5, 'Pasta & Risotto', '', 4, 5, '2012-06-03 09:03:46', '2012-06-03 09:03:46', 5, 5, 1, 0),
(6, 'Sides', '', 4, 6, '2012-06-03 09:04:10', '2012-06-03 09:04:10', 5, 8, 1, 0),
(7, 'appetisers', '', 4, 4, '2012-06-03 09:03:10', '2012-06-03 09:03:10', 8, 3, 1, 0),
(8, 'MOUTHWATERING GIPPSLAND STEAKS FROM THE GRILl', 'All steaks served w your choice of sauces - red wine jus, French bernaise, mushroom or peppercorn\r\nAdd sides - BBQ prawns... $5 Mushrooms... $3 Garden Salad... $3 ', 4, 2, '2012-06-03 09:03:01', '2012-06-03 09:03:01', 3, 2, 1, 0),
(9, 'Mains', '', 4, 5, '2012-06-03 09:03:56', '2012-06-03 09:03:56', 7, 6, 1, 0),
(10, 'Breakfast', '', 5, 1, '2012-06-07 02:26:44', '0000-00-00 00:00:00', 16, 0, 1, 0),
(11, 'Lunch', '', 4, 1, '2012-10-18 00:26:56', '2012-06-03 09:02:52', 5, 1, 1, 0),
(16, 'Weekly Specials', '', 6, 1, '2012-06-14 07:49:00', '2012-06-14 17:49:00', 27, 0, 1, 0),
(19, 'Cold Drinks', 'Ice cold drinks', 3, 2, '2013-04-08 01:24:44', '2012-12-03 10:40:02', 8, 0, 1, 9),
(20, 'LIQUEUR COFFEES', '', 3, 100, '2012-06-03 08:15:59', '0000-00-00 00:00:00', 4, 0, 1, 0),
(21, 'FLAVOURED COFFEES', '', 3, 100, '2012-06-03 08:16:06', '0000-00-00 00:00:00', 4, 0, 1, 0),
(22, 'Cocktails', '', 3, 100, '2012-06-03 08:16:16', '0000-00-00 00:00:00', 10, 0, 1, 0),
(23, 'Sparkling Wine', '', 3, 100, '2012-06-03 08:16:24', '0000-00-00 00:00:00', 3, 0, 1, 0),
(24, 'White Wines', '', 3, 100, '2012-06-03 08:16:32', '0000-00-00 00:00:00', 11, 0, 1, 0),
(25, 'Red Wines', '', 3, 100, '2012-06-03 08:16:38', '0000-00-00 00:00:00', 11, 0, 1, 0),
(26, 'Seppeltsfield Fortified', '', 3, 100, '2012-06-03 08:16:47', '0000-00-00 00:00:00', 2, 0, 1, 0),
(27, 'Function Menu', '', 0, 100, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 1, 0),
(29, 'Lunch Specials', 'All of the below lunch items with a glass of house wine OR soft drink.....$ 17.9. *\r\nconditions apply. Mon thru fri', 6, 3, '2012-07-18 00:24:05', '2012-07-18 10:24:05', 8, 0, 1, 0),
(30, 'Dessert of the week', '', 6, 2, '2012-07-18 00:27:05', '2012-07-18 10:27:05', 4, 0, 1, 0),
(31, 'Test', '', 6, 100, '2012-10-17 13:40:12', '2012-10-18 00:40:12', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_files`
--

CREATE TABLE IF NOT EXISTS `menu_files` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `dir` varchar(255) NOT NULL,
  `size` varchar(45) NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `menu_files`
--

INSERT INTO `menu_files` (`id`, `name`, `path`, `created`, `modified`, `dir`, `size`, `user_id`) VALUES
(1, 'asdad', 'final_teapot 5.pdf', '2012-11-30 13:40:59', '2012-11-30 13:40:59', '', '279935', 9),
(2, 'Test', 'flights.pdf', '2012-12-03 08:53:24', '2012-12-03 08:53:24', '', '30581', 9);

-- --------------------------------------------------------

--
-- Table structure for table `menu_groups`
--

CREATE TABLE IF NOT EXISTS `menu_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `order` int(10) unsigned NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `menu_menu_count` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `menu_groups`
--

INSERT INTO `menu_groups` (`id`, `name`, `order`, `created`, `modified`, `menu_menu_count`, `user_id`) VALUES
(3, 'Drinks & Cocktails', 0, '2012-12-03 09:01:24', '2012-12-03 09:01:24', 0, 9),
(4, 'Main Menu', 0, '2012-06-01 20:55:51', '2012-06-02 06:55:51', 0, 0),
(6, 'Specials', 0, '2012-07-03 05:56:16', '2012-07-03 15:56:16', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `price1` double NOT NULL,
  `price2` double NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `order` int(11) NOT NULL DEFAULT '1000',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `feature` tinyint(4) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=198 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `name`, `desc`, `price1`, `price2`, `active`, `order`, `created`, `modified`, `feature`, `user_id`) VALUES
(1, 1, 'Margherita', 'napoli sauce, mozzarella cheese and fresh herbs', 11.9, 0, 1, 1000, '2012-07-05 11:20:51', '2012-06-03 08:01:39', 0, 0),
(2, 1, 'Greek Pizza', 'mediterranean grilled lamb and mozzarella w fresh greek salad of cucumber, onion, tomato, olives & fetta drizzled with tzatziki sauce.', 15.9, 0, 1, 1000, '2012-07-18 00:15:38', '2012-07-18 10:15:38', 0, 0),
(3, 1, 'veggilicious', 'roasted capsicum, basil pinenut pesto, bocconcini, spinach and mozzarella cheese w pumpkin puree & cracked pepper (veGeTaRIaN)', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(4, 1, 'Bombay Blitz', 'tandoori chicken, red onion, red & green capsicum, curry sauce, mozzarella cheese, raita & sprinkled coriander', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(5, 1, 'Moroccan Lamb', 'cumin, coriander, tomato & paprika marinated lamb mince w mozzarella, drizzled with a yoghurt & mint relish (no variations)', 13.9, 0, 1, 1000, '2012-07-18 00:17:16', '2012-07-18 10:17:16', 0, 0),
(6, 1, 'Meat @ Shine', 'grilled sirloin of beef, bacon, hot salami, onion, BBQ sauce & mozzarella cheese', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(7, 1, 'Sicilian Clan', 'hot salami, fetta cheese, olives, mushrooms & mozzarella cheese', 14.9, 0, 1, 1000, '2012-07-18 00:17:58', '2012-07-18 10:17:58', 0, 0),
(8, 1, 'JaMaICa Me CRazY', 'napoli base w  hot Calypso salami, red & green bell peppers, mango & fried onions', 15.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(9, 1, 'Hawaiian Sunset', 'napoli sauce, mozzarella cheese, double smoked leg ham & pineapple', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(10, 2, 'Spicy BBQ Prawn, Calamari & Mussels', 'napoli, mozzarella cheese, green & red mixed bell peppers & freshly squeezed lemon served w guacamole  ', 17.9, 0, 1, 1000, '2012-06-03 08:02:05', '2012-06-03 08:02:05', 0, 0),
(11, 2, 'Tuscan', 'chicken, basil, rocket and avocado pesto over roasted garlic, onion, artichoke, fresh tomato, fontina & haloumi cheeses drizzled w balsamic', 15.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(12, 3, 'Mediterranean Grilled Chicken Foldover', 'roasted eggplant, grilled zucchini, semi-dried Roma tomato & mozzarella cheese served w a green leaf salad with napoli sauce ', 15.9, 0, 1, 1000, '2012-06-03 08:14:14', '2012-06-03 08:14:14', 0, 0),
(13, 7, 'Garlic-Herb', 'wood fired bread with olive oil and rock salt', 5.9, 0, 1, 1000, '2012-06-03 08:14:43', '2012-06-03 08:14:43', 0, 0),
(14, 7, 'Wood Fired oven Chilli Bread ', 'with parmesan', 7.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(15, 7, 'Tomato Basil Bruschetta on ciabatta bread', 'with tomato, onion, freshly torn basil & fetta (vegetarian)', 12.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(16, 7, 'Risotto Balls', 'stuffed w brie garnished with tossed mixed greens served with plum & ginger sauce', 12.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(17, 7, 'Trio of dips', 'with warm wood fired oven Turkish bread ', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(18, 7, 'Tapas Platter for 2', 'bbq calamari, marinated olives & fetta, Spanish chorizo sausage, Spanish chicken w chilli parmesan bread', 21.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(19, 7, 'Fresh oysters', 'Natural', 2.4, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(20, 7, 'Fresh oysters', 'Kilpatrick', 2.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(21, 4, 'Crispy Chicken', 'chicken tenders w chilli, lime, sesame oil & honey served w avocado-mango salsa drizzled w a sweet and sour chilli sauce', 22.9, 0, 1, 1000, '2012-06-03 08:14:20', '2012-06-03 08:14:20', 0, 0),
(22, 4, 'Salt & Pepper Calamari (G)', 'with rocket and tomato salad set in an iceberg cap served with lemon dill aioli', 20.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(23, 4, 'Char-Grilled Marinated Lamb (salad)', 'with balsamic & oregano served on lettuce w tomato, olives & sprinkled fetta sided with capsicum aioli', 21.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(24, 4, 'Caesar Salad (G)', 'with baby cos, crisp pancetta tossed w garlic croutons and our own Caesar dressing, topped w shaved parmesan cheese. \r\n<br />with Cajun chicken... add $4     w grilled prawns... add $6 ', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(25, 4, 'Greek Salad ', 'with chunky tomato, cucumber, red onion, olives & fetta cheese finished w a lemon oil & oregano vinaigrette\r\nwith chunky tomato, cucumber, red onion, olives & fetta cheese finished w a lemon oil & oregano vinaigrette\r\nwith chunky tomato, cucumber, red onion, olives & fetta cheese finished w a lemon oil & oregano vinaigrette <br />w crispy chicken... add $4', 12.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(26, 5, 'Mediterranean Lamb Risotto (G)', 'w char-grilled lamb, fire roasted baby tomatoes w mushroom & spinach', 22.9, 0, 1, 1000, '2012-06-03 08:14:27', '2012-06-03 08:14:27', 0, 0),
(27, 5, 'Honeymoon Spaghetti ', 'w tiger prawns, calamari, scallops, mussels, Atlantic salmon, oven roasted garlic tomato & baby spinach infused w fresh basil & extra virgin olive oil & a touch of saffron', 27.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(28, 5, 'Penne Pasta. (vegetarian)', 'w  Italian roasted vegetable & kalamata olives, tossed with fresh herbs, a touch of Napoli &  feta\r\nAdd chorizo...$3 ', 19.9, 0, 1, 1000, '2012-06-07 02:16:43', '2012-06-07 12:16:43', 0, 0),
(29, 5, 'Glazed Pumpkin Risotto (G) vegetarian', 'Aborio rice with garlic, baby spinach, mushrooms & red capsicum\r\n add Grilled Chicken $4', 18.9, 0, 1, 1000, '2012-06-07 02:19:36', '2012-06-07 12:19:36', 0, 0),
(30, 5, 'Grilled Chicken w Fettuccini  ', 'tossed w roasted garlic, lemon-thyme mushrooms, Cape Schanck EV olive oil, toasted pinenuts, shaved parmesan & torn basil   \r\n<br >Add cream - 50c', 22.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(31, 8, '400gms Rib-eye Steak', 'served w shoestring fries', 29.9, 0, 1, 1000, '2012-06-03 08:14:49', '2012-06-03 08:14:49', 0, 0),
(32, 8, '350gms Scotch Fillet Steak', 'served w shoestring fries', 29, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(33, 8, '400gms New York Porterhouse Steak', 'served w shoestring fries', 29, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(35, 9, 'Shine Burger (250 g, 7/8 marble sc )', 'charbroiled Wagu beef served on round Turkish roll w grilled onion, bacon, lettuce, tomato & fried egg sided w bush chutney & shoestring fries', 23.9, 0, 1, 1000, '2012-06-07 02:25:42', '2012-06-07 12:25:42', 0, 0),
(36, 9, 'deeelicious Lamb Gyros', 'marinated and grilled succulent lamb rump w Greek salad, fetta cheese, wood-fired bread and tzatziki served w shoestring fries', 25.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(37, 9, 'Garlic Prawns (G)', 'succulent tiger prawn cutlets sauted w garlic and fresh herbs, flamed w brandy, white wine and light cream sauce served w rice and mixed greens', 25.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(38, 9, 'Crumbed Calamari Rings', 'served w a boutique mixed salad sided with a lemon & lime tartare sauce & shoestring fries ', 22.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(39, 9, 'Chicken Parmigiana', 'crispy crumbed breast of chicken w double-smoked leg ham, roasted tomato sauce, mozzarella cheese served w salad and shoestring fries', 23.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(40, 9, 'Barramundi Fish n Chips', 'Apple cider battered served w shoestring fries, lemon, tartare sauce & boutique salad', 22.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(41, 9, '', 'Chefs'' Curry of the Week - See Specials Board <br />\r\nChefs'' Fish of the day - See Specials Board', 0, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(42, 6, 'Shoestring Fries', 'served w tomato sauce', 7.9, 0, 1, 1000, '2012-06-03 08:14:34', '2012-06-03 08:14:34', 0, 0),
(43, 6, 'Crispy Potato Wedges', 'tossed w Cajun spices served w sour cream and sweet chilli sauce', 8.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(44, 6, 'Steamed Seasonal vegetables', '', 7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(45, 6, 'King Island Creamy Mashed Potato', '', 3, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(46, 6, 'Naan Bread', '', 3, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(47, 10, 'Your choice of: Toasted Raisin, wholemeal, english muffins', '', 5.9, 0, 1, 1000, '2012-07-05 11:20:17', '0000-00-00 00:00:00', 0, 0),
(48, 10, 'Golden Ricotta Hot Cakes (Pancakes) ', 'stacked w caramelised banana draped w maple syrup & served w ice cream Chef Suggests<br />add fresh strawberries $3', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(49, 10, 'Plain Hot Cakes', 'w ice cream add $1', 11, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(50, 10, 'Low Fat Brekky', 'strawberry yoghurt w almond crisp & fresh berries', 11.9, 0, 0, 1000, '2012-06-07 02:26:44', '2012-06-07 12:26:44', 0, 0),
(51, 10, '''SHINY BReaKFaST''', '2 eggs any style on toast w lemon-thyme mushrooms, grilled tomato, sauteed baby spinach & crispy bacon.', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(52, 10, '''JUMBo BReaKFaST''', 'add sausages & parmentier potatoes to your ''Shiny Breakfast''', 18.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(53, 10, 'Kingsway Benedict', '2 poached free range eggs on toasted English Muffin w spinach, Virginia ham topped w hollandaise & served w parmentier potatoes', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(54, 10, 'Breakfast Bruschetta', 'on toasted wholemeal w avocado, tomato & spinach topped w 2 rashers of pancetta drizzled w basil aioli <br />w poached egg .... add $3', 13.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(55, 10, 'Shine 3-egg omelette', '''Spanish Style'' bacon, chorizo, onion, mushroom, red & green capsicum & fetta served w  tomato salsa on ciabatta', 14.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(56, 10, 'Sicilian Breakfast', 'on toasted ciabatta, fire roasted cherry tomatoes & fresh avocado drizzled w lemon olive oil, fetta cheese & torn basil <br />w poached egg .... add $3', 12.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(57, 10, 'Salmon Benedict', 'w 2 poached free range eggs on toasted English muffins w smoked salmon & rocket, topped w hollandaise & served w hash browns', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(58, 10, 'Just Bacon and Eggs ( free range)', 'done any style fried, poached or scrambled on wholemeal\r\nGluten free toast add $1', 11.9, 0, 1, 1000, '2012-06-07 02:30:48', '2012-06-07 12:30:48', 0, 0),
(59, 10, 'Breakfast Burrito', 'scrambled egg, spinach, bacon & tomato wrapped in a flour tortilla w a dollop of avocado salsa & sour cream', 12.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(60, 10, 'Speedy Brekky', 'BLT n'' egg sandwich on Panini roll', 10.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(61, 10, 'Freshly presented bowl of seasonal  fruit', 'w yoghurt... add 80c', 8.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(62, 10, 'extras ', 'bacon, chipolata sausage, ham, fruit, smoked salmon, chorizo,mushroom, spinach, grilled tomato, hollandaise sauce, parmentier potatoes, ciabatta bread, egg, gluten free toast', 3.4, 0, 1, 1000, '2012-06-03 08:12:42', '2012-06-03 08:12:42', 0, 0),
(64, 11, 'Mexican Chicken Tacos ', 'grilled chicken in soft tortillas w green & red bell peppers, onion, coriander, tomato sided w crispy corn chips, guacamole & sour cream <br />w salsa... add 50c', 14.9, 0, 1, 1000, '2012-06-03 08:15:06', '2012-06-03 08:15:06', 0, 0),
(65, 11, 'Juicy Grilled Moroccan Lamb', 'on Panini roll w middle eastern tabouleh & mint yoghurt <br />w shoestring fries... add $3', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(66, 11, 'veg-out', 'grilled zucchini, tri-colour capsicum & semi dried tomato drizzled w Cape Schanck extra virgin olive oil & crumbled Danish fetta on a Turkish roll <br/>w shoestring fries... add $3', 14.9, 0, 1, 1000, '2012-07-05 11:22:10', '0000-00-00 00:00:00', 0, 0),
(67, 11, 'Grilled Porterhouse (200gms) Steak Sandwich', 'on ciabatta w grilled tomato, lettuce, caramelised onion & garlic creme served w shoestring fries', 16.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(68, 11, 'Cajun Styled Calamari', 'lightly golden fried Cajun battered strips of calamari, served w shoestring fries & garden greens sided w passion fruit aioli  ', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(69, 16, 'Oysters Natural', 'with lemon', 2.4, 0, 1, 1000, '2012-06-03 08:15:15', '2012-06-03 08:15:15', 0, 0),
(70, 16, 'Oysters Kilpatrick', 'with lemon', 2.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(71, 16, 'Sexy Brazilian - Fisherman''s Skewer', 'Char-grilled Tiger Prawns, Calamari, Scallops, Salmon & Vegetable served w BBQ Corn & a parmesan Roquet salad sided w Churrazzo style spicy sauce. (add fries $3)', 30.9, 0, 0, 1000, '2012-06-04 09:14:16', '2012-06-04 19:14:16', 0, 0),
(72, 16, 'Lamb Cleopatra', 'Rosemary scented Milky Lamb Back strap served w grilled Swiss black mushrooms, cherry tomatoes, broken Fetta drizzled w a lemon-oregano dressing', 29.9, 0, 0, 1000, '2012-06-04 09:14:33', '2012-06-04 19:14:33', 0, 0),
(73, 16, 'Atlantic Salmon', 'Pan seared fresh Salmon with avocado-orange-pomegranate salad, fried beet root chips, micro herbs & lemon butter sauce', 27, 0, 1, 1000, '2012-08-31 09:29:13', '2012-08-31 19:29:13', 0, 0),
(74, 16, 'Delicious Chicken ', 'Oven roasted macadamia & cashew Chicken Supreme set over rosemary red potatoes, broccoli & cauliflower & red capsicum purÃ©e', 25, 0, 1, 1000, '2012-08-31 09:45:11', '2012-08-31 19:45:11', 0, 0),
(75, 16, 'Beef Rendang Curry', 'Accompanied with vegetables, Saffron rice, Roti and Prawn crackers', 25.9, 0, 0, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(76, 16, 'Lovers Delight', 'Double Baked Pistachio Chocolate Brownie topped w Choux pastry hearts filled w Strawberry Mousse', 11.9, 0, 0, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(77, 16, 'Delicious Cakes', 'Chocolate Mud,\r\nBaked Cheese,\r\nSticky Date,\r\nTim Tam,\r\nLemon Meringue,\r\nBaileys,\r\nFlourless Orange,\r\nTiramisu,\r\nLemon Tart,\r\nStrawberry Cheese,\r\nApple Crumble,\r\nWhite & Dark Choc Mousse,\r\nCookies ''n'' Cream,\r\nMars Bar', 7.9, 0, 1, 1001, '2012-06-04 09:29:42', '2012-06-04 19:29:42', 0, 0),
(84, 17, 'Beez Neez', 'HAND CRAFTED BEERS', 7, 0, 1, 1000, '2012-06-03 08:05:09', '0000-00-00 00:00:00', 0, 0),
(85, 17, 'Little Creature Pale Ale', 'HAND CRAFTED BEERS', 7, 0, 1, 1000, '2012-06-03 08:05:09', '0000-00-00 00:00:00', 0, 0),
(86, 17, 'Lord Nelson Three Sheets Pale Ale ', 'HAND CRAFTED BEERS', 7, 0, 1, 1000, '2012-06-03 08:05:09', '0000-00-00 00:00:00', 0, 0),
(87, 17, 'Mc Laren Vale Ale', 'HAND CRAFTED BEERS', 7, 0, 1, 1000, '2012-06-03 08:05:09', '0000-00-00 00:00:00', 0, 0),
(89, 17, 'Hoegaarden White', 'BELGIUM', 8, 0, 1, 1000, '2012-06-03 08:05:25', '0000-00-00 00:00:00', 0, 0),
(90, 17, 'Stella Artois', 'BELGIUM', 8.5, 0, 1, 1000, '2012-06-03 08:05:25', '0000-00-00 00:00:00', 0, 0),
(91, 17, 'GREEK', 'Mythos Lager (higly Recommended)', 7, 0, 1, 1000, '2012-07-05 11:18:35', '0000-00-00 00:00:00', 0, 0),
(92, 17, 'IRELAND', 'Guinness Draught (440ml Can)', 7.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(93, 17, 'ITALY', 'Peroni Nastro Azzuro', 7.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(94, 17, 'JAPAN', 'Asahi', 7.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(95, 17, 'MAURITIUS', 'Phoenix', 7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(96, 17, 'MEXICO', 'Corona', 7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(97, 17, 'NETHERLANDS', '	\r\nHeineken (330ml)', 7.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(98, 17, 'SINGAPORE', 'Tiger', 7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(99, 18, 'COFFEE', 'Cappuccino, Cafe Latte, Long Black, Espresso, Long/Short Macchiato, Double Espresso & Flat White <br /> Soy / Decaf add .40 , Mug add 1', 3.5, 0, 1, 1000, '2012-07-05 11:24:47', '2012-06-03 08:15:46', 0, 0),
(100, 18, 'CHAI LATTE', '', 4.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(101, 18, 'CADBURYS HOT CHOCOLATE', 'with Marshmallows', 4.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(102, 18, 'SWISS WHITE HOT CHOCOLATE', '', 4.8, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(103, 18, 'AFFOGATO, VIENNA, MOCHA LATTE/CAPPUCCINO', '', 4.2, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(104, 18, 'HYSON TEA', 'Earl Grey, English Breakfast, Green', 3.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(105, 18, 'HERBAL TEA', 'Chamomile, Jasmine, Peppermint', 3.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(106, 19, 'SOFT DRINKS IN BOTTLE', 'Coca Cola, Sprite, Lift, Diet Coke, Coke Zero & Fanta', 3.75, 0, 1, 1000, '2012-06-03 08:15:52', '2012-06-03 08:15:52', 0, 0),
(107, 19, 'LEMON LIME & BITTERS', '', 3.7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(109, 19, 'ICED-COFFEE', ' ICED-CHOCOLATE, ICED-MOCHA', 5.2, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(110, 19, 'NES-ICED TEA', 'Peach Or Lemon & Lime', 4.1, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(111, 19, 'MOUNT FRANKLIN MINERAL WATER', '(Lightly Sparkling Or Still)', 3, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(112, 19, 'S. PELLEGRINO CHINOTTO', 'ARANCIATA ROSSO, MANDARINO', 4.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(113, 19, 'JUICES', 'Orange, Pineapple, Apple, Mango, Guava, Pink Grapefruit, Cranberry, Tomato', 3.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(114, 19, 'Red Bull Energy Drink', '', 6, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(115, 20, 'MAD IRISH', 'Jameson In A Long Black & Cream', 8, 0, 1, 1000, '2012-06-03 08:15:59', '2012-06-03 08:15:59', 0, 0),
(116, 20, 'BOSTON MARATHON', 'Baileys In A Tall Latte', 8, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(117, 20, 'NUTTY PROFESSOR', 'Frangelico, Ice Cream & Hot Coffee', 8, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(118, 20, 'CHICANO BABE', 'Kahlua In A Tall Cappuccino', 8, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(119, 21, 'MANDELA', 'White And Dark Hot Chocolate W Chocolate Mint', 4.95, 0, 1, 1000, '2012-06-03 08:16:06', '2012-06-03 08:16:06', 0, 0),
(120, 21, 'SATIS-FUCTION', 'Long Latte W Hazelnut & Butterscotch Flavour', 4.95, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(121, 21, 'LIKE A VIRGIN', 'Coffee, Ice Cream W Vanilla Flavour', 4.95, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(122, 22, 'GOTTA HAVE IT', 'White Hot Chocolate W Coconut & Vanilla Flavour', 4.95, 0, 1, 1000, '2012-06-03 08:16:16', '2012-06-03 08:16:16', 0, 0),
(123, 22, 'KAMA SUTRA', 'Baileys, Chocolate Liqueur W Ice Cream', 13.5, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(124, 22, 'BE COINTREAUVERSIAL', 'Vodka, Cointreau, Cranberry Juice & Fresh Lime Shaken Well', 11, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(125, 22, 'KICK ASS', 'Vodka, Gin, Cointreau, Peach Schnapps & Fresh Lime Topped With Coca Cola', 14.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(126, 22, 'KUM WT ME...BABE', 'Paraiso Lychee & Blue Liqueur Topped With Pink Grapefruit Juice & A Dash Of Grenadine', 11, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(127, 22, 'tlc', 'Absolut Vodka, Bacardi & Strawberry Liqueur Topped With Guava Juice', 11, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(128, 22, 'MANDARIN TWIST', 'Absolut Citron Vodka & Bacardi Topped With Sparkling Mandarino', 11, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(129, 22, 'SECRET NUN', 'Baileys, Frangelico & Banana Liqueur Topped With Milk', 11.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(130, 22, 'VAMPIRE''S LOVE', 'Absolut Vodka, Bacardi & Midori Topped With Cranberry Juice & Dash Of Lemonade', 11.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(131, 22, 'P.S. I LUV U', 'U Lychee Liqueur, Absolut Vodka, Mango Juice, Lemonade & Grenadine With Passionfruit Pulp', 11.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(132, 21, 'GOTTA HAVE IT', 'White Hot Chocolate W Coconut & Vanilla Flavour', 4.95, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(133, 23, 'Dunes Chardonnay Pinot Noir (200ml)', 'South Australia', 6.9, 0, 1, 1000, '2012-06-03 08:16:24', '2012-06-03 08:16:24', 0, 0),
(134, 23, 'Hill Moscato Rose ', 'Victoria', 6.9, 16.9, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(135, 23, 'Jansz Premium NV Cuvee (Highly Recommended)', 'Tasmania', 6.9, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(137, 24, 'Swan Bay Late Harvest (375ml) Bellarine Penn Vic', 'RIESLING', 0, 17.5, 1, 1000, '2012-06-03 08:16:32', '2012-06-03 08:16:32', 0, 0),
(138, 24, 'Jim Barry Lavender Hill (Sweet Style) Clare V SA', 'RIESLING', 6.5, 28.5, 1, 1000, '2012-06-03 08:05:41', '0000-00-00 00:00:00', 0, 0),
(140, 24, 'Yalumba, Eden Valley,SA', 'CHARDONNAY', 0, 15.9, 1, 1000, '2012-06-03 08:08:09', '0000-00-00 00:00:00', 0, 0),
(141, 24, 'TarraWarra Estate Yarra Valley, Vic', 'CHARDONNAY', 7, 31, 1, 1000, '2012-06-03 08:08:09', '0000-00-00 00:00:00', 0, 0),
(142, 24, 'Scotchmans Hill Bellarine Penn, Vic', 'CHARDONNAY', 7.5, 34.9, 1, 1000, '2012-06-03 08:08:34', '0000-00-00 00:00:00', 0, 0),
(144, 24, 'The Hill Sauvginon Blanc Marlborough, NZ', 'SAUVIGNON BLANC', 6.8, 29, 1, 1000, '2012-06-03 08:08:35', '0000-00-00 00:00:00', 0, 0),
(145, 24, 'Pebble bay marlborough, nz ', 'SAUVIGNON BLANC', 7, 31, 1, 1000, '2012-06-03 08:10:06', '0000-00-00 00:00:00', 0, 0),
(146, 24, 'Nautilus estate marlborough, nz ', '(highly recommended) <br>SAUVIGNON BLANC', 8.5, 38, 1, 1000, '2012-06-03 08:10:35', '0000-00-00 00:00:00', 0, 0),
(148, 24, 'Corte Giara Pinot Grigio Veneto, Ita', 'OTHER WHITES', 6, 27.5, 1, 1000, '2012-06-03 08:08:58', '0000-00-00 00:00:00', 0, 0),
(149, 24, 'Corte Giara Pinot Grigio Veneto, Ita', 'OTHER WHITES', 8.5, 38, 1, 1000, '2012-06-03 08:08:58', '0000-00-00 00:00:00', 0, 0),
(150, 24, 'Corte Giara Pinot Grigio Veneto, Ita', 'OTHER WHITES', 6.5, 28, 1, 1000, '2012-06-03 08:09:19', '0000-00-00 00:00:00', 0, 0),
(152, 25, 'Torres Coronas. Penedes, Spa', 'LIGHTER REDS', 0, 19.9, 1, 1000, '2012-06-03 08:16:38', '2012-06-03 08:16:38', 0, 0),
(153, 25, 'Torres Coronas. Penedes, Spa', 'LIGHTER REDS', 0, 39.9, 1, 1000, '2012-06-03 08:09:19', '0000-00-00 00:00:00', 0, 0),
(154, 25, 'Torres Coronas. Penedes, Spa', 'LIGHTER REDS', 6.5, 26.5, 1, 1000, '2012-06-03 08:09:23', '0000-00-00 00:00:00', 0, 0),
(156, 25, 'Wirra Wirra Church Block. Mclaren Vale, Sa', 'CABERNET SAUVIGNON', 0, 17.9, 1, 1000, '2012-06-03 08:11:16', '0000-00-00 00:00:00', 0, 0),
(157, 25, 'Vasse Felix Cabernet Merlot. Margaret River Wa', 'CABERNET SAUVIGNON', 8.5, 38, 1, 1000, '2012-06-03 08:11:16', '0000-00-00 00:00:00', 0, 0),
(158, 25, 'The Hill Cabernet Shiraz. Vic', 'CABERNET SAUVIGNON', 6.8, 29, 1, 1000, '2012-06-03 08:11:16', '0000-00-00 00:00:00', 0, 0),
(160, 25, 'Scotchmans Hill Bellarine Penn. vic', 'SHIRAZ', 7.5, 34.9, 1, 1000, '2012-06-03 08:11:17', '0000-00-00 00:00:00', 0, 0),
(161, 25, 'Yalumba The Patchwork. Barossa Valley, Sa', 'SHIRAZ', 7.3, 32.9, 1, 1000, '2012-06-03 08:11:17', '0000-00-00 00:00:00', 0, 0),
(162, 25, 'Peter Lehmann The Futures. Barossa Valley, Sa', 'SHIRAZ', 0, 39.9, 1, 1000, '2012-06-03 08:11:17', '0000-00-00 00:00:00', 0, 0),
(163, 25, 'MERLOT', '', 0, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(164, 25, 'Smith & Hooper. Wrattonbully, Sa', 'MERLOT', 7, 29, 1, 1000, '2012-06-03 08:11:24', '0000-00-00 00:00:00', 0, 0),
(165, 26, 'Cellar # 8 Muscat Rutherglen 45ml', '', 7, 0, 1, 1000, '2012-06-03 08:16:47', '2012-06-03 08:16:47', 0, 0),
(166, 26, 'Cellar # 6 Tokay Rutherglen 45ml', '', 7, 0, 1, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(167, 16, 'Spanish Paella', 'Chicken, Prawns, Scallops, Mussels, chorizo Sausage, Calamari w diced red capsicum & tomato-saffron rice', 27.9, 0, 0, 1000, '2012-06-04 09:14:59', '2012-06-04 19:14:59', 0, 0),
(168, 16, 'Char-grilled Lamb Rump (300gms)', 'Succulent Lamb Rump cooked to your liking \r\nover a Lentil & Gnocchi Ragout topped w rosemary jus.', 26.9, 0, 0, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(169, 16, 'Atlantic Salmon', 'Chipolte rubs seared Atlantic Salmon \r\nset w roasted vegetable & avocado salsa \r\nsprinkled w red caviar', 27.9, 0, 0, 1000, '2012-06-04 09:15:22', '2012-06-04 19:15:22', 0, 0),
(170, 16, 'Oven Roasted Chicken', 'Herb marinated & roasted Chicken breast \r\nserved w braised Brussels sprouts & Chorizo \r\nsausage w a light mustard-onion puree \r\ndressed w vegetable ribbons', 24.9, 0, 0, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(171, 16, 'Chef''s Lamb Curry', 'Aromatic Southern Ceylonese Lamb Curry \r\nw lemon rice & fried onion served w a \r\ncoconut-mango chutney and pappadams\r\n<br>(add Naan Bread $3)', 23.9, 0, 0, 1000, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0),
(172, 30, 'Toffee Creme Brulee', 'w/ grilled yellow peaches & sticky orange sauce', 9.9, 0, 0, 1000, '2012-06-04 09:06:18', '2012-06-04 19:06:18', 0, 0),
(173, 29, 'Mexican Chicken Tacos', 'grilled chicken in soft tortillas with green & red bell peppers, onion, coriander, tomato sided with crispy corn chips, guacamole & cour cream\r\n<br>\r\nw salsa add 50c', 14.9, 0, 1, 1000, '2012-06-07 05:15:47', '2012-06-07 15:15:47', 0, 0),
(174, 29, 'Grilled Porterhouse (200g) Steak Sandwich', 'on ciabatta with grilled tomato, lettuce, caramalised onion & garlic creme served with shoestring friies', 16.9, 0, 1, 1000, '2012-06-07 05:16:10', '2012-06-07 15:16:10', 0, 0),
(175, 29, 'Juice grilled moroccan lamb', 'on panini roll with middle eastern tabouleh & mint yoghurt', 14.9, 0, 1, 1000, '2012-06-07 05:16:48', '2012-06-07 15:16:48', 0, 0),
(176, 29, 'Cajun styled calamari', 'lightly golden fried cajun battered strips of calamari, served with shoestring fries & garden green sided with passion fruit aioli', 14.9, 0, 1, 1000, '2012-06-07 05:17:19', '2012-06-07 15:17:19', 0, 0),
(177, 29, 'Veg-out', 'grilled zucchini, tri-color capsicum & semi dried tomato drizzled with cape schanck extra virgin olive oil & crumbled  danish fetta on a turkish roll \r\n<br>\r\nwith shoestring fries add $3', 14.9, 0, 1, 1000, '2012-07-05 11:22:10', '2012-06-07 15:17:44', 0, 0),
(178, 29, 'Veggilicious Pizza', 'roasted capsicum, basil pine nut pesto, bocconcini, spinach and mozzarella cheese with pumpkin puree & cracked pepper (vegetarian)', 13.9, 0, 1, 1000, '2012-07-05 11:23:06', '2012-06-07 15:18:53', 0, 0),
(179, 29, 'Bombay Blitz Pizza', 'tandoori chicken, red onion, red & green capsicum, curry sauce, mozzarella cheese, raita & sprinkled coriander', 13.9, 0, 1, 1000, '2012-06-07 05:20:10', '2012-06-07 15:20:10', 0, 0),
(180, 29, 'Sicilian Clan', 'hot salami, fetta cheese, olives, mushrooms & mozzarella cheese', 14.9, 0, 1, 1000, '2012-07-18 00:24:00', '2012-07-18 10:24:00', 0, 0),
(181, 16, 'Char grilled Eye Fillet (350 gms)', 'Eye fillet ''tournedo'' set on rocket w turned carrot & yellow squash, topped w Roquefort Butter served w potato of the day', 31.9, 0, 0, 1000, '2012-06-04 09:16:25', '2012-06-04 19:16:25', 0, 0),
(182, 16, 'Butter Chicken', 'North Indian style butter chicken in clay pot w Kashmir rice, Wood-fired Naan and tomato-onion kasundi.', 24.9, 0, 0, 1000, '2012-06-04 09:16:03', '2012-06-04 19:16:03', 0, 0),
(183, 16, 'Dessert of the week', 'Nutella Panacakes with fresh banana, mixed berries, ice cream & warm Cadbury chocolate sauce', 26.9, 0, 1, 1000, '2012-08-31 09:47:43', '2012-08-31 19:47:43', 0, 0),
(184, 30, 'Flambe Vanilla poached Pear', 'with passionfruit sauce in puff pastry cover', 8.9, 0, 0, 1000, '2012-06-04 09:06:32', '2012-06-04 19:06:32', 0, 0),
(185, 16, 'Chargrilled eye fillet (350g)', 'Eye Fillet ''Medallions'' with BBQ Tiger Prawns, roasted vegetables and Cafe du Paris butter', 31.9, 0, 0, 1, '2012-06-14 07:47:23', '2012-06-14 17:47:23', 0, 0),
(187, 30, 'Fruit Fritter Fondue for Two', 'Homemade fruit fritters with banana, pineapple & apple served with a cinnamon-butterscotch sauce. ', 16.9, 0, 0, 1, '2012-06-14 07:51:19', '2012-06-14 17:51:19', 0, 0),
(188, 16, 'Jambalaya - soul food ', 'Crab, calamari, prawns, scallops, mussels, andouille sausage & bell peppers cooked in a saffron chilli broth over rice', 27, 0, 0, 1, '2012-08-31 09:36:41', '2012-08-31 19:36:41', 0, 0),
(189, 16, 'Country style Lamb Shanks', 'Double cooked Lamb Shanks over creamy mash with rosemary vegetable red wine reduction & gremolata', 26.9, 0, 0, 1, '2012-06-14 07:47:45', '2012-06-14 17:47:45', 0, 0),
(190, 16, 'Fresh Barramundi', 'Rubbed with coriander- ginger misso set on Asian greens served with New Kipfler Potatoes & a honey- lime - chilli sauce', 26.9, 0, 0, 1, '2012-06-14 07:48:07', '2012-06-14 17:48:07', 0, 0),
(191, 16, 'Singapore Chicken Curry', 'Tender Chicken & Potato cooked in a lightly spicy, pandan leaf & coconut curry sauce served in clay pot with saffron rice & chutney\r\nAdd garlic naan for $3 ', 23.9, 0, 0, 1, '2012-06-14 07:36:01', '2012-06-14 17:36:01', 0, 0),
(192, 16, 'Sizzling Seafood Grill', 'Char grilled Jumbo prawns, fish, calamari, mussels & scallops with bok choy and creole sauce\r\nAdd shoestring fries $3 ', 36, 0, 1, 1, '2012-08-31 09:36:08', '2012-08-31 19:36:08', 0, 0),
(193, 16, 'Madras Lamb Curry', 'Lamb curry served with saffron rice, garlic naan,mango chutney, mint raita & crispy pappadams ', 26, 0, 1, 1, '2012-08-31 09:39:45', '2012-08-31 19:39:45', 0, 0),
(194, 16, 'Rack of Lamb', 'Soy maple glazed rack of lamb sided with truss tomatoes and pesto mash', 29, 0, 0, 1, '2012-08-31 09:37:06', '2012-08-31 19:37:06', 0, 0),
(195, 16, 'Angry Bird Pizza', 'Columbian style spicy chicken-red onion-corn-capcicum-mozzarella cheese-napoli & corriander', 15, 15, 0, 1, '2012-07-03 06:00:31', '2012-07-03 16:00:31', 0, 0),
(196, 16, 'Eye Fillet Steak', 'Roasted Eye fillet steak with blue cheese, soft polenta, steamed broccoli, Dutch carrots & teriyaki beef jus\r\nAdd prawns $5', 31, 0, 1, 1, '2012-08-31 09:32:00', '2012-08-31 19:32:00', 0, 0),
(197, 30, 'Chocolate - Chocolate', 'Panacotta with white & dark Swiss Felcor chocolate mousse and chocolate coated strawberries & marshmallows', 11.9, 0, 1, 1, '2012-07-25 09:16:39', '2012-07-25 19:16:39', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `group_size` int(10) unsigned NOT NULL,
  `booking_date` datetime NOT NULL,
  `comments` text NOT NULL,
  `confirmed` tinyint(3) unsigned NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `confirmed_on` datetime DEFAULT NULL,
  `event_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `email`, `phone`, `group_size`, `booking_date`, `comments`, `confirmed`, `active`, `created`, `modified`, `confirmed_on`, `event_id`, `user_id`) VALUES
(6, 'asd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', '', 1, 0, '2012-12-03 11:06:52', '2012-12-03 11:06:52', '2012-10-22 11:22:06', 1, 0),
(7, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', '', 1, 1, '2012-11-01 01:21:36', '2012-10-17 11:31:34', '2012-11-01 01:24:45', 3, 9),
(8, 'aasdsda', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'eqwe', 1, 1, '2012-11-01 01:21:36', '2012-10-18 08:17:34', '2012-11-01 01:24:51', 2, 9),
(9, 'wqe', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 1, 1, '2012-11-01 01:21:36', '2012-10-18 08:18:04', '2012-10-22 11:21:49', 1, 0),
(10, 'wqe', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 1, 1, '2012-11-01 01:21:36', '2012-10-18 08:18:13', '2012-12-03 14:39:09', 2, 9),
(11, 'wqe', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 1, 1, '2012-11-01 01:21:36', '2012-10-18 08:53:56', NULL, 3, 0),
(12, 'wqe', 'heshanh@gmail.com', '0450399223', 12, '2012-11-22 12:00:00', '', 1, 1, '2012-11-01 01:21:36', '2012-10-18 12:43:07', '2012-10-22 11:21:01', 2, 0),
(13, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 1, 1, '2012-11-01 01:21:36', '2012-10-22 05:23:50', '2012-12-03 14:39:56', 7, 9),
(14, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 05:24:25', NULL, 7, 0),
(15, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 05:24:43', NULL, 7, 0),
(31, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 06:37:43', NULL, 1, 0),
(32, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 06:38:09', NULL, 1, 0),
(33, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 06:40:04', NULL, 1, 0),
(34, 'asdasd', 'heshanh@gmail.com', '0450399223', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-22 06:40:19', NULL, 1, 0),
(35, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', '', 1, 1, '2012-11-01 01:21:36', '2012-10-23 03:19:37', '2012-10-23 03:22:09', 7, 9),
(36, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', '', 0, 1, '2012-11-01 01:21:36', '2012-10-23 03:20:30', NULL, 7, NULL),
(37, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-24 07:21:44', NULL, 7, 9),
(38, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-24 07:21:55', NULL, 7, 9),
(39, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-24 07:23:57', NULL, 7, 9),
(40, 'test', 'heshanh@gmail.com', '0450', 10, '2012-11-22 12:00:00', 'asd', 0, 1, '2012-11-01 01:21:36', '2012-10-24 07:24:07', NULL, 7, 9),
(41, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:44:42', '2012-11-30 13:44:42', NULL, 1, 9),
(42, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:45:46', '2012-11-30 13:45:46', NULL, 1, 9),
(43, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:46:07', '2012-11-30 13:46:07', NULL, 1, 9),
(44, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:47:05', '2012-11-30 13:47:05', NULL, 1, 9),
(45, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:47:20', '2012-11-30 13:47:20', NULL, 1, 9),
(46, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:47:38', '2012-11-30 13:47:38', NULL, 1, 9),
(47, 'Hesh', 'heshanh@gmail.com', '04', 10, '2012-12-08 12:15:00', 'asdasda', 0, 1, '2012-11-30 02:47:43', '2012-11-30 13:47:43', NULL, 1, 9),
(48, 'asdasda', 'qdaada@asd.com', '123', 10, '1970-01-01 14:30:00', 'asasdd', 1, 1, '2012-12-05 13:01:45', '2012-12-06 00:01:45', '2012-12-06 00:58:23', 1, 9),
(49, 'asdasd', 'heshanh@gmail.com', '0450', 12, '2012-10-18 13:15:00', 'asdadada', 0, 1, '2012-12-05 13:20:30', '2012-12-06 00:20:30', NULL, 1, NULL),
(50, 'asdasdasd', 'heshanh@gmail.com', '0450', 12, '2012-10-27 12:00:00', 'asda', 0, 1, '2012-12-05 13:21:30', '2012-12-06 00:21:30', NULL, 1, NULL),
(51, 'asdasda', 'heshanh@gmail.com', '123', 12, '2012-10-18 12:00:00', 'ada', 0, 1, '2012-12-05 13:22:14', '2012-12-06 00:22:14', NULL, 1, NULL),
(52, 'asdasda', 'heshanh@gmail.com', '123', 12, '2012-10-24 12:00:00', 'asdad', 0, 1, '2012-12-05 13:53:37', '2012-12-06 00:53:37', NULL, 1, NULL),
(53, 'asdasda', 'heshanh@gmail.com', '123', 12, '1970-01-01 12:00:00', 'asda', 1, 1, '2012-12-05 13:54:09', '2012-12-06 00:54:09', '2012-12-06 00:54:50', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `setting` varchar(255) NOT NULL,
  `setting_val` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `setting`, `setting_val`, `created`, `modified`, `user_id`) VALUES
(1, 'name', 'My Super Awesome Cafe', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9),
(2, 'phone', '(03) 1234 5678 ', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9),
(3, 'address', '1 Burke St, Melbourne 3000', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9),
(4, 'email_from', 'info@mycafe.com.au', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9),
(5, 'admin_email', 'admin@mycafe.com.au', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9),
(6, 'google_analytic_account', '1111', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(7, 'google_analytic_domain', 'mydomain', '0000-00-00 00:00:00', '2012-12-17 22:11:47', 9);

-- --------------------------------------------------------

--
-- Table structure for table `set_menus`
--

CREATE TABLE IF NOT EXISTS `set_menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(200) NOT NULL,
  `menu_details` text NOT NULL,
  `price` double NOT NULL,
  `group_size` int(11) NOT NULL DEFAULT '0',
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `set_menus`
--

INSERT INTO `set_menus` (`id`, `menu_name`, `menu_details`, `price`, `group_size`, `active`, `created`, `modified`) VALUES
(1, 'Test', '<h3>adsdd</h3>\r\n\r\n<p>asdasd</p>\r\n\r\n<ul>\r\n	<li>asda</li>\r\n	<li>asd</li>\r\n	<li>asdads asd</li>\r\n	<li>asdad</li>\r\n</ul>\r\n', 50.99, 5, 1, '0000-00-00 00:00:00', '2013-03-06 11:17:33'),
(2, 'Test', '<h6>adsdd</h6>\r\n\r\n<p>asdasd</p>\r\n\r\n<ul>\r\n	<li>asda</li>\r\n	<li>asd</li>\r\n	<li>asdads asd</li>\r\n	<li>asdad</li>\r\n</ul>\r\n', 50.99, 5, 0, '0000-00-00 00:00:00', '2013-03-09 12:39:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL,
  `active` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `lastlogin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created`, `modified`, `active`, `lastlogin`) VALUES
(8, 'Hesh', 'hesh', '83044d1d4d40113644d1c69dad5fc2bef58f7a90', '2012-12-03 11:15:48', '2012-12-03 11:15:48', 1, '0000-00-00 00:00:00'),
(9, 'Admin User', 'admin', '4f697e97fdf1c041077fcfe62d34908f', '2013-04-08 00:40:43', '2013-04-08 00:40:43', 1, '2013-04-08 00:40:43'),
(10, 'test', 'TEST', '49a016a5837b57539d32f77c124c260a', '2012-10-28 10:52:00', '2012-10-28 10:52:00', 0, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
