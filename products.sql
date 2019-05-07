SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `Hewlett-Packard` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Hewlett-Packard` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(1, 'HP Spectre x360 Laptop - 13t touch', 1598, 'Intel_i5 Intel_HD_Graphics_620 8GB 256GB_SSD 13 Black&Gold', 'Ultrabook', 'yes'),
(2, 'HP Laptop - 15z touch optional', 848, 'AMD A9 AMD_Radeon_R7 8GB 1000GB_HDD 15 Silver', 'Ultrabook', 'yes'),
(3, 'HP Pavilion Laptop - 15t touch optional', 852, 'Intel_i3 Intel_HD_Graphics_620 8GB 1000GB_HDD 15 Silver', 'Ultrabook', 'yes'),
(4, 'OMEN Laptop - 15t', 2199, 'Intel_i7 Nvidia_GTX_1060 16GB 128GB_SSD&1000GB_HDD 15 Black&Red', 'Gaming', 'yes'),
(5, 'HP ChromeBook - 11-v010nr', 288, 'Intel_Celeron Intel_HD_Graphics_400 4GB 16_FLASH 11 Black', 'ChromeBook', 'yes');

CREATE TABLE IF NOT EXISTS `Dell` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Dell` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(6,  'New Inspiron 15 3000',  679, 'Intel_i5 Intel_HD_Graphics_620 8GB 1000GB_HDD 15 Black', 'Netbook', 'yes'),
(7,  'Inspiron 14 5000 2-in-1', 1199, 'Intel_i3 Intel_HD_Graphics_620 8GB 128GB_SSD 14 Silver', '2-in-1', 'yes'),
(8,  'XPS 13 2-in-1', 2599, 'Intel_i7 Intel_HD_Graphics_615 16GB 256GB_SDD 13 Black', '2-in-1', 'yes'),
(9,  'XPS 15', 2399, 'Intel_i5 Nvidia_GTX_1050 8GB 256GB_SSD 15 Silver', 'Gaming', 'yes'),
(10, 'G7', 1533, 'Intel_i5 Nvidia_GTX_1060 8GB 256GB_SSD 15 Black', 'Gaming', 'yes');

CREATE TABLE IF NOT EXISTS `Alienware` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Alienware` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(11, 'Alienware Area 51m', 7999, 'Intel_i9 Nvidia_RTX_2080 64GB 512GB_SSD&500GB_HDD 17 Silver', 'Gaming', 'yes'),
(12, 'Alienware 17', 1899, 'Intel_i7 AMD_RX_570 8GB 256GB_SSD 17 Black', 'Gaming', 'yes'),
(13, 'Alienware 15', 3789, 'Intel_i7 Nvidia_RTX_2060 16GB 256GB_SSD&1000GB_HDD 15 Silver', 'Gaming', 'yes'),
(14, 'Alienware m17', 2889, 'Intel_i7 Nvidia_RTX_2060 8GB 256GB_SSD 17 Black', 'Gaming', 'yes'),
(15, 'Alienware m15', 3299, 'Intel_i7 Nvidia_RTX_2060 8GB 256GB_SSD 15 Silver', 'Gaming', 'yes');

CREATE TABLE IF NOT EXISTS `Lenovo` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Lenovo` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(16, 'Thinkpad X1 Extreme', 1899, 'Intel_i7 Intel_HD_Graphics_620 8GB 256GB_SSD 14 Black', 'Ultrabook', 'yes'),
(17, 'Thinkpad T580', 1279, 'Intel_i5 Intel_HD_Graphics_620 4GB 500GB_HDD 15 Black', 'Ultrabook', 'yes'),
(18, 'ThinkPad P52s Mobile Workstation', 2299, 'Intel_i7 Nvidia Quadro P500 16GB 512GB_SSD 15 Black', 'Ultrabook', 'yes'),
(19, 'YOGA 920', 2499, 'Intel_i7 Intel_HD_Graphics_620 16GB 512GB_SSD 13 Silver', '2-in-1', 'yes'),
(20, 'Ideapad 720s (14)', 1499, 'Intel_i7 MX150 8GB 256GB_SSD', 'Ultrabook', 'yes');

CREATE TABLE IF NOT EXISTS `Razor` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Razor` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(21, 'Razor Blade Stealth 13 (2019)', 2399, 'Intel_i7 Intel_HD_Graphics_620 8GB 256GB_SSD 13 Black', 'Ultrabook', 'yes'),
(22, 'Razor Blade Stealth 15 (2018)', 2699, 'Intel_i7 Nvidia_GTX_1060 16GB 16GB 128GB_SSD&1000GB_HDD 15 Black', 'Gaming', 'yes'),
(23, 'Razor Blade Stealth 17 (2018)', 2599, 'Intel_i7 Nvidia_GTX_1060 16GB 2000GB_HDD 17 Black', 'Gaming', 'yes'),
(24, 'Razor Blade Stealth 13 (2018)', 2439, 'Intel_i7 Nvidia_GTX_1060 16GB 256GB_SSD&2000GB_HDD 15 Black', 'Gaming', 'yes'),
(25, 'Razor Blade Stealth 15 (2019)', 2999, 'Intel_i7 Nvidia_GTX_1070 16GB 512GB_SSD 15 Black', 'Gaming', 'yes');

CREATE TABLE IF NOT EXISTS `Asus` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Asus` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(26, 'Zenbook 3 UX390UA', 1135, 'Intel_i5 Intel_HD_Graphics_620 8GB 256GB_SSD 12 Blue', 'Ultrabook', 'yes'),
(27, 'X555UJ',  350, 'Intel_i5 Nvidia_GTX_920m 8GB 250GB_HDD 15 Silver', 'Netbook', 'yes'),
(28, 'VivoBook E201NA',  349, 'Intel_Pentium Intel_HD_Graphics_505 4GB 128GB_FLASH 11 Silver&Grey', 'Netbook', 'yes'),
(29, 'Chromebook Flip C302CA', 1099, 'Intel_m3 Intel_HD_Graphics_515 4GB 64GB_FLASH 12 Silver', 'ChromeBook', 'yes'),
(30, 'TUF Gaming FX505GE', 1599, 'Intel_i7 Nvidia_GTX_1050ti 16GB 512GB_SSD 15 Black&Gold', 'Gaming', 'yes');

CREATE TABLE IF NOT EXISTS `Apple` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Apple` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(31, 'MacBook Pro 13', 1709, 'Intel_i5 Intel_HD_Graphics_620 8GB 128GB_SSD 13 Grey', 'Ultrabook', 'yes'),
(32, 'MacBook Pro 15', 3499, 'Intel_i7 AMD_Radeon_555X 16GB 256GB_SSD 15 Grey', 'Ultrabook', 'yes'),
(33, 'Macbook Air 13', 1399, 'Intel_i7 Intel_HD_Graphics_620 8GB 128GB_SSD 13 Grey', 'Ultrabook', 'yes'),
(34, 'Macbook 256GB m3', 1899, 'Intel_m3 Intel_HD_Graphics_615 8GB 256GB_SSD 12 Grey', 'Ultrabook', 'yes'),
(35, 'MacBook 256GB core i7', 2299, 'Intel_i7 Intel_HD_Graphics_615 8GB 256GB_SSD 12 Grey', 'Ultrabook', 'yes');

CREATE TABLE IF NOT EXISTS `Acer` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Acer` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(36, 'Swift 5 15.6', 1359, 'Intel_i5 Intel_HD_Graphics_620 8GB 256GB_SSD 15 Blue', 'Ultrabook', 'yes'),
(37, 'Acer Triton 500 15.6 144Hz', 2799, 'Intel_i7 Nvidia_RTX_2060 16GB 512GB_SSD 15 Grey', 'Gaming', 'yes'),
(38, 'Aspire 1 A114-31C014 Celeron',  368, 'Intel_Celeron Intel_HD_Graphics_615 4GB 64GB_FLASH 14 Black', 'Netbook', 'yes'),
(39, 'Nitro 5 15.6', 1274, 'Intel_i5 Nvidia_GTX_1050 8GB 1000GB_HDD 15 Black&Red', 'Gaming', 'yes'),
(40, 'A515-51G-7841', 1199, 'Intel_Celeron Nvidia_GTX_940MX 12GB 1000GB_HDD 15 Black', 'Ultrabook', 'yes');

CREATE TABLE IF NOT EXISTS `MSI` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `MSI` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(41, 'WT75 8SK', 4948, 'Intel_i7 Nvidia_Quadro_P320 32GB 512GB_SSD&1000GB_HDD 17 Black', 'Gaming', 'yes'),
(42, 'PS63 Modern', 1999, 'Intel_i7 Nvidia_GTX_1050 16GB 512GB_SSD 15 Black&Blue', 'Gaming', 'yes'),
(43, 'GT75 TITAN', 2599, 'Intel_i7 Nvidia_GTX_1070 16GB 256GB_SSD&1000GB_HDD 17 Black', 'Gaming', 'yes'),
(44, 'GS65 STEALTH', 2999, 'Intel_i7 Nvidia_RTX_2060 16GB 256GB_SSD 15 Black', 'Gaming', 'yes'),
(45, 'GE63 Raider 8RE-090AU', 2249, 'Intel_i7 Nvidia_GTX_1060 16GB 256GB_SSD&1000GB_HDD 15 Black&Red', 'Gaming', 'yes');

CREATE TABLE IF NOT EXISTS `Microsoft` (
   `id` int(3),
   `name` varchar(30),
   `price` decimal(6,2),
   `specifications` varchar(300),
   `category` varchar(20),
   `available` varchar(10),
   PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `Microsoft` (`id`, `name`, `price`, `specifications`, `category`, `available`) VALUES
(46, 'Surface Book 2 15.6', 1599, 'Intel_i7 Nvidia_GTX_1050 16GB 256GB_SSD 15 Grey', 'Gaming', 'yes'),
(47, 'Surface Laptop', 1099, 'Intel_m3 Intel_HD_Graphics_620 4GB 128GB_SSD 13 Platinum', 'UltraBook', 'yes'),
(48, 'Surface Pro 6', 1348, 'Intel_i5 Intel_HD_Graphics_620 8GB 128GB_SSD 12 Platinum', 'Ultrabook', 'yes'),
(49, 'Surface Go',  699, 'Intel_4415Y Intel_HD_Graphics_615 8GB 10 Grey', 'Netbook', 'yes'),
(50, 'Surface Laptop 2', 1789, 'Intel_i5 Intel_HD_Graphics_620 8GB 256GB_SSD 13 Platinum', 'Ultrabook', 'yes');