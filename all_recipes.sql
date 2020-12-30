-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2020 at 10:56 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `all_recipes`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_locations`
--

CREATE TABLE `ad_locations` (
  `ad_location_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ad_locations`
--

INSERT INTO `ad_locations` (`ad_location_id`, `name`) VALUES
(1, 'Home Footer'),
(2, 'Category Footer'),
(3, 'Recipes Footer'),
(4, 'Tricks Footer'),
(5, 'Home Side'),
(6, 'Recipe Side'),
(7, 'Trick Side');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `visits` int(11) DEFAULT 0,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `permalink` varchar(300) DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `title`, `description`, `image`, `short_description`, `visits`, `meta_keywords`, `meta_description`, `permalink`, `updated`, `created`) VALUES
(10, 'How to decorate cookies', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-1.jpg', 'you should follow this steps carefully and be sure doing it the right way.', 414, 'cms, marocms, tutorial, how_to, marwaelmanawy, php, script, codeigniter, wordpress, html, template', 'MaroCMS is the most important and easy script to use, efficient content management system with an impressive features set. it helps you to improve your business or impress your clients.', 'trick-post-1', NULL, '2018-01-11 01:54:36'),
(11, 'Make your own bread', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-2.jpg', 'you should follow this steps carefully and be sure doing it the right way.', 502, 'cms, marocms, tutorial, how_to, marwaelmanawy, php, script, codeigniter, wordpress, html, template', 'MaroCMS is the most important and easy script to use, efficient content management system with an impressive features set. it helps you to improve your business or impress your clients.', 'trick-post-2', NULL, '2018-01-12 02:54:36'),
(12, 'how to make sushi', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-3.jpg', 'you should follow this steps carefully and be sure doing it the right way.', 1002, 'cms, marocms, tutorial, how_to, marwaelmanawy, php, script, codeigniter, wordpress, html, template', 'MaroCMS is the most important and easy script to use, efficient content management system with an impressive features set. it helps you to improve your business or impress your clients.', 'trick-post-3', NULL, '2018-01-13 03:54:36'),
(13, 'how to be healthy', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-4.jpg', 'you should follow this steps carefully and be sure doing it the right way.', 500, 'cms, marocms, tutorial, how_to, marwaelmanawy, php, script, codeigniter, wordpress, html, template', 'MaroCMS is the most important and easy script to use, efficient content management system with an impressive features set. it helps you to improve your business or impress your clients.', 'trick-post-4', NULL, '2018-01-14 01:54:36'),
(14, 'Make your party', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-2.jpg', 'you should follow this steps carefully and be sure doing it the right way.', 706, 'cms, marocms, tutorial, how_to, marwaelmanawy, php, script, codeigniter, wordpress, html, template', 'MaroCMS is the most important and easy script to use, efficient content management system with an impressive features set. it helps you to improve your business or impress your clients.', 'trick-post-5', NULL, '2018-01-15 01:54:36'),
(15, 'how to make cup cakes', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.', 'marwa-elmanawy-i-cheef-1.jpg', 'Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis', 1226, 'yyht', 'yhtr', 'trick-post-6', NULL, '2018-01-15 01:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `icon_id` int(11) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `permalink` varchar(300) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `icon_id`, `title`, `status`, `permalink`, `meta_keywords`, `meta_description`) VALUES
(1, 17, 'Cakes', 1, 'cakes', 'hhtyh', 'tyhthtyh'),
(4, 65, 'Pizza', 1, 'pizza', 'dsdwedwe', 'ewdwed'),
(5, 11, 'Healthy', 1, 'healthy', 'hhtyh', 'tyhthtyh'),
(6, 7, 'Soups', 1, 'soups', 'dsdwedwe', 'ewdwed'),
(7, 25, 'Salad', 1, 'saladd', 'dsdwedwe', 'ewdwed'),
(9, 56, 'Giloy Juice', 1, 'giloy-juice', 'dsdwedwe', 'ewdwed'),
(13, 67, 'Neem Powder', 1, 'neem-powder', '', ''),
(14, 2, 'Drinks', 1, 'drinks', '', ''),
(16, 18, 'Bread', 1, 'bread', 'dsdwedwe', 'ewdwed'),
(17, 5, 'Equipment', 1, 'Equipment', '', ''),
(18, 66, 'Pork', 1, 'pork', 'dsdwedwe', 'ewdwed'),
(19, 1, 'Pasta', 1, 'pats', 'dsdwedwe', 'ewdwed'),
(20, 4, 'Cookies', 1, 'cookies', 'hhtyh', 'tyhthtyh'),
(21, 57, 'Coffee', 1, 'cofeee', 'cofee', 'coffee'),
(22, 70, 'Tea', 1, 'tea', '', ''),
(23, 60, 'cupcakes', 1, 'cupcakes', '', ''),
(24, 6, 'Ice Cream', 1, 'ice-cream', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `icons`
--

CREATE TABLE `icons` (
  `icon_id` int(11) NOT NULL,
  `icon` varchar(300) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `icons`
--

INSERT INTO `icons` (`icon_id`, `icon`) VALUES
(1, 'icon icon-themeenergy_pasta'),
(2, 'icon icon-themeenergy_margarita2'),
(3, 'icon icon-themeenergy_meat'),
(4, 'icon icon-themeenergy_eggs'),
(5, 'icon icon-themeenergy_blender'),
(6, 'icon icon-themeenergy_turkey'),
(7, 'icon icon-themeenergy_soup2'),
(8, 'icon icon-themeenergy_eggplant'),
(9, 'icon icon-themeenergy_sushi'),
(10, 'icon icon-themeenergy_fish2'),
(11, 'icon icon-themeenergy_biceps'),
(12, 'icon icon-themeenergy_lollipop'),
(13, 'icon icon-themeenergy_peper'),
(14, 'icon icon-themeenergy_pizza-slice'),
(15, 'icon icon-themeenergy_happy'),
(16, 'icon icon-themeenergy_fried-potatoes'),
(17, 'icon icon-themeenergy_cake'),
(18, 'icon icon-themeenergy_beef'),
(19, 'icon icon-themeenergy_love-drinks'),
(20, 'icon icon-themeenergy_love-coffee'),
(21, 'icon icon-themeenergy_wine-bottle'),
(22, 'icon icon-themeenergy_banana'),
(23, 'icon icon-themeenergy_avocado'),
(24, 'icon icon-themeenergy_apple'),
(25, 'icon icon-themeenergy_basilico'),
(26, 'icon icon-themeenergy_cabbage'),
(27, 'icon icon-themeenergy_carrot'),
(28, 'icon icon-themeenergy_cherries'),
(29, 'icon icon-themeenergy_eggplant'),
(30, 'icon icon-themeenergy_corn'),
(31, 'icon icon-themeenergy_garlic'),
(32, 'icon icon-themeenergy_grapes'),
(33, 'icon icon-themeenergy_hazelnut'),
(34, 'icon icon-themeenergy_lemon'),
(35, 'icon icon-themeenergy_lettuce'),
(36, 'icon icon-themeenergy_onion'),
(37, 'icon icon-themeenergy_peach'),
(38, 'icon icon-themeenergy_pear'),
(39, 'icon icon-themeenergy_peas'),
(40, 'icon icon-themeenergy_pepper'),
(41, 'icon icon-themeenergy_pineapple'),
(42, 'icon icon-themeenergy_potato'),
(43, 'icon icon-themeenergy_plum'),
(44, 'icon icon-themeenergy_pineapple'),
(45, 'icon icon-themeenergy_radish'),
(46, 'icon icon-themeenergy_strawberry'),
(47, 'icon icon-themeenergy_tomato'),
(48, 'icon icon-themeenergy_watermelon-slice'),
(59, 'icon icon-themeenergy_coffee-machine'),
(58, 'icon icon-themeenergy_coffee-3'),
(57, 'icon icon-themeenergy_coffee-2'),
(56, 'icon icon-themeenergy_beef2'),
(55, 'icon icon-themeenergy_cake3'),
(60, 'icon icon-themeenergy_cupcake'),
(61, 'icon icon-themeenergy_ice-cream3'),
(62, 'icon icon-themeenergy_mushroom2'),
(63, 'icon icon-themeenergy_margarita2'),
(64, 'icon icon-themeenergy_fish3'),
(65, 'icon icon-themeenergy_pizza-2'),
(66, 'icon icon-themeenergy_pasta2'),
(67, 'icon icon-themeenergy_roasted-chicken'),
(68, 'icon icon-themeenergy_scliced-mushroom'),
(69, 'icon icon-themeenergy_tea-bag'),
(70, 'icon icon-themeenergy_tea');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` int(11) NOT NULL,
  `email` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`id`, `email`) VALUES
(1, 'admin@admin.com'),
(17, 'kamlesh@i2k2.com');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `recipe_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(300) DEFAULT NULL,
  `permalink` varchar(300) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `serves` double DEFAULT NULL,
  `prepare_time` varchar(11) DEFAULT NULL,
  `cooking_time` varchar(11) DEFAULT NULL,
  `calories` double DEFAULT NULL,
  `directions` text DEFAULT NULL,
  `featured_image` varchar(300) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `gallery` longtext DEFAULT NULL,
  `visited` int(11) DEFAULT 0,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `ingredients` text DEFAULT NULL,
  `difficulty` enum('easy','medium','hard') DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `video` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`recipe_id`, `user_id`, `category_id`, `title`, `permalink`, `description`, `serves`, `prepare_time`, `cooking_time`, `calories`, `directions`, `featured_image`, `created`, `updated`, `gallery`, `visited`, `meta_keywords`, `meta_description`, `ingredients`, `difficulty`, `status`, `video`) VALUES
(34, 3, 4, 'Pizza Crust', 'pizza-crust', 'I promise you’ll never want to order delivery again after you see how easy it is to make pizza at home using fresh ingredients.\r\n\r\nThis recipe includes instructions for how to create a chewy crust that’s lightly crisp on the bottom using all-purpose flour or bread flour. It makes a dough that is far better (and cheaper!) than any store bought dough or restaurant pizza I have tried.\r\n\r\nEven the tomato sauce is made from scratch! It’s wonderfully simple and flavorful, and is the perfect base for layering on lots of cheese and your choice of toppings.', 3, '1hr 15 min', '15 min', 632, 'In a Dutch oven, heat oil over medium heat until hot, but not smoking. Pat the meat dry with paper towels and brown in batches, transferring the meat with a slotted spoon to a bowl as they are done.\r\nIn the fat remaining in the pot, cook the onions until softened, about 5 minutes\r\nReturn meat to the pot with any juices in the bowl and add the tomatoes with juice, chiles, beer, beef broth, oregano, cumin, and Worcestershire sauce. Season with salt and pepper to taste.\r\nBring to a boil and reduce heat. Simmer, partially covered, for 2 1/2 hours or until meat is tender.', 'pizza.jpg', '2018-01-15 01:54:36', '2020-12-30 06:46:53', '[\"IRecipes_064289900160930720899_orig.jpg\",\"IRecipes_023601200160930721141_orig.jpg\"]', 191, 'recipe, cheef, food, dishes, marwaelmanawy, cook, i-recipe', 'i cheef for recipes poered by marwa emanawy for web solutions.', '3 to 3.25 cups all-purpose flour or bread flour (unbleached), 375 grams\r\n½ teaspoon sugar\r\n1 cup warm water or add as required\r\n1.5 teaspoons instant yeast 4 to 5 grams or 2 teaspoons dry active yeast\r\n3 tablespoons olive oil\r\n1 teaspoon salt or add as required\r\n1 to 2 teaspoons olive oil for brushing dough\r\nsemolina or cornmeal (makki ka atta) or all-purpose flour for sprinkling on pan', 'medium', 'active', 'https://www.youtube.com/watch?v=LBTxB8uOWAY'),
(39, 5, 1, 'Happy Birth Cake', 'happy-birth-cake', 'This easy-to-prepare yellow cake recipe with buttercream frosting will be welcome at any birthday celebration. It\'s the perfect cake to eat with ice cream.', 12, '25 min', '20 min', 710, 'Heat oven to 350°F. Grease and flour 2 (9-inch) round baking pans. Set aside.\r\nCombine flour, baking powder and 1/2 teaspoon salt in bowl. Set aside.\r\nBeat 1 1/2 cups sugar and 3/4 cup butter in another bowl at medium speed, scraping bowl occasionally, until creamy. Add eggs, 1 at a time, beating well after each addition. Add 1 tablespoon vanilla; mix well. Add flour mixture alternately with milk, beating at low speed after each addition just until mixed.\r\nDivide batter evenly between prepared pans. Bake 30-35 minutes or until toothpick inserted near center comes out clean. Place onto cooling racks; cool 10 minutes. Loosen cake by running knife around inside edge of pans. Carefully remove cake from pans; cool completely.\r\nBeat 3/4 cup butter in bowl at medium speed until creamy. Gradually add powdered sugar and 1/8 teaspoon salt alternately with whipping cream and 1 teaspoon vanilla, scraping bowl often, until well mixed.\r\nPlace 1 cake layer on serving plate, bottom-side up; frost top. Place remaining cake layer over frosting, bottom-side down; frost top and sides of cake. Decorate as desired.', '16714-birthday-cake-600x600.jpg', '2018-01-15 01:54:36', '2020-12-30 06:31:35', '[\"IRecipes_000214500160930600143_orig.jpg\",\"IRecipes_011396600160930600482_orig.jpg\"]', 74, 'recipe, cheef, food, dishes, marwaelmanawy, cook, i-recipe', 'i cheef for recipes poered by marwa emanawy for web solutions.', '3 cups all-purpose flour\r\n1 tablespoon baking powder\r\n1/2 teaspoon salt\r\n1 1/2 cups sugar\r\n3/4 cup Land O Lakes® Butter, softened\r\n4 large Land O Lakes® Eggs\r\n1 tablespoon vanilla extract\r\n1 cup milk\r\n3/4 cup Land O Lakes® Butter, softened', 'medium', 'active', 'https://www.youtube.com/watch?v=9u75UcTY4iA'),
(40, 5, 16, 'Banana Bread', 'banana-bread', 'Banana bread recipe – eggless and vegan recipe with step by step photos and video – so far this is the best banana bread that I have made.\r\n\r\nAfter I posted this recipe, it was tried and tested successfully by many readers. This banana bread recipe is made with whole wheat flour (wholemeal flour) but all-purpose flour can be substituted instead.\r\n\r\nBanana bread is an all-time favorite and I often make this quick bread with overripe bananas. Since this is one of the most popular bread recipe on the blog, I have updated this post with step by step pics. Based on this recipe, I have also shared an awesome Banana cake and a Pumpkin bread.\r\n\r\n8 years back ever since I starting getting requests to make an eggless version of banana bread, I tried many times to make the best eggless banana bread – at least 6 times ????\r\n\r\nI made eggless versions as well vegan versions and somehow I was never satisfied with the texture of the breads. More so since I was using whole wheat flour.\r\n\r\nSince I have had the banana bread made with eggs before, I know the texture and taste of  breads & cakes made with eggs. i have been having regular cakes and pastries made with eggs till last year until I stopped adding them to my bakes.\r\n\r\nMaking an eggless or vegan cake or a bread is a challenge always, as one wants the best texture and taste in the bread.\r\n\r\nI added vinegar, buttermilk, cornflour and what not and never came to that perfect bread. Most of the times the bread would be dry and not even moist. It would not be soft but a bit dense. And also crumbly at times.\r\n\r\nSo one day finally, I decided that I will make the banana bread without using any of these ingredients and with what is easily available in my kitchen. i thought that if pureed banana is used as an egg substitute in cakes, than why do I need to add some other egg substitute to a Banana bread? so I decided only to add bananas – a little extra and see the results.', 8, '5 min', '40 min', 632, 'First preheat oven at 180 degrees C or 350 degrees F. Then take ripe or overripe 3 to 4 medium to large sized or 2 large bananas. In weight, the measure is 300 grams or 10.5 ounce. Slice the bananas and add them to a mixing bowl.\r\nadd ½ cup sugar. You can use brown sugar, organic unrefined cane sugar or granulated white sugar. All work well in this recipe. Depending on the sweetness of bananas, you can reduce the sugar to ⅓ cup.\r\nthen mash the bananas with a masher or fork to a smooth consistency.\r\nthere should be no chunks. You can also use a blender to mash the bananas. Fine threads of the bananas are fine.\r\nadd ½ cup oil (125 ml). You can use any oil. I have made this bread on various occasions with coconut oil, safflower oil, sunflower oil, rice bran oil and even olive oil.\r\nstir very well so that the oil mixes evenly with the banana puree.\r\nadd ¼ tsp cinnamon powder, 2 to 3 pinches or ⅛ tsp of nutmeg powder and ½ tsp vanilla powder or 1 tsp vanilla extract. Both cinnamon powder and nutmeg powder are optional.\r\nmix the flavoring spices and vanilla with the banana oil mixture.\r\nSieve 1½ cups whole wheat flour (180 grams), ½ tsp baking soda, 1½ tsp baking powder and a pinch of salt (optional) directly in the bowl.\r\nHere’s the sieved dry mixture on top of the wet mixture.\r\ngently fold the dry ingredients into the wet ingredients very well. Don’t mix. This folding step is very important as you want the whole bread mixture to be one and mixed evenly without the batter getting deflated.\r\nHere’s the folded batter.\r\nadd 1 to 2 tbsp sunflower seeds. You can also add chopped walnuts or choco chips or any dry fruit of your choice instead of sunflower seeds.\r\nfold gently again once or twice, so as the sunflower seeds are incorporated in the cake batter.', 'hqdefault.jpg', '2018-01-15 01:54:36', '2020-12-28 16:54:24', '[\"IRecipes_066355300160917083467_orig.jpg\",\"IRecipes_061763000160917084146_orig.jpg\",\"IRecipes_09464190016091708452_orig.jpg\",\"IRecipes_034032900160917085095_orig.jpg\",\"IRecipes_047448000160917085687_orig.jpg\"]', 76, 'recipe, cheef, food, dishes, marwaelmanawy, cook, i-recipe', 'i cheef for recipes poered by marwa emanawy for web solutions.', '4 medium sized ripe bananas or over ripe bananas or 300 grams ripe bananas or 10.5 ounce ripe bananas\r\n1.5 cups whole wheat flour or 180 grams whole wheat flour\r\n½ cup coconut oil or sunflower oil or any vegetable oil or 125 ml coconut oil\r\n½ cup brown sugar or unrefined cane sugar or regular granulated sugar\r\n½ teaspoon vanilla powder or 1 teaspoon vanilla extract\r\n¼ teaspoon cinnamon powder – optional\r\n2 to 3 pinches nutmeg powder or ⅛ teaspoon nutmeg powder – optional\r\n1 to 2 tablespoon sunflower seeds – optional\r\n1.5 teaspoon baking powder\r\n½ teaspoon baking soda\r\n1 pinch salt – optional', 'medium', 'active', 'https://www.youtube.com/watch?v=wDYGn36lM30'),
(49, 5, 16, 'Wheat Bread', 'wheat-bread', '100% whole wheat bread recipe with step by step photos and video. This fool proof recipe gives you a really good soft wheat bread with the ingredients you have at home.', 8, '60 min', '25 min', 632, 'Mix the whole wheat with salt and add in the instant yeast. You can even mix the instant yeast granules with ½ cup water and sugar in a separate bowl as shown in the video. Then add this mixture to the wheat flour. Sometimes instant yeast granules do not dissolve completely in the dough and thus you can dissolve them separately in water.\r\n Add in the yogurt and ghee or butter or oil.\r\n First mix well and then knead into a soft dough adding water at intervals. The dough will be slightly sticky but after the initial rise, it will be fine. If the dough looks dry, then you can add some more water. If the dough looks too sticky, then add some more flour. Knead very well. Kneading for an overall 8 to 10 minutes.\r\nKeep the kneaded dough in a wide bowl and just lightly brush water all over it.\r\nKeep covered for 30-35 minutes. The bread dough after the first rise.', 'atta-bread.jpg', '2018-01-15 01:54:36', '2020-12-28 16:38:59', '[\"IRecipes_022499700160916940388_orig.jpg\",\"IRecipes_097425900160916940742_orig.jpg\",\"IRecipes_037044200160916941197_orig.jpg\"]', 85, 'recipe, cheef, food, dishes, marwaelmanawy, cook, i-recipe', 'i cheef for recipes poered by marwa emanawy for web solutions.', '3 cups 100% whole wheat flour (chapati atta) - 360 grams\r\n1 to 1.25 cups water - 250 ml to 312 ml - i added 1.25 cups water\r\n1 teaspoon instant yeast or ½ tablespoon dry active yeast1 large onion, chopped\r\n1 teaspoon regular salt or rock salt (sendha namak)\r\n1 tablespoon regular sugar or unrefined cane sugar\r\n2 tablespoon ghee or oil or butter\r\n2 tablespoons Curd (yogurt or dahi - dairy or vegan) or 1 to 1.5 tablespoon vinegar or 1 tablespoon lemon juice\r\nsome milk for brushing the top of the bread (dairy or vegan) - optional', 'medium', 'active', 'https://www.youtube.com/watch?v=c6p26paeSgo'),
(51, 1, 24, 'Chocolate Ice Cream', 'chocolate-ice-cream', 'Do use a good quality cocoa powder for the ice cream. about cream, I have used amul whipping cream, which is 30% fat and it did whip till stiff peaks. If using 25% fat cream, then you can whip it till soft peaks. If you add icing sugar in this cream, then you can whip it till stiff peaks. The same recipe can also be made in an ice cream maker. I have used brown sugar in the recipe. You can use regular sugar too.', 18, '8 min', '2 min', 600, 'First take all the ingredients - 2 to 2.25 cups cream (25% to 50% fat), ¼ cup milk, ½ cup cocoa powder, ½ cup condensed milk and ½ cup tightly packed brown sugar. You can also use regular sugar or half-half of both regular sugar or brown sugar.\r\nNow take milk in a small pan and add the brown sugar.\r\nKeep this pan on stove stop on a low flame and with a whisk or spoon stir continuously till the sugar dissolves.\r\nOnce all the sugar is dissolved, then keep the pan down.\r\nAdd cocoa powder.\r\nMix very well.\r\nAdd the condensed milk and 1 teaspoon vanilla extract.\r\nMix very well and keep this mixture aside. Let this chocolate mixture cool at room temperature.', 'chocolate-ice-cream-recipe.jpg', '2020-12-30 07:04:30', NULL, '[\"IRecipes_049723500160930821083_orig.jpg\",\"IRecipes_056220500160930821410_orig.jpg\",\"IRecipes_095449000160930821875_orig.jpg\",\"IRecipes_092239000160930822292_orig.jpg\",\"IRecipes_064347200160930822741_orig.jpg\",\"IRecipes_051463100160930823031_orig.jpg\",\"IRecipes_012306900160930823343_orig.jpg\"]', 1, '', '', '2 to 2.25 cups cream - 25% to 50% fat cream\r\n¼ cup milk\r\n½ cup cocoa powder\r\n½ cup sweetened condensed milk\r\n½ cup tightly packed brown sugar or regular sugar or half-half of both regular sugar or brown sugar\r\n1 teaspoon vanilla extract or ½ teaspoon vanilla essence', 'medium', 'active', 'https://www.youtube.com/watch?v=4rsLIcl7sW4');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `key` varchar(100) NOT NULL,
  `value` varchar(255) DEFAULT NULL,
  `default_value` varchar(255) DEFAULT NULL,
  `required` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`key`, `value`, `default_value`, `required`) VALUES
('behance', '', NULL, 0),
('copyright', '© all recipes 2020', '© Marwa El-Manawy 2016 All rights reserved.', 1),
('default_timezone', 'Africa/Cairo', 'Africa/Cairo', 0),
('description', 'All recipes a powerful platform to manage recipes for food specific websites, that doesn’t require any experience on web development, very easy to use and customize', NULL, 0),
('dribbble', 'https://dribbble.com/', NULL, 0),
('facebook', 'https://www.facebook.com/marwa.elmanawy.info', 'facebook', 0),
('favicon', 'favicon.png', NULL, 1),
('google_plus', 'https://plus.google.com/+marwaelmenawy', NULL, 0),
('instagram', 'https://www.instagram.com/marwa.elmanawy/', NULL, 0),
('language', 'english', 'english', 1),
('logo', 'logo.png', NULL, 1),
('meta_description', 'All recipes a powerful platform to manage recipes for food specific websites, that doesn’t require any experience on web development, very easy to use and customize', 'desc', 0),
('meta_keywords', 'calories, chef, cms, cooking, drinks, food, i-chef, ingredients, management system, recipes, script, tricks', 'key', 1),
('pagination_limit', '20', NULL, 0),
('phone', '0213236598233', '0', 0),
('pinterest', 'https://pinterest.com/', NULL, 0),
('soundcloud', 'https://soundcloud.com/', NULL, 0),
('support', '+91 8707394967', NULL, 0),
('title', 'All Recipes', 'I-Chef', 1),
('tumblr', 'https://tumblr.com/', NULL, 0),
('twitter', 'https://twitter.com/marwa_elmanawy', NULL, 0),
('vimeo', 'https://vimeo.com/', NULL, 0),
('vine', 'https://vine.com/', NULL, 0),
('visitors', '1372', '0', 0),
('webmaster_email', 'kamleshsati7@gmail.com', NULL, 0),
('youtube', 'https://www.youtube.com/channel/UCTSXnKoLgfZZk2MN_jLUOnA?view_as=subscriber', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `recipe_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `title`, `image`, `description`, `recipe_id`) VALUES
(4, 'Choclate Tea Cream', 'IRecipes_047448000160917085687_orig.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem', 49),
(5, 'Cake', '16714-birthday-cake-600x600.jpg', 'Integer non dapibus fermentum nibh volutpat Integer non dapibus fermentum nibh volutpat', 39),
(7, 'Choclate Cake Cream', 'chocolate-ice-cream-recipe1.jpg', 'Integer non dapibus fermentum nibh volutpat', 51),
(8, 'Pizza Crust', 'pizza.jpg', 'Integer non dapibus fermentum nibh volutpat', 34);

-- --------------------------------------------------------

--
-- Table structure for table `usergroups`
--

CREATE TABLE `usergroups` (
  `usergroup_id` int(11) NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usergroups`
--

INSERT INTO `usergroups` (`usergroup_id`, `title`) VALUES
(1, 'Admin'),
(2, 'Normal User');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usergroup_id` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `firstname` varchar(250) DEFAULT NULL,
  `lastname` varchar(250) DEFAULT NULL,
  `image` varchar(300) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `visited` int(11) DEFAULT 0,
  `email_appear` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usergroup_id`, `username`, `email`, `firstname`, `lastname`, `image`, `password`, `country_id`, `gender`, `status`, `created`, `description`, `visited`, `email_appear`) VALUES
(1, 1, 'Admin', 'admin@admin.com', 'Marwa', 'El-Manawy', '1.jpg', '4074dc66def059a04f3fef44525700d5', 1, 'male', 'active', '2018-08-15 02:25:41', 'I\'m Sandra and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.', 9, 0),
(3, 2, 'rajesh', 'rajesh@i2k2.com', 'Rajesh', 'Jha', '3.jpg', '4074dc66def059a04f3fef44525700d5', 99, 'male', 'active', '2018-08-15 03:39:41', 'I\'m Sandra and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.', 0, 0),
(5, 2, 'kamlesh', 'kamlesh@i2k2.com', 'Kamlesh', 'Kumar', '5.jpg', '4074dc66def059a04f3fef44525700d5', 99, 'male', 'active', '2020-12-28 03:39:41', 'I\'m Sandra and this is where I share my stuff. I am madly in love with food. You will find a balance of healthy recipes, comfort food and indulgent desserts.', 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_locations`
--
ALTER TABLE `ad_locations`
  ADD PRIMARY KEY (`ad_location_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `icons`
--
ALTER TABLE `icons`
  ADD PRIMARY KEY (`icon_id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `usergroups`
--
ALTER TABLE `usergroups`
  ADD PRIMARY KEY (`usergroup_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_locations`
--
ALTER TABLE `ad_locations`
  MODIFY `ad_location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `icons`
--
ALTER TABLE `icons`
  MODIFY `icon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usergroups`
--
ALTER TABLE `usergroups`
  MODIFY `usergroup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
